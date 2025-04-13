
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Your Exercise Plan</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style> 
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #e0f7fa, #a5d6a7); /* Similar to options.php */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            position: relative;
        }

        .container {
            background: white;
            border-radius: 20px;
            padding: 50px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 80%;
            max-width: 900px;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }

        h1 {
            color: #388e3c;
            font-size: 3.5rem;
            margin-bottom: 40px;
            letter-spacing: 1.5px;
        }

        .option-buttons {
            display: flex;
            justify-content: space-around;
            gap: 30px;
        }

        .option {
            background-color: #66bb6a;
            color: white;
            font-size: 1.6rem;
            font-weight: 600;
            border-radius: 15px;
            padding: 25px;
            text-align: center;
            width: 200px;
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
            background-color: #43a047; /* Darker green on hover */
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

        .back-button {
            position: absolute;
            bottom: 30px;
            left: 30px;
            background-color: #388e3c;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        .back-button:hover {
            background-color: #2e7d32; /* Darker green on hover */
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
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Select Your Exercise Plan</h1>
        <div class="option-buttons">
            <div class="option" onclick="location.href='wt_loss.php';"><span>Weight Loss</span></div>
            <div class="option" onclick="location.href='wt_gain.php';"><span>Weight Gain</span></div>
            <div class="option" onclick="location.href='ms_gain.php';"><span>Muscle Gain</span></div>
        </div>
    </div>

    <button class="back-button" onclick="window.location.href='options.php';">Back to Options</button>
</body>
</html>
