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
$recipe3 = new Recipe(
    '../assets/images/meal3.jpg',
    'Taco soup',
    'This quick and easy taco soup is made entirely in one pot and in less than 30 minutes',
    'Add the ground beef and onion to a large pot and stir until the beef is cooked through.
Drain excess liquid.
Add the kidney beans, black beans, corn, tomatoes, tomato sauce, and taco seasoning to the pot, and stir until combined.
Cook over medium heat for 10 minutes.
Serve with cheddar cheese, sour cream, pico de gallo, avocado, corn chips, lime wedges, and cilantro.',
    'Pot, Lemon Garlic ,Shrimp Pasta'
)
?>
<div class="display4">
          <div class="recipe-sec">
          <img src="<?php echo $recipe3->image; ?>" alt="Image should be here" height="100px" width="100px">
            <p><?php echo $recipe3->title; ?></p>
            <p><?php echo $recipe3->description; ?></p>
            <p><?php echo $recipe3->ingredients; ?></p>
            <p><?php echo $recipe3->equipments; ?></p>
        </div>
</div>
</body>
</html>