<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include '../classes.php';
$recipe7 = new Recipe('../assets/images/meal7.jpg', 'Omelette Cups', 'Omelet cups are an easy grab and go breakfast and can even sub in as a snack or post workout refuel. Each cup contains about 7 grams of protein and minimal', 'In a bowl, whisk together the eggs, milk, salt, and pepper.
Push 3 tater tots in each cup of a non-stick muffin tin.
Bake at 425°F (220°C) for 10 minutes. Remove from oven.
Place your favorite omelette fillings in each muffin tin on top of the tater tots.
Pour egg mixture into each muffin tin.
Bake at 350°F (177°C) for 20 minutes, or until fully cooked!', 'Oven, bowl, oil')
?>
<div class="display8">
          <div class="recipe-sec">
          <img src="<?php echo $recipe7->image; ?>" alt="Image should be here" height="100px" width="100px">
            <p><?php echo $recipe7->title; ?></p>
            <p><?php echo $recipe7->description; ?></p>
            <p><?php echo $recipe7->ingredients; ?></p>
            <p><?php echo $recipe7->equipments; ?></p>
        </div>
</div>
</body>
</html>