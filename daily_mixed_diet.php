<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mixed Diet Plan</title>
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
        
        <h1>Mixed Diet Plan</h1>
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
            <li>Egg Dosa (75g rice flour, 1 egg):</li>
            <ul>
                <li>Dosa: 3g protein.</li>
                <li>Egg: 6g protein, rich in vitamins B12 and D, supports muscle health.</li>
            </ul>
            <li>Coconut Chutney (30g): Provides healthy fats and antioxidants.</li>
        </ul>
        <strong>Total protein:</strong> ~9g<br>
        <strong>Benefits:</strong> Protein-packed breakfast that helps with muscle maintenance and energy.<br><br>
        
        <strong>Lunch:</strong>
        <ul>
            <li>Chapati (75g wheat flour – 2 pieces):</li>
            <ul>
                <li>7g protein, provides fiber.</li>
            </ul>
            <li>Mutton Curry (100g mutton):</li>
            <ul>
                <li>25g protein, rich in iron, B vitamins, supports muscle growth.</li>
            </ul>
            <li>Palak Paneer (50g paneer, 100g spinach):</li>
            <ul>
                <li>Paneer: 9g protein, rich in calcium.</li>
                <li>Spinach: High in iron, supports blood health.</li>
            </ul>
        </ul>
        <strong>Total protein:</strong> ~41g<br>
        <strong>Benefits:</strong> A high-protein lunch, rich in iron and calcium, helps build muscle and improve bone health.<br><br>
        
        <strong>Dinner:</strong>
        <ul>
            <li>Vegetable Pulao (75g rice, 50g veggies):</li>
            <ul>
                <li>6g protein, rich in carbs and vitamins.</li>
            </ul>
            <li>Chicken Tikka (100g chicken):</li>
            <ul>
                <li>27g protein, provides lean protein for muscle recovery.</li>
            </ul>
            <li>Tomato Salad (50g): Provides fiber, vitamins A and C.</li>
        </ul>
        <strong>Total protein:</strong> ~33g<br>
        <strong>Benefits:</strong> A protein-rich dinner ideal for muscle recovery and overall health.<br>
    `,
    Tuesday: `
        <strong>Breakfast:</strong>
        <ul>
            <li>Boiled Egg (50g):</li>
            <ul>
                <li>6g protein, provides essential amino acids, supports muscle growth.</li>
            </ul>
            <li>Oats Porridge (100g oats):</li>
            <ul>
                <li>13g protein, high in fiber and supports heart health.</li>
            </ul>
        </ul>
        <strong>Total protein:</strong> ~19g<br>
        <strong>Benefits:</strong> High-protein, fiber-rich breakfast that supports heart and muscle health.<br><br>
        
        <strong>Lunch:</strong>
        <ul>
            <li>Chapati (75g wheat flour – 2 pieces):</li>
            <ul>
                <li>7g protein, fiber for digestion.</li>
            </ul>
            <li>Chicken Curry (100g chicken breast):</li>
            <ul>
                <li>27g protein, lean protein source, rich in niacin and phosphorus.</li>
            </ul>
            <li>Curd (100g):</li>
            <ul>
                <li>4g protein, provides probiotics.</li>
            </ul>
        </ul>
        <strong>Total protein:</strong> ~38g<br>
        <strong>Benefits:</strong> High-protein lunch that supports muscle recovery and bone health.<br><br>
        
        <strong>Dinner:</strong>
        <ul>
            <li>Jeera Rice (75g rice):</li>
            <ul>
                <li>6g protein, carbohydrates for energy.</li>
            </ul>
            <li>Fish Curry (100g fish):</li>
            <ul>
                <li>22g protein, rich in omega-3 fatty acids, supports heart health.</li>
            </ul>
            <li>Carrot Salad (50g): Provides fiber, beta-carotene, and vitamins.</li>
        </ul>
        <strong>Total protein:</strong> ~28g<br>
        <strong>Benefits:</strong> Heart-healthy dinner rich in omega-3 and fiber, supports heart health.<br>
    `,
    Wednesday: `
        <strong>Breakfast:</strong>
        <ul>
            <li>Moong Dal Chilla (75g moong dal):</li>
            <ul>
                <li>12g protein, rich in fiber and iron, supports muscle health.</li>
            </ul>
            <li>Boiled Egg (50g):</li>
            <ul>
                <li>6g protein, rich in vitamins D and B12.</li>
            </ul>
        </ul>
        <strong>Total protein:</strong> ~18g<br>
        <strong>Benefits:</strong> High-protein breakfast that provides essential amino acids and supports muscle function.<br><br>
        
        <strong>Lunch:</strong>
        <ul>
            <li>Chapati (75g wheat flour – 2 pieces):</li>
            <ul>
                <li>7g protein, provides fiber.</li>
            </ul>
            <li>Fish Curry (100g fish):</li>
            <ul>
                <li>22g protein, rich in omega-3 fatty acids, supports heart health.</li>
            </ul>
            <li>Cabbage Sabzi (100g cabbage):</li>
            <ul>
                <li>High in fiber and antioxidants.</li>
            </ul>
        </ul>
        <strong>Total protein:</strong> ~29g<br>
        <strong>Benefits:</strong> Protein-rich lunch with heart-healthy fats and fiber for digestion.<br><br>
        
        <strong>Dinner:</strong>
        <ul>
            <li>Egg Curry (2 eggs):</li>
            <ul>
                <li>12g protein, provides essential amino acids and vitamins.</li>
            </ul>
            <li>Rice (75g):</li>
            <ul>
                <li>6g protein, provides carbohydrates for energy.</li>
            </ul>
            <li>Cucumber Salad (100g cucumber): Adds fiber and hydration.</li>
        </ul>
        <strong>Total protein:</strong> ~18g<br>
        <strong>Benefits:</strong> A high-protein, low-fat dinner that supports muscle recovery and digestion.<br>
    `,
    Thursday: `
        <strong>Breakfast:</strong>
        <ul>
            <li>Egg Dosa (75g rice flour, 1 egg):</li>
            <ul>
                <li>Egg: 6g protein, high in essential amino acids and vitamin B12.</li>
                <li>Rice flour adds carbohydrates and fiber.</li>
            </ul>
            <li>Coconut Chutney (30g): Provides healthy fats and antioxidants.</li>
        </ul>
        <strong>Total protein:</strong> ~9g<br>
        <strong>Benefits:</strong> High-protein breakfast, supports muscle health and energy.<br><br>
        
        <strong>Lunch:</strong>
        <ul>
            <li>Chapati (75g wheat flour – 2 pieces):</li>
            <ul>
                <li>7g protein, rich in fiber.</li>
            </ul>
            <li>Chicken Curry (100g chicken breast):</li>
            <ul>
                <li>27g protein, rich in lean protein, supports muscle recovery.</li>
            </ul>
            <li>Cabbage Sabzi (100g cabbage):</li>
            <ul>
                <li>High in fiber, low in calories, provides antioxidants.</li>
            </ul>
            <li>Curd (100g):</li>
            <ul>
                <li>4g protein, rich in calcium and probiotics.</li>
            </ul>
        </ul>
        <strong>Total protein:</strong> ~38g<br>
        <strong>Benefits:</strong> High-protein meal, supports muscle health and digestion with added probiotics.<br><br>
        
        <strong>Dinner:</strong>
        <ul>
            <li>Rice (75g rice):</li>
            <ul>
                <li>6g protein, provides carbohydrates for energy.</li>
            </ul>
            <li>Egg Curry (2 eggs):</li>
            <ul>
                <li>12g protein, rich in vitamins D and B12.</li>
            </ul>
            <li>Carrot Salad (50g):</li>
            <ul>
                <li>Provides fiber and beta-carotene, supports vision and immune function.</li>
            </ul>
        </ul>
        <strong>Total protein:</strong> ~18g<br>
        <strong>Benefits:</strong> A high-protein dinner that supports muscle recovery and provides essential vitamins.<br>
    `,
    Friday: `
        <strong>Breakfast:</strong>
        <ul>
            <li>Oats Porridge (100g oats):</li>
            <ul>
                <li>Oats: 13g protein, rich in fiber, helps reduce cholesterol.</li>
            </ul>
            <li>Boiled Egg (50g):</li>
            <ul>
                <li>6g protein, rich in vitamins D and B12, supports muscle health.</li>
            </ul>
        </ul>
        <strong>Total protein:</strong> ~19g<br>
        <strong>Benefits:</strong> High-protein, fiber-rich breakfast that supports muscle health and helps lower cholesterol.<br><br>
        
        <strong>Lunch:</strong>
        <ul>
            <li>Chapati (75g wheat flour – 2 pieces):</li>
            <ul>
                <li>7g protein, fiber-rich.</li>
            </ul>
            <li>Fish Curry (100g fish):</li>
            <ul>
                <li>22g protein, rich in omega-3 fatty acids, supports heart health.</li>
            </ul>
            <li>Cabbage Sabzi (100g cabbage):</li>
            <ul>
                <li>High in fiber, antioxidants, supports digestion.</li>
            </ul>
        </ul>
        <strong>Total protein:</strong> ~29g<br>
        <strong>Benefits:</strong> Protein-rich lunch, provides heart-healthy fats and fiber for digestion.<br><br>
        
        <strong>Dinner:</strong>
        <ul>
            <li>Rice (75g rice):</li>
            <ul>
                <li>6g protein, carbohydrates for energy.</li>
            </ul>
            <li>Chicken Tikka (100g chicken):</li>
            <ul>
                <li>27g protein, lean protein, supports muscle recovery.</li>
            </ul>
            <li>Cucumber Salad (50g):</li>
            <ul>
                <li>Hydrating and low-calorie, provides vitamins.</li>
            </ul>
        </ul>
        <strong>Total protein:</strong> ~33g<br>
        <strong>Benefits:</strong> A high-protein dinner ideal for muscle recovery and hydration.<br>
    `,
    Saturday: `
        <strong>Breakfast:</strong>
        <ul>
            <li>Ragi Dosa (75g ragi flour, 2 pieces):</li>
            <ul>
                <li>6g protein, rich in calcium, supports bone health.</li>
            </ul>
            <li>Boiled Egg (50g):</li>
            <ul>
                <li>6g protein, provides lean protein and essential vitamins.</li>
            </ul>
        </ul>
        <strong>Total protein:</strong> ~12g<br>
        <strong>Benefits:</strong> High in protein and calcium, supports muscle and bone health.<br><br>
        
        <strong>Lunch:</strong>
        <ul>
            <li>Chapati (75g wheat flour – 2 pieces):</li>
            <ul>
                <li>7g protein, rich in fiber.</li>
            </ul>
            <li>Chicken Curry (100g chicken breast):</li>
            <ul>
                <li>27g protein, lean protein, helps with muscle recovery.</li>
            </ul>
            <li>Curd (100g):</li>
            <ul>
                <li>4g protein, rich in probiotics, supports digestion.</li>
            </ul>
        </ul>
        <strong>Total protein:</strong> ~38g<br>
        <strong>Benefits:</strong> High-protein lunch that promotes muscle recovery and digestion with probiotics.<br><br>
        
        <strong>Dinner:</strong>
        <ul>
            <li>Jeera Rice (75g rice):</li>
            <ul>
                <li>6g protein, provides carbohydrates for energy.</li>
            </ul>
            <li>Fish Curry (100g fish):</li>
            <ul>
                <li>22g protein, rich in omega-3 fatty acids, supports heart health.</li>
            </ul>
            <li>Cucumber Salad (50g):</li>
            <ul>
                <li>Provides hydration, low-calorie, supports digestion.</li>
            </ul>
        </ul>
        <strong>Total protein:</strong> ~28g<br>
        <strong>Benefits:</strong> Balanced dinner, rich in heart-healthy omega-3s and protein for muscle recovery.<br>
    `,
    Sunday: `
        <strong>Breakfast:</strong>
        <ul>
            <li>Boiled Egg (50g):</li>
            <ul>
            <li>6g protein, rich in vitamins D and B12.</li>
        </ul>
        <li>Oats Porridge (100g oats):</li>
        <ul>
        <li>13g protein, rich in fiber, helps reduce cholesterol.</li>
        </ul>
        </ul>
<strong>Total protein:</strong> ~19g<br>
<strong>Benefits:</strong> High-protein, fiber-rich breakfast that supports muscle health and cholesterol management.<br><br>

<strong>Lunch:</strong>
<ul>
    <li>Chapati (75g wheat flour – 2 pieces):</li>
    <ul>
        <li>7g protein, rich in fiber.</li>
    </ul>
    <li>Fish Curry (100g fish):</li>
    <ul>
        <li>22g protein, rich in omega-3 fatty acids, supports heart health.</li>
    </ul>
    <li>Curd (100g):</li>
    <ul>
        <li>4g protein, probiotics, supports digestion.</li>
    </ul>
</ul>
<strong>Total protein:</strong> ~33g<br>
<strong>Benefits:</strong> Heart-healthy, high-protein lunch that promotes muscle recovery and gut health.<br><br>

<strong>Dinner:</strong>
<ul>
    <li>Egg Curry (2 eggs):</li>
    <ul>
        <li>12g protein, provides essential amino acids and vitamins.</li>
    </ul>
    <li>Rice (75g):</li>
    <ul>
        <li>6g protein, provides carbohydrates for energy.</li>
    </ul>
    <li>Carrot Salad (50g):</li>
    <ul>
        <li>Provides fiber, beta-carotene, supports vision and immune function.</li>
    </ul>
</ul>
<strong>Total protein:</strong> ~18g<br>
<strong>Benefits:</strong> Protein-packed dinner with fiber for digestion and sustained energy.<br><br>
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
