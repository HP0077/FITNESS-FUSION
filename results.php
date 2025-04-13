<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: login.html');
    exit();
}

// Database connection
$host = "localhost";
$dbname = "fitness_fusion";
$user = "root";
$pass = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

$email = $_SESSION['email'];
$stmt = $conn->prepare("SELECT height, weight, age, gender FROM users WHERE email = :email");
$stmt->bindParam(':email', $email);
$stmt->execute();
$userData = $stmt->fetch(PDO::FETCH_ASSOC);

if ($userData) {
    $height = $userData['height'];
    $weight = $userData['weight'];
    $age = $userData['age'];
    $gender = $userData['gender'];

    // Convert height to meters for BMI calculation
    $heightInMeters = $height / 100;

    // 1. Calculate BMI
    $bmi = $weight / ($heightInMeters * $heightInMeters);

    // Determine BMI category and assign a color
    $bmiCategory = '';
    $bmiColor = '';
    if ($bmi < 18.5) {
        $bmiCategory = 'Underweight';
        $bmiColor = '#87CEEB'; // Light Blue for underweight
    } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
        $bmiCategory = 'Normal weight';
        $bmiColor = '#32CD32'; // Green for normal weight
    } elseif ($bmi >= 25 && $bmi <= 29.9) {
        $bmiCategory = 'Overweight';
        $bmiColor = '#FFD700'; // Yellow for overweight
    } elseif ($bmi >= 30 && $bmi <= 34.9) {
        $bmiCategory = 'Obese';
        $bmiColor = '#FF8C00'; // Orange for obese
    } else {
        $bmiCategory = 'Extremely Obese';
        $bmiColor = '#FF4500'; // Red for extremely obese
    }

    // 2. Calculate Body Fat Percentage
    if ($gender == 'male') {
        $bodyFatPercentage = (1.20 * $bmi) + (0.23 * $age) - 16.2;
    } else {
        $bodyFatPercentage = (1.20 * $bmi) + (0.23 * $age) - 5.4;
    }

    // 3. Calculate Fat-Free Body Weight
    $fatFreeBodyWeight = $weight * (1 - ($bodyFatPercentage / 100));

    // 4. Calculate Visceral Fat
    $visceralFat = max(1, $bodyFatPercentage * 0.10); // As a percentage of body fat

    // 5. Estimate Muscle Mass
    $muscleMass = 100 - $bodyFatPercentage;

    // 6. Calculate Body Water
    if ($gender == 'male') {
        $bodyWater = $weight * 0.60;  // 60% of body weight for males
    } else {
        $bodyWater = $weight * 0.55;  // 55% of body weight for females
    }

    // 7. Calculate Required Protein Intake
    $proteinIntakeInKg = $weight * 1.5; // grams/day

    // 8. Calculate BMR using Mifflin-St Jeor Equation
    if ($gender == 'male') {
        $bmr = 88.362 + (13.397 * $weight) + (4.799 * $height) - (5.677 * $age);
    } else {
        $bmr = 447.593 + (9.247 * $weight) + (3.098 * $height) - (4.330 * $age);
    }

    // 9. Calculate Metabolic Age
    $averageBMR = ($gender == 'male') ? (88.362 + (13.397 * 70) + (4.799 * 175) - (5.677 * $age)) 
                                      : (447.593 + (9.247 * 60) + (3.098 * 165) - (4.330 * $age));
    $metabolicAge = ($bmr / $averageBMR) * $age;
} else {
    echo "User data not found.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Metrics Results</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f8f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 12px;
            width: 100%;
            max-width: 600px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
            display: flex;
            flex-direction: row;
            align-items: flex-start;
        }
        h1 {
            color: #2E8B57;
            font-size: 1.8rem;
            margin-bottom: 20px;
        }
        .logo-container {
            flex: 1;
            padding-right: 20px;
        }
        .logo-container img {
            width: 120px;
        }
        .content {
            flex: 3;
        }
        .metrics-table {
            width: 100%;
            margin-top: 10px;
        }
        .metrics-table th, .metrics-table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .metrics-table th {
            background-color: #4CAF50;
            color: white;
            font-size: 1rem;
        }
        .metrics-table td {
            background-color: #f9f9f9;
            color: #333;
            font-size: 0.95rem;
        }
        .cta-button {
        display: block;
        padding: 16px 16px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 50px;
        font-size: 0.9rem;
        cursor: pointer;
        text-align: center;
        margin-top: 25px;
        width: 100px;
        transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
        align-self: center;
    }

    .cta-button:hover {
        background-color: #388E3C;
        transform: translateY(-3px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .cta-button:active {
        transform: scale(0.95);
    }

    .cta-button:focus {
        outline: none;
    }
</style>
</head>
<body>

<div class="container">
    <div class="logo-container">
        <img src="logo.jpg" alt="Fitness Fusion Logo">
    </div>
    <div class="content">
        <h1>Your Health Metrics</h1>
        <table class="metrics-table">
            <tr>
                <th>Metric</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>Weight</td>
                <td><?php echo number_format($weight, 2); ?> kg</td>
            </tr>
            <tr>
                <td>Height</td>
                <td><?php echo number_format($height, 2); ?> cm</td>
            </tr>
            <tr>
                <td>BMI</td>
                <td>
                    <?php echo number_format($bmi, 2); ?>
                    <span style="color: <?php echo $bmiColor; ?>;">(<?php echo $bmiCategory; ?>)</span>
                </td>
            </tr>
            <tr>
                <td>Body Fat Percentage</td>
                <td><?php echo number_format($bodyFatPercentage, 2); ?>%</td>
            </tr>
            <tr>
                <td>Fat-Free Body Weight</td>
                <td><?php echo number_format($fatFreeBodyWeight, 2); ?> kg</td>
            </tr>
            <tr>
                <td>Visceral Fat</td>
                <td><?php echo number_format($visceralFat, 2); ?>%</td>
            </tr>
            <tr>
                <td>Muscle Mass</td>
                <td><?php echo number_format($muscleMass, 2); ?>%</td>
            </tr>
            <tr>
                <td>Body Water</td>
                <td><?php echo number_format($bodyWater, 2); ?> liters</td>
            </tr>
            <tr>
                <td>Protein Intake</td>
                <td><?php echo number_format($proteinIntakeInKg, 2); ?> grams/day</td>
            </tr>
            <tr>
                <td>BMR</td>
                <td><?php echo number_format($bmr, 2); ?> calories/day</td>
            </tr>
            <tr>
                <td>Metabolic Age</td>
                <td><?php echo number_format($metabolicAge, 2); ?> years</td>
            </tr>
        </table>
        <button class="cta-button" onclick="location.href='options.php'">Next</button>
    </div>
</div>

</body>
</html>
