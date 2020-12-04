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
            echo 'Welcome' . ' ' . $username . "!";
        }

    }
    ?>