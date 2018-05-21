<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href= "style.css"/>
        <title>DHS Calorie Tracker</title>
        <link rel = "shortcut icon" type= "image/jpg" href = "dhs.jpg">
    </head>
    <body>
        <div class = "fixed">
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
                <div class="container" ><h1>DHS Calorie Tracker - Lunch</h1></div>
            </div>
            <img class= "line"  src="color-line.jpg">
        </div> 
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class = "food">
        </div>
        <br>
        <div class = "container">
        <form action="hello-world.php" method = "post">
            <u><h3 class="headings">Calculate your calorie intake based on the lunch you ate here!</h3></u>
            <br>
            <p class="inset">To get started, please enter your gender, age, and how active you are on a scale of sedentary (spend most time seated, low activity level), moderately active, and active, so that you can get customized calorie needs.
            Then, in order to get your net calorie intake based on an activity you performed, please enter your approximate (if not exact) weight and the activity you performed.
            </p>
            <br>
            Gender: 
            <br>
            <select name="gender">
                <option value=" "> </option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <br>
            <br>
            Age: 
            <br>
            <select name="age">
                <option value=" "> </option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
            </select>
            <br>
            <br>
            Activity Level:
            <br>
            <select name="activityLevel">
                <option value=" "> </option>
                <option value="Sedentary">Sedentary</option>
                <option value="Moderately Active">Moderately Active</option>
                <option value="Active">Active</option>
            </select>
            <br>
            <br>
            Weight:
            <br>
            <input type = "text" name = "weight">
            <br>
            <br>
            An activity you did today:
            <br>
            <select name="activity">
                <option value=" "> </option>
                <option value="run 5 mph(12 minute mile)">run 5 mph(12 minute mile)</option>
                <option value="run 5.2 mph(11.5 minute mile)">run 5.2 mph(11.5 minute mile)</option>
                <option value="run 6 mph(10 minute mile)">run 6 mph(10 minute mile)</option>
                <option value="run 6.7 mph(9 minute mile)">run 6.7 mph(9 minute mile)</option>
                <option value="run 7.5 mph(8 minute mile)">run 7.5 mph(8 minute mile)</option>
                <option value="run 8.6 mph(7 minute mile)">run 8.6 mph(7 minute mile)</option>
                <option value="run 10 mph(6 minute mile)">run 10 mph(6 minute mile)</option>
                <option value="Slow Bicycling(10 mph)">Slow Bicycling(10 mph)</option>
                <option value="Moderate Bicycling(12 mph)">Moderate Bicycling(12 mph)</option>
                <option value="Fast Bicycling(15 mph)">Fast Bicycling(15 mph)</option>
                <option value="Fast Bicycling(15 mph)">Fast Bicycling(15 mph)</option>
                <option value="Walking 2 mph(slow)">Walking 2 mph(slow)</option>
                <option value="Walking 3 mph(moderate)">Walking 3 mph(moderate)</option>
            </select>
            <br>
            <br>
            Please select what meal(s) you have chosen to eat below.
            <br>
            <br>
            Lunch Food Choice number 1: 
            <br>
            <select name = "foodChoice_lunch1">
                <option value=" "> </option>
                <option value="Yogurt Parfait With Cheese Stick">Yogurt Parfait With Cheese Stick</option>
                <option value="Asian Chicken Salad">Asian Chicken Salad</option>
                <option value="Chicken Caesar Salad">Chicken Caesar Salad</option>
                <option value="Hummus And Pita Bread">Hummus And Pita Bread</option>
                <option value="Cheeseburger">Cheeseburger</option>
                <option value="Hotdog">Hotdog</option>
                <option value="Spicy Chicken Fillet Sandwich">Spicy Chicken Fillet Sandwich</option>
                <option value="Nachos With Diced Chicken">Nachos With Diced Chicken</option>
                <option value="Chicken Burrito">Chicken Burrito</option>
                <option value="Blackbean Burrito">Blackbean Burrito</option>
                <option value="Taco Salad">Taco Salad</option>
                <option value="Cheese Pizza">Cheese Pizza</option>
                <option value="Pepperoni Pizza">Pepperoni Pizza</option>
                <option value="Buffalo Chicken Pizza">Buffalo Chicken Pizza</option>
                <option value="Chicken Wings">Chicken Wings</option>
                <option value="Macaroni And Cheese">Macaroni And Cheese</option>
                <option value="Salad Cup">Salad Cup</option>
            </select>
            <br>
            <br>
            Lunch Food Choice number 2: 
            <br>
            <select name = "foodChoice_lunch2">
                <option value=" "> </option>
                <option value="Yogurt Parfait With Cheese Stick">Yogurt Parfait With Cheese Stick</option>
                <option value="Asian Chicken Salad">Asian Chicken Salad</option>
                <option value="Chicken Caesar Salad">Chicken Caesar Salad</option>
                <option value="Hummus And Pita Bread">Hummus And Pita Bread</option>
                <option value="Cheeseburger">Cheeseburger</option>
                <option value="Hotdog">Hotdog</option>
                <option value="Spicy Chicken Fillet Sandwich">Spicy Chicken Fillet Sandwich</option>
                <option value="Nachos With Diced Chicken">Nachos With Diced Chicken</option>
                <option value="Chicken Burrito">Chicken Burrito</option>
                <option value="Blackbean Burrito">Blackbean Burrito</option>
                <option value="Taco Salad">Taco Salad</option>
                <option value="Cheese Pizza">Cheese Pizza</option>
                <option value="Pepperoni Pizza">Pepperoni Pizza</option>
                <option value="Buffalo Chicken Pizza">Buffalo Chicken Pizza</option>
                <option value="Chicken Wings">Chicken Wings</option>
                <option value="Macaroni And Cheese">Macaroni And Cheese</option>
                <option value="Salad Cup">Salad Cup</option>
            </select>
            <br>
            <br>
            <input type = "submit">
            <br>
            <br>
        </form>
        </div>
        <div class = "food">
        </div>
    </body>
</html>

<html>
<body>
