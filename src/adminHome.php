<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">

    <!-- font icon kit  -->
    <script src="https://kit.fontawesome.com/2f06fa1967.js" crossorigin="anonymous"></script>
    <title>ADMIN Home</title>
</head>

<body>
    <div class="navbar-header">
        <div class="headercontent flex-design">
            <ul>
                <p class="adminn"> <i class="fa-solid fa-user"></i> Admin </p>
            </ul>
            <ul class="nav-linkss flex-design">
                <li><a href="admindex.php"> <i class="fa fa-user fa-fw">         </i> ADMINISTRATOR</a></li>
                <li><a href="room.php">     <i class="fa-solid fa-hotel">        </i> ROOMS</a>        </li>
                <li><a href="payment.php">  <i class="fa-solid fa-cash-register"></i> Payment</a>      </li>
                <li><a href="logout.php">   <i class="fa fa-sign-out fa-fw">     </i> Logout</a>       </li>
            </ul>
        </div>
    </div>

    <?php
    //purpose - to show how many pending rooms left on a button
    include('db.php');
    $sql = "select * from roombook";
    $re = mysqli_query($con, $sql);
    $c = 0;
    while ($row = mysqli_fetch_array($re)) {
        $new = $row['status'];
        $cin = $row['cin'];
        $id = $row['id'];
        if ($new == "Not Confirm") {
            $c = $c + 1;
        }
    }
    ?>
    
    <div class="newroombookings ">
        <button class="btnnewroombooking" type="button">
            New Room Bookings
            <div class="redd">
                <!-- showing that pending room no's by php echo -->
                <?php echo $c; ?></span>
            </div>
        </button>
    </div>

    <div class="newroombookingshow conte">
        <table class="tablepending mt">
            <thead>
                <tr>
                    <th class="thh">#</th>
                    <th class="thh">Name</th>
                    <th class="thh">address</th>
                    <th class="thh">Email</th>
                    <th class="thh">Phone</th>
                    <th class="thh">Gender</th>
                    <th class="thh">Country</th>
                    <th class="thh">Room</th>
                    <th class="thh">Bed</th>
                    <th class="thh">Check In</th>
                    <th class="thh">Check Out</th>
                    <th class="thh">Status</th>
                    <th class="thh">More</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $tsql = "select * from roombook";
                $tre = mysqli_query($con, $tsql);
                while ($trow = mysqli_fetch_array($tre)) {
                    $co = $trow['status'];
                    if ($co == "Not Confirm") {
                        echo "<tr>
												<td>" . $trow['id'] . "</td>
												<td>" . $trow['userfullname'] . "</td>
												<td>" . $trow['address'] . "</td>
												<td>" . $trow['email'] . "</td>
                                                <td>" . $trow['phone'] . "</td>
												<td>" . $trow['gender'] . "</td>
												<td>" . $trow['Country'] . "</td>
												<td>" . $trow['TRoom'] . "</td>
                                                <td>" . $trow['Bed'] . "</td>
												<td>" . $trow['cin'] . "</td>
												<td>" . $trow['cout'] . "</td>
												<td>" . $trow['status'] . "</td>	
												<td><a href='roombook.php?rid=" . $trow['id'] . " ' class='btnprime'>Action</a></th>
												</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>