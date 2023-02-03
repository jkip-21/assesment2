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
    background-color: linear-gradient(to right, #dda15e, #bc6c25);
}
.recipe-section2{
    display: flex;
    flex-direction:column;
    justify-content: center;
    align-items: center;
    
}
.recipe-section2 p{
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

</style>
</style>
<body>
<?php
include '../classes.php';
$recipe1 = new Recipe('../assets/images/meal1.jpg', 'Ginger Beef Stir Fry', "
The trick to a good stir-fry is working with a very hot, relatively stick-free pan.<br>
I say relatively stick-free because you don't want one of those stick-free pans with <br>
the coating that peels off, but say more like a well-seasoned wok or a cast iron frying pan.<br><br>", '
1 (1 1/4 to 1 1/2 pound) top sirloin steak<br>
1 tablespoon cornstarch<br>
2 tablespoons vegetable oil (preferably peanut)<br>
1 tablespoon dark toasted sesame oil, optional<br>
3 to 4 green onions, cut on a diagonal,<br>
1/2-inch apart, including the greens<br>
2 cloves garlic, thinly sliced<br>
2 to 3 hot chilies, preferably red serranos, seeded, sliced<br>
1-inch knob of ginger, peeled, cut lengthwise into matchstick shapes<br>
1/2 cup loosely packed, chopped cilantro<br><br>', 
'tablespoon<br>onions<br>sesame oil<br>cast iron frying pan')
?>
<div class="display2">
          <div class="recipe-section2">
          <img class="images" src="<?php echo $recipe1->image; ?>" alt="Image should be here">
            <h1><?php echo $recipe1->title;?></h1>
            <h1>Description</h1>
            <p><?php echo $recipe1->description; ?></p>
            <h1>Ingredients</h1>
            <p><?php echo $recipe1->ingredients; ?></p>
            <h1>Equipments</h1>
            <p><?php echo $recipe1->equipments; ?></p>
        </div>
</div>
</body>
</html>