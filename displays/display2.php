<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include '../classes.php';
$recipe1 = new Recipe('../assets/images/meal1.jpg', 'Ginger Beef Stir Fry', "
The trick to a good stir-fry is working with a very hot, relatively stick-free pan.
I say relatively stick-free because you don't want one of those stick-free pans with the coating that peels off,
but say more like a well-seasoned wok or a cast iron frying pan.", '
1 (1 1/4 to 1 1/2 pound) top sirloin steak
1 tablespoon cornstarch
2 tablespoons vegetable oil (preferably peanut)
1 tablespoon dark toasted sesame oil, optional
3 to 4 green onions, cut on a diagonal, 1/2-inch apart, including the greens
2 cloves garlic, thinly sliced
2 to 3 hot chilies, preferably red serranos, seeded, sliced
1-inch knob of ginger, peeled, cut lengthwise into matchstick shapes
1/2 cup loosely packed, chopped cilantro','tablespoon,onions,sesame oil,cast iron frying pan')
?>
<div class="display2">
          <div class="recipe-sec">
          <img src="<?php echo $recipe1->image; ?>" alt="Image should be here" height="100px" width="100px">
            <p><?php echo $recipe1->title;      ?></p>
            <p><?php echo $recipe1->description; ?></p>
            <p><?php echo $recipe1->ingredients; ?></p>
            <p><?php echo $recipe1->equipments; ?></p>
        </div>
</div>
</body>
</html>