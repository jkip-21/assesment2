<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    .recipe-section{
        justify-content: center;
        align-items: center;
        display: flex;
        flex-direction: column;
    }
    .images{
        height: 200px;
        width: 400px;
        border-radius: 20px;
        margin-top: 30px;
    }
</style>
<body>
<?php
include '../classes.php';
$recipe7 = new Recipe('../assets/images/meal7.jpg', 'Omelette Cups', 
'Omelet cups are an easy grab and go breakfast and can even sub in as a snack or <br>
 post workout refuel. Each cup contains about 7 grams of protein and minimal', 
 'In a bowl, whisk together the eggs, milk, salt, and pepper.<br>
Push 3 tater tots in each cup of a non-stick muffin tin.<br>
Bake at 425°F (220°C) for 10 minutes. Remove from oven.<br>
Place your favorite omelette fillings in each muffin tin on top of the tater tots.<br>
Pour egg mixture into each muffin tin.<br>
Bake at 350°F (177°C) for 20 minutes, or until fully cooked!', 'Oven<br> bowl<br> oil')
?>
<div class="display8">
          <div class="recipe-section">
          <img class="images" src="<?php echo $recipe7->image; ?>" alt="Image should be here" height="100px" width="100px">
            <h1><?php echo $recipe7->title; ?></h1>
            <h2>Description</h2>
            <p><?php echo $recipe7->description; ?></p>
            <h2>Ingredients</h2>
            <p><?php echo $recipe7->ingredients; ?></p>
            <h2>Equipments</h2>
            <p><?php echo $recipe7->equipments; ?></p>
        </div>
</div>
</body>
</html>