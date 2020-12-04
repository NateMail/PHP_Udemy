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
        Step 1: Make an if statement with else if and else to display a string saying, I love PHP

        Step 2: Make a forloop that displays 10 numbers

        Step 3: Make a switch statement that tests against one condition with 5 cases 


    */

    if(4 > 10) {
        echo 'Hello world';
    } else if(4 === 10) {
        echo 'Goodbye All';
    } else {
        echo 'I love PHP';
    }
        
    echo '<br>';


    for($i = 1; $i <= 10; $i++) {
        echo $i . '<br>';
    }

    $num = 4;
    switch($num) {
        case 4: 
        echo "num is four";
        break;
        case 50: 
        echo "num is fifty";
        break;
        case 33: 
        echo "num is thirtythree";
        break;
        case 14: 
        echo "num is fourteen";
        break;
        default:
        echo "not found";
        break;
    }


    ?>
</body>
</html>