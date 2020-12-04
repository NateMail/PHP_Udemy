<?php include 'db.php'?>
<?php 

$connection = mysqli_connect('localhost', 'root', '', 'practice_seven');

    if(!$connection) {
        die("No Connection Found");
    } 

    $query = "SELECT * FROM users ";

    $result = mysqli_query($connection, $query);

    if(!$result) {
        die("Query failed!" . mysqli_error());
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="col-sm-6">
        <?php 
        while($row = mysqli_fetch_assoc($result)) {
            ?>
            <pre>
            <?php 
            print_r($row);
            ?>
            </pre>
            <?php
        }
        ?>
        
    </div>
    </div>
</body>
</html>