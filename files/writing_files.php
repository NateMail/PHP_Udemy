<?php 

    $file = "example.txt";

    if($handle = fopen($file, 'w')) {

        fwrite($handle, 'This instructor is not great');

        fclose($handle);
    } else {
        echo 'The files could not be written in';
    }


?>