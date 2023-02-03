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
        margin:0;
        padding: 0;
    }
    .images{
        height: 200px;
        width: 400px;
        border-radius: 20px;
        margin-top: 30px;
    }
    .recipe-section6{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
</style>
<body>
<?php
include '../classes.php';
$recipe5 = new Recipe('../assets/images/meal5.jpg', 'Southwestern Salad', 
"My copycat version of McDonald's southwest salad has most of the same ingredients <br>
- greens, corn, black beans, tomatoes, cheese, tortilla strips, cilantro, and a creamy<br>
 southwest dressing", 'Add all dressing ingredients to a blender, blend until smooth.<br>
In a large bowl add lettuce, peppers, cilantro, beans, onion, corn, green onion, and<br>
tomatoes. Top with prepared dressing; toss to coat.', 
'Pan<br> sesame oil')
?>
<div class="display6">
          <div class="recipe-section6">
          <img class="images" src="<?php echo $recipe5->image; ?>" alt="Image should be here" height="100px" width="100px">
            <h1><?php echo $recipe5->title; ?></h1>
            <h2>Description</h2>
            <p><?php echo $recipe5->description; ?></p>
            <h2>Ingredients</h2>
            <p><?php echo $recipe5->ingredients; ?></p>
            <h2>Equipments</h2>
            <p><?php echo $recipe5->equipments; ?></p>
        </div>
</div>
</body>
</html>