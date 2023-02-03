<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <script>
        function openPage(){
            var x = document.getElementById("search").value;
 
        }
    </script>
</head>
<body>
<div class="navbar">
            <div class="icon">
                <h1 class="logo">CookEAT</h1>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="">RECIPE</a></li>
                    <li><a href="#">PROGRAMS</a></li>
                    <li><a href="#">RECOMMENDED</a></li>
                                    </ul>
            </div>
            <div class="search">
                <input class='srch' type="search" name="" id="search" placeholder="Type to search" onchange="openPage()">
            </div>
        </div>
        <div class="content">
            <h1>Changing your <span style="color: #3a5a40;">Eating</span> habit</h1>
            <div class="content-sec">
            <p>Always take care of your health starting with<br> the food menu that you consume every day.</p>
            <img src="assets/images/11444.jpg" alt="">
            </div>
            <div class="content-button">
            <button>Explore Recipe</button>
            </div>
        </div>
        <?php
                include "classes.php";

        $recip = new Recipe('assets/images/recipe.jpg', 'Roasted Potato', '', '', '');
        $recipe1 = new Recipe('assets/images/meal1.jpg', 'Ginger Beef', '', '', '');
        $recipe2 = new Recipe('assets/images/meal2.jpg', 'Grilled Fish', '', '', '');
        $recipe3 = new Recipe('assets/images/meal3.jpg', 'Taco soup', '', '', '');
        $recipe4 = new Recipe('assets/images/meal4.jpg', 'Fried Rice', '', '', '');
        $recipe5 = new Recipe('assets/images/meal5.jpg', 'South Salad', '', '', '');
        $recipe6 = new Recipe('assets/images/meal6.jpg', 'Cheesy Egg', '', '', '');
        $recipe7 = new Recipe('assets/images/meal7.jpg', 'Omellete cups', '', '', '');
        $recipe8 = new Recipe('assets/images/meal8.jpg', 'Fluffy Pancakes', '', '', '');
        $recipe9 = new Recipe('assets/images/meal9.jpg', 'Lime Waffles', '', '', '');
        ?>
 
        
        <div class="grid1">
          <div class="recipe-sec">
            <a href="./displays/display.php"><img src="<?php echo $recip->image; ?>" alt="Image should be here" height="100px" width="100px"></a>
            <p><?php echo $recip->title; ?></p>
        </div>
        <div class="recipe-sec1">
            <a href="./displays/display2.php"><img src="<?php echo $recipe1->image?>" alt="" height="100px" width="100px"></a>
            <p><?php echo $recipe1->title ?></p>
        </div>
        <div class="recipe-sec2">
            <a href="./displays/display3.php"><img src="<?php echo $recipe2->image?>" alt="" height="100px" width="100px"></a>
            <p><?php echo $recipe2->title ?></p>
        </div>
        <div class="recipe-sec3">
            <a href="./displays/display4.php"><img src="<?php echo $recipe3->image?>" alt="" height="100px" width="100px"></a>
            <p><?php echo $recipe3->title ?></p>
        </div>
        <div class="recipe-sec4">
            <a href="./displays/display5.php"> <img src="<?php echo $recipe4->image?>" alt="" height="100px" width="100px"></a>
            <p><?php echo $recipe4->title ?></p>
        </div>
        </div>
        <div class="grid2">
        <div class="recipe-sec5">
            <a href="./displays/display6.php"><img src="<?php echo $recipe5->image?>" alt="" height="100px" width="100px"></a>
            <p><?php echo $recipe5->title ?></p>
        </div>
        <div class="recipe-sec6">
            <a href="./displays/display7.php"><img src="<?php echo $recipe6->image?>" alt="" height="100px" width="100px"></a>
            <p><?php echo $recipe6->title ?></p>
        </div>
        <div class="recipe-sec6">
            <a href="./displays/display8.php"><img src="<?php echo $recipe7->image?>" alt=""height="100px" width="100px"></a>
            <p><?php echo $recipe7->title ?></p>
        </div>
        <div class="recipe-sec8"> 
            <a href="./displays/display9.php"><img src="<?php echo $recipe8->image?>" alt=""height="100px" width="100px"></a>
            <p><?php echo $recipe8->title ?></p>
        </div>
        <div class="recipe-sec9">
            <a href="./displays/display10.php"><img src="<?php echo $recipe9->image?>" alt=""height="100px" width="100px"></a>
            <p><?php echo $recipe9->title ?></p>
        </div>
        </div>


        <script>

document.getElementById("search").addEventListener("keyup", function(event) {

  if (event.keyCode === 13) {

    var x = document.getElementById("search").value;
    console.log("You are searching for : " + x);
            if(x == "roasted" || x== "Roasted"){
                window.open("./displays/display.php");
            }else{

            }
            if(x=="Ginger Beef" || x=='Ginger'|| x=='ginger' || x=='gin'||x=='beef'){
                window.open("./displays/display2.php") 
            }
            if(x=="grilled" || x=='grill' || x=='Grill'|| x=='Fish'||x=='fish'){
                window.open("./displays/display3.php") 
            }
            if(x=="Taco" || x=='taco' || x=='soup'){
                window.open("./displays/display4.php ") 
            }
            if(x=="fried"||x=='rice'|| x=='Fried Rice'||x=='Fried'){
                window.open("./displays/display5.php") 
            }

            if(x=="south" || x=="South" || x=="salad" || x=="Salad"){
                window.open("./displays/display6.php") 
            }
            if(x=="cheesy " || x=="egg" ||x=="Egg" || x=="Cheesy Egg" ||x=="cheesy egg"){
                window.open("./displays/display7.php") 
            }
            if(x=="omelette"||x=="Omelette"||x=="omelette cups"||x=="cups"){
                window.open("./displays/display8.php") 
            }
            if(x=="fluffy" || x=='pancakes'||x=='Fluffy'||x=='Pancakes'){
                window.open("./displays/display9.php") 
            }
            if(x=="lime"|| x=="Lime"||x=="Waffles" || x=='"waffles'||x=="Lime Waffles"){
                window.open("./displays/display10.php") 
            }
            else {
        alert("Recipe not found. Please try another search.")
    }

  }
});
</script        
</body>
</html> 