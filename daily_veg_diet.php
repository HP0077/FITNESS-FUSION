<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vegetarian Diet Plan</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #a8edea, #fed6e3);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background-color: white;
            padding: 60px;
            border-radius: 25px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
            width: 85%;
            max-width: 1100px;
            text-align: center;
            transition: transform 0.3s ease;
            position: relative;
        }
        .container:hover {
            transform: scale(1.02);
        }
        .logo {
            position: absolute;
            top: 40px;
            left: 10px;
            width: 190px;
            height: auto;
        }
        h1 {
            color: #2d572c;
            font-size: 3.5rem;
            margin-bottom: 40px;
        }
        select {
            padding: 15px;
            font-size: 1.2rem;
            border-radius: 15px;
            border: 2px solid #4caf50;
            color: #2d572c;
            background: #e3f2fd;
            margin-bottom: 40px;
            outline: none;
            transition: all 0.3s ease;
        }
        select:focus {
            border-color: #388e3c;
        }
        .diet-info {
            text-align: left;
            font-size: 1.4rem;
            color: #333;
            background: #f1f8e9;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            line-height: 1.8;
        }
        .diet-info strong {
            color: #2e7d32;
        }
        footer {
            margin-top: 50px;
            color: #666;
            font-size: 1rem;
        }
        .btn-container {
            margin-top: 50px;
            display: flex;
            justify-content: center;
        }
        .btn-back {
            padding: 15px 30px;
            font-size: 1.2rem;
            border-radius: 30px;
            background-color: #4caf50;
            color: white;
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
            border: none;
        }
        .btn-back:hover {
            background-color: #388e3c;
            transform: translateY(-5px);
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Logo in the upper left corner -->
        <img src="logo.jpg" alt="Logo" class="logo">
        
        <h1>Vegetarian Diet Plan</h1>
        <select id="daySelector" onchange="showDietPlan()">
            <option value="Monday">Monday</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thursday">Thursday</option>
            <option value="Friday">Friday</option>
            <option value="Saturday">Saturday</option>
            <option value="Sunday">Sunday</option>
        </select>
        <div id="dietPlan" class="diet-info"></div>

        <div class="btn-container">
            <a href="options.php" class="btn-back">Back to Options</a>
        </div>

        <footer>© 2024 Fitness Fusion - All Rights Reserved</footer>
    </div>

    <script>
        const dietPlans = {
    Monday: `
        <strong>Breakfast:</strong>
        <ul>
            <li>Idli (75g rice, 25g urad dal – 2 pieces):</li>
            <ul>
                <li>Rice: 75g = 6g protein, provides carbohydrates.</li>
                <li>Urad dal: 25g = 5g protein, high in iron, supports digestion.</li>
            </ul>
            <li>Sambar (100g vegetables, 25g toor dal):</li>
            <ul>
                <li>Toor dal: 5g protein, rich in fiber, folate, and magnesium.</li>
                <li>Vegetables (drumsticks, carrots): Vitamins A, C, and fiber.</li>
            </ul>
            <li>Coconut chutney (30g): Healthy fats and fiber, supports digestion.</li>
        </ul>
        <strong>Total protein:</strong> ~16g<br>
        <strong>Benefits:</strong> High-protein and fiber meal, providing energy and micronutrients to support digestive and immune health.<br><br>
        
        <strong>Lunch:</strong>
        <ul>
            <li>Chapati (75g wheat flour – 2 pieces):</li>
            <ul>
                <li>7g protein, provides whole grains and fiber.</li>
            </ul>
            <li>Baingan Bharta (100g eggplant):</li>
            <ul>
                <li>Eggplant is low in calories, contains antioxidants (nasunin), and is rich in fiber.</li>
            </ul>
            <li>Chana Dal (100g cooked):</li>
            <ul>
                <li>8g protein, high in fiber and iron.</li>
            </ul>
            <li>Curd (100g): 4g protein, probiotics, calcium.</li>
        </ul>
        <strong>Total protein:</strong> ~19g<br>
        <strong>Benefits:</strong> A balanced lunch rich in fiber, antioxidants, and probiotics that aid digestion and overall health.<br><br>
        
        <strong>Dinner:</strong>
        <ul>
            <li>Vegetable Pulao (75g rice, 50g mixed veggies):</li>
            <ul>
                <li>6g protein, provides carbohydrates and essential vitamins.</li>
            </ul>
            <li>Mixed Vegetable Raita (100g curd, 50g cucumber):</li>
            <ul>
                <li>4g protein, probiotics, and fiber from cucumber.</li>
            </ul>
        </ul>
        <strong>Total protein:</strong> ~10g<br>
        <strong>Benefits:</strong> A light and easy-to-digest dinner rich in protein and probiotics, promoting gut health.<br>
    `,
    Tuesday: `
        <strong>Breakfast:</strong>
        <ul>
            <li>Ragi Dosa (75g ragi flour):</li>
            <ul>
                <li>Ragi: 6g protein, rich in calcium and fiber, good for bone health.</li>
            </ul>
            <li>Mint Chutney (30g): Antioxidants and vitamins.</li>
            <li>1 Orange (100g): Vitamin C for immune health.</li>
        </ul>
        <strong>Total protein:</strong> ~6g<br>
        <strong>Benefits:</strong> High in calcium and vitamin C, good for bones and immunity.<br><br>
        
        <strong>Lunch:</strong>
        <ul>
            <li>Chapati (75g wheat flour – 2 pieces):</li>
            <ul>
                <li>7g protein, provides fiber and whole grains.</li>
            </ul>
            <li>Kadhi (100g curd, 25g besan):</li>
            <ul>
                <li>5g protein, probiotics, rich in calcium, improves digestion.</li>
            </ul>
            <li>Mixed Vegetable Curry (100g veggies – carrots, peas, beans): Provides fiber, vitamins, and minerals.</li>
        </ul>
        <strong>Total protein:</strong> ~12g<br>
        <strong>Benefits:</strong> Probiotic-rich meal that aids digestion and supports immune health.<br><br>
        
        <strong>Dinner:</strong>
        <ul>
            <li>Paneer Pulao (75g rice, 50g paneer, 50g vegetables):</li>
            <ul>
                <li>50g paneer = 9g protein, high in calcium, supports muscle health.</li>
                <li>Vegetables provide vitamins and fiber.</li>
            </ul>
            <li>Cucumber Raita (100g curd, 50g cucumber):</li>
            <ul>
                <li>4g protein, probiotics, supports digestion.</li>
            </ul>
        </ul>
        <strong>Total protein:</strong> ~13g<br>
        <strong>Benefits:</strong> A calcium and protein-rich dinner that supports bone health and digestion.<br>
    `,
    Wednesday: `
        <strong>Breakfast:</strong>
        <ul>
            <li>Besan Chilla (75g besan – 2 pieces):</li>
            <ul>
                <li>75g besan = 12g protein, rich in fiber and iron.</li>
                <li>Mint chutney adds antioxidants.</li>
            </ul>
            <li>Papaya (100g): Rich in vitamin C, supports digestion.</li>
        </ul>
        <strong>Total protein:</strong> ~12g<br>
        <strong>Benefits:</strong> High-protein, fiber-rich breakfast that supports iron absorption and digestion.<br><br>
        
        <strong>Lunch:</strong>
        <ul>
            <li>Chapati (75g wheat flour – 2 pieces):</li>
            <ul>
                <li>7g protein, fiber-rich.</li>
            </ul>
            <li>Lauki Sabzi (100g bottle gourd):</li>
            <ul>
                <li>High in fiber and vitamins, low in calories.</li>
            </ul>
            <li>Moong Dal (100g cooked):</li>
            <ul>
                <li>8g protein, rich in iron and fiber.</li>
            </ul>
        </ul>
        <strong>Total protein:</strong> ~15g<br>
        <strong>Benefits:</strong> High-fiber, protein-rich lunch that supports digestion and provides sustained energy.<br><br>
        
        <strong>Dinner:</strong>
        <ul>
            <li>Tomato Rice (75g rice, 50g tomatoes):</li>
            <ul>
                <li>6g protein, provides carbs and antioxidants (vitamin C from tomatoes).</li>
            </ul>
            <li>Mixed Vegetable Salad (100g veggies – cucumber, carrots): Provides fiber and essential vitamins.</li>
        </ul>
        <strong>Total protein:</strong> ~7g<br>
        <strong>Benefits:</strong> A light, nutritious dinner that supports digestion and immune health.<br>
    `,
    Thursday: `
        <strong>Breakfast:</strong>
        <ul>
            <li>Ragi Dosa (75g ragi flour, 2 pieces):</li>
            <ul>
                <li>Ragi: 75g = 6g protein, rich in calcium, good for bone health and high in fiber.</li>
            </ul>
            <li>Mint Chutney (30g): Antioxidants, vitamins, promotes digestion.</li>
            <li>1 Apple (100g): Fiber, vitamin C, good for immunity and digestion.</li>
        </ul>
        <strong>Total protein:</strong> ~6g<br>
        <strong>Benefits:</strong> High in calcium and fiber, supports bone health and immunity.<br><br>
        
        <strong>Lunch:</strong>
        <ul>
            <li>Chapati (75g wheat flour – 2 pieces):</li>
            <ul>
                <li>7g protein, provides whole grains and fiber.</li>
            </ul>
            <li>Rajma (100g cooked kidney beans):</li>
            <ul>
                <li>8g protein, rich in fiber, supports heart health and regulates blood sugar.</li>
            </ul>
            <li>Mixed Vegetable Curry (100g veggies – carrots, peas, beans): Fiber, vitamins (A, C, K), and minerals.</li>
            <li>Curd (100g): 4g protein, probiotics for gut health, calcium-rich.</li>
        </ul>
        <strong>Total protein:</strong> ~19g<br>
        <strong>Benefits:</strong> A protein-rich, fiber-heavy meal that supports digestion, heart health, and blood sugar regulation.<br><br>
        
        <strong>Dinner:</strong>
        <ul>
            <li>Jeera Rice (75g rice):</li>
            <ul>
                <li>6g protein, rich in carbohydrates, provides energy.</li>
            </ul>
            <li>Chana Dal (100g cooked):</li>
            <ul>
                <li>8g protein, high in fiber and iron.</li>
            </ul>
            <li>Carrot Salad (50g): Rich in beta-carotene, vitamin A, supports vision and immune health.</li>
        </ul>
        <strong>Total protein:</strong> ~14g<br>
        <strong>Benefits:</strong> Balanced dinner, rich in iron and protein, supports digestion and immune function.<br>
    `,
    Friday: `
        <strong>Breakfast:</strong>
        <ul>
            <li>Moong Dal Chilla (75g moong dal, 2 pieces):</li>
            <ul>
                <li>Moong dal: 12g protein, high in fiber, rich in iron.</li>
            </ul>
            <li>Mint Chutney (30g): Provides antioxidants and vitamins.</li>
            <li>1 Orange (100g): Rich in vitamin C, supports immune health.</li>
        </ul>
        <strong>Total protein:</strong> ~12g<br>
        <strong>Benefits:</strong> High-protein breakfast rich in iron and vitamin C, supports immunity and digestion.<br><br>
        
        <strong>Lunch:</strong>
        <ul>
            <li>Chapati (75g wheat flour – 2 pieces):</li>
            <ul>
                <li>7g protein, fiber-rich.</li>
            </ul>
            <li>Paneer Bhurji (50g paneer, 100g tomatoes):</li>
            <ul>
                <li>Paneer: 9g protein, calcium-rich, supports muscle health.</li>
                <li>Tomatoes provide fiber and vitamin C.</li>
            </ul>
            <li>Cabbage Sabzi (100g cabbage): High in fiber, supports digestion.</li>
        </ul>
        <strong>Total protein:</strong> ~16g<br>
        <strong>Benefits:</strong> Protein-rich lunch that supports bone health and provides essential vitamins and fiber for digestion.<br><br>
        
        <strong>Dinner:</strong>
        <ul>
            <li>Vegetable Pulao (75g rice, 50g mixed vegetables):</li>
            <ul>
                <li>6g protein, rich in carbohydrates.</li>
            </ul>
            <li>Curd (100g): 4g protein, probiotics for gut health, calcium-rich.</li>
            <li>Cucumber Salad (50g): Hydrating, low-calorie, provides vitamins and fiber.</li>
        </ul>
        <strong>Total protein:</strong> ~10g<br>
        <strong>Benefits:</strong> A light, balanced dinner that supports digestion and provides probiotics for gut health.<br>
    `,
    Saturday: `
        <strong>Breakfast:</strong>
        <ul>
            <li>Besan Chilla (75g besan, 2 pieces):</li>
            <ul>
                <li>12g protein, rich in iron and fiber.</li>
            </ul>
            <li>Mint Chutney (30g): Provides antioxidants and fiber.</li>
            <li>1 Banana (100g): Rich in potassium, supports heart health.</li>
        </ul>
        <strong>Total protein:</strong> ~12g<br>
        <strong>Benefits:</strong> Protein-rich breakfast, supports iron absorption and heart health.<br><br>
        
        <strong>Lunch:</strong>
        <ul>
            <li>Chapati (75g wheat flour – 2 pieces):</li>
            <ul>
                <li>7g protein, fiber-rich.</li>
            </ul>
            <li>Aloo Gobi (100g potato, 100g cauliflower):</li>
            <ul>
                <li>Provides potassium, fiber, and vitamin C.</li>
            </ul>
            <li>Moong Dal (100g cooked):</li>
            <ul>
                <li>8g protein, high in fiber and iron.</li>
            </ul>
        </ul>
        <strong>Total protein:</strong> ~15g<br>
        <strong>Benefits:</strong> High-fiber, protein-rich lunch that supports digestion and provides sustained energy.<br><br>
        
        <strong>Dinner:</strong>
        <ul>
            <li>Tomato Rice (75g rice, 50g tomatoes):</li>
            <ul>
                <li>6g protein, provides carbohydrates and vitamins.</li>
            </ul>
            <li>Curd (100g): 4g protein, probiotics, and calcium.</li>
        </ul>
        <strong>Total protein:</strong> ~10g<br>
        <strong>Benefits:</strong> Light and easily digestible dinner that supports gut health with probiotics and provides energy.<br>
    `,
    Sunday: `
        <strong>Breakfast:</strong>
        <ul>
            <li>Oats Upma (100g cooked oats, 50g mixed veggies):</li>
            <ul>
                <li>Oats: 13g protein, high in soluble fiber, helps lower cholesterol.</li>
                <li>Mixed vegetables provide fiber, vitamins A and C.</li>
            </ul>
            <li>Curd (100g):</li>
            <ul>
                <li>4g protein, probiotics, supports digestion.</li>
            </ul>
        </ul>
        <strong>Total protein:</strong> ~17g<br>
        <strong>Benefits:</strong> A high-fiber, protein-rich breakfast that helps with digestion and cholesterol management.<br><br>
        
        <strong>Lunch:</strong>
        <ul>
            <li>Chapati (75g wheat flour – 2 pieces):</li>
            <ul>
                <li>7g protein, fiber-rich.</li>
            </ul>
            <li>Palak Paneer (50g paneer, 100g spinach):</li>
            <ul>
                <li>Paneer: 9g protein, rich in calcium, supports bone health.</li>
                <li>Spinach: Rich in iron, supports blood health.</li>
            </ul>
            <li>Mixed Vegetable Curry (100g veggies):</li>
            <ul>
                <li>Fiber, vitamins, and minerals.</li>
            </ul>
        </ul>
        <strong>Total protein:</strong> ~16g<br>
        <strong>Benefits:</strong> Protein and calcium-rich lunch, good for muscle health and iron absorption.<br><br>
        
        <strong>Dinner:</strong>
        <ul>
            <li>Vegetable Khichdi (50g rice, 50g moong dal):</li>
            <ul>
                <li>10g protein, high in fiber, supports digestion.</li>
            </ul>
            <li>Carrot Salad (50g):</li>
            <ul>
                <li>Provides fiber, beta-carotene, supports vision and immune health.</li>
            </ul>
        </ul>
        <strong>Total protein:</strong> ~10g<br>
        <strong>Benefits:</strong> Light, protein-rich dinner, easily digestible and supports gut health.<br><br>
    `
};
        function showDietPlan() {
            const selectedDay = document.getElementById("daySelector").value;
            document.getElementById("dietPlan").innerHTML = dietPlans[selectedDay];
        }

        // Load default day plan
        showDietPlan();
    </script>
</body>
</html>
