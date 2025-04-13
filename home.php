<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: login.html');
    exit();
}

$name = $_SESSION['name'] ?? ''; // Assuming login is based on email only.
$email = $_SESSION['email'] ?? '';

// List of Indian states and union territories
$statesAndUTs = [
    "Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chhattisgarh", 
    "Goa", "Gujarat", "Haryana", "Himachal Pradesh", "Jharkhand", 
    "Karnataka", "Kerala", "Madhya Pradesh", "Maharashtra", "Manipur", 
    "Meghalaya", "Mizoram", "Nagaland", "Odisha", "Punjab", 
    "Rajasthan", "Sikkim", "Tamil Nadu", "Telangana", "Tripura", 
    "Uttar Pradesh", "Uttarakhand", "West Bengal",
    "Andaman & Nicobar Islands", "Chandigarh", "Dadra & Nagar Haveli", "Daman & Diu", 
    "Delhi", "Jammu & Kashmir", "Ladakh", "Lakshadweep", "Puducherry"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Your Home Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #e0f7fa, #a5d6a7);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        header {
            position: absolute;
            top: 10px;
            left: 10px;
        }
        .logo {
            width: 200px; /* Adjust size as needed */
        }
        .container {
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 90%;
            max-width: 600px;
        }
        h1 {
            color: #388e3c;
            margin-bottom: 20px;
            font-size: 2em;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-size: 1.1em;
            color: #333;
        }
        input, select {
            padding: 10px;
            font-size: 1em;
            width: 100%;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 45px;
            font-size: 16px;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
            width: 100%;
        }
        button:hover {
            background-color: #43a047;
            transform: scale(1.05);
        }
        .toggle-btn-group {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .toggle-btn {
            width: 48%;
            background-color: #e0e0e0;
            border: none;
            padding: 12px;
            border-radius: 30px;
            cursor: pointer;
        }
        .toggle-btn.active {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>

<header>
    <img src="logo.jpg" alt="Logo" class="logo"> <!-- Replace with your actual logo path -->
</header>

<div class="container">
    <h1>Welcome, <?php echo htmlspecialchars($name); ?></h1>
    <form action="save_results.php" method="POST">
        <!-- Height Input with Toggle -->
        <div class="form-group">
            <label for="height">Height</label>
            <div class="toggle-btn-group">
                <button type="button" class="toggle-btn active" id="toggleCm">Cm</button>
                <button type="button" class="toggle-btn" id="toggleFeet">Feet</button>
            </div>
            <input type="number" name="height" id="heightInput" placeholder="Enter height in cm" required step="any" />
            <input type="hidden" name="height_unit" id="heightUnit" value="cm" />
        </div>

        <!-- Weight Input with Toggle -->
        <div class="form-group">
            <label for="weight">Weight</label>
            <div class="toggle-btn-group">
                <button type="button" class="toggle-btn active" id="toggleKg">Kg</button>
                <button type="button" class="toggle-btn" id="togglePounds">Pounds</button>
            </div>
            <input type="number" name="weight" id="weightInput" placeholder="Enter weight in kg" required step="any" />
            <input type="hidden" name="weight_unit" id="weightUnit" value="kg" />
        </div>

        <!-- Age Input -->
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" name="age" id="age" placeholder="Enter your age" required min="1" max="120" />
        </div>

        <!-- Gender Selection -->
        <div class="form-group">
            <label for="gender">Gender</label>
            <select name="gender" id="gender" required>
                <option value="">Select your gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>

        <!-- State Dropdown -->
        <div class="form-group">
            <label for="state">State</label>
            <select name="state" id="state" required>
                <option value="">Select your state</option>
                <?php foreach ($statesAndUTs as $state) {
                    echo "<option value=\"$state\">$state</option>";
                } ?>
            </select>
        </div>

        <button type="submit">Save Details</button>
    </form>
</div>

<script>
    const toggleHeightBtns = document.querySelectorAll('.toggle-btn-group #toggleCm, .toggle-btn-group #toggleFeet');
    const toggleWeightBtns = document.querySelectorAll('.toggle-btn-group #toggleKg, .toggle-btn-group #togglePounds');
    const heightInput = document.getElementById('heightInput');
    const weightInput = document.getElementById('weightInput');
    const heightUnitInput = document.getElementById('heightUnit');
    const weightUnitInput = document.getElementById('weightUnit');

    toggleHeightBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            toggleHeightBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            if (btn.id === 'toggleCm') {
                heightInput.placeholder = "Enter height in cm";
                heightUnitInput.value = "cm";
            } else {
                heightInput.placeholder = "Enter height in feet";
                heightUnitInput.value = "ft";
            }
        });
    });

    toggleWeightBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            toggleWeightBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            if (btn.id === 'toggleKg') {
                weightInput.placeholder = "Enter weight in kg";
                weightUnitInput.value = "kg";
            } else {
                weightInput.placeholder = "Enter weight in pounds";
                weightUnitInput.value = "lb";
            }
        });
    });
</script>

</body>
</html>