<?php 

    $file = "example.txt";

    if($handle = fopen($file, 'r')) {

        $content = fread($handle, filesize($file));
        // each byte is a character
        // You can either use filesize or list a number and that number will be the number of bytes or characters you want to read

        echo $content;

        fclose($handle);
    } else {
        echo 'The files could not be written in';
    }


?>