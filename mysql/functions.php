<?php include "db.php"; ?>
<?php 

function createData() {
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    // To clean the string from attacks 
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $hashFormat = "$2y$10$";
    // has to be at least 22 chars 
    $salt = "iusesomecrazystrings22";
    $hash_and_salt = $hashFormat . $salt;
    // encrypted password
    $password = crypt($password, $hash_and_salt);

    $query = "INSERT INTO users(username, password)";
    $query .= "VALUES ('$username', '$password')";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die("Query failed" . mysqli_error());
    } else {
        echo "User created!";
    }
}

function showAllData(){
global $connection;
$query = "SELECT * FROM users";
$result = mysqli_query($connection, $query);
if(!$result) {
    die("Query failed" . mysqli_error());
}
while($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    echo "<option value=$id>$id</option>";
}
}

    function updateData(){
        global $connection;
       $username = $_POST['username'];
       $password = $_POST['password'];
       $id = $_POST['id'];
       $query = "UPDATE users SET ";
       $query .= "username = '$username',";
       $query .= "password = '$password'";
       $query .= "WHERE id = $id";
       $result = mysqli_query($connection, $query);
       if(!$result) {
            die("Update failed" . mysqli_error($connection));
       }
    }

    function deleteData(){
        global $connection;
       $username = $_POST['username'];
       $password = $_POST['password'];
       $id = $_POST['id'];
       $query = "DELETE FROM users ";
       $query .= "WHERE id = $id";
       $result = mysqli_query($connection, $query);
       if(!$result) {
            die("Delete failed" . mysqli_error($connection));
       }
    }
?>