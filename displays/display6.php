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
$recipe5 = new Recipe('../assets/images/meal5.jpg', 'Southwestern Salad', "My copycat version of McDonald's southwest salad has most of the same ingredients - greens, corn, black beans, tomatoes, cheese, tortilla strips, cilantro, and a creamy southwest dressing", 'Add all dressing ingredients to a blender, blend until smooth.
In a large bowl add lettuce, peppers, cilantro, beans, onion, corn, green onion, and tomatoes.
Top with prepared dressing; toss to coat.', 'Pan, sesame oil')
?>
<div class="display6">
          <div class="recipe-sec">
          <img src="<?php echo $recipe5->image; ?>" alt="Image should be here" height="100px" width="100px">
            <p><?php echo $recipe5->title; ?></p>
            <p><?php echo $recipe5->description; ?></p>
            <p><?php echo $recipe5->ingredients; ?></p>
            <p><?php echo $recipe5->equipments; ?></p>
        </div>
</div>
</body>
</html>