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
$recipe9 = new Recipe('../assets/images/meal9.jpg', 'Lime Waffles', 'Coconut Lime Waffles make a delicious waffle recipe perfect for perking up your mornings', 'In a bowl, whisk together eggs, whole milk, and Oikos Greek Yogurt Key Lime. Add in sugar, baking powder, kosher salt, and flour. Whisk until all the dry ingredients are incorporated.
Coat waffle iron with nonstick spray. Heat up iron. Pour a heaping ½ cup of batter in the center of the iron. Close and cook for 3–4 minutes, or until golden brown and cooked through. Repeat with the rest of the batter.
In a small bowl, whisk together Oikos Greek Yogurt Key Lime, lime zest, and maple syrup. Top waffles with a dollop and garnish with a lime slice.
Serve and enjoy!', 'Pan, Oil')
?>
<div class="display10">
          <div class="recipe-sec">
          <img src="<?php echo $recipe9->image; ?>" alt="Image should be here" height="100px" width="100px">
            <p><?php echo $recipe9->title; ?></p>
            <p><?php echo $recipe9->description; ?></p>
            <p><?php echo $recipe9->ingredients; ?></p>
            <p><?php echo $recipe9->equipments; ?></p>
        </div>
</div>
</body>
</html>