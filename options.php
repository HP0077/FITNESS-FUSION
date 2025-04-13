<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Your Option</title>
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
            padding: 20px;
            overflow: hidden;
            position: relative;
        }

        .container {
            background: white;
            border-radius: 20px;
            padding: 50px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 80%;
            max-width: 800px;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        .container:hover {
            transform: scale(1.03);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.3);
        }

        h1 {
            color: #2e7d32;
            font-size: 3.5rem;
            margin-bottom: 40px;
            letter-spacing: 1.5px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .option-buttons {
            display: flex;
            justify-content: space-around;
            gap: 30px;
            padding: 20px 0;
        }

        .option {
            background-color: #66bb6a;
            color: white;
            font-size: 1.6rem;
            font-weight: 600;
            border-radius: 15px;
            padding: 25px;
            text-align: center;
            width: 220px;
            height: 160px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.4s ease;
            cursor: pointer;
        }

        .option:hover {
            transform: translateY(-10px);
            background-color: #43a047;
            box-shadow: 0 15px 45px rgba(67, 160, 71, 0.5);
        }

        .option:before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 300%;
            height: 300%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.2), transparent 70%);
            transition: all 0.6s ease;
            transform: rotate(45deg);
        }

        .option:hover:before {
            top: -20%;
            left: -20%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.4), transparent 70%);
        }

        .option span {
            z-index: 1;
            position: relative;
        }

        .results-button {
            position: absolute;
            bottom: 40px;
            left: 40px;
            background-color: #66bb6a;
            color: white;
            font-size: 1.6rem;
            font-weight: 600;
            border-radius: 15px;
            padding: 15px 20px;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.4s ease, box-shadow 0.4s ease;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .results-button:hover {
            background-color: #43a047;
            box-shadow: 0 15px 45px rgba(67, 160, 71, 0.5);
        }

        @media screen and (max-width: 768px) {
            .option-buttons {
                flex-direction: column;
                align-items: center;
            }

            .option {
                width: 80%;
                margin-bottom: 20px;
            }

            .results-button {
                left: 50%;
                transform: translateX(-50%);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Choose Your Option</h1>
        <div class="option-buttons">
            <div class="option" onclick="location.href='daily_diet_plan.php';"><span>Daily Diet Plan</span></div>
            <div class="option" onclick="location.href='diet_options.php';"><span>State Wise Diet Plans</span></div>
            <div class="option" onclick="location.href='exercise.php';"><span>Exercise Plans</span></div>
        </div>
    </div>
    <div class="results-button" onclick="location.href='results.php';">Back to Results</div>
</body>
</html>
