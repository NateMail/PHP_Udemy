<?php 

    class Car {

        // avaliable for everything. Same as var
        public $wheels = 4;
        // will only work on this class or classes that exted it 
        protected $hood = 1;
        // will only work on this class
        private $engine = 1;
        var $doors = 4;

        function showProperty() {
            echo $this->hood;
        }

        function showPrivateProperty() {
            echo $this->engine;
        }
    }

    class Semi extends Car {
        function showProperty() {
            echo $this->hood;
        }

    }

    $bmw = new Car();
    echo $bmw->wheels . "<br>";
    $bmw->showProperty();
    echo '<br>';
    $bmw->showPrivateProperty();
    echo "<br>";

    $semi = new Semi();
    $semi->showProperty();
    echo '<br>';

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