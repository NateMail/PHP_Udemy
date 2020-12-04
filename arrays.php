<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $numberList = array(23, 64, 267, 478, 267, 8766, 345, '4323423', '<h1>New Instructor Please</h1>');

        // $numberList = [23, 23, 3, 4]; Newer way of defining arrays

        echo $numberList[0];
        echo "<br/>";
        print_r($numberList);
    ?>
</body>
</html>