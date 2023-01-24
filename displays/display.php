<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
<?php
include '../classes.php';
$display = new Recipe('../assets/images/recipe.jpg', 
'Roasted Potato and Chorizo Hash', '
', '1 medium red onion, cut into 1/4-inch-thick wedges
1 large sweet potato (about 12 oz.), peeled and cut into 3/4-inch chunks
1 yellow potato (about 8 oz.), cut into 3/4-inch chunks
1 poblano pepper, cut into thin 1-inch pieces
4 large cloves garlic, smashed
2 tbsp. olive oil 
Kosher salt and pepper
6 oz. fresh chorizo, casings removed
4 large eggs
2 oz. extra-sharp Cheddar, coarsely grated
Warm tortillas, for serving', 
'Heat oven to 425°F. On large rimmed baking sheet, toss onion, potatoes, 
poblano, and garlic with oil and 1/4 teaspoon each salt and pepper.
 Arrange in even layer and roast until golden brown and tender, 25 to 30 minutes.')
?>
<div class="display">
          <div class="recipe-sec">
          <img class ="images" src="<?php echo $display->image; ?>" alt="Image should be here">
            <p><?php echo $display->title; ?></p>
            <p><?php echo $display->description; ?></p>
            <p><?php echo $display->ingredients; ?></p>
            <p><?php echo $display->equipments; ?></p>
        </div>
</div>
</body>
</html>