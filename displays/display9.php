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
$recipe8 = new Recipe('../assets/images/meal8.jpg', 'Fluffy Pancakes', 'The basic pancake is made from a simple batter of eggs, flour, milk and baking powder for leavening You can use different types of flour if you want to ...', 'Whisk together the flour and baking powder in a large bowl.
In a separate bowl, add the butter, milk, and egg yolks, stirring to combine.
In a third bowl, use a hand mixer to beat the egg whites until soft peaks form.
Pour the milk mixture into the flour mixture and stir with rubber spatula until just combined. Add the beaten egg whites and gently fold to combine', 'Pan, bowl')
?>
<div class="display9">
          <div class="recipe-sec">
          <img src="<?php echo $recipe8->image; ?>" alt="Image should be here" height="100px" width="100px">
            <p><?php echo $recipe8->title; ?></p>
            <p><?php echo $recipe8->description; ?></p>
            <p><?php echo $recipe8->ingredients; ?></p>
            <p><?php echo $recipe8->equipments; ?></p>
        </div>
</div>
</body>
</html>