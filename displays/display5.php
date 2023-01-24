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
$recipe4 = new Recipe('../assets/images/meal4.jpg', 'Fried Rice', "Here's a low-carb version of fried rice,
 loaded with vegetables to satisfy your Chinese takeout cravings.", 'jsj', 'Cauliflower, Aromatics, Eggs, Tofu')
?>
<div class="display5">
          <div class="recipe-sec">
          <img src="<?php echo $recipe4->image; ?>" alt="Image should be here" height="100px" width="100px">
            <p><?php echo $recipe4->title; ?></p>
            <p><?php echo $recipe4->description; ?></p>
            <p><?php echo $recipe4->ingredients; ?></p>
            <p><?php echo $recipe4->equipments; ?></p>
        </div>
</div>
</body>
</html>