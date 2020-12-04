<?php 

    class Car {

        static $wheels = 4;
        var $hood = 1;

        function moveWheels() {
        Car::$wheels = 10;
        }
    }

    $bmw = new Car();

    // How to refer to static properties and call static functions 
    Car::moveWheels();
    echo Car::$wheels;
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