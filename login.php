<?php
session_start();

// Display errors for debugging (remove in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection details
$host = "localhost"; 
$dbname = "fitness_fusion"; 
$user = "root"; 
$pass = ""; 

try {
    // Connect to the database using PDO
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Initialize error and success variables
$error = '';
$success = '';

// Check if form is submitted via POST method
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the action from the form (signin or signup)
    $action = $_POST['action'] ?? '';

    if ($action === 'signin') {
        // Handle login process
        $email = trim($_POST['email'] ?? '');
        $password = trim($_POST['password'] ?? '');

        // Validate inputs
        if (!empty($email) && !empty($password)) {
            // Fetch user data from the database
            $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // Verify password and check if user exists
            if ($user && password_verify($password, $user['password'])) {
                // Set session variables
                $_SESSION['email'] = $user['email'];
                $_SESSION['name'] = $user['name'];

                // Redirect to the home page
                header("Location: home.php");
                exit();
            } else {
                // Invalid login attempt
                $error = "Incorrect email or password. Please try again.";
            }
        } else {
            $error = "Please fill in both email and password.";
        }

    } elseif ($action === 'signup') {
        // Handle registration process
        $name = trim($_POST['name'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $password = trim($_POST['password'] ?? '');

        // Validate inputs
        if (!empty($name) && !empty($email) && !empty($password)) {
            // Check if email already exists
            $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                // Email already exists
                $error = "This email is already registered. Please log in.";
            } else {
                // Hash the password for secure storage
                $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

                // Insert new user into the database
                $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':password', $hashedPassword);

                if ($stmt->execute()) {
                    // Redirect to login page
                    header("Location: login.html");
                    exit();
                } else {
                    $error = "Registration failed. Please try again.";
                }
            }
        } else {
            $error = "Please fill in all fields.";
        }
    }
}
?>
