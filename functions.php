<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
    
    function say_something() {
        echo 'Something <br>';
    }

    function calculate($x, $y) {
        echo $x + $y;
    }

    say_something();
    say_something();
    calculate(8, 5);

    ?>

</body>
</html>