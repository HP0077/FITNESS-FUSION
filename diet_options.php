<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diet Options</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #e0f7fa, #a5d6a7);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .container {
            background-color: white;
            padding: 50px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 90%;
            max-width: 500px;
        }
        h1 {
            color: #388E3C;
            font-size: 2.5rem;
        }
        .option {
            background-color: #66BB6A;
            color: white;
            padding: 20px;
            margin: 20px 0;
            font-size: 1.5rem;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .option:hover {
            background-color: #43A047;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Select Your Diet Plan</h1>
        <div class="option" onclick="location.href='veg_diet.php';">Vegetarian</div>
        <div class="option" onclick="location.href='mixed_diet.php';">Non-Vegetarian</div>
    </div>
</body>
</html>
