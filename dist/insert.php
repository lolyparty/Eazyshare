<!-- 000webhost  -->
<?php
// $conn = new mysqli("localhost","id14343916_eazy","4Zz#n)Fb2~Y%(F+t","id14343916_eazysharedb");

// mysqli_select_db($conn, "id14343916_eazysharedb") or die("no db found");

// if(isset($_POST['submit'])){
//     $email = $_POST['email'];

//     $query = "INSERT INTO `Emaillist` (`Email`) VALUE('$email')";
//     if(mysqli_query($conn, $query)){
//         // echo "<h1>success</h1>"; 
//         header("location: success.html");
//     }else{
//         // echo "<h1>failed</h1>";
//         header("location: error.html");
//     }
// }
?>

<!-- 

//herokuapp -->
<?php
$conn = new mysqli("85.10.205.173:3306","eazyshare","59381@Remotemysql","eazymaillist");

mysqli_select_db($conn, "eazymaillist") or die("no db found");

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

