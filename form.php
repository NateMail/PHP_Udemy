<?php 
    if(isset($_POST['submit'])) {

        $min = 5;
        $max = 10;
        $names = array("Nathan", "Danny", "Tommy", "Patrick");

        $username = $_POST['username'];
        $pass = $_POST['password'];
       
        if(strlen($username) < $min) {
            echo 'Username needs to be longer than' . ' ' . $min . ' ' . 'characters!';
        }

        if(strlen($username) > $max) {
            echo 'Username cannot be longer than ' . $max . ' ' . 'characters!';
        }

        if(!in_array($username, $names)){
            echo 'Please sign up!';
        } else {
            echo 'Welcome' . ' ' . $username;
        }

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

    <form action="form.php" method="post">
    <input type="text" name="username" placeholder="Enter Username">
    <input type="password" name='password' placeholder="Enter Password">
    <br>
    <input type="submit" name="submit">
    </form>

</body>
</html>