<?php
session_start();
if (!isset($_SESSION['state'])) {
    // Redirect to home if no state is set
    header('Location: home.php');
    exit();
}

$state = $_SESSION['state'];

$diet_plans = [
    "Chhattisgarh" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Opt for lean meats like chicken and fish prepared in light curries or grilled.",
                "Use mustard oil sparingly for cooking.",
                "Include more fresh vegetables like tomatoes, cucumbers, and onions in salads.",
                "Avoid fried dishes like mutton samosas or kachoris."
            ],
            "Raw Materials" => [
                "Chicken", "fish", "mustard oil", "tomatoes", "cucumbers", "onions"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use rich gravies and curries with mutton or goat meat cooked in ghee.",
                "Incorporate eggs and dairy products like paneer and curd in meals.",
                "Add rich snacks like pakoras, samosas, and rich curries.",
                "Include sweets like kheer and laddoos made with jaggery and ghee."
            ],
            "Raw Materials" => [
                "Mutton", "eggs", "paneer", "ghee", "jaggery", "kheer ingredients"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein meats like chicken, mutton, and eggs alongside protein-rich lentils like chana dal.",
                "Include soybeans, paneer, and curd for additional protein.",
                "Add nuts and seeds such as peanuts and cashews for healthy fats and protein."
            ],
            "Raw Materials" => [
                "Chicken", "mutton", "eggs", "chana dal", "peanuts", "cashews", "soybeans"
            ]
        ]
    ],
    "Madhya Pradesh" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Opt for lean meats like chicken and fish prepared in light curries or grilled.",
                "Use mustard oil sparingly for cooking.",
                "Include more fresh vegetables like tomatoes, cucumbers, and onions in salads.",
                "Avoid fried dishes like mutton samosas or kachoris."
            ],
            "Raw Materials" => [
                "Chicken", "fish", "mustard oil", "tomatoes", "cucumbers", "onions"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use rich gravies and curries with mutton or goat meat cooked in ghee.",
                "Incorporate eggs and dairy products like paneer and curd in meals.",
                "Add rich snacks like pakoras, samosas, and rich curries.",
                "Include sweets like kheer and laddoos made with jaggery and ghee."
            ],
            "Raw Materials" => [
                "Mutton", "eggs", "paneer", "ghee", "jaggery", "kheer ingredients"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein meats like chicken, mutton, and eggs alongside protein-rich lentils like chana dal.",
                "Include soybeans, paneer, and curd for additional protein.",
                "Add nuts and seeds such as peanuts and cashews for healthy fats and protein."
            ],
            "Raw Materials" => [
                "Chicken", "mutton", "eggs", "chana dal", "peanuts", "cashews", "soybeans"
            ]
        ]
    ],
    "Uttar Pradesh" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Opt for lean meats like chicken and fish prepared in light curries or grilled.",
                "Use mustard oil sparingly for cooking.",
                "Include more fresh vegetables like tomatoes, cucumbers, and onions in salads.",
                "Avoid fried dishes like mutton samosas or kachoris."
            ],
            "Raw Materials" => [
                "Chicken", "fish", "mustard oil", "tomatoes", "cucumbers", "onions"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use rich gravies and curries with mutton or goat meat cooked in ghee.",
                "Incorporate eggs and dairy products like paneer and curd in meals.",
                "Add rich snacks like pakoras, samosas, and rich curries.",
                "Include sweets like kheer and laddoos made with jaggery and ghee."
            ],
            "Raw Materials" => [
                "Mutton", "eggs", "paneer", "ghee", "jaggery", "kheer ingredients"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein meats like chicken, mutton, and eggs alongside protein-rich lentils like chana dal.",
                "Include soybeans, paneer, and curd for additional protein.",
                "Add nuts and seeds such as peanuts and cashews for healthy fats and protein."
            ],
            "Raw Materials" => [
                "Chicken", "mutton", "eggs", "chana dal", "peanuts", "cashews", "soybeans"
            ]
        ]
    ],
    "Uttaranchal" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Opt for lean meats like chicken and fish prepared in light curries or grilled.",
                "Use mustard oil sparingly for cooking.",
                "Include more fresh vegetables like tomatoes, cucumbers, and onions in salads.",
                "Avoid fried dishes like mutton samosas or kachoris."
            ],
            "Raw Materials" => [
                "Chicken", "fish", "mustard oil", "tomatoes", "cucumbers", "onions"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use rich gravies and curries with mutton or goat meat cooked in ghee.",
                "Incorporate eggs and dairy products like paneer and curd in meals.",
                "Add rich snacks like pakoras, samosas, and rich curries.",
                "Include sweets like kheer and laddoos made with jaggery and ghee."
            ],
            "Raw Materials" => [
                "Mutton", "eggs", "paneer", "ghee", "jaggery", "kheer ingredients"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein meats like chicken, mutton, and eggs alongside protein-rich lentils like chana dal.",
                "Include soybeans, paneer, and curd for additional protein.",
                "Add nuts and seeds such as peanuts and cashews for healthy fats and protein."
            ],
            "Raw Materials" => [
                "Chicken", "mutton", "eggs", "chana dal", "peanuts", "cashews", "soybeans"
            ]
        ]
    ],
    "Bihar" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Use lean meats like fish (hilsa, rohu) and chicken, grilled or cooked in light curries.",
                "Include fresh vegetables like spinach, gourds, and tomatoes in daily meals.",
                "Use mustard oil sparingly and avoid heavy fried dishes like fish fry or chicken pakora."
            ],
            "Raw Materials" => [
                "Fish (hilsa, rohu)", "chicken", "spinach", "tomatoes", "mustard oil"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use calorie-dense foods like mutton or goat in rich gravies cooked in ghee and mustard oil.",
                "Incorporate traditional sweets like sandesh and rasgulla.",
                "Add dairy products such as paneer and curd for protein and fat.",
                "Include calorie-dense snacks like pithas and traditional fish curries with rice."
            ],
            "Raw Materials" => [
                "Mutton", "paneer", "ghee", "mustard oil", "sandesh ingredients"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on protein-rich meats like chicken and fish along with eggs for muscle recovery.",
                "Use legumes such as chana dal and soybeans for additional plant-based proteins.",
                "Include whole grains like brown rice and millet for complex carbohydrates.",
                "Add nuts and seeds like peanuts and almonds for protein and healthy fats."
            ],
            "Raw Materials" => [
                "Chicken", "fish", "eggs", "chana dal", "soybeans", "brown rice", "almonds"
            ]
        ]
    ],
    "Jharkhand" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Use lean meats like fish (hilsa, rohu) and chicken, grilled or cooked in light curries.",
                "Include fresh vegetables like spinach, gourds, and tomatoes in daily meals.",
                "Use mustard oil sparingly and avoid heavy fried dishes like fish fry or chicken pakora."
            ],
            "Raw Materials" => [
                "Fish (hilsa, rohu)", "chicken", "spinach", "tomatoes", "mustard oil"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use calorie-dense foods like mutton or goat in rich gravies cooked in ghee and mustard oil.",
                "Incorporate traditional sweets like sandesh and rasgulla.",
                "Add dairy products such as paneer and curd for protein and fat.",
                "Include calorie-dense snacks like pithas and traditional fish curries with rice."
            ],
            "Raw Materials" => [
                "Mutton", "paneer", "ghee", "mustard oil", "sandesh ingredients"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on protein-rich meats like chicken and fish along with eggs for muscle recovery.",
                "Use legumes such as chana dal and soybeans for additional plant-based proteins.",
                "Include whole grains like brown rice and millet for complex carbohydrates.",
                "Add nuts and seeds like peanuts and almonds for protein and healthy fats."
            ],
            "Raw Materials" => [
                "Chicken", "fish", "eggs", "chana dal", "soybeans", "brown rice", "almonds"
            ]
        ]
    ],
    "Orissa" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Use lean meats like fish (hilsa, rohu) and chicken, grilled or cooked in light curries.",
                "Include fresh vegetables like spinach, gourds, and tomatoes in daily meals.",
                "Use mustard oil sparingly and avoid heavy fried dishes like fish fry or chicken pakora."
            ],
            "Raw Materials" => [
                "Fish (hilsa, rohu)", "chicken", "spinach", "tomatoes", "mustard oil"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use calorie-dense foods like mutton or goat in rich gravies cooked in ghee and mustard oil.",
                "Incorporate traditional sweets like sandesh and rasgulla.",
                "Add dairy products such as paneer and curd for protein and fat.",
                "Include calorie-dense snacks like pithas and traditional fish curries with rice."
            ],
            "Raw Materials" => [
                "Mutton", "paneer", "ghee", "mustard oil", "sandesh ingredients"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on protein-rich meats like chicken and fish along with eggs for muscle recovery.",
                "Use legumes such as chana dal and soybeans for additional plant-based proteins.",
                "Include whole grains like brown rice and millet for complex carbohydrates.",
                "Add nuts and seeds like peanuts and almonds for protein and healthy fats."
            ],
            "Raw Materials" => [
                "Chicken", "fish", "eggs", "chana dal", "soybeans", "brown rice", "almonds"
            ]
        ]
    ],
    "Bengal" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Use lean meats like fish (hilsa, rohu) and chicken, grilled or cooked in light curries.",
                "Include fresh vegetables like spinach, gourds, and tomatoes in daily meals.",
                "Use mustard oil sparingly and avoid heavy fried dishes like fish fry or chicken pakora."
            ],
            "Raw Materials" => [
                "Fish (hilsa, rohu)", "chicken", "spinach", "tomatoes", "mustard oil"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use calorie-dense foods like mutton or goat in rich gravies cooked in ghee and mustard oil.",
                "Incorporate traditional sweets like sandesh and rasgulla.",
                "Add dairy products such as paneer and curd for protein and fat.",
                "Include calorie-dense snacks like pithas and traditional fish curries with rice."
            ],
            "Raw Materials" => [
                "Mutton", "paneer", "ghee", "mustard oil", "sandesh ingredients"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on protein-rich meats like chicken and fish along with eggs for muscle recovery.",
                "Use legumes such as chana dal and soybeans for additional plant-based proteins.",
                "Include whole grains like brown rice and millet for complex carbohydrates.",
                "Add nuts and seeds like peanuts and almonds for protein and healthy fats."
            ],
            "Raw Materials" => [
                "Chicken", "fish", "eggs", "chana dal", "soybeans", "brown rice", "almonds"
            ]
        ]
    ],
    "Chandigarh" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Opt for lean meats like chicken and fish prepared with light spices.",
                "Grill or bake meats instead of frying, and avoid heavy gravies.",
                "Use fresh vegetables like spinach, cauliflower, and cabbage in meals.",
                "Use mustard oil or sunflower oil sparingly."
            ],
            "Raw Materials" => [
                "Chicken", "fish", "mustard oil", "spinach", "cauliflower", "cabbage"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use calorie-dense meats like mutton or goat cooked in rich gravies with ghee and butter.",
                "Incorporate eggs and dairy products like paneer and curd for additional protein and fat.",
                "Add traditional North Indian snacks like pakoras, samosas, and rich gravies with rice.",
                "Include rich sweets like laddoos and halwa made with ghee and sugar."
            ],
            "Raw Materials" => [
                "Mutton", "eggs", "paneer", "ghee", "butter", "laddoos", "halwa ingredients"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein meats like chicken, mutton, and fish along with eggs.",
                "Use protein-rich legumes like chana dal and soybeans for added plant-based protein.",
                "Include whole grains like millet and oats for complex carbohydrates.",
                "Add nuts and seeds like peanuts and sesame seeds for additional protein and fats."
            ],
            "Raw Materials" => [
                "Chicken", "mutton", "fish", "eggs", "chana dal", "millet", "oats", "peanuts", "sesame seeds"
            ]
        ]
    ],
    "Delhi" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Opt for lean meats like chicken and fish prepared with light spices.",
                "Grill or bake meats instead of frying, and avoid heavy gravies.",
                "Use fresh vegetables like spinach, cauliflower, and cabbage in meals.",
                "Use mustard oil or sunflower oil sparingly."
            ],
            "Raw Materials" => [
                "Chicken", "fish", "mustard oil", "spinach", "cauliflower", "cabbage"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use calorie-dense meats like mutton or goat cooked in rich gravies with ghee and butter.",
                "Incorporate eggs and dairy products like paneer and curd for additional protein and fat.",
                "Add traditional North Indian snacks like pakoras, samosas, and rich gravies with rice.",
                "Include rich sweets like laddoos and halwa made with ghee and sugar."
            ],
            "Raw Materials" => [
                "Mutton", "eggs", "paneer", "ghee", "butter", "laddoos", "halwa ingredients"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein meats like chicken, mutton, and fish along with eggs.",
                "Use protein-rich legumes like chana dal and soybeans for added plant-based protein.",
                "Include whole grains like millet and oats for complex carbohydrates.",
                "Add nuts and seeds like peanuts and sesame seeds for additional protein and fats."
            ],
            "Raw Materials" => [
                "Chicken", "mutton", "fish", "eggs", "chana dal", "millet", "oats", "peanuts", "sesame seeds"
            ]
        ]
    ],
    "Haryana" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Opt for lean meats like chicken and fish prepared with light spices.",
                "Grill or bake meats instead of frying, and avoid heavy gravies.",
                "Use fresh vegetables like spinach, cauliflower, and cabbage in meals.",
                "Use mustard oil or sunflower oil sparingly."
            ],
            "Raw Materials" => [
                "Chicken", "fish", "mustard oil", "spinach", "cauliflower", "cabbage"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use calorie-dense meats like mutton or goat cooked in rich gravies with ghee and butter.",
                "Incorporate eggs and dairy products like paneer and curd for additional protein and fat.",
                "Add traditional North Indian snacks like pakoras, samosas, and rich gravies with rice.",
                "Include rich sweets like laddoos and halwa made with ghee and sugar."
            ],
            "Raw Materials" => [
                "Mutton", "eggs", "paneer", "ghee", "butter", "laddoos", "halwa ingredients"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein meats like chicken, mutton, and fish along with eggs.",
                "Use protein-rich legumes like chana dal and soybeans for added plant-based protein.",
                "Include whole grains like millet and oats for complex carbohydrates.",
                "Add nuts and seeds like peanuts and sesame seeds for additional protein and fats."
            ],
            "Raw Materials" => [
                "Chicken", "mutton", "fish", "eggs", "chana dal", "millet", "oats", "peanuts", "sesame seeds"
            ]
        ]
    ],
    "Himachal Pradesh" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Opt for lean meats like chicken and fish prepared with light spices.",
                "Grill or bake meats instead of frying, and avoid heavy gravies.",
                "Use fresh vegetables like spinach, cauliflower, and cabbage in meals.",
                "Use mustard oil or sunflower oil sparingly."
            ],
            "Raw Materials" => [
                "Chicken", "fish", "mustard oil", "spinach", "cauliflower", "cabbage"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use calorie-dense meats like mutton or goat cooked in rich gravies with ghee and butter.",
                "Incorporate eggs and dairy products like paneer and curd for additional protein and fat.",
                "Add traditional North Indian snacks like pakoras, samosas, and rich gravies with rice.",
                "Include rich sweets like laddoos and halwa made with ghee and sugar."
            ],
            "Raw Materials" => [
                "Mutton", "eggs", "paneer", "ghee", "butter", "laddoos", "halwa ingredients"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein meats like chicken, mutton, and fish along with eggs.",
                "Use protein-rich legumes like chana dal and soybeans for added plant-based protein.",
                "Include whole grains like millet and oats for complex carbohydrates.",
                "Add nuts and seeds like peanuts and sesame seeds for additional protein and fats."
            ],
            "Raw Materials" => [
                "Chicken", "mutton", "fish", "eggs", "chana dal", "millet", "oats", "peanuts", "sesame seeds"
            ]
        ]
    ],
    "Jammu & Kashmir" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Opt for lean meats like chicken and fish prepared with light spices.",
                "Grill or bake meats instead of frying, and avoid heavy gravies.",
                "Use fresh vegetables like spinach, cauliflower, and cabbage in meals.",
                "Use mustard oil or sunflower oil sparingly."
            ],
            "Raw Materials" => [
                "Chicken", "fish", "mustard oil", "spinach", "cauliflower", "cabbage"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use calorie-dense meats like mutton or goat cooked in rich gravies with ghee and butter.",
                "Incorporate eggs and dairy products like paneer and curd for additional protein and fat.",
                "Add traditional North Indian snacks like pakoras, samosas, and rich gravies with rice.",
                "Include rich sweets like laddoos and halwa made with ghee and sugar."
            ],
            "Raw Materials" => [
                "Mutton", "eggs", "paneer", "ghee", "butter", "laddoos", "halwa ingredients"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein meats like chicken, mutton, and fish along with eggs.",
                "Use protein-rich legumes like chana dal and soybeans for added plant-based protein.",
                "Include whole grains like millet and oats for complex carbohydrates.",
                "Add nuts and seeds like peanuts and sesame seeds for additional protein and fats."
            ],
            "Raw Materials" => [
                "Chicken", "mutton", "fish", "eggs", "chana dal", "millet", "oats", "peanuts", "sesame seeds"
            ]
        ]
    ],
    "Punjab" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Opt for lean meats like chicken and fish prepared with light spices.",
                "Grill or bake meats instead of frying, and avoid heavy gravies.",
                "Use fresh vegetables like spinach, cauliflower, and cabbage in meals.",
                "Use mustard oil or sunflower oil sparingly."
            ],
            "Raw Materials" => [
                "Chicken", "fish", "mustard oil", "spinach", "cauliflower", "cabbage"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use calorie-dense meats like mutton or goat cooked in rich gravies with ghee and butter.",
                "Incorporate eggs and dairy products like paneer and curd for additional protein and fat.",
                "Add traditional North Indian snacks like pakoras, samosas, and rich gravies with rice.",
                "Include rich sweets like laddoos and halwa made with ghee and sugar."
            ],
            "Raw Materials" => [
                "Mutton", "eggs", "paneer", "ghee", "butter", "laddoos", "halwa ingredients"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein meats like chicken, mutton, and fish along with eggs.",
                "Use protein-rich legumes like chana dal and soybeans for added plant-based protein.",
                "Include whole grains like millet and oats for complex carbohydrates.",
                "Add nuts and seeds like peanuts and sesame seeds for additional protein and fats."
            ],
            "Raw Materials" => [
                "Chicken", "mutton", "fish", "eggs", "chana dal", "millet", "oats", "peanuts", "sesame seeds"
            ]
        ]
    ],
    "Ladakh" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Opt for lean meats like chicken and fish prepared with light spices.",
                "Grill or bake meats instead of frying, and avoid heavy gravies.",
                "Use fresh vegetables like spinach, cauliflower, and cabbage in meals.",
                "Use mustard oil or sunflower oil sparingly."
            ],
            "Raw Materials" => [
                "Chicken", "fish", "mustard oil", "spinach", "cauliflower", "cabbage"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use calorie-dense meats like mutton or goat cooked in rich gravies with ghee and butter.",
                "Incorporate eggs and dairy products like paneer and curd for additional protein and fat.",
                "Add traditional North Indian snacks like pakoras, samosas, and rich gravies with rice.",
                "Include rich sweets like laddoos and halwa made with ghee and sugar."
            ],
            "Raw Materials" => [
                "Mutton", "eggs", "paneer", "ghee", "butter", "laddoos", "halwa ingredients"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein meats like chicken, mutton, and fish along with eggs.",
                "Use protein-rich legumes like chana dal and soybeans for added plant-based protein.",
                "Include whole grains like millet and oats for complex carbohydrates.",
                "Add nuts and seeds like peanuts and sesame seeds for additional protein and fats."
            ],
            "Raw Materials" => [
                "Chicken", "mutton", "fish", "eggs", "chana dal", "millet", "oats", "peanuts", "sesame seeds"
            ]
        ]
    ],
    "Rajasthan" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Opt for lean meats like chicken and fish prepared with light spices.",
                "Grill or bake meats instead of frying, and avoid heavy gravies.",
                "Use fresh vegetables like spinach, cauliflower, and cabbage in meals.",
                "Use mustard oil or sunflower oil sparingly."
            ],
            "Raw Materials" => [
                "Chicken", "fish", "mustard oil", "spinach", "cauliflower", "cabbage"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use calorie-dense meats like mutton or goat cooked in rich gravies with ghee and butter.",
                "Incorporate eggs and dairy products like paneer and curd for additional protein and fat.",
                "Add traditional North Indian snacks like pakoras, samosas, and rich gravies with rice.",
                "Include rich sweets like laddoos and halwa made with ghee and sugar."
            ],
            "Raw Materials" => [
                "Mutton", "eggs", "paneer", "ghee", "butter", "laddoos", "halwa ingredients"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein meats like chicken, mutton, and fish along with eggs.",
                "Use protein-rich legumes like chana dal and soybeans for added plant-based protein.",
                "Include whole grains like millet and oats for complex carbohydrates.",
                "Add nuts and seeds like peanuts and sesame seeds for additional protein and fats."
            ],
            "Raw Materials" => [
                "Chicken", "mutton", "fish", "eggs", "chana dal", "millet", "oats", "peanuts", "sesame seeds"
            ]
        ]
    ],
    "Arunachal Pradesh" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Opt for lean proteins such as fish (small indigenous species) and chicken prepared with light spices.",
                "Grill or steam meats instead of preparing them in rich gravies or fried dishes.",
                "Use mustard oil sparingly for cooking.",
                "Include fresh vegetables like fiddlehead ferns, bamboo shoots, and leafy greens in meals."
            ],
            "Raw Materials" => [
                "Fish", "chicken", "mustard oil", "fiddlehead ferns", "bamboo shoots", "leafy greens"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use calorie-dense meats like pork, often prepared in rich gravies or smoked, which is common in Northeast Indian cuisine.",
                "Incorporate traditional snacks like pitha and sticky rice dishes, along with boiled eggs and dairy products.",
                "Cook dishes using ghee or butter, and include rich curries and stews with rice.",
                "Incorporate calorie-dense traditional dishes like thukpa and momos with added butter or ghee."
            ],
            "Raw Materials" => [
                "Pork", "sticky rice", "ghee", "butter", "eggs", "pitha", "momos"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein meats like chicken, fish, and pork.",
                "Use eggs and dairy products like paneer for protein-rich meals.",
                "Add protein-rich soybeans, lentils, and legumes for muscle recovery.",
                "Include more complex carbohydrates like millet, brown rice, and sweet potatoes for energy."
            ],
            "Raw Materials" => [
                "Chicken", "fish", "pork", "eggs", "paneer", "soybeans", "millet", "brown rice"
            ]
        ]
    ],
    "Assam" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Opt for lean proteins such as fish (small indigenous species) and chicken prepared with light spices.",
                "Grill or steam meats instead of preparing them in rich gravies or fried dishes.",
                "Use mustard oil sparingly for cooking.",
                "Include fresh vegetables like fiddlehead ferns, bamboo shoots, and leafy greens in meals."
            ],
            "Raw Materials" => [
                "Fish", "chicken", "mustard oil", "fiddlehead ferns", "bamboo shoots", "leafy greens"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use calorie-dense meats like pork, often prepared in rich gravies or smoked, which is common in Northeast Indian cuisine.",
                "Incorporate traditional snacks like pitha and sticky rice dishes, along with boiled eggs and dairy products.",
                "Cook dishes using ghee or butter, and include rich curries and stews with rice.",
                "Incorporate calorie-dense traditional dishes like thukpa and momos with added butter or ghee."
            ],
            "Raw Materials" => [
                "Pork", "sticky rice", "ghee", "butter", "eggs", "pitha", "momos"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein meats like chicken, fish, and pork.",
                "Use eggs and dairy products like paneer for protein-rich meals.",
                "Add protein-rich soybeans, lentils, and legumes for muscle recovery.",
                "Include more complex carbohydrates like millet, brown rice, and sweet potatoes for energy."
            ],
            "Raw Materials" => [
                "Chicken", "fish", "pork", "eggs", "paneer", "soybeans", "millet", "brown rice"
            ]
        ]
    ],
    "Manipur" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Opt for lean proteins such as fish (small indigenous species) and chicken prepared with light spices.",
                "Grill or steam meats instead of preparing them in rich gravies or fried dishes.",
                "Use mustard oil sparingly for cooking.",
                "Include fresh vegetables like fiddlehead ferns, bamboo shoots, and leafy greens in meals."
            ],
            "Raw Materials" => [
                "Fish", "chicken", "mustard oil", "fiddlehead ferns", "bamboo shoots", "leafy greens"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use calorie-dense meats like pork, often prepared in rich gravies or smoked, which is common in Northeast Indian cuisine.",
                "Incorporate traditional snacks like pitha and sticky rice dishes, along with boiled eggs and dairy products.",
                "Cook dishes using ghee or butter, and include rich curries and stews with rice.",
                "Incorporate calorie-dense traditional dishes like thukpa and momos with added butter or ghee."
            ],
            "Raw Materials" => [
                "Pork", "sticky rice", "ghee", "butter", "eggs", "pitha", "momos"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein meats like chicken, fish, and pork.",
                "Use eggs and dairy products like paneer for protein-rich meals.",
                "Add protein-rich soybeans, lentils, and legumes for muscle recovery.",
                "Include more complex carbohydrates like millet, brown rice, and sweet potatoes for energy."
            ],
            "Raw Materials" => [
                "Chicken", "fish", "pork", "eggs", "paneer", "soybeans", "millet", "brown rice"
            ]
        ]
    ],
    "Mizoram" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Opt for lean proteins such as fish (small indigenous species) and chicken prepared with light spices.",
                "Grill or steam meats instead of preparing them in rich gravies or fried dishes.",
                "Use mustard oil sparingly for cooking.",
                "Include fresh vegetables like fiddlehead ferns, bamboo shoots, and leafy greens in meals."
            ],
            "Raw Materials" => [
                "Fish", "chicken", "mustard oil", "fiddlehead ferns", "bamboo shoots", "leafy greens"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use calorie-dense meats like pork, often prepared in rich gravies or smoked, which is common in Northeast Indian cuisine.",
                "Incorporate traditional snacks like pitha and sticky rice dishes, along with boiled eggs and dairy products.",
                "Cook dishes using ghee or butter, and include rich curries and stews with rice.",
                "Incorporate calorie-dense traditional dishes like thukpa and momos with added butter or ghee."
            ],
            "Raw Materials" => [
                "Pork", "sticky rice", "ghee", "butter", "eggs", "pitha", "momos"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein meats like chicken, fish, and pork.",
                "Use eggs and dairy products like paneer for protein-rich meals.",
                "Add protein-rich soybeans, lentils, and legumes for muscle recovery.",
                "Include more complex carbohydrates like millet, brown rice, and sweet potatoes for energy."
            ],
            "Raw Materials" => [
                "Chicken", "fish", "pork", "eggs", "paneer", "soybeans", "millet", "brown rice"
            ]
        ]
    ],
    "Meghalaya" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Opt for lean proteins such as fish (small indigenous species) and chicken prepared with light spices.",
                "Grill or steam meats instead of preparing them in rich gravies or fried dishes.",
                "Use mustard oil sparingly for cooking.",
                "Include fresh vegetables like fiddlehead ferns, bamboo shoots, and leafy greens in meals."
            ],
            "Raw Materials" => [
                "Fish", "chicken", "mustard oil", "fiddlehead ferns", "bamboo shoots", "leafy greens"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use calorie-dense meats like pork, often prepared in rich gravies or smoked, which is common in Northeast Indian cuisine.",
                "Incorporate traditional snacks like pitha and sticky rice dishes, along with boiled eggs and dairy products.",
                "Cook dishes using ghee or butter, and include rich curries and stews with rice.",
                "Incorporate calorie-dense traditional dishes like thukpa and momos with added butter or ghee."
            ],
            "Raw Materials" => [
                "Pork", "sticky rice", "ghee", "butter", "eggs", "pitha", "momos"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein meats like chicken, fish, and pork.",
                "Use eggs and dairy products like paneer for protein-rich meals.",
                "Add protein-rich soybeans, lentils, and legumes for muscle recovery.",
                "Include more complex carbohydrates like millet, brown rice, and sweet potatoes for energy."
            ],
            "Raw Materials" => [
                "Chicken", "fish", "pork", "eggs", "paneer", "soybeans", "millet", "brown rice"
            ]
        ]
    ],
    "Nagaland" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Opt for lean proteins such as fish (small indigenous species) and chicken prepared with light spices.",
                "Grill or steam meats instead of preparing them in rich gravies or fried dishes.",
                "Use mustard oil sparingly for cooking.",
                "Include fresh vegetables like fiddlehead ferns, bamboo shoots, and leafy greens in meals."
            ],
            "Raw Materials" => [
                "Fish", "chicken", "mustard oil", "fiddlehead ferns", "bamboo shoots", "leafy greens"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use calorie-dense meats like pork, often prepared in rich gravies or smoked, which is common in Northeast Indian cuisine.",
                "Incorporate traditional snacks like pitha and sticky rice dishes, along with boiled eggs and dairy products.",
                "Cook dishes using ghee or butter, and include rich curries and stews with rice.",
                "Incorporate calorie-dense traditional dishes like thukpa and momos with added butter or ghee."
            ],
            "Raw Materials" => [
                "Pork", "sticky rice", "ghee", "butter", "eggs", "pitha", "momos"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein meats like chicken, fish, and pork.",
                "Use eggs and dairy products like paneer for protein-rich meals.",
                "Add protein-rich soybeans, lentils, and legumes for muscle recovery.",
                "Include more complex carbohydrates like millet, brown rice, and sweet potatoes for energy."
            ],
            "Raw Materials" => [
                "Chicken", "fish", "pork", "eggs", "paneer", "soybeans", "millet", "brown rice"
            ]
        ]
    ],
    "Sikkim" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Opt for lean proteins such as fish (small indigenous species) and chicken prepared with light spices.",
                "Grill or steam meats instead of preparing them in rich gravies or fried dishes.",
                "Use mustard oil sparingly for cooking.",
                "Include fresh vegetables like fiddlehead ferns, bamboo shoots, and leafy greens in meals."
            ],
            "Raw Materials" => [
                "Fish", "chicken", "mustard oil", "fiddlehead ferns", "bamboo shoots", "leafy greens"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use calorie-dense meats like pork, often prepared in rich gravies or smoked, which is common in Northeast Indian cuisine.",
                "Incorporate traditional snacks like pitha and sticky rice dishes, along with boiled eggs and dairy products.",
                "Cook dishes using ghee or butter, and include rich curries and stews with rice.",
                "Incorporate calorie-dense traditional dishes like thukpa and momos with added butter or ghee."
            ],
            "Raw Materials" => [
                "Pork", "sticky rice", "ghee", "butter", "eggs", "pitha", "momos"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein meats like chicken, fish, and pork.",
                "Use eggs and dairy products like paneer for protein-rich meals.",
                "Add protein-rich soybeans, lentils, and legumes for muscle recovery.",
                "Include more complex carbohydrates like millet, brown rice, and sweet potatoes for energy."
            ],
            "Raw Materials" => [
                "Chicken", "fish", "pork", "eggs", "paneer", "soybeans", "millet", "brown rice"
            ]
        ]
    ],
    "Tripura" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Opt for lean proteins such as fish (small indigenous species) and chicken prepared with light spices.",
                "Grill or steam meats instead of preparing them in rich gravies or fried dishes.",
                "Use mustard oil sparingly for cooking.",
                "Include fresh vegetables like fiddlehead ferns, bamboo shoots, and leafy greens in meals."
            ],
            "Raw Materials" => [
                "Fish", "chicken", "mustard oil", "fiddlehead ferns", "bamboo shoots", "leafy greens"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use calorie-dense meats like pork, often prepared in rich gravies or smoked, which is common in Northeast Indian cuisine.",
                "Incorporate traditional snacks like pitha and sticky rice dishes, along with boiled eggs and dairy products.",
                "Cook dishes using ghee or butter, and include rich curries and stews with rice.",
                "Incorporate calorie-dense traditional dishes like thukpa and momos with added butter or ghee."
            ],
            "Raw Materials" => [
                "Pork", "sticky rice", "ghee", "butter", "eggs", "pitha", "momos"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein meats like chicken, fish, and pork.",
                "Use eggs and dairy products like paneer for protein-rich meals.",
                "Add protein-rich soybeans, lentils, and legumes for muscle recovery.",
                "Include more complex carbohydrates like millet, brown rice, and sweet potatoes for energy."
            ],
            "Raw Materials" => [
                "Chicken", "fish", "pork", "eggs", "paneer", "soybeans", "millet", "brown rice"
            ]
        ]
    ],
    "Andaman & Nicobar Islands" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Opt for lean proteins like chicken and fish, commonly used in South Indian curries and stews.",
                "Grill or steam meats instead of preparing them in rich coconut-based gravies.",
                "Use coconut oil in small quantities and include more fresh vegetables in light curries.",
                "Include more greens like spinach and amaranth in daily meals."
            ],
            "Raw Materials" => [
                "Chicken", "fish", "coconut oil", "spinach", "amaranth"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use calorie-dense meats like mutton or goat in rich coconut-based gravies.",
                "Add eggs and dairy products like paneer and curd in meals for protein and fat.",
                "Incorporate traditional snacks like vadas, idlis, and rich sweets like laddoos and halwa made with jaggery and ghee.",
                "Include seafood like prawns, crab, and squid in rich curries."
            ],
            "Raw Materials" => [
                "Mutton", "eggs", "paneer", "curd", "prawns", "squid", "ghee", "laddoos"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein meats like chicken, mutton, and fish.",
                "Use eggs and dairy products like paneer and curd for muscle recovery.",
                "Add protein-rich legumes like chana dal and toor dal for additional protein.",
                "Incorporate nuts such as almonds and peanuts for extra protein and healthy fats."
            ],
            "Raw Materials" => [
                "Chicken", "mutton", "fish", "eggs", "paneer", "chana dal", "peanuts"
            ]
        ]
    ],
    "Andhra Pradesh" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Opt for lean proteins like chicken and fish, commonly used in South Indian curries and stews.",
                "Grill or steam meats instead of preparing them in rich coconut-based gravies.",
                "Use coconut oil in small quantities and include more fresh vegetables in light curries.",
                "Include more greens like spinach and amaranth in daily meals."
            ],
            "Raw Materials" => [
                "Chicken", "fish", "coconut oil", "spinach", "amaranth"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use calorie-dense meats like mutton or goat in rich coconut-based gravies.",
                "Add eggs and dairy products like paneer and curd in meals for protein and fat.",
                "Incorporate traditional snacks like vadas, idlis, and rich sweets like laddoos and halwa made with jaggery and ghee.",
                "Include seafood like prawns, crab, and squid in rich curries."
            ],
            "Raw Materials" => [
                "Mutton", "eggs", "paneer", "curd", "prawns", "squid", "ghee", "laddoos"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein meats like chicken, mutton, and fish.",
                "Use eggs and dairy products like paneer and curd for muscle recovery.",
                "Add protein-rich legumes like chana dal and toor dal for additional protein.",
                "Incorporate nuts such as almonds and peanuts for extra protein and healthy fats."
            ],
            "Raw Materials" => [
                "Chicken", "mutton", "fish", "eggs", "paneer", "chana dal", "peanuts"
            ]
        ]
    ],
    "Karnataka" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Opt for lean proteins like chicken and fish, commonly used in South Indian curries and stews.",
                "Grill or steam meats instead of preparing them in rich coconut-based gravies.",
                "Use coconut oil in small quantities and include more fresh vegetables in light curries.",
                "Include more greens like spinach and amaranth in daily meals."
            ],
            "Raw Materials" => [
                "Chicken", "fish", "coconut oil", "spinach", "amaranth"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use calorie-dense meats like mutton or goat in rich coconut-based gravies.",
                "Add eggs and dairy products like paneer and curd in meals for protein and fat.",
                "Incorporate traditional snacks like vadas, idlis, and rich sweets like laddoos and halwa made with jaggery and ghee.",
                "Include seafood like prawns, crab, and squid in rich curries."
            ],
            "Raw Materials" => [
                "Mutton", "eggs", "paneer", "curd", "prawns", "squid", "ghee", "laddoos"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein meats like chicken, mutton, and fish.",
                "Use eggs and dairy products like paneer and curd for muscle recovery.",
                "Add protein-rich legumes like chana dal and toor dal for additional protein.",
                "Incorporate nuts such as almonds and peanuts for extra protein and healthy fats."
            ],
            "Raw Materials" => [
                "Chicken", "mutton", "fish", "eggs", "paneer", "chana dal", "peanuts"
            ]
        ]
    ],
    "Kerala" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Opt for lean proteins like chicken and fish, commonly used in South Indian curries and stews.",
                "Grill or steam meats instead of preparing them in rich coconut-based gravies.",
                "Use coconut oil in small quantities and include more fresh vegetables in light curries.",
                "Include more greens like spinach and amaranth in daily meals."
            ],
            "Raw Materials" => [
                "Chicken", "fish", "coconut oil", "spinach", "amaranth"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use calorie-dense meats like mutton or goat in rich coconut-based gravies.",
                "Add eggs and dairy products like paneer and curd in meals for protein and fat.",
                "Incorporate traditional snacks like vadas, idlis, and rich sweets like laddoos and halwa made with jaggery and ghee.",
                "Include seafood like prawns, crab, and squid in rich curries."
            ],
            "Raw Materials" => [
                "Mutton", "eggs", "paneer", "curd", "prawns", "squid", "ghee", "laddoos"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein meats like chicken, mutton, and fish.",
                "Use eggs and dairy products like paneer and curd for muscle recovery.",
                "Add protein-rich legumes like chana dal and toor dal for additional protein.",
                "Incorporate nuts such as almonds and peanuts for extra protein and healthy fats."
            ],
            "Raw Materials" => [
                "Chicken", "mutton", "fish", "eggs", "paneer", "chana dal", "peanuts"
            ]
        ]
    ],
    "Lakshadweep" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Opt for lean proteins like chicken and fish, commonly used in South Indian curries and stews.",
                "Grill or steam meats instead of preparing them in rich coconut-based gravies.",
                "Use coconut oil in small quantities and include more fresh vegetables in light curries.",
                "Include more greens like spinach and amaranth in daily meals."
            ],
            "Raw Materials" => [
                "Chicken", "fish", "coconut oil", "spinach", "amaranth"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use calorie-dense meats like mutton or goat in rich coconut-based gravies.",
                "Add eggs and dairy products like paneer and curd in meals for protein and fat.",
                "Incorporate traditional snacks like vadas, idlis, and rich sweets like laddoos and halwa made with jaggery and ghee.",
                "Include seafood like prawns, crab, and squid in rich curries."
            ],
            "Raw Materials" => [
                "Mutton", "eggs", "paneer", "curd", "prawns", "squid", "ghee", "laddoos"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein meats like chicken, mutton, and fish.",
                "Use eggs and dairy products like paneer and curd for muscle recovery.",
                "Add protein-rich legumes like chana dal and toor dal for additional protein.",
                "Incorporate nuts such as almonds and peanuts for extra protein and healthy fats."
            ],
            "Raw Materials" => [
                "Chicken", "mutton", "fish", "eggs", "paneer", "chana dal", "peanuts"
            ]
        ]
    ],
    "Pondicherry" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Opt for lean proteins like chicken and fish, commonly used in South Indian curries and stews.",
                "Grill or steam meats instead of preparing them in rich coconut-based gravies.",
                "Use coconut oil in small quantities and include more fresh vegetables in light curries.",
                "Include more greens like spinach and amaranth in daily meals."
            ],
            "Raw Materials" => [
                "Chicken", "fish", "coconut oil", "spinach", "amaranth"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use calorie-dense meats like mutton or goat in rich coconut-based gravies.",
                "Add eggs and dairy products like paneer and curd in meals for protein and fat.",
                "Incorporate traditional snacks like vadas, idlis, and rich sweets like laddoos and halwa made with jaggery and ghee.",
                "Include seafood like prawns, crab, and squid in rich curries."
            ],
            "Raw Materials" => [
                "Mutton", "eggs", "paneer", "curd", "prawns", "squid", "ghee", "laddoos"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein meats like chicken, mutton, and fish.",
                "Use eggs and dairy products like paneer and curd for muscle recovery.",
                "Add protein-rich legumes like chana dal and toor dal for additional protein.",
                "Incorporate nuts such as almonds and peanuts for extra protein and healthy fats."
            ],
            "Raw Materials" => [
                "Chicken", "mutton", "fish", "eggs", "paneer", "chana dal", "peanuts"
            ]
        ]
    ],
    "Telangana" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Opt for lean proteins like chicken and fish, commonly used in South Indian curries and stews.",
                "Grill or steam meats instead of preparing them in rich coconut-based gravies.",
                "Use coconut oil in small quantities and include more fresh vegetables in light curries.",
                "Include more greens like spinach and amaranth in daily meals."
            ],
            "Raw Materials" => [
                "Chicken", "fish", "coconut oil", "spinach", "amaranth"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use calorie-dense meats like mutton or goat in rich coconut-based gravies.",
                "Add eggs and dairy products like paneer and curd in meals for protein and fat.",
                "Incorporate traditional snacks like vadas, idlis, and rich sweets like laddoos and halwa made with jaggery and ghee.",
                "Include seafood like prawns, crab, and squid in rich curries."
            ],
            "Raw Materials" => [
                "Mutton", "eggs", "paneer", "curd", "prawns", "squid", "ghee", "laddoos"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein meats like chicken, mutton, and fish.",
                "Use eggs and dairy products like paneer and curd for muscle recovery.",
                "Add protein-rich legumes like chana dal and toor dal for additional protein.",
                "Incorporate nuts such as almonds and peanuts for extra protein and healthy fats."
            ],
            "Raw Materials" => [
                "Chicken", "mutton", "fish", "eggs", "paneer", "chana dal", "peanuts"
            ]
        ]
    ],
    "Tamil Nadu" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Opt for lean proteins like chicken and fish, commonly used in South Indian curries and stews.",
                "Grill or steam meats instead of preparing them in rich coconut-based gravies.",
                "Use coconut oil in small quantities and include more fresh vegetables in light curries.",
                "Include more greens like spinach and amaranth in daily meals."
            ],
            "Raw Materials" => [
                "Chicken", "fish", "coconut oil", "spinach", "amaranth"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use calorie-dense meats like mutton or goat in rich coconut-based gravies.",
                "Add eggs and dairy products like paneer and curd in meals for protein and fat.",
                "Incorporate traditional snacks like vadas, idlis, and rich sweets like laddoos and halwa made with jaggery and ghee.",
                "Include seafood like prawns, crab, and squid in rich curries."
            ],
            "Raw Materials" => [
                "Mutton", "eggs", "paneer", "curd", "prawns", "squid", "ghee", "laddoos"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein meats like chicken, mutton, and fish.",
                "Use eggs and dairy products like paneer and curd for muscle recovery.",
                "Add protein-rich legumes like chana dal and toor dal for additional protein.",
                "Incorporate nuts such as almonds and peanuts for extra protein and healthy fats."
            ],
            "Raw Materials" => [
                "Chicken", "mutton", "fish", "eggs", "paneer", "chana dal", "peanuts"
            ]
        ]
    ],
    "Dadra & Nagar Haveli" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Opt for lean proteins like chicken and fish, often grilled or steamed.",
                "Use groundnut oil or sesame oil sparingly in cooking.",
                "Incorporate local vegetables such as ridge gourd, fenugreek leaves, and bottle gourd.",
                "Replace rich curries with lighter soups and grilled meats for a balanced diet."
            ],
            "Raw Materials" => [
                "Chicken", "fish", "groundnut oil", "fenugreek leaves", "ridge gourd", "bottle gourd"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use calorie-dense meats like mutton or goat cooked in rich gravies.",
                "Incorporate more dairy products like paneer and curd for additional protein and fats.",
                "Include traditional West Indian snacks like samosas, kachoris, and dhoklas, which are high in carbohydrates.",
                "Use more ghee and butter in cooking."
            ],
            "Raw Materials" => [
                "Mutton", "goat", "paneer", "curd", "ghee", "butter", "dhokla", "samosas"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein meats like chicken and mutton along with eggs for muscle recovery.",
                "Use soy products, paneer, and dairy as additional protein sources.",
                "Add complex carbohydrates like jowar, bajra, and quinoa for sustained energy.",
                "Incorporate nuts and seeds like peanuts and sunflower seeds for healthy fats."
            ],
            "Raw Materials" => [
                "Chicken", "mutton", "eggs", "paneer", "soy products", "jowar", "bajra", "peanuts", "sunflower seeds"
            ]
        ]
    ],
    "Diu & Daman" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Opt for lean proteins like chicken and fish, often grilled or steamed.",
                "Use groundnut oil or sesame oil sparingly in cooking.",
                "Incorporate local vegetables such as ridge gourd, fenugreek leaves, and bottle gourd.",
                "Replace rich curries with lighter soups and grilled meats for a balanced diet."
            ],
            "Raw Materials" => [
                "Chicken", "fish", "groundnut oil", "fenugreek leaves", "ridge gourd", "bottle gourd"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use calorie-dense meats like mutton or goat cooked in rich gravies.",
                "Incorporate more dairy products like paneer and curd for additional protein and fats.",
                "Include traditional West Indian snacks like samosas, kachoris, and dhoklas, which are high in carbohydrates.",
                "Use more ghee and butter in cooking."
            ],
            "Raw Materials" => [
                "Mutton", "goat", "paneer", "curd", "ghee", "butter", "dhokla", "samosas"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein meats like chicken and mutton along with eggs for muscle recovery.",
                "Use soy products, paneer, and dairy as additional protein sources.",
                "Add complex carbohydrates like jowar, bajra, and quinoa for sustained energy.",
                "Incorporate nuts and seeds like peanuts and sunflower seeds for healthy fats."
            ],
            "Raw Materials" => [
                "Chicken", "mutton", "eggs", "paneer", "soy products", "jowar", "bajra", "peanuts", "sunflower seeds"
            ]
        ]
    ],
    "Goa" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Opt for lean proteins like chicken and fish, often grilled or steamed.",
                "Use groundnut oil or sesame oil sparingly in cooking.",
                "Incorporate local vegetables such as ridge gourd, fenugreek leaves, and bottle gourd.",
                "Replace rich curries with lighter soups and grilled meats for a balanced diet."
            ],
            "Raw Materials" => [
                "Chicken", "fish", "groundnut oil", "fenugreek leaves", "ridge gourd", "bottle gourd"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use calorie-dense meats like mutton or goat cooked in rich gravies.",
                "Incorporate more dairy products like paneer and curd for additional protein and fats.",
                "Include traditional West Indian snacks like samosas, kachoris, and dhoklas, which are high in carbohydrates.",
                "Use more ghee and butter in cooking."
            ],
            "Raw Materials" => [
                "Mutton", "goat", "paneer", "curd", "ghee", "butter", "dhokla", "samosas"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein meats like chicken and mutton along with eggs for muscle recovery.",
                "Use soy products, paneer, and dairy as additional protein sources.",
                "Add complex carbohydrates like jowar, bajra, and quinoa for sustained energy.",
                "Incorporate nuts and seeds like peanuts and sunflower seeds for healthy fats."
            ],
            "Raw Materials" => [
                "Chicken", "mutton", "eggs", "paneer", "soy products", "jowar", "bajra", "peanuts", "sunflower seeds"
            ]
        ]
    ],
    "Gujarat" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Opt for lean proteins like chicken and fish, often grilled or steamed.",
                "Use groundnut oil or sesame oil sparingly in cooking.",
                "Incorporate local vegetables such as ridge gourd, fenugreek leaves, and bottle gourd.",
                "Replace rich curries with lighter soups and grilled meats for a balanced diet."
            ],
            "Raw Materials" => [
                "Chicken", "fish", "groundnut oil", "fenugreek leaves", "ridge gourd", "bottle gourd"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use calorie-dense meats like mutton or goat cooked in rich gravies.",
                "Incorporate more dairy products like paneer and curd for additional protein and fats.",
                "Include traditional West Indian snacks like samosas, kachoris, and dhoklas, which are high in carbohydrates.",
                "Use more ghee and butter in cooking."
            ],
            "Raw Materials" => [
                "Mutton", "goat", "paneer", "curd", "ghee", "butter", "dhokla", "samosas"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein meats like chicken and mutton along with eggs for muscle recovery.",
                "Use soy products, paneer, and dairy as additional protein sources.",
                "Add complex carbohydrates like jowar, bajra, and quinoa for sustained energy.",
                "Incorporate nuts and seeds like peanuts and sunflower seeds for healthy fats."
            ],
            "Raw Materials" => [
                "Chicken", "mutton", "eggs", "paneer", "soy products", "jowar", "bajra", "peanuts", "sunflower seeds"
            ]
        ]
    ],
    "Maharashtra" => [
        "Weight Loss" => [
            "Dietary Changes" => [
                "Opt for lean proteins like chicken and fish, often grilled or steamed.",
                "Use groundnut oil or sesame oil sparingly in cooking.",
                "Incorporate local vegetables such as ridge gourd, fenugreek leaves, and bottle gourd.",
                "Replace rich curries with lighter soups and grilled meats for a balanced diet."
            ],
            "Raw Materials" => [
                "Chicken", "fish", "groundnut oil", "fenugreek leaves", "ridge gourd", "bottle gourd"
            ]
        ],
        "Weight Gain" => [
            "Dietary Changes" => [
                "Use calorie-dense meats like mutton or goat cooked in rich gravies.",
                "Incorporate more dairy products like paneer and curd for additional protein and fats.",
                "Include traditional West Indian snacks like samosas, kachoris, and dhoklas, which are high in carbohydrates.",
                "Use more ghee and butter in cooking."
            ],
            "Raw Materials" => [
                "Mutton", "goat", "paneer", "curd", "ghee", "butter", "dhokla", "samosas"
            ]
        ],
        "Muscle Gain" => [
            "Dietary Changes" => [
                "Focus on high-protein meats like chicken and mutton along with eggs for muscle recovery.",
                "Use soy products, paneer, and dairy as additional protein sources.",
                "Add complex carbohydrates like jowar, bajra, and quinoa for sustained energy.",
                "Incorporate nuts and seeds like peanuts and sunflower seeds for healthy fats."
            ],
            "Raw Materials" => [
                "Chicken", "mutton", "eggs", "paneer", "soy products", "jowar", "bajra", "peanuts", "sunflower seeds"
            ]
        ]
    ],
];

$state = $_SESSION['state'];
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
    <h1>Mixed Diet Plan for <?php echo htmlspecialchars($state); ?></h1>

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
