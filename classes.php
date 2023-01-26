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
// class Recipe{
//     var $image;
//     var $title;
//     var $description;
//     var $ingredients;
//     var $equipments;
//     function __construct($image,$title,$description,$ingredients,$equipments){
//         $this->image = $image;
//         $this->title = $title;
//         $this->description = $description;
//         $this->ingredients = $ingredients;
//         $this->equipments = $equipments;
//     }
    // Using PHP8 OOP
    class Recipe{
    public string $image;
    public string $title;
    public string $description;
    public string $ingredients;
    public string $equipments;
    public function __construct(string $image,string $title,string $description,string $ingredients,string $equipments){
        $this->image = $image;
        $this->title = $title;
        $this->description = $description;
        $this->ingredients = $ingredients;
        $this->equipments = $equipments;
    }
}

?>
</body>

</html>