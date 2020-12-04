<?php 

// Step 1: Make a form that submits one value to POST super global 

    if(isset($_POST['submit'])){
        $name = $_POST['username'];

        echo 'Hello ' . $name;
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

<form action="practiceSix.php" method="post">
    <input type="text" name="username" placeholder="Enter Name">

    <input type="submit" name='submit'>
</form>

</body>
</html>