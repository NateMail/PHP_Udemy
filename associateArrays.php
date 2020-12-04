<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        $number = array(1, 2, 3, 4);

        print_r($number);
        echo "<br>";

        $names = array("first_name" => 'Nate', "last_name" => "M");

        print_r($names);
        echo "<br>";
        echo $names["first_name"] . ' ' . $names['last_name'];
    ?>
</body>
</html>