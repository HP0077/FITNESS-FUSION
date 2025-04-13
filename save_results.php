
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

// Fetch form data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_SESSION['email'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $state = $_POST['state'];
    $heightUnit = $_POST['height_unit']; // Added to handle height unit conversion
    $weightUnit = $_POST['weight_unit']; // Added to handle weight unit conversion

    // Validate data
    if (empty($height) || empty($weight) || empty($age) || empty($gender) || empty($state)) {
        echo "Please fill in all the required fields.";
        exit();
    }

    // Convert height and weight to cm and kg if needed
    if ($heightUnit === 'ft') {
        // Convert height from feet to cm (1 foot = 30.48 cm)
        $height = $height * 30.48;
    }

    if ($weightUnit === 'lb') {
        // Convert weight from pounds to kg (1 pound = 0.453592 kg)
        $weight = $weight * 0.453592;
    }

    // Store the state in the session for use in diet plan pages
    $_SESSION['state'] = $state;

    // Save the data to the 'users' table
    $stmt = $conn->prepare("UPDATE users SET height = :height, weight = :weight, age = :age, gender = :gender, state = :state WHERE email = :email");
    $stmt->bindParam(':height', $height);
    $stmt->bindParam(':weight', $weight);
    $stmt->bindParam(':age', $age);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':state', $state);
    $stmt->bindParam(':email', $email);

    if ($stmt->execute()) {
        // Redirect to results page
        header("Location: results.php");
        exit();
    } else {
        echo "Failed to save the results.";
    }
}
?>
