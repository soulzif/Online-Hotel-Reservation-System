<?php
include_once("db.php");

// Get id and  delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($con, "DELETE FROM admin WHERE id=$id");

// After delete redirect to admindex
header("Location:admindex.php");
?>

