<?php 

    class Car {
        function moveWheels() {
            echo "Wheels move";
        }
    }


    if(method_exists("Car", "moveWheels")) {
        echo 'method exists';
    } else {
        echo 'method does not exist';
    }
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