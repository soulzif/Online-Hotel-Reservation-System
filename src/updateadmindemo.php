<?php
include'userfile.php';


$con = mysqli_connect("localhost", "root", "", "myhotel") or die(mysql_error());
$id = $row['id'];
if (isset($_POST['up'])) {
    $usname = $_POST['username'];
    $passwr = $_POST['password'];

    $upsql = "UPDATE `admin` SET `username`='$usname',`password`='$passwr' WHERE id = '$id'";
    if (mysqli_query($con, $upsql)) {
        echo ' <script language="javascript" type="text/javascript"> alert("User name and password update") </script>';
    }
}



header("Location:userprofile.php");
?>