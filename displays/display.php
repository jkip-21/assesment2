<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<style>
*{
    background-color: linear-gradient(to right, #dda15e, #bc6c25);
}
.recipe-section1{
    display: flex;
    flex-direction:column;
    justify-content: center;
    align-items: center;
    
}
.recipe-section1 p{
    display: flex;
    flex-direction:column;
    justify-content: center;
    align-items: center; 
}
.images{
    margin-top: 30px;
    padding: 20px;
    height: 200px;
    width: 400px;
    border-radius: 30px;
}

</style>
<body>
<?php
include '../classes.php';
$display = new Recipe('../assets/images/recipe.jpg', 
'Roasted Potato and Chorizo Hash', '
Heat oven to 425°F. On large rimmed baking sheet, 
toss onion, potatoes,<br> poblano, and garlic with oil and
1/4 teaspoon each salt and pepper.<br> Arrange in even layer 
and roast until golden brown and tender, 25 to 30 minutes.<br>
<br>
', '1 medium red onion, cut into 1/4-inch-thick wedges<br>
1 large sweet potato (about 12 oz.), peeled and cut into 3/4-inch chunks<br>
1 yellow potato (about 8 oz.), cut into 3/4-inch chunks<br>
1 poblano pepper, cut into thin 1-inch pieces<br>
4 large cloves garlic, smashed<br>
2 tbsp. olive oil 
Kosher salt and pepper<br>
6 oz. fresh chorizo, casings removed<br>
4 large eggs<br>
2 oz. extra-sharp Cheddar, coarsely grated
Warm tortillas, for serving', 
'Pan<br>Cooking Stick<br>Oil')
?>
<div class="display">
          <div class="recipe-section1">
          <img class ="images" src="<?php echo $display->image; ?>" alt="Image should be here">
            <h1><?php echo $display->title; ?></h1>
            <h1>Description</h1>
            <p><?php echo $display->description; ?></p>
            <h1>Ingredients</h1>
            <p><?php echo $display->ingredients; ?></p>
            <h1>Equipments</h1>
            <p><?php echo $display->equipments; ?></p>
        </div>
</div>
</body>
</html>