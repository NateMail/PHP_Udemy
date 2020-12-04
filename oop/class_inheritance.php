<?php 

    class Car {

        var $wheels = 4;
        var $hood = 1;
        var $engine = 1;
        var $doors = 4;

        function moveWheels() {
        $this->wheels = 10;
        }

        function createDoors() {
        $this->doors = 6;
        }
    }
    // How you can set a property 
    // $bmw->wheels = 8;

    $bmw = new Car();
    
    class Plane extends Car {
        
        var $wheels = 20;


    }

    $jet = new Plane();
   
    echo $jet->wheels;



    // if(class_exists('Plane')) {
    //     echo 'it does';
    // } else {
    //     echo "it doesn't";
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>