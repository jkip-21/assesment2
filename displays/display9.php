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
$recipe8 = new Recipe('../assets/images/meal8.jpg', 'Fluffy Pancakes', 
'The basic pancake is made from a simple batter of eggs, flour, milk and baking <br>
 powder for leavening You can use different types of flour if you want to ...', 
'Whisk together the flour and baking powder in a large bowl.<br
In a separate bowl, add the butter, milk, and egg yolks, stirring to combine.<br>
In a third bowl, use a hand mixer to beat the egg whites until soft peaks form.<br>
Pour the milk mixture into the flour mixture and stir with rubber spatula until just combined.<br>
Add the beaten egg whites and gently fold to combine', 'Pan<br> bowl')
?>
<div class="display9">
          <div class="recipe-section">
          <img class="images"src="<?php echo $recipe8->image; ?>" alt="Image should be here">
            <h1><?php echo $recipe8->title; ?></h1>
            <h2>Description</h2>
            <p><?php echo $recipe8->description; ?></p>
            <h2>Ingredients</h2>
            <p><?php echo $recipe8->ingredients; ?></p>
            <h2>Equipment</h2>
            <p><?php echo $recipe8->equipments; ?></p>
        </div>
</div>
</body>
</html>