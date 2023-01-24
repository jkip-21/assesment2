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
$recipe6 = new Recipe('../assets/images/meal6.jpg', 'Cheesy egg', '', 'With a spoon, press down on the center of the bread to form a pocket.
Line the edges of the bread with butter, and crack an egg into the pocket.
Line the edges of the bread with shredded cheese.
Sprinkle on salt and pepper, and bake at 400°F (204°C) for 10-15 min. 10 min will have a runny yolk whereas 15 min will have a firmer yolk.', 'Pan, Sesame oil')
?>
<div class="display7">
          <div class="recipe-sec">
          <img src="<?php echo $recipe6->image; ?>" alt="Image should be here" height="100px" width="100px">
            <p><?php echo $recipe6->title; ?></p>
            <p><?php echo $recipe6->description; ?></p>
            <p><?php echo $recipe6->ingredients; ?></p>
            <p><?php echo $recipe6->equipments; ?></p>
        </div>
</div>
</body>
</html>