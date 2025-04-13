<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muscle Gain - Home Exercises</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #e0f7fa, #80deea); /* Teal gradient */
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background-color: #ffffff;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 800px;
            text-align: center;
            position: relative;
        }

        h1 {
            color: #00796b; /* Dark Teal */
            font-size: 2.5rem;
        }

        .content {
            text-align: left;
            margin-top: 20px;
        }

        .content h2 {
            color: #00695c; /* Medium Teal */
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
            background-color: #00796b; /* Dark Teal */
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 1rem;
        }

        .button:hover {
            background-color: #004d40; /* Darker Teal */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Muscle Gain - Home Exercises</h1>
        <div class="content">
            <h2>Age Group (15-25):</h2>
            <ul>
                <li>Diamond Push-ups (3 sets, 8-12 reps)</li>
                <li>Jump Squats (3 sets, 10-12 reps)</li>
                <li>Superman Holds (3 sets, 30 seconds)</li>
            </ul>

            <h2>Age Group (25-50):</h2>
            <ul>
                <li>Incline Push-ups (3 sets, 10-15 reps)</li>
                <li>Single-leg Glute Bridge (3 sets, 10 reps each leg)</li>
                <li>Plank to Push-up (3 sets, 10 reps)</li>
            </ul>

            <h2>Age Group (50-75):</h2>
            <ul>
                <li>Wall Sits (3 sets, 30-45 seconds)</li>
                <li>Seated Leg Curls (3 sets, 10-12 reps)</li>
                <li>Bicep Curls (3 sets, 12 reps)</li>
            </ul>
        </div>
        <button class="button" onclick="window.location.href='options.php';">Back to Options</button>
    </div>
</body>
</html>