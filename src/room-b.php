<?php
include('db.php');

//if user press add room button...
if (isset($_POST['add'])) {
    $room = $_POST['troom'];
    $roomamount = $_POST['costroom'];
    $Bed = $_POST['bed'];
    $bedamount = $_POST['costbed'];
    $place = 'Free';

    $check = "SELECT * FROM room WHERE type = '$room' AND bedding = '$Bed'";  
    $rs = mysqli_query($con, $check);
    $data = mysqli_fetch_array($rs, MYSQLI_NUM);
    
    if ($data[0] > 1) {
        echo "<script> alert('Room Already in Exists')</script>";

    } else {
        $sql = "INSERT INTO `room`( `type`, `bedding`,`roomamnt`,`bedamnt`,`place`) VALUES ('$room','$Bed','$roomamount','$bedamount','$place')";
        if (mysqli_query($con, $sql)) {
            echo "<script> alert('New Room Added.'); window.history.go(-1);</script>";
        } else {
            echo "<script> alert('Something Went Wrong..!'); window.history.go(-1);</script>";
        }
    }
}
?>
