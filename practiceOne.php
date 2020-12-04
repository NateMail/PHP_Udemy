<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php 
        /* 
            1. Make 2 variables called number1 and number 2. Set 1 to value 10 and the other to 20

            2. Add the two variables and display the sum with echo 

            3. Make 2 arrays with the same values, one regular and the other associative
        */

        $number1 = 10;
        $number2 = 20;
        
        echo $number1 + $number2 . "<br>";

        $arr1 = array(1, 2, 3);
        $arr2 = array('one' => 1, 'two' => 2, 'three' => 3 );

        print_r($arr1);
        echo '<br>';
        print_r($arr2);
    ?>
</body>
</html>