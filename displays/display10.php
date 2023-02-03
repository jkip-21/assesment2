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
$recipe9 = new Recipe('../assets/images/meal9.jpg', 'Lime Waffles',
'Coconut Lime Waffles make a delicious waffle recipe perfect for perking up your mornings', 
'In a bowl, whisk together eggs, whole milk, and Oikos Greek Yogurt Key Lime. <br>
Add in sugar, baking powder, kosher salt, and flour. <br>
Whisk until all the dry ingredients are incorporated.<br>
Coat waffle iron with nonstick spray. Heat up iron. <br>
Pour a heaping ½ cup of batter in the center of the iron.<br>
Close and cook for 3–4 minutes, or until golden brown and cooked through.<br>
Repeat with the rest of the batter.<br>
In a small bowl, whisk together Oikos Greek Yogurt Key Lime, lime zest, and maple syrup.<br>
Top waffles with a dollop and garnish with a lime slice.<br>
Serve and enjoy!<br>', 'Pan<br> Oil')
?>
<div class="display10">
          <div class="recipe-section">
          <img class="images" src="<?php echo $recipe9->image; ?>" alt="Image should be here">
            <h1><?php echo $recipe9->title; ?></h1>
            <h2>Description</h2>
            <p><?php echo $recipe9->description; ?></p>
            <h2>Ingredients</h2>
            <p><?php echo $recipe9->ingredients; ?></p>
            <h2>Equpments</h2>
            <p><?php echo $recipe9->equipments; ?></p>
        </div>
</div>
</body>
</html>