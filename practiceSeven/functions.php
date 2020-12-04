<?php include 'db.php' ?>

<?php 
   function createData() {
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Practice 8
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);
    
    $hash = '$2y$10$';
    $salt = 'thisistwentytwocharslo';
    $hash_and_salt = $hash . $salt;

    $password = crypt($password, $hash_and_salt);
    ////////

    $query = "INSERT INTO users(username, password)";
    $query .= "VALUES ('$username', '$password')";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die('Was unable to create user' . mysqli_error());
    }
}

?>