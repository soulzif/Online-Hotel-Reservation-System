<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="admstyle.css?v=<?php echo time(); ?>">
    <!-- font icon kit  -->
    <script src="https://kit.fontawesome.com/c653affa3f.js" crossorigin="anonymous"></script>
    <title>Payment Details</title>
</head>

<body>
    <div class="headercontent flex-design">
        <p><i class="fa-solid fa-user"></i>Admin</P>
        <ul class="nav-linkss flex-design">
            <li><a href="adminHome.php"><i class="fa-solid fa-house"></i> Home</a> </li>
            <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
    </div>
    
        <h1 class="page-header">
            <div class="adminbg">
                &nbsp; PAYMENT
            </div>
        </h1>

        
            <table class="tablebookshow">
                <thead>
                    <tr>
                        <th>PAY ID</th>
                        <th>Name</th>
                        <th>Room type</th>
                        <th>Bed Type</th>
                        <th>Check in</th>
                        <th>Check out</th>
                        <th>No of Days</th>
                        <th>Room Rent</th>
                        <th>Bed Rent</th>
                        <th>Total</th>
                        <th>Print</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    include('db.php');
                    $sql = "select * from booking";
                    $re = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($re)) {   //booking
                        $id = $row['bid'];
                        $rid = $row['roomid'];
                        $cusid = $row['cusid'];

                        $sql1 = "select * from room where id='$rid'";
                        $re2 = mysqli_query($con, $sql1);
                        while ($row2 = mysqli_fetch_array($re2)) {  //room

                            $sql2 = "select * from roombook where id='$cusid'";
                            $re3 = mysqli_query($con, $sql2);
                            while ($row3 = mysqli_fetch_array($re3)) {  //roombook

                                $ttot = $row2['roomamnt'] * $row3['nodays'];
                                $btot = $row2['bedamnt'] * $row3['nodays'];

                                $fintot = $btot + $ttot;

                                echo "
                                                    <td>" . $row['bid'] . "</td>
													<td>" . $row3['userfullname'] . "</td>
													<td>" . $row2['type'] . "</td>
													<td>" . $row2['bedding'] . "</td>
                                                    <td>" . $row3['cin'] . "</td>
													<td>" . $row3['cout'] . "</td>
                                                    <td>" . $row3['nodays'] . "</td>
                                                    <td>" . $row2['roomamnt'] . "</td>
                                                    <td>" . $row2['bedamnt'] . "</td>
													<td>" . $fintot . "</td>

													<td><a href=print.php?pid=" . $id . " <button class='btnsuccess'> <i class='fa fa-print' ></i> Print</button></td>
													</tr>";
                            }

                        }
                    }
                    ?>
                </tbody>
           
</body>
</table>
</html>