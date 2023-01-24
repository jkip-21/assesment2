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
$recipe2 = new Recipe('../assets/images/meal2.jpg', 'Grilled Fish', 'This super simple, flavorful grilled fish comes from China, Xishuangbanna Dai Autonomous Region, a small sub-tropical area just a few miles from both Laos and Myanmar.', 'Prepare the fish the same way you would for the grill.
Heat an oven to 450°F.
Place the fish on a baking sheet lined with parchment paper, so it won’t stick.
Bake for about 25 minutes. When the fish has cooked through, brush it with a bit more oil and put it under the broiler on high until the skin on the top is bubbly and starting to brown 2-3 minutes; since different broilers can put out different levels of heat (and some racks are closer to the flame than others), you should start checking the fish after the 2-minute mark.', 'Grill/Oven, sesame oil, pan, onions, herbs')
?>
<div class="display3">
          <div class="recipe-sec">
          <img src="<?php echo $recipe2->image; ?>" alt="Image should be here" height="100px" width="100px">
            <p><?php echo $recipe2->title; ?></p>
            <p><?php echo $recipe2->description; ?></p>
            <p><?php echo $recipe2->ingredients; ?></p>
            <p><?php echo $recipe2->equipments; ?></p>
        </div>
</div>
</body>
</html>