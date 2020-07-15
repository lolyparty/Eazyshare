<?php
$conn = new mysqli("localhost","username","password","database");

mysqli_select_db($conn, "database") or die("no db found");

if(isset($_POST['submit'])){
    $email = $_POST['email'];

    $query = "INSERT INTO `Emaillist` (`Email`) VALUE('$email')";
    if(mysqli_query($conn, $query)){
        // echo "<h1>success</h1>"; 
        header("location: success.html");
    }else{
        // echo "<h1>failed</h1>";
        header("location: error.html");
    }
}
?>