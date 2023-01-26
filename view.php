<?php

include 'classes.php';
// class View extends Recipe{
//     function MyRecipe(){
//         $meal = new Recipe(
//             '../assets/images/recipe.jpg',
//             'Meal1',
//             '',
//             'jsj',
//             'jsj'
//         );
//         $meal1 = new Recipe(
//             '../assets/images/meal1.jpg',
//             'Meal1',
//             '',
//             'jsj',
//             'jsj'
//         );
//         $meal2 = new Recipe(
//             '../assets/images/meal2.jpg',
//             'Meal1',
//             '',
//             'jsj',
//             'jsj'
//         );
//         $meal3 = new Recipe(
//             '../assets/images/meal3.jpg',
//             'Meal1',
//             '',
//             'jsj',
//             'jsj'
//         );
//         $meal4 = new Recipe(
//             '../assets/images/meal4.jpg',
//             'Meal1',
//             '',
//             'jsj',
//             'jsj'
//         );
//         $meal5 = new Recipe(
//             '../assets/images/meal5.jpg',
//             'Meal1',
//             '',
//             'jsj',
//             'jsj'
//         );
//         $meal6 = new Recipe(
//             '../assets/images/meal6.jpg',
//             'Meal1',
//             '',
//             'jsj',
//             'jsj'
//         );
//         $meal7 = new Recipe(
//             '../assets/images/meal7.jpg',
//             'Meal1',
//             '',
//             'jsj',
//             'jsj'
//         );
//         $meal8 = new Recipe(
//             '../assets/images/meal8.jpg',
//             'Meal1',
//             '',
//             'jsj',
//             'jsj'
//         );
//         $meal9 = new Recipe(
//             '../assets/images/meal9.jpg',
//             'Meal1',
//             '',
//             'jsj',
//             'jsj'
//         );
//         $meal10 = new Recipe(
//             '../assets/images/meal10.jpg',
//             'Meal1',
//             '',
//             'jsj',
//             'jsj'
//         );
//     }

// }
// function MealOne($meal1){
//     echo $meal1->image;
//     echo $meal1->title;
//     echo $meal1->description;
//     echo $meal1->ingredients;
//     echo $meal1->equipments;
// }


///Using PHP8 OOP 
class View extends Recipe{
    public function MyRecipe(){
        $meal = new Recipe(
            '../assets/images/recipe.jpg',
            'Meal1',
            '',
            'jsj',
            'jsj'
        );
        $meal1 = new Recipe(
            '../assets/images/meal1.jpg',
            'Meal1',
            '',
            'jsj',
            'jsj'
        );
        $meal2 = new Recipe(
            '../assets/images/meal2.jpg',
            'Meal1',
            '',
            'jsj',
            'jsj'
        );
        $meal3 = new Recipe(
            '../assets/images/meal3.jpg',
            'Meal1',
            '',
            'jsj',
            'jsj'
        );
        $meal4 = new Recipe(
            '../assets/images/meal4.jpg',
            'Meal1',
            '',
            'jsj',
            'jsj'
        );
        $meal5 = new Recipe(
            '../assets/images/meal5.jpg',
            'Meal1',
            '',
            'jsj',
            'jsj'
        );
        $meal6 = new Recipe(
            '../assets/images/meal6.jpg',
            'Meal1',
            '',
            'jsj',
            'jsj'
        );
        $meal7 = new Recipe(
            '../assets/images/meal7.jpg',
            'Meal1',
            '',
            'jsj',
            'jsj'
        );
        $meal8 = new Recipe(
            '../assets/images/meal8.jpg',
            'Meal1',
            '',
            'jsj',
            'jsj'
        );
        $meal9 = new Recipe(
            '../assets/images/meal9.jpg',
            'Meal1',
            '',
            'jsj',
            'jsj'
        );
        $meal10 = new Recipe(
            '../assets/images/meal10.jpg',
            'Meal1',
            '',
            'jsj',
            'jsj'
        );
    }

}
declare(strict_types=1);
function MealOne(Recipe $meal1): void {
    echo $meal1->image;
    echo $meal1->title;
    echo $meal1->description;
    echo $meal1->ingredients;
    echo $meal1->equipments;
}