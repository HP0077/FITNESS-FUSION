<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weight Gain - Home Exercises</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f9c0d2, #f5d6eb);
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background-color: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 800px;
            text-align: center;
            position: relative;
        }

        h1 {
            color: #e91e63;
            font-size: 2.5rem;
        }

        .content {
            text-align: left;
            margin-top: 20px;
        }

        .content h2 {
            color: #d81b60;
            margin-bottom: 10px;
        }

        .content ul {
            margin-bottom: 30px;
        }

        .content li {
            margin: 8px 0;
        }

        .button {
            position: absolute;
            bottom: 20px;
            right: 20px;
            background-color: #e91e63;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 1rem;
        }

        .button:hover {
            background-color: #d81b60;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Weight Gain - Home Exercises</h1>
        <div class="content">
            <h2>Age Group (15-25):</h2>
            <ul>
                <li>Push-ups (3 sets, 10-15 reps)</li>
                <li>Bodyweight Squats (3 sets, 15 reps)</li>
                <li>Glute Bridges (3 sets, 12-15 reps)</li>
            </ul>

            <h2>Age Group (25-50):</h2>
            <ul>
                <li>Pike Push-ups (3 sets, 10-12 reps)</li>
                <li>Bulgarian Split Squats (3 sets, 10-12 reps per leg)</li>
                <li>Plank (3 sets, 30-45 seconds)</li>
            </ul>

            <h2>Age Group (50-75):</h2>
            <ul>
                <li>Chair Squats (3 sets, 12-15 reps)</li>
                <li>Wall Push-ups (3 sets, 10-15 reps)</li>
                <li>Step-ups (3 sets, 10-12 reps per leg)</li>
            </ul>
        </div>
        <button class="button" onclick="window.location.href='options.php';">Back to Options</button>
    </div>
</body>
</html>
