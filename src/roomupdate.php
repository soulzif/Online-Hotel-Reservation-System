<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admstyle.css?v=<?php echo time(); ?>">

    <!-- font icon kit  -->
    <script src="https://kit.fontawesome.com/2f06fa1967.js" crossorigin="anonymous"></script>
    <title>ROOM UPDATE</title>
</head>
<?php
include('db.php');
$rsql = "select id from room";
$rre = mysqli_query($con, $rsql);

?>




<body>
    <div class="headercontent flex-design">
    <p><i class="fa-solid fa-user"></i>Admin</P>
    <ul class="nav-linkss flex-design">
        <li><a href="adminHome.php"><i class="fa-solid fa-house"></i> Home</a> </li>
           <li> <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a> </li>
    </ul>
    </div>


    </div>
    <h1 class="page-header">
        <div class="adminbg">
            &nbsp; UPDATE<small> Room</small>
        </div>
        <hr class="adminhr">
    </h1>
    <div class="subfun">
        <li><a class="active-menu" href="room.php"><i class="fa fa-plus-circle"></i>Add Room</a> </li>
        <li> <a href="roomupdate.php"><i class="fa-solid fa-pen-to-square"></i> Update Room</a></li>
        <li><a href="roomdel.php"><i class="fa fa-desktop"></i> Delete Room</a></li>
    </div>

    <div class="mainbg content mt">
        <fieldset class="fs">
            <div class="panel-heading mb">
                UPDATE ROOM
            </div>

        

            <form name="form" method="post">
                <div class="form-group mb mb">
                    <label>Select the Room ID *</label>
                    <select name="id"  required>
                        <option value selected></option>
                        <?php
                        while ($rrow = mysqli_fetch_array($rre)) {
                            $value = $rrow['id'];
                            echo '<option value="' . $value . '">' . $value . '</option>';
                        }
                        ?>
                    </select>
                                <div class="form-group">
                                    <label>Room Cost</label><br>
                                   <input type="text" name="costroom" required>
                                </div>


                                <div class="form-group">
                                    <label>Bed Type Cost</label><br>
                                   <input type="text" name="costbed" required>
                                </div>
                </div>
                <input type="submit" name="upd" value="Update Room" class="btndelete">
            </form>
        </fieldset>
        <?php
            if (isset($_POST['upd'])) {
                $room = $_POST['troom'];
                $roomamount = $_POST['costroom'];
                $Bed = $_POST['bed'];
                $bedamount = $_POST['costbed'];
                $place = 'Free';

                $id = $_POST['id']; // Assuming you have a form field for selecting the ID

                $check = "SELECT * FROM room WHERE type = '$room' AND bedding = '$Bed'";  
                $rs = mysqli_query($con, $check);
                $data = mysqli_fetch_array($rs, MYSQLI_NUM);
                    if (!empty($id)) {
                        // Update existing room
                        $sql = "UPDATE room SET   roomamnt='$roomamount', bedamnt='$bedamount', place='$place' WHERE id='$id'";
                    } else {
                        // Add new room
                        $sql = "INSERT INTO `room`(`type`, `bedding`, `roomamnt`, `bedamnt`, `place`) VALUES ('$room', '$Bed', '$roomamount', '$bedamount', '$place')";
                    }

                    if (mysqli_query($con, $sql)) {
                        echo "<script > alert('Room Updated!'); window.history.go(-1);</script>";
                    } else {
                        echo "<script> alert('Something Went Wrong..!'); window.history.go(-1);</script>";
                    }
                }
            
            ?>




    </div>


    <?php
    include('db.php');
    $sql = "select * from room";
    $re = mysqli_query($con, $sql)
        ?>

    <div class="panell content mt">
        <fieldset>
            <div class="panel-heading">
                ROOMS INFORMATION
            </div>
            <div class="panel-body">
                <div class="mbg">

                    
                        <?php
                        $sql = "select * from room";
                        $re = mysqli_query($con, $sql)
                            ?>

                        <div class="panel-body">
                          
                                <table class="tableroominfo">
                                    <thead>
                                        <tr>
                                            <th>Room ID</th>
                                            <th>Room Type</th>
                                            <th>Room Cost</th>
                                            <th>Bed Type</th>
                                            <th>Bedding Rent</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        while ($row = mysqli_fetch_array($re)) {
                                            $id = $row['id'];
                                            echo "<tr>
                                            <td>" . $row['id'] . "</td>
                                            <td>" . $row['type'] . "</td>
                                            <td>" . $row['roomamnt'] . "</td>
                                           <td>" . $row['bedding'] . "</td>
                                           <td>" . $row['bedamnt'] . "</td>
												</tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>   
                </div>
        </fieldset>
    </div>


    