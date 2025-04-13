<?php
session_start();
if (!isset($_SESSION['state'])) {
    // Redirect to home if no state is set
    header('Location: home.php');
    exit();
}

$state = $_SESSION['state'];

// Diet plans based on state (you can add more plans based on the provided data)
$diet_plans = [
    "Chhattisgarh" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Focus on rotis made from whole wheat, jowar, or bajra instead of calorie-dense rice.",
                "Include local vegetables such as spinach, fenugreek leaves, pumpkin, and cabbage in meals.",
                "Use light oils like groundnut oil or mustard oil sparingly.",
                "Incorporate boiled or steamed foods like mixed vegetable sabzi and replace fried snacks like poha and kachori."
            ],
            "Raw Materials" => [
                "Whole wheat", "jowar", "bajra", "spinach", "fenugreek", "pumpkin", "cabbage", "groundnut oil"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Increase the intake of ghee and butter in daily meals, particularly with rotis and parathas.",
                "Use calorie-dense ingredients like peanuts, jaggery, and sesame seeds in dishes like laddoos.",
                "Incorporate dairy products such as paneer, curd, and buttermilk.",
                "Include rich sweets like halwa made from semolina, wheat flour, and ghee."
            ],
            "Raw Materials" => [
                "Ghee", "butter", "peanuts", "jaggery", "paneer", "curd", "buttermilk", "semolina"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein dals like toor dal, chana dal, and moong dal, and include dairy products such as paneer and curd.",
                "Add soybeans, lentils, and legumes to meals for extra protein.",
                "Incorporate whole grains such as jowar, bajra, and wheat flour to boost carbohydrate intake.",
                "Add nuts and seeds like almonds, sunflower seeds, and flaxseeds for extra protein and fats."
            ],
            "Raw Materials" => [
                "Toor dal", "chana dal", "moong dal", "soybeans", "jowar", "bajra", "almonds", "sunflower seeds", "flaxseeds"
            ]
        ]
    ],
    "Madhya Pradesh" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Focus on rotis made from whole wheat, jowar, or bajra instead of calorie-dense rice.",
                "Include local vegetables such as spinach, fenugreek leaves, pumpkin, and cabbage in meals.",
                "Use light oils like groundnut oil or mustard oil sparingly.",
                "Incorporate boiled or steamed foods like mixed vegetable sabzi and replace fried snacks like poha and kachori."
            ],
            "Raw Materials" => [
                "Whole wheat", "jowar", "bajra", "spinach", "fenugreek", "pumpkin", "cabbage", "groundnut oil"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Increase the intake of ghee and butter in daily meals, particularly with rotis and parathas.",
                "Use calorie-dense ingredients like peanuts, jaggery, and sesame seeds in dishes like laddoos.",
                "Incorporate dairy products such as paneer, curd, and buttermilk.",
                "Include rich sweets like halwa made from semolina, wheat flour, and ghee."
            ],
            "Raw Materials" => [
                "Ghee", "butter", "peanuts", "jaggery", "paneer", "curd", "buttermilk", "semolina"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein dals like toor dal, chana dal, and moong dal, and include dairy products such as paneer and curd.",
                "Add soybeans, lentils, and legumes to meals for extra protein.",
                "Incorporate whole grains such as jowar, bajra, and wheat flour to boost carbohydrate intake.",
                "Add nuts and seeds like almonds, sunflower seeds, and flaxseeds for extra protein and fats."
            ],
            "Raw Materials" => [
                "Toor dal", "chana dal", "moong dal", "soybeans", "jowar", "bajra", "almonds", "sunflower seeds", "flaxseeds"
            ]
        ]
    ],
    "Uttar Pradesh" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Focus on rotis made from whole wheat, jowar, or bajra instead of calorie-dense rice.",
                "Include local vegetables such as spinach, fenugreek leaves, pumpkin, and cabbage in meals.",
                "Use light oils like groundnut oil or mustard oil sparingly.",
                "Incorporate boiled or steamed foods like mixed vegetable sabzi and replace fried snacks like poha and kachori."
            ],
            "Raw Materials" => [
                "Whole wheat", "jowar", "bajra", "spinach", "fenugreek", "pumpkin", "cabbage", "groundnut oil"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Increase the intake of ghee and butter in daily meals, particularly with rotis and parathas.",
                "Use calorie-dense ingredients like peanuts, jaggery, and sesame seeds in dishes like laddoos.",
                "Incorporate dairy products such as paneer, curd, and buttermilk.",
                "Include rich sweets like halwa made from semolina, wheat flour, and ghee."
            ],
            "Raw Materials" => [
                "Ghee", "butter", "peanuts", "jaggery", "paneer", "curd", "buttermilk", "semolina"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein dals like toor dal, chana dal, and moong dal, and include dairy products such as paneer and curd.",
                "Add soybeans, lentils, and legumes to meals for extra protein.",
                "Incorporate whole grains such as jowar, bajra, and wheat flour to boost carbohydrate intake.",
                "Add nuts and seeds like almonds, sunflower seeds, and flaxseeds for extra protein and fats."
            ],
            "Raw Materials" => [
                "Toor dal", "chana dal", "moong dal", "soybeans", "jowar", "bajra", "almonds", "sunflower seeds", "flaxseeds"
            ]
        ]
    ],
    "Uttaranchal" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Focus on rotis made from whole wheat, jowar, or bajra instead of calorie-dense rice.",
                "Include local vegetables such as spinach, fenugreek leaves, pumpkin, and cabbage in meals.",
                "Use light oils like groundnut oil or mustard oil sparingly.",
                "Incorporate boiled or steamed foods like mixed vegetable sabzi and replace fried snacks like poha and kachori."
            ],
            "Raw Materials" => [
                "Whole wheat", "jowar", "bajra", "spinach", "fenugreek", "pumpkin", "cabbage", "groundnut oil"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Increase the intake of ghee and butter in daily meals, particularly with rotis and parathas.",
                "Use calorie-dense ingredients like peanuts, jaggery, and sesame seeds in dishes like laddoos.",
                "Incorporate dairy products such as paneer, curd, and buttermilk.",
                "Include rich sweets like halwa made from semolina, wheat flour, and ghee."
            ],
            "Raw Materials" => [
                "Ghee", "butter", "peanuts", "jaggery", "paneer", "curd", "buttermilk", "semolina"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein dals like toor dal, chana dal, and moong dal, and include dairy products such as paneer and curd.",
                "Add soybeans, lentils, and legumes to meals for extra protein.",
                "Incorporate whole grains such as jowar, bajra, and wheat flour to boost carbohydrate intake.",
                "Add nuts and seeds like almonds, sunflower seeds, and flaxseeds for extra protein and fats."
            ],
            "Raw Materials" => [
                "Toor dal", "chana dal", "moong dal", "soybeans", "jowar", "bajra", "almonds", "sunflower seeds", "flaxseeds"
            ]
        ]
    ],
    "Bihar" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Replace regular rice with parboiled or unpolished rice to reduce calorie intake.",
                "Use mustard oil in moderation and focus on vegetables such as pumpkin, brinjal, radish, and leafy greens.",
                "Avoid fried snacks like pakoras and pithas; opt for boiled or steamed options like boiled vegetables and steamed pithas."
            ],
            "Raw Materials" => [
                "Parboiled rice", "mustard oil", "pumpkin", "brinjal", "radish", "leafy greens"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Incorporate calorie-dense foods such as jackfruit, bananas, and sweets like rasgulla and sandesh.",
                "Use more dairy products, including paneer, curd, and milk.",
                "Add high-calorie snacks such as kheer made with jaggery and ghee.",
                "Cook rice-based dishes with ghee for added richness and flavor."
            ],
            "Raw Materials" => [
                "Jackfruit", "bananas", "paneer", "ghee", "jaggery", "milk", "rasgulla ingredients"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein lentils such as moong dal, chana dal, and masoor dal.",
                "Include paneer and curd in meals as additional protein sources.",
                "Add whole grains like millet, oats, and buckwheat for complex carbohydrates.",
                "Incorporate nuts and seeds such as peanuts, sesame seeds, and sunflower seeds to increase protein intake."
            ],
            "Raw Materials" => [
                "Moong dal", "chana dal", "masoor dal", "paneer", "curd", "millet", "oats", "peanuts", "sesame seeds", "sunflower seeds"
            ]
        ]
    ],
    "Jharkhand" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Replace regular rice with parboiled or unpolished rice to reduce calorie intake.",
                "Use mustard oil in moderation and focus on vegetables such as pumpkin, brinjal, radish, and leafy greens.",
                "Avoid fried snacks like pakoras and pithas; opt for boiled or steamed options like boiled vegetables and steamed pithas."
            ],
            "Raw Materials" => [
                "Parboiled rice", "mustard oil", "pumpkin", "brinjal", "radish", "leafy greens"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Incorporate calorie-dense foods such as jackfruit, bananas, and sweets like rasgulla and sandesh.",
                "Use more dairy products, including paneer, curd, and milk.",
                "Add high-calorie snacks such as kheer made with jaggery and ghee.",
                "Cook rice-based dishes with ghee for added richness and flavor."
            ],
            "Raw Materials" => [
                "Jackfruit", "bananas", "paneer", "ghee", "jaggery", "milk", "rasgulla ingredients"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein lentils such as moong dal, chana dal, and masoor dal.",
                "Include paneer and curd in meals as additional protein sources.",
                "Add whole grains like millet, oats, and buckwheat for complex carbohydrates.",
                "Incorporate nuts and seeds such as peanuts, sesame seeds, and sunflower seeds to increase protein intake."
            ],
            "Raw Materials" => [
                "Moong dal", "chana dal", "masoor dal", "paneer", "curd", "millet", "oats", "peanuts", "sesame seeds", "sunflower seeds"
            ]
        ]
    ],
    "Orissa" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Replace regular rice with parboiled or unpolished rice to reduce calorie intake.",
                "Use mustard oil in moderation and focus on vegetables such as pumpkin, brinjal, radish, and leafy greens.",
                "Avoid fried snacks like pakoras and pithas; opt for boiled or steamed options like boiled vegetables and steamed pithas."
            ],
            "Raw Materials" => [
                "Parboiled rice", "mustard oil", "pumpkin", "brinjal", "radish", "leafy greens"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Incorporate calorie-dense foods such as jackfruit, bananas, and sweets like rasgulla and sandesh.",
                "Use more dairy products, including paneer, curd, and milk.",
                "Add high-calorie snacks such as kheer made with jaggery and ghee.",
                "Cook rice-based dishes with ghee for added richness and flavor."
            ],
            "Raw Materials" => [
                "Jackfruit", "bananas", "paneer", "ghee", "jaggery", "milk", "rasgulla ingredients"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein lentils such as moong dal, chana dal, and masoor dal.",
                "Include paneer and curd in meals as additional protein sources.",
                "Add whole grains like millet, oats, and buckwheat for complex carbohydrates.",
                "Incorporate nuts and seeds such as peanuts, sesame seeds, and sunflower seeds to increase protein intake."
            ],
            "Raw Materials" => [
                "Moong dal", "chana dal", "masoor dal", "paneer", "curd", "millet", "oats", "peanuts", "sesame seeds", "sunflower seeds"
            ]
        ]
    ],
    "West Bengal" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Replace regular rice with parboiled or unpolished rice to reduce calorie intake.",
                "Use mustard oil in moderation and focus on vegetables such as pumpkin, brinjal, radish, and leafy greens.",
                "Avoid fried snacks like pakoras and pithas; opt for boiled or steamed options like boiled vegetables and steamed pithas."
            ],
            "Raw Materials" => [
                "Parboiled rice", "mustard oil", "pumpkin", "brinjal", "radish", "leafy greens"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Incorporate calorie-dense foods such as jackfruit, bananas, and sweets like rasgulla and sandesh.",
                "Use more dairy products, including paneer, curd, and milk.",
                "Add high-calorie snacks such as kheer made with jaggery and ghee.",
                "Cook rice-based dishes with ghee for added richness and flavor."
            ],
            "Raw Materials" => [
                "Jackfruit", "bananas", "paneer", "ghee", "jaggery", "milk", "rasgulla ingredients"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein lentils such as moong dal, chana dal, and masoor dal.",
                "Include paneer and curd in meals as additional protein sources.",
                "Add whole grains like millet, oats, and buckwheat for complex carbohydrates.",
                "Incorporate nuts and seeds such as peanuts, sesame seeds, and sunflower seeds to increase protein intake."
            ],
            "Raw Materials" => [
                "Moong dal", "chana dal", "masoor dal", "paneer", "curd", "millet", "oats", "peanuts", "sesame seeds", "sunflower seeds"
            ]
        ]
    ],
    "Chandigarh" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Replace heavy gravies and fried snacks with chapati and lightly cooked sabzi made from local vegetables like spinach, fenugreek, carrots, and cauliflower.",
                "Use mustard oil or sunflower oil sparingly for cooking.",
                "Avoid rich, buttery dishes like paneer butter masala and opt for grilled or boiled vegetable preparations."
            ],
            "Raw Materials" => [
                "Wheat flour", "mustard oil", "sunflower oil", "spinach", "carrots", "fenugreek", "cauliflower"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use ghee and butter generously in rotis, parathas, and daily meals.",
                "Incorporate calorie-rich snacks like samosas, pakoras, and kachoris.",
                "Add dairy-based sweets such as kheer, halwa, and milk-based dishes like rabri.",
                "Use jaggery and sugar for sweet dishes to increase calorie intake."
            ],
            "Raw Materials" => [
                "Ghee", "butter", "paneer", "curd", "milk", "jaggery", "kheer", "rabri ingredients"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on protein-rich dals such as urad dal and chana dal.",
                "Include dairy products like paneer, curd, and lassi for protein.",
                "Add soybeans, tofu, and legumes to boost protein intake.",
                "Incorporate whole grains such as bajra and jowar to meet carbohydrate needs.",
                "Use nuts such as almonds, cashews, and peanuts for healthy fats."
            ],
            "Raw Materials" => [
                "Urad dal", "chana dal", "paneer", "curd", "soybeans", "bajra", "jowar", "almonds", "cashews", "peanuts"
            ]
        ]
    ],
    "Delhi" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Replace heavy gravies and fried snacks with chapati and lightly cooked sabzi made from local vegetables like spinach, fenugreek, carrots, and cauliflower.",
                "Use mustard oil or sunflower oil sparingly for cooking.",
                "Avoid rich, buttery dishes like paneer butter masala and opt for grilled or boiled vegetable preparations."
            ],
            "Raw Materials" => [
                "Wheat flour", "mustard oil", "sunflower oil", "spinach", "carrots", "fenugreek", "cauliflower"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use ghee and butter generously in rotis, parathas, and daily meals.",
                "Incorporate calorie-rich snacks like samosas, pakoras, and kachoris.",
                "Add dairy-based sweets such as kheer, halwa, and milk-based dishes like rabri.",
                "Use jaggery and sugar for sweet dishes to increase calorie intake."
            ],
            "Raw Materials" => [
                "Ghee", "butter", "paneer", "curd", "milk", "jaggery", "kheer", "rabri ingredients"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on protein-rich dals such as urad dal and chana dal.",
                "Include dairy products like paneer, curd, and lassi for protein.",
                "Add soybeans, tofu, and legumes to boost protein intake.",
                "Incorporate whole grains such as bajra and jowar to meet carbohydrate needs.",
                "Use nuts such as almonds, cashews, and peanuts for healthy fats."
            ],
            "Raw Materials" => [
                "Urad dal", "chana dal", "paneer", "curd", "soybeans", "bajra", "jowar", "almonds", "cashews", "peanuts"
            ]
        ]
    ],
    "Haryana" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Replace heavy gravies and fried snacks with chapati and lightly cooked sabzi made from local vegetables like spinach, fenugreek, carrots, and cauliflower.",
                "Use mustard oil or sunflower oil sparingly for cooking.",
                "Avoid rich, buttery dishes like paneer butter masala and opt for grilled or boiled vegetable preparations."
            ],
            "Raw Materials" => [
                "Wheat flour", "mustard oil", "sunflower oil", "spinach", "carrots", "fenugreek", "cauliflower"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use ghee and butter generously in rotis, parathas, and daily meals.",
                "Incorporate calorie-rich snacks like samosas, pakoras, and kachoris.",
                "Add dairy-based sweets such as kheer, halwa, and milk-based dishes like rabri.",
                "Use jaggery and sugar for sweet dishes to increase calorie intake."
            ],
            "Raw Materials" => [
                "Ghee", "butter", "paneer", "curd", "milk", "jaggery", "kheer", "rabri ingredients"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on protein-rich dals such as urad dal and chana dal.",
                "Include dairy products like paneer, curd, and lassi for protein.",
                "Add soybeans, tofu, and legumes to boost protein intake.",
                "Incorporate whole grains such as bajra and jowar to meet carbohydrate needs.",
                "Use nuts such as almonds, cashews, and peanuts for healthy fats."
            ],
            "Raw Materials" => [
                "Urad dal", "chana dal", "paneer", "curd", "soybeans", "bajra", "jowar", "almonds", "cashews", "peanuts"
            ]
        ]
    ],
    "Himachal Pradesh" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Replace heavy gravies and fried snacks with chapati and lightly cooked sabzi made from local vegetables like spinach, fenugreek, carrots, and cauliflower.",
                "Use mustard oil or sunflower oil sparingly for cooking.",
                "Avoid rich, buttery dishes like paneer butter masala and opt for grilled or boiled vegetable preparations."
            ],
            "Raw Materials" => [
                "Wheat flour", "mustard oil", "sunflower oil", "spinach", "carrots", "fenugreek", "cauliflower"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use ghee and butter generously in rotis, parathas, and daily meals.",
                "Incorporate calorie-rich snacks like samosas, pakoras, and kachoris.",
                "Add dairy-based sweets such as kheer, halwa, and milk-based dishes like rabri.",
                "Use jaggery and sugar for sweet dishes to increase calorie intake."
            ],
            "Raw Materials" => [
                "Ghee", "butter", "paneer", "curd", "milk", "jaggery", "kheer", "rabri ingredients"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on protein-rich dals such as urad dal and chana dal.",
                "Include dairy products like paneer, curd, and lassi for protein.",
                "Add soybeans, tofu, and legumes to boost protein intake.",
                "Incorporate whole grains such as bajra and jowar to meet carbohydrate needs.",
                "Use nuts such as almonds, cashews, and peanuts for healthy fats."
            ],
            "Raw Materials" => [
                "Urad dal", "chana dal", "paneer", "curd", "soybeans", "bajra", "jowar", "almonds", "cashews", "peanuts"
            ]
        ]
    ],
    "Jammu & Kashmir" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Replace heavy gravies and fried snacks with chapati and lightly cooked sabzi made from local vegetables like spinach, fenugreek, carrots, and cauliflower.",
                "Use mustard oil or sunflower oil sparingly for cooking.",
                "Avoid rich, buttery dishes like paneer butter masala and opt for grilled or boiled vegetable preparations."
            ],
            "Raw Materials" => [
                "Wheat flour", "mustard oil", "sunflower oil", "spinach", "carrots", "fenugreek", "cauliflower"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use ghee and butter generously in rotis, parathas, and daily meals.",
                "Incorporate calorie-rich snacks like samosas, pakoras, and kachoris.",
                "Add dairy-based sweets such as kheer, halwa, and milk-based dishes like rabri.",
                "Use jaggery and sugar for sweet dishes to increase calorie intake."
            ],
            "Raw Materials" => [
                "Ghee", "butter", "paneer", "curd", "milk", "jaggery", "kheer", "rabri ingredients"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on protein-rich dals such as urad dal and chana dal.",
                "Include dairy products like paneer, curd, and lassi for protein.",
                "Add soybeans, tofu, and legumes to boost protein intake.",
                "Incorporate whole grains such as bajra and jowar to meet carbohydrate needs.",
                "Use nuts such as almonds, cashews, and peanuts for healthy fats."
            ],
            "Raw Materials" => [
                "Urad dal", "chana dal", "paneer", "curd", "soybeans", "bajra", "jowar", "almonds", "cashews", "peanuts"
            ]
        ]
    ],
    "Punjab" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Replace heavy gravies and fried snacks with chapati and lightly cooked sabzi made from local vegetables like spinach, fenugreek, carrots, and cauliflower.",
                "Use mustard oil or sunflower oil sparingly for cooking.",
                "Avoid rich, buttery dishes like paneer butter masala and opt for grilled or boiled vegetable preparations."
            ],
            "Raw Materials" => [
                "Wheat flour", "mustard oil", "sunflower oil", "spinach", "carrots", "fenugreek", "cauliflower"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use ghee and butter generously in rotis, parathas, and daily meals.",
                "Incorporate calorie-rich snacks like samosas, pakoras, and kachoris.",
                "Add dairy-based sweets such as kheer, halwa, and milk-based dishes like rabri.",
                "Use jaggery and sugar for sweet dishes to increase calorie intake."
            ],
            "Raw Materials" => [
                "Ghee", "butter", "paneer", "curd", "milk", "jaggery", "kheer", "rabri ingredients"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on protein-rich dals such as urad dal and chana dal.",
                "Include dairy products like paneer, curd, and lassi for protein.",
                "Add soybeans, tofu, and legumes to boost protein intake.",
                "Incorporate whole grains such as bajra and jowar to meet carbohydrate needs.",
                "Use nuts such as almonds, cashews, and peanuts for healthy fats."
            ],
            "Raw Materials" => [
                "Urad dal", "chana dal", "paneer", "curd", "soybeans", "bajra", "jowar", "almonds", "cashews", "peanuts"
            ]
        ]
    ],
    "Ladakh" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Replace heavy gravies and fried snacks with chapati and lightly cooked sabzi made from local vegetables like spinach, fenugreek, carrots, and cauliflower.",
                "Use mustard oil or sunflower oil sparingly for cooking.",
                "Avoid rich, buttery dishes like paneer butter masala and opt for grilled or boiled vegetable preparations."
            ],
            "Raw Materials" => [
                "Wheat flour", "mustard oil", "sunflower oil", "spinach", "carrots", "fenugreek", "cauliflower"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use ghee and butter generously in rotis, parathas, and daily meals.",
                "Incorporate calorie-rich snacks like samosas, pakoras, and kachoris.",
                "Add dairy-based sweets such as kheer, halwa, and milk-based dishes like rabri.",
                "Use jaggery and sugar for sweet dishes to increase calorie intake."
            ],
            "Raw Materials" => [
                "Ghee", "butter", "paneer", "curd", "milk", "jaggery", "kheer", "rabri ingredients"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on protein-rich dals such as urad dal and chana dal.",
                "Include dairy products like paneer, curd, and lassi for protein.",
                "Add soybeans, tofu, and legumes to boost protein intake.",
                "Incorporate whole grains such as bajra and jowar to meet carbohydrate needs.",
                "Use nuts such as almonds, cashews, and peanuts for healthy fats."
            ],
            "Raw Materials" => [
                "Urad dal", "chana dal", "paneer", "curd", "soybeans", "bajra", "jowar", "almonds", "cashews", "peanuts"
            ]
        ]
    ],
    "Rajasthan" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Replace heavy gravies and fried snacks with chapati and lightly cooked sabzi made from local vegetables like spinach, fenugreek, carrots, and cauliflower.",
                "Use mustard oil or sunflower oil sparingly for cooking.",
                "Avoid rich, buttery dishes like paneer butter masala and opt for grilled or boiled vegetable preparations."
            ],
            "Raw Materials" => [
                "Wheat flour", "mustard oil", "sunflower oil", "spinach", "carrots", "fenugreek", "cauliflower"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use ghee and butter generously in rotis, parathas, and daily meals.",
                "Incorporate calorie-rich snacks like samosas, pakoras, and kachoris.",
                "Add dairy-based sweets such as kheer, halwa, and milk-based dishes like rabri.",
                "Use jaggery and sugar for sweet dishes to increase calorie intake."
            ],
            "Raw Materials" => [
                "Ghee", "butter", "paneer", "curd", "milk", "jaggery", "kheer", "rabri ingredients"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on protein-rich dals such as urad dal and chana dal.",
                "Include dairy products like paneer, curd, and lassi for protein.",
                "Add soybeans, tofu, and legumes to boost protein intake.",
                "Incorporate whole grains such as bajra and jowar to meet carbohydrate needs.",
                "Use nuts such as almonds, cashews, and peanuts for healthy fats."
            ],
            "Raw Materials" => [
                "Urad dal", "chana dal", "paneer", "curd", "soybeans", "bajra", "jowar", "almonds", "cashews", "peanuts"
            ]
        ]
    ],
    "Arunachal Pradesh" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Use black rice or sticky rice, which are lower in calories compared to regular white rice.",
                "Incorporate local vegetables such as bamboo shoots, yams, and leafy greens in meals.",
                "Replace mustard oil with lighter oils such as sunflower oil for a healthier cooking medium.",
                "Focus on boiled or steamed dishes like vegetable soups, salads, and stir-fries."
            ],
            "Raw Materials" => [
                "Black rice", "bamboo shoots", "sunflower oil", "yams", "leafy greens"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Increase the intake of calorie-dense ingredients such as sesame seeds, butter, and rice flour in daily meals.",
                "Incorporate sticky rice-based dishes, which are higher in calories and widely consumed in the Northeast.",
                "Add traditional snacks like boiled peanuts, sweet potatoes, and sesame seed-based sweets."
            ],
            "Raw Materials" => [
                "Sesame seeds", "butter", "sticky rice", "rice flour", "peanuts", "sweet potatoes"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein lentils like moong dal and chana dal, along with local beans and soy products.",
                "Use paneer and curd as dairy-based protein sources, along with fermented soybeans (axone).",
                "Incorporate complex carbohydrates like millet, brown rice, and buckwheat for energy.",
                "Include nuts such as peanuts and almonds for protein and healthy fats."
            ],
            "Raw Materials" => [
                "Moong dal", "chana dal", "paneer", "curd", "fermented soybeans", "millet", "brown rice", "peanuts", "almonds"
            ]
        ]
    ],
    "Assam" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Use black rice or sticky rice, which are lower in calories compared to regular white rice.",
                "Incorporate local vegetables such as bamboo shoots, yams, and leafy greens in meals.",
                "Replace mustard oil with lighter oils such as sunflower oil for a healthier cooking medium.",
                "Focus on boiled or steamed dishes like vegetable soups, salads, and stir-fries."
            ],
            "Raw Materials" => [
                "Black rice", "bamboo shoots", "sunflower oil", "yams", "leafy greens"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Increase the intake of calorie-dense ingredients such as sesame seeds, butter, and rice flour in daily meals.",
                "Incorporate sticky rice-based dishes, which are higher in calories and widely consumed in the Northeast.",
                "Add traditional snacks like boiled peanuts, sweet potatoes, and sesame seed-based sweets."
            ],
            "Raw Materials" => [
                "Sesame seeds", "butter", "sticky rice", "rice flour", "peanuts", "sweet potatoes"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein lentils like moong dal and chana dal, along with local beans and soy products.",
                "Use paneer and curd as dairy-based protein sources, along with fermented soybeans (axone).",
                "Incorporate complex carbohydrates like millet, brown rice, and buckwheat for energy.",
                "Include nuts such as peanuts and almonds for protein and healthy fats."
            ],
            "Raw Materials" => [
                "Moong dal", "chana dal", "paneer", "curd", "fermented soybeans", "millet", "brown rice", "peanuts", "almonds"
            ]
        ]
    ],
    "Manipur" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Use black rice or sticky rice, which are lower in calories compared to regular white rice.",
                "Incorporate local vegetables such as bamboo shoots, yams, and leafy greens in meals.",
                "Replace mustard oil with lighter oils such as sunflower oil for a healthier cooking medium.",
                "Focus on boiled or steamed dishes like vegetable soups, salads, and stir-fries."
            ],
            "Raw Materials" => [
                "Black rice", "bamboo shoots", "sunflower oil", "yams", "leafy greens"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Increase the intake of calorie-dense ingredients such as sesame seeds, butter, and rice flour in daily meals.",
                "Incorporate sticky rice-based dishes, which are higher in calories and widely consumed in the Northeast.",
                "Add traditional snacks like boiled peanuts, sweet potatoes, and sesame seed-based sweets."
            ],
            "Raw Materials" => [
                "Sesame seeds", "butter", "sticky rice", "rice flour", "peanuts", "sweet potatoes"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein lentils like moong dal and chana dal, along with local beans and soy products.",
                "Use paneer and curd as dairy-based protein sources, along with fermented soybeans (axone).",
                "Incorporate complex carbohydrates like millet, brown rice, and buckwheat for energy.",
                "Include nuts such as peanuts and almonds for protein and healthy fats."
            ],
            "Raw Materials" => [
                "Moong dal", "chana dal", "paneer", "curd", "fermented soybeans", "millet", "brown rice", "peanuts", "almonds"
            ]
        ]
    ],
    "Mizoram" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Use black rice or sticky rice, which are lower in calories compared to regular white rice.",
                "Incorporate local vegetables such as bamboo shoots, yams, and leafy greens in meals.",
                "Replace mustard oil with lighter oils such as sunflower oil for a healthier cooking medium.",
                "Focus on boiled or steamed dishes like vegetable soups, salads, and stir-fries."
            ],
            "Raw Materials" => [
                "Black rice", "bamboo shoots", "sunflower oil", "yams", "leafy greens"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Increase the intake of calorie-dense ingredients such as sesame seeds, butter, and rice flour in daily meals.",
                "Incorporate sticky rice-based dishes, which are higher in calories and widely consumed in the Northeast.",
                "Add traditional snacks like boiled peanuts, sweet potatoes, and sesame seed-based sweets."
            ],
            "Raw Materials" => [
                "Sesame seeds", "butter", "sticky rice", "rice flour", "peanuts", "sweet potatoes"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein lentils like moong dal and chana dal, along with local beans and soy products.",
                "Use paneer and curd as dairy-based protein sources, along with fermented soybeans (axone).",
                "Incorporate complex carbohydrates like millet, brown rice, and buckwheat for energy.",
                "Include nuts such as peanuts and almonds for protein and healthy fats."
            ],
            "Raw Materials" => [
                "Moong dal", "chana dal", "paneer", "curd", "fermented soybeans", "millet", "brown rice", "peanuts", "almonds"
            ]
        ]
    ],
    "Meghalaya" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Use black rice or sticky rice, which are lower in calories compared to regular white rice.",
                "Incorporate local vegetables such as bamboo shoots, yams, and leafy greens in meals.",
                "Replace mustard oil with lighter oils such as sunflower oil for a healthier cooking medium.",
                "Focus on boiled or steamed dishes like vegetable soups, salads, and stir-fries."
            ],
            "Raw Materials" => [
                "Black rice", "bamboo shoots", "sunflower oil", "yams", "leafy greens"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Increase the intake of calorie-dense ingredients such as sesame seeds, butter, and rice flour in daily meals.",
                "Incorporate sticky rice-based dishes, which are higher in calories and widely consumed in the Northeast.",
                "Add traditional snacks like boiled peanuts, sweet potatoes, and sesame seed-based sweets."
            ],
            "Raw Materials" => [
                "Sesame seeds", "butter", "sticky rice", "rice flour", "peanuts", "sweet potatoes"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein lentils like moong dal and chana dal, along with local beans and soy products.",
                "Use paneer and curd as dairy-based protein sources, along with fermented soybeans (axone).",
                "Incorporate complex carbohydrates like millet, brown rice, and buckwheat for energy.",
                "Include nuts such as peanuts and almonds for protein and healthy fats."
            ],
            "Raw Materials" => [
                "Moong dal", "chana dal", "paneer", "curd", "fermented soybeans", "millet", "brown rice", "peanuts", "almonds"
            ]
        ]
    ],
    "Nagaland" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Use black rice or sticky rice, which are lower in calories compared to regular white rice.",
                "Incorporate local vegetables such as bamboo shoots, yams, and leafy greens in meals.",
                "Replace mustard oil with lighter oils such as sunflower oil for a healthier cooking medium.",
                "Focus on boiled or steamed dishes like vegetable soups, salads, and stir-fries."
            ],
            "Raw Materials" => [
                "Black rice", "bamboo shoots", "sunflower oil", "yams", "leafy greens"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Increase the intake of calorie-dense ingredients such as sesame seeds, butter, and rice flour in daily meals.",
                "Incorporate sticky rice-based dishes, which are higher in calories and widely consumed in the Northeast.",
                "Add traditional snacks like boiled peanuts, sweet potatoes, and sesame seed-based sweets."
            ],
            "Raw Materials" => [
                "Sesame seeds", "butter", "sticky rice", "rice flour", "peanuts", "sweet potatoes"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein lentils like moong dal and chana dal, along with local beans and soy products.",
                "Use paneer and curd as dairy-based protein sources, along with fermented soybeans (axone).",
                "Incorporate complex carbohydrates like millet, brown rice, and buckwheat for energy.",
                "Include nuts such as peanuts and almonds for protein and healthy fats."
            ],
            "Raw Materials" => [
                "Moong dal", "chana dal", "paneer", "curd", "fermented soybeans", "millet", "brown rice", "peanuts", "almonds"
            ]
        ]
    ],
    "Sikkim" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Use black rice or sticky rice, which are lower in calories compared to regular white rice.",
                "Incorporate local vegetables such as bamboo shoots, yams, and leafy greens in meals.",
                "Replace mustard oil with lighter oils such as sunflower oil for a healthier cooking medium.",
                "Focus on boiled or steamed dishes like vegetable soups, salads, and stir-fries."
            ],
            "Raw Materials" => [
                "Black rice", "bamboo shoots", "sunflower oil", "yams", "leafy greens"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Increase the intake of calorie-dense ingredients such as sesame seeds, butter, and rice flour in daily meals.",
                "Incorporate sticky rice-based dishes, which are higher in calories and widely consumed in the Northeast.",
                "Add traditional snacks like boiled peanuts, sweet potatoes, and sesame seed-based sweets."
            ],
            "Raw Materials" => [
                "Sesame seeds", "butter", "sticky rice", "rice flour", "peanuts", "sweet potatoes"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein lentils like moong dal and chana dal, along with local beans and soy products.",
                "Use paneer and curd as dairy-based protein sources, along with fermented soybeans (axone).",
                "Incorporate complex carbohydrates like millet, brown rice, and buckwheat for energy.",
                "Include nuts such as peanuts and almonds for protein and healthy fats."
            ],
            "Raw Materials" => [
                "Moong dal", "chana dal", "paneer", "curd", "fermented soybeans", "millet", "brown rice", "peanuts", "almonds"
            ]
        ]
    ],
    "Tripura" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Use black rice or sticky rice, which are lower in calories compared to regular white rice.",
                "Incorporate local vegetables such as bamboo shoots, yams, and leafy greens in meals.",
                "Replace mustard oil with lighter oils such as sunflower oil for a healthier cooking medium.",
                "Focus on boiled or steamed dishes like vegetable soups, salads, and stir-fries."
            ],
            "Raw Materials" => [
                "Black rice", "bamboo shoots", "sunflower oil", "yams", "leafy greens"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Increase the intake of calorie-dense ingredients such as sesame seeds, butter, and rice flour in daily meals.",
                "Incorporate sticky rice-based dishes, which are higher in calories and widely consumed in the Northeast.",
                "Add traditional snacks like boiled peanuts, sweet potatoes, and sesame seed-based sweets."
            ],
            "Raw Materials" => [
                "Sesame seeds", "butter", "sticky rice", "rice flour", "peanuts", "sweet potatoes"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein lentils like moong dal and chana dal, along with local beans and soy products.",
                "Use paneer and curd as dairy-based protein sources, along with fermented soybeans (axone).",
                "Incorporate complex carbohydrates like millet, brown rice, and buckwheat for energy.",
                "Include nuts such as peanuts and almonds for protein and healthy fats."
            ],
            "Raw Materials" => [
                "Moong dal", "chana dal", "paneer", "curd", "fermented soybeans", "millet", "brown rice", "peanuts", "almonds"
            ]
        ]
    ],
    "Andaman & Nicobar Islands" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Replace rice with smaller portions of idli or dosa made from fermented rice batter to control calorie intake.",
                "Use coconut oil in small quantities or substitute with sesame or groundnut oil.",
                "Include steamed vegetables such as drumsticks, spinach, and ash gourd in meals.",
                "Avoid calorie-dense snacks like banana chips or murukku; opt for lighter snacks like boiled lentils or salads."
            ],
            "Raw Materials" => [
                "Idli rice", "coconut oil", "sesame oil", "drumsticks", "spinach", "ash gourd"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use coconut milk, ghee, and jaggery generously in dishes like sambar, rasam, and payasam.",
                "Add calorie-dense snacks like banana chips, jackfruit chips, and traditional sweets such as kozhukattai.",
                "Incorporate dairy products like curd, buttermilk, and paneer for additional protein and fat."
            ],
            "Raw Materials" => [
                "Coconut milk", "ghee", "banana chips", "jackfruit chips", "curd", "jaggery", "kozhukattai"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on protein-rich lentils such as toor dal and urad dal, commonly used in dishes like dosa, idli, and sambar.",
                "Add soy products and paneer to increase protein intake.",
                "Use complex carbohydrates such as millet (ragi) and brown rice to provide sustained energy for muscle recovery.",
                "Include nuts such as cashews and almonds for additional protein and healthy fats."
            ],
            "Raw Materials" => [
                "Toor dal", "urad dal", "soy products", "paneer", "millet (ragi)", "brown rice", "cashews", "almonds"
            ]
        ]
    ],
    "Andhra Pradesh" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Replace rice with smaller portions of idli or dosa made from fermented rice batter to control calorie intake.",
                "Use coconut oil in small quantities or substitute with sesame or groundnut oil.",
                "Include steamed vegetables such as drumsticks, spinach, and ash gourd in meals.",
                "Avoid calorie-dense snacks like banana chips or murukku; opt for lighter snacks like boiled lentils or salads."
            ],
            "Raw Materials" => [
                "Idli rice", "coconut oil", "sesame oil", "drumsticks", "spinach", "ash gourd"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use coconut milk, ghee, and jaggery generously in dishes like sambar, rasam, and payasam.",
                "Add calorie-dense snacks like banana chips, jackfruit chips, and traditional sweets such as kozhukattai.",
                "Incorporate dairy products like curd, buttermilk, and paneer for additional protein and fat."
            ],
            "Raw Materials" => [
                "Coconut milk", "ghee", "banana chips", "jackfruit chips", "curd", "jaggery", "kozhukattai"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on protein-rich lentils such as toor dal and urad dal, commonly used in dishes like dosa, idli, and sambar.",
                "Add soy products and paneer to increase protein intake.",
                "Use complex carbohydrates such as millet (ragi) and brown rice to provide sustained energy for muscle recovery.",
                "Include nuts such as cashews and almonds for additional protein and healthy fats."
            ],
            "Raw Materials" => [
                "Toor dal", "urad dal", "soy products", "paneer", "millet (ragi)", "brown rice", "cashews", "almonds"
            ]
        ]
    ],
    "Karnataka" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Replace rice with smaller portions of idli or dosa made from fermented rice batter to control calorie intake.",
                "Use coconut oil in small quantities or substitute with sesame or groundnut oil.",
                "Include steamed vegetables such as drumsticks, spinach, and ash gourd in meals.",
                "Avoid calorie-dense snacks like banana chips or murukku; opt for lighter snacks like boiled lentils or salads."
            ],
            "Raw Materials" => [
                "Idli rice", "coconut oil", "sesame oil", "drumsticks", "spinach", "ash gourd"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use coconut milk, ghee, and jaggery generously in dishes like sambar, rasam, and payasam.",
                "Add calorie-dense snacks like banana chips, jackfruit chips, and traditional sweets such as kozhukattai.",
                "Incorporate dairy products like curd, buttermilk, and paneer for additional protein and fat."
            ],
            "Raw Materials" => [
                "Coconut milk", "ghee", "banana chips", "jackfruit chips", "curd", "jaggery", "kozhukattai"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on protein-rich lentils such as toor dal and urad dal, commonly used in dishes like dosa, idli, and sambar.",
                "Add soy products and paneer to increase protein intake.",
                "Use complex carbohydrates such as millet (ragi) and brown rice to provide sustained energy for muscle recovery.",
                "Include nuts such as cashews and almonds for additional protein and healthy fats."
            ],
            "Raw Materials" => [
                "Toor dal", "urad dal", "soy products", "paneer", "millet (ragi)", "brown rice", "cashews", "almonds"
            ]
        ]
    ],
    "Kerala" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Replace rice with smaller portions of idli or dosa made from fermented rice batter to control calorie intake.",
                "Use coconut oil in small quantities or substitute with sesame or groundnut oil.",
                "Include steamed vegetables such as drumsticks, spinach, and ash gourd in meals.",
                "Avoid calorie-dense snacks like banana chips or murukku; opt for lighter snacks like boiled lentils or salads."
            ],
            "Raw Materials" => [
                "Idli rice", "coconut oil", "sesame oil", "drumsticks", "spinach", "ash gourd"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use coconut milk, ghee, and jaggery generously in dishes like sambar, rasam, and payasam.",
                "Add calorie-dense snacks like banana chips, jackfruit chips, and traditional sweets such as kozhukattai.",
                "Incorporate dairy products like curd, buttermilk, and paneer for additional protein and fat."
            ],
            "Raw Materials" => [
                "Coconut milk", "ghee", "banana chips", "jackfruit chips", "curd", "jaggery", "kozhukattai"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on protein-rich lentils such as toor dal and urad dal, commonly used in dishes like dosa, idli, and sambar.",
                "Add soy products and paneer to increase protein intake.",
                "Use complex carbohydrates such as millet (ragi) and brown rice to provide sustained energy for muscle recovery.",
                "Include nuts such as cashews and almonds for additional protein and healthy fats."
            ],
            "Raw Materials" => [
                "Toor dal", "urad dal", "soy products", "paneer", "millet (ragi)", "brown rice", "cashews", "almonds"
            ]
        ]
    ],
    "Lakshadweep" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Replace rice with smaller portions of idli or dosa made from fermented rice batter to control calorie intake.",
                "Use coconut oil in small quantities or substitute with sesame or groundnut oil.",
                "Include steamed vegetables such as drumsticks, spinach, and ash gourd in meals.",
                "Avoid calorie-dense snacks like banana chips or murukku; opt for lighter snacks like boiled lentils or salads."
            ],
            "Raw Materials" => [
                "Idli rice", "coconut oil", "sesame oil", "drumsticks", "spinach", "ash gourd"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use coconut milk, ghee, and jaggery generously in dishes like sambar, rasam, and payasam.",
                "Add calorie-dense snacks like banana chips, jackfruit chips, and traditional sweets such as kozhukattai.",
                "Incorporate dairy products like curd, buttermilk, and paneer for additional protein and fat."
            ],
            "Raw Materials" => [
                "Coconut milk", "ghee", "banana chips", "jackfruit chips", "curd", "jaggery", "kozhukattai"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on protein-rich lentils such as toor dal and urad dal, commonly used in dishes like dosa, idli, and sambar.",
                "Add soy products and paneer to increase protein intake.",
                "Use complex carbohydrates such as millet (ragi) and brown rice to provide sustained energy for muscle recovery.",
                "Include nuts such as cashews and almonds for additional protein and healthy fats."
            ],
            "Raw Materials" => [
                "Toor dal", "urad dal", "soy products", "paneer", "millet (ragi)", "brown rice", "cashews", "almonds"
            ]
        ]
    ],
    "Pondicherry" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Replace rice with smaller portions of idli or dosa made from fermented rice batter to control calorie intake.",
                "Use coconut oil in small quantities or substitute with sesame or groundnut oil.",
                "Include steamed vegetables such as drumsticks, spinach, and ash gourd in meals.",
                "Avoid calorie-dense snacks like banana chips or murukku; opt for lighter snacks like boiled lentils or salads."
            ],
            "Raw Materials" => [
                "Idli rice", "coconut oil", "sesame oil", "drumsticks", "spinach", "ash gourd"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use coconut milk, ghee, and jaggery generously in dishes like sambar, rasam, and payasam.",
                "Add calorie-dense snacks like banana chips, jackfruit chips, and traditional sweets such as kozhukattai.",
                "Incorporate dairy products like curd, buttermilk, and paneer for additional protein and fat."
            ],
            "Raw Materials" => [
                "Coconut milk", "ghee", "banana chips", "jackfruit chips", "curd", "jaggery", "kozhukattai"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on protein-rich lentils such as toor dal and urad dal, commonly used in dishes like dosa, idli, and sambar.",
                "Add soy products and paneer to increase protein intake.",
                "Use complex carbohydrates such as millet (ragi) and brown rice to provide sustained energy for muscle recovery.",
                "Include nuts such as cashews and almonds for additional protein and healthy fats."
            ],
            "Raw Materials" => [
                "Toor dal", "urad dal", "soy products", "paneer", "millet (ragi)", "brown rice", "cashews", "almonds"
            ]
        ]
    ],
    "Telangana" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Replace rice with smaller portions of idli or dosa made from fermented rice batter to control calorie intake.",
                "Use coconut oil in small quantities or substitute with sesame or groundnut oil.",
                "Include steamed vegetables such as drumsticks, spinach, and ash gourd in meals.",
                "Avoid calorie-dense snacks like banana chips or murukku; opt for lighter snacks like boiled lentils or salads."
            ],
            "Raw Materials" => [
                "Idli rice", "coconut oil", "sesame oil", "drumsticks", "spinach", "ash gourd"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use coconut milk, ghee, and jaggery generously in dishes like sambar, rasam, and payasam.",
                "Add calorie-dense snacks like banana chips, jackfruit chips, and traditional sweets such as kozhukattai.",
                "Incorporate dairy products like curd, buttermilk, and paneer for additional protein and fat."
            ],
            "Raw Materials" => [
                "Coconut milk", "ghee", "banana chips", "jackfruit chips", "curd", "jaggery", "kozhukattai"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on protein-rich lentils such as toor dal and urad dal, commonly used in dishes like dosa, idli, and sambar.",
                "Add soy products and paneer to increase protein intake.",
                "Use complex carbohydrates such as millet (ragi) and brown rice to provide sustained energy for muscle recovery.",
                "Include nuts such as cashews and almonds for additional protein and healthy fats."
            ],
            "Raw Materials" => [
                "Toor dal", "urad dal", "soy products", "paneer", "millet (ragi)", "brown rice", "cashews", "almonds"
            ]
        ]
    ],
    "Tamil Nadu" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Replace rice with smaller portions of idli or dosa made from fermented rice batter to control calorie intake.",
                "Use coconut oil in small quantities or substitute with sesame or groundnut oil.",
                "Include steamed vegetables such as drumsticks, spinach, and ash gourd in meals.",
                "Avoid calorie-dense snacks like banana chips or murukku; opt for lighter snacks like boiled lentils or salads."
            ],
            "Raw Materials" => [
                "Idli rice", "coconut oil", "sesame oil", "drumsticks", "spinach", "ash gourd"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use coconut milk, ghee, and jaggery generously in dishes like sambar, rasam, and payasam.",
                "Add calorie-dense snacks like banana chips, jackfruit chips, and traditional sweets such as kozhukattai.",
                "Incorporate dairy products like curd, buttermilk, and paneer for additional protein and fat."
            ],
            "Raw Materials" => [
                "Coconut milk", "ghee", "banana chips", "jackfruit chips", "curd", "jaggery", "kozhukattai"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on protein-rich lentils such as toor dal and urad dal, commonly used in dishes like dosa, idli, and sambar.",
                "Add soy products and paneer to increase protein intake.",
                "Use complex carbohydrates such as millet (ragi) and brown rice to provide sustained energy for muscle recovery.",
                "Include nuts such as cashews and almonds for additional protein and healthy fats."
            ],
            "Raw Materials" => [
                "Toor dal", "urad dal", "soy products", "paneer", "millet (ragi)", "brown rice", "cashews", "almonds"
            ]
        ]
    ],
    "Dadra & Nagar Haveli" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Replace wheat-based meals such as rotis and bhakris with lighter millet-based meals like bajra or jowar.",
                "Use ghee and groundnut oil sparingly for cooking.",
                "Incorporate local vegetables such as fenugreek leaves, ridge gourd, and bottle gourd in meals.",
                "Avoid fried snacks like dhokla and kachoris; opt for steamed or boiled dishes."
            ],
            "Raw Materials" => [
                "Bajra", "jowar", "fenugreek leaves", "ridge gourd", "bottle gourd", "groundnut oil"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Incorporate calorie-dense snacks such as dhokla, fafda, and kachoris, common in West Indian cuisine.",
                "Use dairy products such as ghee, butter, and paneer in meals to increase fat content.",
                "Include rich sweets such as basundi and shrikhand, which are prepared with sugar and milk.",
                "Use chickpea flour (besan) in snacks and sweets like laddoos to boost calorie intake."
            ],
            "Raw Materials" => [
                "Ghee", "butter", "paneer", "basundi ingredients", "besan", "laddoos", "dhokla"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on protein-rich dals and legumes like toor dal, moong dal, and chana dal.",
                "Use paneer and curd as primary protein sources alongside soybeans and tofu.",
                "Incorporate whole grains such as bajra and jowar for complex carbohydrates.",
                "Add nuts and seeds like peanuts and sesame seeds for healthy fats and additional protein."
            ],
            "Raw Materials" => [
                "Toor dal", "moong dal", "chana dal", "paneer", "curd", "soybeans", "bajra", "jowar", "peanuts", "sesame seeds"
            ]
        ]
    ],
    "Diu & Daman" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Replace wheat-based meals such as rotis and bhakris with lighter millet-based meals like bajra or jowar.",
                "Use ghee and groundnut oil sparingly for cooking.",
                "Incorporate local vegetables such as fenugreek leaves, ridge gourd, and bottle gourd in meals.",
                "Avoid fried snacks like dhokla and kachoris; opt for steamed or boiled dishes."
            ],
            "Raw Materials" => [
                "Bajra", "jowar", "fenugreek leaves", "ridge gourd", "bottle gourd", "groundnut oil"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Incorporate calorie-dense snacks such as dhokla, fafda, and kachoris, common in West Indian cuisine.",
                "Use dairy products such as ghee, butter, and paneer in meals to increase fat content.",
                "Include rich sweets such as basundi and shrikhand, which are prepared with sugar and milk.",
                "Use chickpea flour (besan) in snacks and sweets like laddoos to boost calorie intake."
            ],
            "Raw Materials" => [
                "Ghee", "butter", "paneer", "basundi ingredients", "besan", "laddoos", "dhokla"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on protein-rich dals and legumes like toor dal, moong dal, and chana dal.",
                "Use paneer and curd as primary protein sources alongside soybeans and tofu.",
                "Incorporate whole grains such as bajra and jowar for complex carbohydrates.",
                "Add nuts and seeds like peanuts and sesame seeds for healthy fats and additional protein."
            ],
            "Raw Materials" => [
                "Toor dal", "moong dal", "chana dal", "paneer", "curd", "soybeans", "bajra", "jowar", "peanuts", "sesame seeds"
            ]
        ]
    ],
    "Goa" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Replace wheat-based meals such as rotis and bhakris with lighter millet-based meals like bajra or jowar.",
                "Use ghee and groundnut oil sparingly for cooking.",
                "Incorporate local vegetables such as fenugreek leaves, ridge gourd, and bottle gourd in meals.",
                "Avoid fried snacks like dhokla and kachoris; opt for steamed or boiled dishes."
            ],
            "Raw Materials" => [
                "Bajra", "jowar", "fenugreek leaves", "ridge gourd", "bottle gourd", "groundnut oil"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Incorporate calorie-dense snacks such as dhokla, fafda, and kachoris, common in West Indian cuisine.",
                "Use dairy products such as ghee, butter, and paneer in meals to increase fat content.",
                "Include rich sweets such as basundi and shrikhand, which are prepared with sugar and milk.",
                "Use chickpea flour (besan) in snacks and sweets like laddoos to boost calorie intake."
            ],
            "Raw Materials" => [
                "Ghee", "butter", "paneer", "basundi ingredients", "besan", "laddoos", "dhokla"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on protein-rich dals and legumes like toor dal, moong dal, and chana dal.",
                "Use paneer and curd as primary protein sources alongside soybeans and tofu.",
                "Incorporate whole grains such as bajra and jowar for complex carbohydrates.",
                "Add nuts and seeds like peanuts and sesame seeds for healthy fats and additional protein."
            ],
            "Raw Materials" => [
                "Toor dal", "moong dal", "chana dal", "paneer", "curd", "soybeans", "bajra", "jowar", "peanuts", "sesame seeds"
            ]
        ]
    ], 
    "Gujarat" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Replace wheat-based meals such as rotis and bhakris with lighter millet-based meals like bajra or jowar.",
                "Use ghee and groundnut oil sparingly for cooking.",
                "Incorporate local vegetables such as fenugreek leaves, ridge gourd, and bottle gourd in meals.",
                "Avoid fried snacks like dhokla and kachoris; opt for steamed or boiled dishes."
            ],
            "Raw Materials" => [
                "Bajra", "jowar", "fenugreek leaves", "ridge gourd", "bottle gourd", "groundnut oil"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Incorporate calorie-dense snacks such as dhokla, fafda, and kachoris, common in West Indian cuisine.",
                "Use dairy products such as ghee, butter, and paneer in meals to increase fat content.",
                "Include rich sweets such as basundi and shrikhand, which are prepared with sugar and milk.",
                "Use chickpea flour (besan) in snacks and sweets like laddoos to boost calorie intake."
            ],
            "Raw Materials" => [
                "Ghee", "butter", "paneer", "basundi ingredients", "besan", "laddoos", "dhokla"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on protein-rich dals and legumes like toor dal, moong dal, and chana dal.",
                "Use paneer and curd as primary protein sources alongside soybeans and tofu.",
                "Incorporate whole grains such as bajra and jowar for complex carbohydrates.",
                "Add nuts and seeds like peanuts and sesame seeds for healthy fats and additional protein."
            ],
            "Raw Materials" => [
                "Toor dal", "moong dal", "chana dal", "paneer", "curd", "soybeans", "bajra", "jowar", "peanuts", "sesame seeds"
            ]
        ]
    ],
    "Maharashtra" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Replace wheat-based meals such as rotis and bhakris with lighter millet-based meals like bajra or jowar.",
                "Use ghee and groundnut oil sparingly for cooking.",
                "Incorporate local vegetables such as fenugreek leaves, ridge gourd, and bottle gourd in meals.",
                "Avoid fried snacks like dhokla and kachoris; opt for steamed or boiled dishes."
            ],
            "Raw Materials" => [
                "Bajra", "jowar", "fenugreek leaves", "ridge gourd", "bottle gourd", "groundnut oil"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Incorporate calorie-dense snacks such as dhokla, fafda, and kachoris, common in West Indian cuisine.",
                "Use dairy products such as ghee, butter, and paneer in meals to increase fat content.",
                "Include rich sweets such as basundi and shrikhand, which are prepared with sugar and milk.",
                "Use chickpea flour (besan) in snacks and sweets like laddoos to boost calorie intake."
            ],
            "Raw Materials" => [
                "Ghee", "butter", "paneer", "basundi ingredients", "besan", "laddoos", "dhokla"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on protein-rich dals and legumes like toor dal, moong dal, and chana dal.",
                "Use paneer and curd as primary protein sources alongside soybeans and tofu.",
                "Incorporate whole grains such as bajra and jowar for complex carbohydrates.",
                "Add nuts and seeds like peanuts and sesame seeds for healthy fats and additional protein."
            ],
            "Raw Materials" => [
                "Toor dal", "moong dal", "chana dal", "paneer", "curd", "soybeans", "bajra", "jowar", "peanuts", "sesame seeds"
            ]
        ]
    ],
];

// Get the diet plan for the selected state
$diet_plan = $diet_plans[$state] ?? null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vegetarian Diet Plan</title>
    <style>
        /* General Styles */
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #e0f7fa, #a5d6a7);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            animation: bgFadeIn 1s ease-in-out;
        }

        /* Background Animation */
        @keyframes bgFadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Container Styling */
        .container {
            max-width: 850px;
            width: 100%;
            background: #ffffff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.15);
            text-align: center;
            transform: scale(0.95);
            animation: scaleUp 0.6s ease-in-out;
        }

        /* Scale Animation for Container */
        @keyframes scaleUp {
            from {
                transform: scale(0.85);
                opacity: 0;
            }
            to {
                transform: scale(0.95);
                opacity: 1;
            }
        }

        /* Title Styles */
        h1 {
            font-size: 2.8rem;
            color: #2E7D32;
            margin-bottom: 30px;
            letter-spacing: 1.2px;
            text-transform: capitalize;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1);
        }

        /* Plan Section Styling */
        .plan {
            margin-bottom: 40px;
            text-align: left;
        }

        .plan-title {
            font-size: 1.8rem;
            color: #4CAF50;
            margin-bottom: 20px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
            border-bottom: 2px solid #4CAF50;
            padding-bottom: 5px;
        }

        /* Dietary Changes Styling */
        .dietary-changes {
            background-color: #e8f5e9;
            padding: 20px;
            border-left: 6px solid #43A047;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 15px rgba(0, 150, 136, 0.2);
            transition: transform 0.3s ease;
        }

        .dietary-changes:hover {
            transform: scale(1.02);
        }

        .dietary-changes h2 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #43A047;
        }

        .dietary-changes ul {
            padding-left: 20px;
            list-style-type: square;
            color: #333;
        }

        /* Raw Materials Styling */
        .raw-materials {
            background-color: #FFF8E1;
            padding: 20px;
            border-left: 6px solid #FFB74D;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(255, 167, 38, 0.2);
            transition: transform 0.3s ease;
        }

        .raw-materials:hover {
            transform: scale(1.02);
        }

        .raw-materials h2 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #FB8C00;
        }

        .raw-materials ul {
            padding-left: 20px;
            list-style-type: disc;
            color: #333;
        }

        /* Button Styling */
        .btn {
            display: inline-block;
            padding: 15px 40px;
            background-color: #43A047;
            color: #fff;
            text-decoration: none;
            border-radius: 30px;
            font-size: 1.2rem;
            letter-spacing: 0.5px;
            transition: background-color 0.4s ease, transform 0.3s ease;
            box-shadow: 0 10px 20px rgba(0, 150, 136, 0.3);
        }

        .btn:hover {
            background-color: #388E3C;
            transform: translateY(-5px);
        }

        /* Media Queries */
        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }

            h1 {
                font-size: 2rem;
            }

            .plan-title {
                font-size: 1.4rem;
            }

            .dietary-changes,
            .raw-materials {
                padding: 15px;
            }

            .btn {
                padding: 12px 30px;
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Vegetarian Diet Plan for <?php echo htmlspecialchars($state); ?></h1>

    <?php if ($diet_plan): ?>
        <?php foreach ($diet_plan as $goal => $details): ?>
            <div class="plan">
                <div class="plan-title"><?php echo htmlspecialchars($goal); ?></div>

                <!-- Dietary Changes Section -->
                <div class="dietary-changes">
                    <h2>Dietary Changes</h2>
                    <ul>
                        <?php foreach ($details['Dietary Changes'] as $change): ?>
                            <li><?php echo htmlspecialchars($change); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Raw Materials Section -->
                <div class="raw-materials">
                    <h2>Raw Materials</h2>
                    <ul>
                        <?php foreach ($details['Raw Materials'] as $material): ?>
                            <li><?php echo htmlspecialchars($material); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Diet plan not available for the selected state.</p>
    <?php endif; ?>

    <a href="options.php" class="btn">Back to Options</a>
</div>

</body>
</html>
