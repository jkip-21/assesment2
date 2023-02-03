<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    .recipe-section4{
        align-items: center;
        justify-content: center;
        display: flex;
        flex-direction: column;
    }
    .images{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        height: 200px;
        margin-top: 30px;
        width: 400px;
        border-radius: 20px;
    }

</style>
<body>
<?php
include '../classes.php';
$recipe3 = new Recipe(
    '../assets/images/meal3.jpg',
    'Taco soup',
    'This quick and easy taco soup is made entirely in one pot and in<br> less than 30 minutes',
    'Add the ground beef and onion to a large pot and stir until the beef<br>
     is cooked through. Drain excess liquid. Add the kidney beans, black beans,<br>
     corn, tomatoes, tomato sauce, and taco seasoning to the pot, and stir until <br>
     combined. Cook over medium heat for 10 minutes.Serve with cheddar cheese,<br>
     sour cream, pico de gallo, avocado, corn chips, lime wedges, and cilantro.',
    'Pot<br> Lemon Garlic <br>shrimp Pasta'
)
?>
<div class="display4">
          <div class="recipe-section4">
          <img class="images" src="<?php echo $recipe3->image; ?>" alt="Image should be here" height="100px" width="100px">
            <h1><?php echo $recipe3->title; ?></h1>
            <h2>Description</h2>
            <p><?php echo $recipe3->description; ?></p>
            <h2>Ingredients</h2>
            <p><?php echo $recipe3->ingredients; ?></p>
            <h2>Equipments</h2>
            <p><?php echo $recipe3->equipments; ?></p>
        </div>
</div>
</body>
</html>