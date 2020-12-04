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
    $truck = new Car();

    echo $bmw->wheels . "<br>";
    echo $truck->wheels = 10 . "<br>";
    $truck->createDoors();
    echo $truck->doors;

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