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
    .recipe-section7{
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
$recipe6 = new Recipe(
    '../assets/images/meal6.jpg',
    'Cheesy egg',
    'Scrambled eggs is a dish made from eggs (usually chicken eggs) stirred,<br>
 whipped or beaten together while being gently heated, typically with salt,<br>
  butter, oil and sometimes other ingredients.',
    'With a spoon, press down on the center of the bread to form a pocket.<br>
Line the edges of the bread with butter, and crack an egg into the pocket.<br>
Line the edges of the bread with shredded cheese.<br>
Sprinkle on salt and pepper, and bake at 400°F (204°C) for 10-15 min. 10 min <br>
will have a runny yolk whereas 15 min will have a firmer yolk.',
    'Pan<br> Sesame oil'
)
?>
<div class="display7">
          <div class="recipe-section7">
          <img class="images" src="<?php echo $recipe6->image; ?>" alt="Image should be here">
            <h1><?php echo $recipe6->title; ?></h1>
            <h2>Description</h2>
            <p><?php echo $recipe6->description; ?></p>
            <h2>Ingredients</h2>
            <p><?php echo $recipe6->ingredients; ?></p>
            <h2>Equipments</h2>
            <p><?php echo $recipe6->equipments; ?></p>
        </div>
</div>
</body>
</html>