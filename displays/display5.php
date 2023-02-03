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
    .images{
        height: 200px;
        width: 400px;
        margin-top: 30px;
        border-radius: 20px;
    }
    .recipe-section5{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

</style>
<body>
<?php
include '../classes.php';
$recipe4 = new Recipe('../assets/images/meal4.jpg', 'Fried Rice', 
"Here's a low-carb version of fried rice, loaded with vegetables to satisfy your Chinese takeout cravings.", '
 White long grain rice- Day old and cold rice help to keep it from being mushy.<br>
 Small white onion <br>
 Vegetables- Peas and Carrots. <br>
 Eggs<br>
 Sesame Oil <br>
 Soy Sauce<br>
 Green Onions- Garnish with adding in sliced green onions right at the end!<br> ', 
 'Cauliflower<br> Aromatics<br> Eggs<br> Tofu')
?>
<div class="display5">
          <div class="recipe-section5">
          <img class="images" src="<?php echo $recipe4->image; ?>" alt="Image should be here">
            <h1><?php echo $recipe4->title; ?></h1>
            <h2>Description</h2>
            <p><?php echo $recipe4->description; ?></p>
            <h2>Ingredients</h2>
            <p><?php echo $recipe4->ingredients; ?></p>
            <h2>Equipments</h2>
            <p><?php echo $recipe4->equipments; ?></p>
        </div>
</div>
</body>
</html>