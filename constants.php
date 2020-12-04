<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $number = 10;
    echo $number . "<br>";
    // older way of defining a constant
    define('NAME', 1000);
    echo NAME . '<br>';
    // New way of defining a constant
    const FIRST = 'Nate';
    echo FIRST;

    ?>
</body>
</html>