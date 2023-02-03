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
    .recipe-section3{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    .images{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        height: 200px;
        border-radius:20px;
        width: 400px;
    }


</style>
<body>
<?php
include '../classes.php';
$recipe2 = new Recipe('../assets/images/meal2.jpg', 'Grilled Fish', '
This super simple, flavorful grilled fish comes from China, Xishuangbanna Dai<br>
Autonomous Region, a small sub-tropical area just a few miles from both Laos and<br>
Myanmar.', 
'Prepare the fish the same way you would for the grill.<br> 
Heat an oven to 450°F. Place the fish on a baking sheet<br>
lined with parchment paper, so it won’t stick. Bake for <br>
about 25 minutes. When the fish has cooked through, brush<br>
it with a bit more oil and put it under the broiler on high<br>
 until the skin on the top is bubbly and starting to brown 2-3 <br>
 minutes; since different broilers can put out different levels <br>
 of heat (and some racks are closer to the flame than others), you<br>
 should start checking the fish after the 2-minute mark.',
 'Grill/Oven<br> sesame oil<br> pan<br> onions<br> herbs')
?>
<div class="display3">
          <div class="recipe-section3">
          <img class="images" src="<?php echo $recipe2->image; ?>" alt="Image should be here" height="100px" width="100px">
            <h1><?php echo $recipe2->title; ?></h10>
            <h1>Description</h1>
            <p><?php echo $recipe2->description; ?></p>
            <h1>Ingredients</h1>
            <p><?php echo $recipe2->ingredients; ?></p>
            <h1>Equipments</h1>
            <p><?php echo $recipe2->equipments; ?></p>
        </div>
</div>
</body>
</html>