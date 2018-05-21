<html>
    <head>
        <link rel="stylesheet" type="text/css" href= "style.css"/>
        <title>DHS Calorie Tracker</title>
        <link rel = "shortcut icon" type= "image/jpg" href = "dhs.jpg">
    </head>
    <body>
        <div class = "position">
            <div class= "header">
                <div class="pull-right">
                    <ul class="nav nav-pills">
                    <li>
                        <a class= "white" href="index.html">All</a>
                    </li>
                    <li>
                        <a class= "white" href="breakfast.php">Breakfast</a>
                    </li>
                    <li>
                        <a class= "white" href="lunch.php">Lunch</a>
                    </li>
                    <li>
                        <a class= "white" href="snacks.php">Snacks</a>
                    </li>
                    <li>
                        <a class= "white" href="drinks.php">Drinks</a>
                    </li>
                    <li>
                        <a class= "white" href="about.php">About</a>
                    </li>
                    </ul>
                </div>  
                <div class="container" ><h1>DHS Calorie Tracker Results</h1></div>
            </div>
        </div> 
        <br>
        <div class = "container">
        <br>
        <br>
        <br>
        <br>
<?php
// A simple web site in Cloud9 that runs through Apache
// Press the 'Run' button on the top to start the web server,
// then click the URL that is emitted to the Output tab of the console

// THe buttons for the about page and drinks page appear weird



// ** HOW MANY CALORIES A DAY DO I NEED (BASED ON GENDER, AGE, ACTIVITY LEVEL) **

$gender = $_POST["gender"];
$age = $_POST["age"];
$activityLevel = $_POST["activityLevel"];

if ($gender === "Female") {
    switch ($age):
        case "13":
            switch ($activityLevel):
                case "Sedentary":
                    $calories = 1600;
                    echo "You can eat 1,600 calories each day. ";
                    break;
                case "Moderately Active":
                    $calories = 2000;
                    echo "You can eat 2,000 calories each day. ";
                    break;
                case "Active":
                    $calories = 2200;
                    echo "You can eat 2,200 calories each day. ";
                    break;
            endswitch;
            break;    
        case "14":
            switch ($activityLevel):
                case "Sedentary":
                    $calories = 1800;
                    echo "You can eat 1,800 calories each day. ";
                    break;
                case "Moderately Active":
                    $calories = 2000;
                    echo "You can eat 2,000 calories each day. ";
                    break;
                case "Active":
                    $calories = 2400;
                    echo "You can eat 2,400 calories each day. ";
                    break;
            endswitch;
            break;
        case "15":
            switch ($activityLevel) :
                case "Sedentary":
                    $calories = 1800;
                    echo "You can eat 1,800 calories each day. ";
                    break;
                case "Moderately Active":
                    $calories = 2000;
                    echo "You can eat 2,000 calories each day. ";
                    break;
                case "Active":
                    $calories = 2400;
                    echo "You can eat 2,400 calories each day. ";
                    break;
            endswitch;
            break;
        case "16":
            switch ($activityLevel):
                case "Sedentary":
                    $calories = 1800;
                    echo "You can eat 1,800 calories each day. ";
                    break;
                case "Moderately Active":
                    $calories = 2000;
                    echo "You can eat 2,000 calories each day. ";
                    break;
                case "Active":
                    $calories = 2400;
                    echo "You can eat 2,400 calories each day. ";
                    break;
        endswitch;
        break;
        case "17":
            switch ($activityLevel) :
                case "Sedentary":
                    $calories = 1800;
                    echo "You can eat 1,800 calories each day. ";
                    break;
                case "Moderately Active":
                    $calories = 2000;
                    echo "You can eat 2,000 calories each day. ";
                    break;
                case "Active":
                    $calories = 2400;
                    echo "You can eat 2,400 calories each day. ";
                    break;
            endswitch;
            break;
        case "18":
            switch ($activityLevel) :
                case "Sedentary":
                    $calories = 1800;
                    echo "You can eat 1,800 calories each day. ";
                    break;
                case "Moderately Active":
                    $calories = 2000;
                    echo "You can eat 2,000 calories each day. ";
                    break;
                case "Active":
                    $calories = 2400;
                    echo "You can eat 2,400 calories each day. ";
                    break;
            endswitch;
            break;
        case "19":
            switch ($activityLevel) :
                case "Sedentary":
                    $calories = 2000;
                    echo "You can eat 2,000 calories each day. ";
                    break;
                case "Moderately Active":
                    $calories = 2200;
                    echo "You can eat 2,200 calories each day. ";
                    break;
                case "Active":
                    $calories = 2400;
                    echo "You can eat 2,400 calories each day. ";
                    break;
            endswitch;
                break;
        default:
            echo "You can eat 2,000 calories each day. *NOTE: This is based on the average person's needs - It may not be the exact amount YOU need.";
    endswitch;  
} elseif ($gender === "Male") {
    switch ($age):
        case "13":
            switch ($activityLevel):
                case "Sedentary":
                    $calories = 2000;
                    echo "You can eat 2,000 calories each day. ";
                    break;
                case "Moderately Active":
                    $calories = 2200;
                    echo "You can eat 2,200 calories each day. ";
                    break;
                case "Active":
                    $calories = 2600;
                    echo "You can eat 2,600 calories each day. ";
                    break;
            endswitch;
            break;
        case "14":
            switch ($activityLevel) :
                case "Sedentary":
                    $calories = 2000;
                    echo "You can eat 2,000 calories each day. ";
                    break;
                case "Moderately Active":
                    $calories = 2400;
                    echo "You can eat 2,400 calories each day. ";
                    break;
                case "Active":
                    $calories = 2800;
                    echo "You can eat 2,800 calories each day. ";
                    break;
            endswitch;
            break;
        case "15":
            switch ($activityLevel):
                case "Sedentary":
                    $calories = 2200;
                    echo "You can eat 2,200 calories each day. ";
                    break;
                case "Moderately Active":
                    $calories = 2600;
                    echo "You can eat 2,600 calories each day. ";
                    break;
                case "Active":
                    $calories = 3000;
                    echo "You can eat 3,000 calories each day. ";
                    break;
            endswitch;
            break;    
        case "16":
            switch ($activityLevel) :
                case "Sedentary":
                    $calories = 2400;
                    echo "You can eat 2,400 calories each day. ";
                    break;
                case "Moderately Active":
                    $calories = 2800;
                    echo "You can eat 2,800 calories each day. ";
                    break;
                case "Active":
                    $calories = 3200;
                    echo "You can eat 3,200 calories each day. ";
                    break;
            endswitch;
            break;
        case "17":
            switch ($activityLevel) :
                case "Sedentary":
                    $calories = 2400;
                    echo "You can eat 2,400 calories each day. ";
                    break;
                case "Moderately Active":
                    $calories = 2800;
                    echo "You can eat 2,800 calories each day. ";
                    break;
                case "Active":
                    $calories = 3200;
                    echo "You can eat 3,200 calories each day. ";
                    break;
            endswitch;
            break;
        case "18":
            switch ($activityLevel):
                case "Sedentary":
                    $calories = 2400;
                    echo "You can eat 2,400 calories each day. ";
                    break;
                case "Moderately Active":
                    $calories = 2800;
                    echo "You can eat 2,800 calories each day. ";
                    break;
                case "Active":
                    $calories = 3200;
                    echo "You can eat 3,200 calories each day. ";
                    break;
            endswitch;
            break;
        case "19":
            switch ($activityLevel):
                case "Sedentary":
                    $calories = 2600; 
                    echo "You can eat 2,600 calories each day. ";
                    break;
                case "Moderately Active":
                    $calories = 2800; 
                    echo "You can eat 2,800 calories each day. ";
                    break;
                case "Active":
                    $calories = 3000;
                    echo "You can eat 3,000 calories each day. ";
                    break;
            endswitch;
            break;
        default:
            echo "You can eat 2,000 calories each day. ";
            break;
    endswitch;
} else {
    echo "Please enter either Male or Female. ";
}

// ** FOOD CHOICES **

// BREAKFAST
$foodChoice_breakfast1 = $_POST["foodChoice_breakfast1"];
$foodChoice_breakfast2 = $_POST["foodChoice_breakfast2"];

// LUNCH
$foodChoice_lunch1 = $_POST["foodChoice_lunch1"];
$foodChoice_lunch2 = $_POST["foodChoice_lunch2"];

// SNACKS
$foodChoice_snack1 = $_POST["foodChoice_snack1"];
$foodChoice_snack2 = $_POST["foodChoice_snack2"];
$foodChoice_snack3 = $_POST["foodChoice_snack3"];

// DRINKS
$foodChoice_drink1 = $_POST["foodChoice_drink1"];
$foodChoice_drink2 = $_POST["foodChoice_drink2"];

//ACTIVITY
$activity = $POST["activity"];
echo $activity;

//WEIGHT
$weight = $_POST["weight"];

// AVAILABLE FOOD CHOICES
//**BREAKFAST**
$pizza_turkey_sausage = 210;
$breakfast_bar = 283;
$yogurt_parfait_w_fruit = 473; 
$crumbcake_w_berries = 374;
$burrito_wrap = 180;
$sandwich_w_egg_sausage = 329;
$scrambled_eggs = 369;

//**LUNCH**
$yogurt_parfait_w_chz_stick = 556;
$salad_asian_chicken = 572;
$salad_chicken_caesar = 551; 
$hummus_and_pita_bread = 446;
$cheeseburger_on_a_bun = 428;
$hotdog = 432;
$sandwich_spicy_chicken_fillet = 380;
$nachos_w_diced_chicken = 495;
$burrito_chicken = 383;
$burrito_black_bean = 279;
$taco_salad = 584;
$cheese_pizza = 290;
$pizza_pepperoni = 402;
$pizza_buffalo_chicken = 390;
$chicken_wings = 668;
$macaroni_and_cheese = 325;
$salad_cup = 215; 

// **DRINKS**
$fruit_juice = 120;
$milk_non_fat_chocolate = 120; 
$milk_1_percent_lowfat =  102; 
$izze_sparkling_juice = 90;
$ice_sparkling_water = 0;

//**SNACKS**
$assorted_fruits = 74;
$welches_reduced_sugar_mixed_fruit_snacks = 70;
$lays_kettle_cooked_applewood_smoked_bbq = 180;
$jalapeno_cheddar_kettle_cooked_chips = 190;
$doritos_flamas = 140;
$hot_cheetos = 140;
$grandmas_mini_chocolate_cookies = 180;
$doritos_nacho_cheese = 140;
$doritos_cool_ranch = 150;
$doritos_salsa_verde = 140;
$doritos_toasted_corn = 140;
$chocolate_chip_cookies = 511;



if($activity = "run 5 mph(12 minute mile)"){
    $met = 8;
    $converted_weight = ($weight*0.453592);
    $burned_calories = $met*$converted_weight;
}
if($activity = "run 5.2 mph(11.5 minute mile)"){
    $met = 9;
    $converted_weight = ($weight*0.453592);
    $burned_calories = $met*$converted_weight;
}
if($activity = "run 6 mph(10 minute mile)"){
    $met = 10;
    $converted_weight = ($weight*0.453592);
    $burned_calories = $met*$converted_weight;
}
if($activity = "run 6.7 mph(9 minute mile)"){
    $met = 11;
    $converted_weight = ($weight*0.453592);
    $burned_calories = $met*$converted_weight;
}
if($activity = "run 7.5 mph(8 minute mile)"){
    $met = 12.5;
    $converted_weight = ($weight*0.453592);
    $burned_calories = $met*$converted_weight;
}
if($activity = "run 8.6 mph(7 minute mile)"){
    $met = 14;
    $converted_weight = ($weight*0.453592);
    $burned_calories = $met*$converted_weight;
}
if($activity = "run 10 mph(6 minute mile)"){
    $met = 16;
    $converted_weight = ($weight*0.453592);
    $burned_calories = $met*$converted_weight;
}
if($activity = "Slow Bicycling(10 mph)"){
    $met = 6;
    $converted_weight = ($weight*0.453592);
    $burned_calories = $met*$converted_weight;
}
if($activity = "Moderate Bicycling(12 mph)"){
    $met = 8;
    $converted_weight = ($weight*0.453592);
    $burned_calories = $met*$converted_weight;
}
if($activity = "Fast Bicycling(15 mph)"){
    $met = 8;
    $converted_weight = ($weight*0.453592);
    $burned_calories = $met*$converted_weight;
}
if($activity = "Walking 2 mph(slow)"){
    $met = 2.5;
    $converted_weight = ($weight*0.453592);
    $burned_calories = $met*$converted_weight;
}
if($activity = "Walking 3 mph(moderate)"){
    $met = 3.5;
    $converted_weight = ($weight*0.453592);
    $burned_calories = $met*$converted_weight;
}
//DRINKS
if ($foodChoice_drink1 === "Fruit Juice") {
    $eaten_for_drink = $fruit_juice;
    $drink1 = $fruit_juice / $calories;
    $drink1 = 100 * round($drink1, 4);
}

if ($foodChoice_drink2 === "Fruit Juice") {
    $eaten_for_drink2 = $fruit_juice;
    $drink2 = $fruit_juice / $calories;
    $drink2 = 100 * round($drink2, 4);
}

if ($foodChoice_drink1 === "Chocolate Milk") {
    $eaten_for_drink = $milk_non_fat_chocolate;
    $drink1 = $milk_non_fat_chocolate / $calories;
    $drink1 = 100 * round($drink1, 4);
}

if ($foodChoice_drink2 === "Chocolate Milk") {
    $eaten_for_drink2 = $milk_non_fat_chocolate;
    $drink2 = $milk_non_fat_chocolate / $calories;
    $drink2 = 100 * round($drink2, 4);
}

if ($foodChoice_drink1 === "Lowfat Milk") {
    $eaten_for_drink = $milk_1_percent_lowfat;
    $drink1 = $milk_1_percent_lowfat / $calories;
    $drink1 = 100 * round($drink1, 4);
}

if ($foodChoice_drink2 === "Lowfat Milk") {
    $eaten_for_drink2 = $milk_1_percent_lowfat;
    $drink2 = $milk_1_percent_lowfat / $calories;
    $drink2 = 100 * round($drink2, 4);
}

if ($foodChoice_drink1 === "IZZE Sparkling Juice") {
    $eaten_for_drink = $izze_sparkling_juice;
    $drink1 = $izze_sparkling_juice / $calories;
    $drink1 = 100 * round($drink1, 4);
}

if ($foodChoice_drink2 === "IZZE Sparkling Juice") {
    $eaten_for_drink2 = $izze_sparkling_juice;
    $drink2 = $izze_sparkling_juice / $calories;
    $drink2 = 100 * round($drink2, 4);
}

if ($foodChoice_drink1 === "ICE Sparkling Water") {
    $eaten_for_drink = $ice_sparkling_water;
    $drink1 = $ice_sparkling_water / $calories;
    $drink1 = 100 * round($drink1, 4);
}

if ($foodChoice_drink2 === "ICE Sparkling Water") {
    $eaten_for_drink2 = $ice_sparkling_water;
    $drink2 = $ice_sparkling_water / $calories;
    $drink2 = 100 * round($drink2, 4);
}

// SNACKS
if ($foodChoice_snack1 === "Assorted Fruits") {
    $eaten_for_snack = $assorted_fruits;
    $snack1 = $assorted_fruits / $calories;
    $snack1 = 100 * round($snack1, 4);
}

if ($foodChoice_snack2 === "Assorted Fruits") {
    $eaten_for_snack2 = $assorted_fruits;
    $snack2 = $assorted_fruits / $calories;
    $snack2 = 100 * round($snack2, 4);
}

if ($foodChoice_snack3 === "Assorted Fruits") {
    $eaten_for_snack3 = $assorted_fruits;
    $snack3 = $assorted_fruits / $calories;
    $snack3 = 100 * round($snack3, 4);
}

if ($foodChoice_snack1 === "Welches Fruit Snacks") {
    $eaten_for_snack = $welches_reduced_sugar_mixed_fruit_snacks;
    $snack1 = $welches_reduced_sugar_mixed_fruit_snacks / $calories;
    $snack1 = 100 * round($snack1, 4);
}

if ($foodChoice_snack2 === "Welches Fruit Snacks") {
    $eaten_for_snack2 = $welches_reduced_sugar_mixed_fruit_snacks;
    $snack2 = $welches_reduced_sugar_mixed_fruit_snacks / $calories;
    $snack2 = 100 * round($snack2, 4);
}

if ($foodChoice_snack3 === "Welches Fruit Snacks") {
    $eaten_for_snack3 = $welches_reduced_sugar_mixed_fruit_snacks;
    $snack3 = $welches_reduced_sugar_mixed_fruit_snacks / $calories;
    $snack3 = 100 * round($snack3, 4);
}

if ($foodChoice_snack1 === "Applewood Smoked BBQ Chips") {
    $eaten_for_snack = $lays_kettle_cooked_applewood_smoked_bbq;
    $snack1 = $lays_kettle_cooked_applewood_smoked_bbq / $calories;
    $snack1 = 100 * round($snack1, 4);
}

if ($foodChoice_snack2 === "Applewood Smoked BBQ Chips") {
    $eaten_for_snack2 = $lays_kettle_cooked_applewood_smoked_bbq;
    $snack2 = $lays_kettle_cooked_applewood_smoked_bbq / $calories;
    $snack2 = 100 * round($snack2, 4);
}

if ($foodChoice_snack3 === "Applewood Smoked BBQ Chips") {
    $eaten_for_snack3 = $lays_kettle_cooked_applewood_smoked_bbq;
    $snack3 = $lays_kettle_cooked_applewood_smoked_bbq / $calories;
    $snack3 = 100 * round($snack3, 4);
}

if ($foodChoice_snack1 === "Jalapeno Cheddar Chips") {
    $eaten_for_snack = $jalapeno_cheddar_kettle_cooked_chips;
    $snack1 = $jalapeno_cheddar_kettle_cooked_chips / $calories;
    $snack1 = 100 * round($snack1, 4);
}

if ($foodChoice_snack2 === "Jalapeno Cheddar Chips") {
    $eaten_for_snack2 = $jalapeno_cheddar_kettle_cooked_chips;
    $snack2 = $jalapeno_cheddar_kettle_cooked_chips / $calories;
    $snack2 = 100 * round($snack2, 4);
}

if ($foodChoice_snack3 === "Jalapeno Cheddar Chips") {
    $eaten_for_snack3 = $jalapeno_cheddar_kettle_cooked_chips;
    $snack3 = $jalapeno_cheddar_kettle_cooked_chips / $calories;
    $snack3 = 100 * round($snack3, 4);
}

if ($foodChoice_snack1 === "Doritos Flamas Chips") {
    $eaten_for_snack = $doritos_flamas;
    $snack1 = $doritos_flamas / $calories;
    $snack1 = 100 * round($snack1, 4);
}

if ($foodChoice_snack2 === "Doritos Flamas Chips") {
    $eaten_for_snack2 = $doritos_flamas;
    $snack2 = $doritos_flamas / $calories;
    $snack2 = 100 * round($snack2, 4);
}

if ($foodChoice_snack3 === "Doritos Flamas Chips") {
    $eaten_for_snack3 = $doritos_flamas;
    $snack3 = $doritos_flamas / $calories;
    $snack3 = 100 * round($snack3, 4);
}

if ($foodChoice_snack1 === "Hot Cheetos") {
    $eaten_for_snack = $hot_cheetos;
    $snack1 = $hot_cheetos / $calories;
    $snack1 = 100 * round($snack1, 4);
}

if ($foodChoice_snack2 === "Hot Cheetos") {
    $eaten_for_snack2 = $hot_cheetos;
    $snack2 = $hot_cheetos / $calories;
    $snack2 = 100 * round($snack2, 4);
}

if ($foodChoice_snack3 === "Hot Cheetos") {
    $eaten_for_snack3 = $hot_cheetos;
    $snack3 = $hot_cheetos / $calories;
    $snack3 = 100 * round($snack3, 4);
}

if ($foodChoice_snack1 === "Grandmas Mini Cookies") {
    $eaten_for_snack = $grandmas_mini_chocolate_cookies;
    $snack1 = $grandmas_mini_chocolate_cookies / $calories;
    $snack1 = 100 * round($snack1, 4);
}

if ($foodChoice_snack2 === "Grandmas Mini Cookies") {
    $eaten_for_snack2 = $grandmas_mini_chocolate_cookies;
    $snack2 = $grandmas_mini_chocolate_cookies / $calories;
    $snack2 = 100 * round($snack2, 4);
}

if ($foodChoice_snack3 === "Grandmas Mini Cookies") {
    $eaten_for_snack3 = $grandmas_mini_chocolate_cookies;
    $snack3 = $grandmas_mini_chocolate_cookies / $calories;
    $snack3 = 100 * round($snack3, 4);
}

if ($foodChoice_snack1 === "Nacho Cheese Doritos") {
    $eaten_for_snack = $doritos_nacho_cheese;
    $snack1 = $doritos_nacho_cheese / $calories;
    $snack1 = 100 * round($snack1, 4);
}

if ($foodChoice_snack2 === "Nacho Cheese Doritos") {
    $eaten_for_snack2 = $doritos_nacho_cheese;
    $snack2 = $doritos_nacho_cheese / $calories;
    $snack2 = 100 * round($snack2, 4);
}

if ($foodChoice_snack3 === "Nacho Cheese Doritos") {
    $eaten_for_snack3 = $doritos_nacho_cheese;
    $snack3 = $doritos_nacho_cheese / $calories;
    $snack3 = 100 * round($snack3, 4);
}

if ($foodChoice_snack1 === "Cool Ranch Doritos") {
    $eaten_for_snack = $doritos_cool_ranch;
    $snack1 = $doritos_cool_ranch / $calories;
    $snack1 = 100 * round($snack1, 4);
}

if ($foodChoice_snack2 === "Cool Ranch Doritos") {
    $eaten_for_snack2 = $doritos_cool_ranch;
    $snack2 = $doritos_cool_ranch / $calories;
    $snack2 = 100 * round($snack2, 4);
}

if ($foodChoice_snack3 === "Cool Ranch Doritos") {
    $eaten_for_snack3 = $doritos_cool_ranch;
    $snack3 = $doritos_cool_ranch / $calories;
    $snack3 = 100 * round($snack3, 4);
}

if ($foodChoice_snack1 === "Salsa Verde Doritos") {
    $eaten_for_snack = $doritos_salsa_verde;
    $snack1 = $doritos_salsa_verde / $calories;
    $snack1 = 100 * round($snack1, 4);
}

if ($foodChoice_snack2 === "Salsa Verde Doritos") {
    $eaten_for_snack2 = $doritos_salsa_verde;
    $snack2 = $doritos_salsa_verde / $calories;
    $snack2 = 100 * round($snack2, 4);
}

if ($foodChoice_snack3 === "Salsa Verde Doritos") {
    $eaten_for_snack3 = $doritos_salsa_verde;
    $snack3 = $doritos_salsa_verde / $calories;
    $snack3 = 100 * round($snack3, 4);
}

if ($foodChoice_snack1 === "Toasted Corn Doritos") {
    $eaten_for_snack = $doritos_toasted_corn;
    $snack1 = $doritos_toasted_corn / $calories;
    $snack1 = 100 * round($snack1, 4);
}

if ($foodChoice_snack2 === "Toasted Corn Doritos") {
    $eaten_for_snack2 = $doritos_toasted_corn;
    $snack2 = $doritos_toasted_corn / $calories;
    $snack2 = 100 * round($snack2, 4);
}

if ($foodChoice_snack3 === "Toasted Corn Doritos") {
    $eaten_for_snack3 = $doritos_toasted_corn;
    $snack3 = $doritos_toasted_corn / $calories;
    $snack3 = 100 * round($snack3, 4);
}

if ($foodChoice_snack1 === "Chocolate Chip Cookie") {
    $eaten_for_snack = $chocolate_chip_cookies;
    $snack1 = $chocolate_chip_cookies / $calories;
    $snack1 = 100 * round($snack1, 4);
}

if ($foodChoice_snack2 === "Chocolate Chip Cookie") {
    $eaten_for_snack2 = $chocolate_chip_cookies;
    $snack2 = $chocolate_chip_cookies / $calories;
    $snack2 = 100 * round($snack2, 4);
}

if ($foodChoice_snack3 === "Chocolate Chip Cookie") {
    $eaten_for_snack3 = $chocolate_chip_cookies;
    $snack3 = $$chocolate_chip_cookies / $calories;
    $snack3 = 100 * round($snack3, 4);
}


// LUNCH
if ($foodChoice_lunch1 === "Yogurt Parfait With Cheese Stick") {
    $eaten_for_lunch = $yogurt_parfait_w_chz_stick;
    $food = $yogurt_parfait_w_chz_stick / $calories;
    $food = 100 * round($food, 4);
}

if ($foodChoice_lunch2 === "Yogurt Parfait With Cheese Stick") {
    $eaten_for_lunch2 = $yogurt_parfait_w_chz_stick;
    $food2 = $yogurt_parfait_w_chz_stick / $calories;
    $food2 = 100 * round($food2, 4);
}

if ($foodChoice_lunch1 === "Asian Chicken Salad") {
    $eaten_for_lunch = $salad_asian_chicken;
    $food = $salad_asian_chicken / $calories;
    $food = 100 * round($food, 4);
}

if ($foodChoice_lunch2 === "Asian Chicken Salad") {
    $eaten_for_lunch2 = $salad_asian_chicken;
    $food2 = $salad_asian_chicken / $calories;
    $food2 =100 * round($food2, 4);
}

if ($foodChoice_lunch1 === "Chicken Caesar Salad") {
    $eaten_for_lunch = $salad_chicken_caesar;
    $food = $salad_chicken_caesar / $calories;
    $food = 100 *round($food, 4);
}

if ($foodChoice_lunch2 === "Chicken Caesar Salad") {
    $eaten_for_lunch2 = $salad_chicken_caesar;
    $food2 = $salad_chicken_caesar / $calories;
    $food2 = 100 * round($food2, 4);
}

if ($foodChoice_lunch1 === "Hummus And Pita Bread") {
    $eaten_for_lunch = $hummus_and_pita_bread;
    $food = $hummus_and_pita_bread / $calories;
    $food = 100 * round($food, 4);
}

if ($foodChoice_lunch2 === "Hummus And Pita Bread") {
    $eaten_for_lunch2 = $hummus_and_pita_bread;
    $food2 = $hummus_and_pita_bread / $calories;
    $food2 = 100 * round($food2, 4);
}

if ($foodChoice_lunch1 === "Cheeseburger") {
    $eaten_for_lunch = $cheeseburger_on_a_bun;
    $food = $cheeseburger_on_a_bun / $calories;
    $food = 100 *round($food, 4);
}

if ($foodChoice_lunch2 === "Cheeseburger") {
    $eaten_for_lunch2 = $cheeseburger_on_a_bun;
    $food2 = $cheeseburger_on_a_bun / $calories;
    $food2 = 100 *round($food2, 4);
}

if ($foodChoice_lunch1 === "Hotdog") {
    $eaten_for_lunch = $hotdog;
    $food = $hotdog / $calories;
    $food = 100 *round($food, 4);
}

if ($foodChoice_lunch2 === "Hotdog") {
    $eaten_for_lunch2 = $hotdog;
    $food2 = $hotdog / $calories;
    $food2 = 100 *round($food2, 4);
}

if ($foodChoice_lunch1 === "Spicy Chicken Fillet Sandwich") {
    $eaten_for_lunch = $sandwich_spicy_chicken_fillet;
    $food = $sandwich_spicy_chicken_fillet / $calories;
    $food = 100 * round($food, 4);
}

if ($foodChoice_lunch2 === "Spicy Chicken Fillet Sandwich") {
    $eaten_for_lunch2 = $sandwich_spicy_chicken_fillet;
    $food2 = $sandwich_spicy_chicken_fillet / $calories;
    $food2 = 100 * round($food2, 4);
}

if ($foodChoice_lunch1 === "Nachos With Diced Chicken") {
    $eaten_for_lunch = $nachos_w_diced_chicken;
    $food = $nachos_w_diced_chicken / $calories;
    $food = 100 * round($food, 4);
}

if ($foodChoice_lunch2 === "Nachos With Diced Chicken") {
    $eaten_for_lunch2 = $nachos_w_diced_chicken;
    $food2 = $nachos_w_diced_chicken / $calories;
    $food2 = 100 * round($food2, 4);
}

if ($foodChoice_lunch1 === "Chicken Burrito") {
    $eaten_for_lunch = $burrito_chicken;
    $food = $burrito_chicken / $calories;
    $food = 100 * round($food, 4);
}

if ($foodChoice_lunch2 === "Chicken Burrito") {
    $eaten_for_lunch2 = $burrito_chicken;
    $food2 = $burrito_chicken / $calories;
    $food2 = 100 * round($food2, 4);
}

if ($foodChoice_lunch1 === "Blackbean Burrito") {
    $eaten_for_lunch = $burrito_black_bean;
    $food = $burrito_black_bean / $calories;
    $food = 100 * round($food, 4);
}

if ($foodChoice_lunch2 === "Blackbean Burrito") {
    $eaten_for_lunch2 = $burrito_black_bean;
    $food2 = $burrito_black_bean / $calories;
    $food2 = 100 * round($food2, 4);
}

if ($foodChoice_lunch1 === "Taco Salad") {
    $eaten_for_lunch = $taco_salad;
    $food = $taco_salad / $calories;
    $food = 100 * round($food, 4);
}

if ($foodChoice_lunch2 === "Taco Salad") {
    $eaten_for_lunch2 = $taco_salad;
    $food2 = $taco_salad / $calories;
    $food2 = 100 * round($food2, 4);
}

if ($foodChoice_lunch1 === "Cheese Pizza") {
    $eaten_for_lunch = $cheese_pizza;
    $food = $cheese_pizza / $calories;
    $food = 100 * round($food, 4);
}

if ($foodChoice_lunch2 === "Cheese Pizza") {
    $eaten_for_lunch2 = $cheese_pizza;
    $food2 = $cheese_pizza / $calories;
    $food2 = 100 * round($food2, 4);
}

if ($foodChoice_lunch1 === "Pepperoni Pizza") {
    $eaten_for_lunch = $pizza_pepperoni;
    $food = $pizza_pepperoni / $calories;
    $food = 100 * round($food, 4);
}

if ( $foodChoice_lunch2 === "Pepperoni Pizza") {
    $eaten_for_lunch2 = $pizza_pepperoni;
    $food2 = $pizza_pepperoni / $calories;
    $food2 = 100 * round($food2, 4);
}

if ($foodChoice_lunch1 === "Buffalo Chicken Pizza") {
    $eaten_for_lunch = $pizza_buffalo_chicken;
    $food = $pizza_buffalo_chicken / $calories;
    $food = 100 * round($food, 4);
}

if ($foodChoice_lunch2 === "Buffalo Chicken Pizza") {
    $eaten_for_lunch2 = $pizza_buffalo_chicken;
    $food2 = $pizza_buffalo_chicken / $calories;
    $food2 = 100 * round($food2, 4);
}

if ($foodChoice_lunch1 === "Chicken Wings") {
    $eaten_for_lunch = $chicken_wings;
    $food = $chicken_wings / $calories;
    $food = 100 * round($food, 4);
}

if ($foodChoice_lunch2 === "Chicken Wings") {
    $eaten_for_lunch2 = $chicken_wings;
    $food2 = $chicken_wings / $calories;
    $food2 = 100 * round($food2, 4);
}

if ($foodChoice_lunch1 === "Macaroni And Cheese") {
    $eaten_for_lunch = $macaroni_and_cheese;
    $food = $macaroni_and_cheese / $calories;
    $food = 100 * round($food, 4);
}

if ($foodChoice_lunch2 === "Macaroni And Cheese") {
    $eaten_for_lunch2 = $macaroni_and_cheese;
    $food2 = $macaroni_and_cheese / $calories;
    $food2 = 100 * round($food2, 4);
}

if ($foodChoice_lunch1 === "Salad Cup") {
    $eaten_for_lunch = $salad_cup;
    $food = $salad_cup / $calories;
    $food = 100 * round($food, 4);
}

if ($foodChoice_lunch2 === "Salad Cup") {
    $eaten_for_lunch2 = $salad_cup;
    $food2 = $salad_cup / $calories;
    $food2 = 100 * round($food2, 4);
}

//Breakfast
if ($foodChoice_breakfast1 === "Turkey Sausage Pizza") {
    $eaten_for_breakfast = $pizza_turkey_sausage;
    $breakfast = $pizza_turkey_sausage / $calories;
    $breakfast = 100 * round($breakfast, 4);
}

if ($foodChoice_breakfast2 === "Turkey Sausage Pizza ") {
    $eaten_for_breakfast2 = $pizza_turkey_sausage;
    $breakfast2 = $pizza_turkey_sausage / $calories;
    $breakfast2 = 100 * round($breakfast2, 4);
}

if ($foodChoice_breakfast1 === "Breakfast Bar") {
    $eaten_for_breakfast = $breakfast_bar;
    $breakfast = $breakfast_bar/$calories;
    $breakfast = 100 * round($breakfast, 4);
}
if ($foodChoice_breakfast2 === "Breakfast Bar") {
    $eaten_for_breakfast2 = $breakfast_bar;
    $breakfast2 = $breakfast_bar / $calories;
    $breakfast2 = 100* round($breakfast2, 4);
}
if ($foodChoice_breakfast1 === "Yogurt Parfait With Fruit") {
    $eaten_for_breakfast = $yogurt_parfait_w_fruit;
    $breakfast = $yogurt_parfait_w_fruit / $calories;
    $breakfast = 100 * round($breakfast, 4);
}
if ($foodChoice_breakfast2 === "Yogurt Parfait With Fruit") {
    $eaten_for_breakfast2 = $yogurt_parfait_w_fruit;
    $breakfast2 = $yogurt_parfait_w_fruit / $calories;
    $breakfast2 = 100 * round($breakfast2, 4);
}
if ($foodChoice_breakfast1 === "Crumbcake With Berries") {
    $eaten_for_breakfast = $crumbcake_w_berries;
    $breakfast = $crumbcake_w_berries / $calories;
    $breakfast = 100 * round($breakfast, 4);
}
if ($foodChoice_breakfast2 === "Crumbcake With Berries") {
    $eaten_for_breakfast2 = $crumbcake_w_berries;
    $breakfast2 = $crumbcake_w_berries / $calories;
    $breakfast2 = 100 * round($breakfast2, 4);
}
if ($foodChoice_breakfast1 === "Burrito Wrap") {
    $eaten_for_breakfast = $burrito_wrap;
    $breakfast = $burrito_wrap / $calories;
    $breakfast = 100 * round($breakfast, 4);
}
if ($foodChoice_breakfast2 === "Burrito Wrap") {
    $eaten_for_breakfast2 = $burrito_wrap;
    $breakfast2 = $burrito_wrap / $calories;
    $breakfast2 = 100 * round($breakfast2, 4);
}
if ($foodChoice_breakfast1 === "Sandwich With Egg and Sausage") {
    $eaten_for_breakfast = $sandwich_w_egg_sausage;
    $breakfast = $sandwich_w_egg_sausage / $calories;
    $breakfast = 100 * round($breakfast, 4);
}
if ($foodChoice_breakfast2 === "Sandwich With Egg and Sausage") {
    $eaten_for_breakfast2 = $sandwich_w_egg_sausage;
    $breakfast2 = $sandwich_w_egg_sausage / $calories;
    $breakfast2 = 100 * round($breakfast2, 4);
}
if ($foodChoice_breakfast1 === "Scrambled Eggs") {
    $eaten_for_breakfast = $scrambled_eggs;
    $breakfast = $scrambled_eggs / $calories;
    $breakfast = 100 * round($breakfast, 4);
}
if ($foodChoice_breakfast2 === "Scrambled Eggs") {
    $eaten_for_breakfast2 = $scrambled_eggs;
    $breakfast2 = $scrambled_eggs / $calories;
    $breakfast2 = 100 * round($breakfast2, 4);
}

$total = $food + $food2 + $breakfast + $breakfast2 + $snack1 + $snack2 + $snack3 +$drink1 + $drink2;
$total_eaten = $eaten_for_lunch + $eaten_for_lunch2 + $eaten_for_breakfast + $eaten_for_breakfast2 + $eaten_for_snack + $eaten_for_snack2 + $eaten_for_snack3 + $eaten_for_drink + $eaten_for_drink2;
$total_calories = $total_eaten - $burned_calories;
$total_percentage = ($total_calories/$calories)*100;
$total_percentage_rounded = round($total_percentage, 4);
//We learned how to create images using php with this link; http://www.phptutorial.info/learn/create_images/

function progress_bar ($width) {
    $progress = imagecreate(600,80);
    $background = imagecolorallocate($progress, 220, 220, 220);
    $color = imagecolorallocate($progress, 0, 0, 255);
    imagefilledrectangle($progress, 0, 10, ($width*6), 70, $color);
    imagepng($progress, "{$width}.png");
}
progress_bar($total_percentage_rounded);
echo "<br>";
echo "<br>";
echo $calories;
// echo "You have eaten "; echo $total_eaten; echo " calories in total. ";
echo "<br>";
echo "<br>";
//echo " This means that you have eaten "; echo $total; echo " % of your recommended daily calorie intake.";
echo "<br>";
echo "<br>";
//echo "You have burned {$burned_calories} calories.";
echo "<br>";
echo "<br>";
//echo "In total, your net calorie intake for the day is {$total_calories} calories.";
echo "<br>";
echo "<br>";
//echo "This means that you ate {$total_percentage_rounded}% of your reccomended calorie intake.";
echo "<br>";
echo "<br>";
echo "<img src = '{$total_percentage_rounded}.png?'" . date("U").">"; echo "  - %{$total_percentage_rounded}";
?>
</div>
</body>
</html>