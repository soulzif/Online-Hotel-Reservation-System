<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admstyle.css?v=<?php echo time(); ?>">

    <!-- font icon kit  -->
    <script src="https://kit.fontawesome.com/2f06fa1967.js" crossorigin="anonymous"></script>
    <title>ROOM</title>
</head>

<body>
    <div class="navbar-header">
        <div class="headercontent flex-design">
            <ul>
            <p><i class="fa-solid fa-user"></i>Admin</P>
            </ul>
        	<ul class="nav-linkss flex-design">
                <li><a href="adminHome.php"><i class="fa-solid fa-house"></i> Home</a>
                </li>
                <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
        </div>
    </div>
    </div>
    <h1 class="page-header">
        <div class="adminbg">
            &nbsp; NEW ROOM
        </div>
    </h1>

    <div class="subfun">
    
        <li>
            <a href="room.php"><i class="fa fa-plus-circle"></i>Add Room</a>
        </li>
        <li>
            <a href="roomupdate.php"><i class="fa-solid fa-pen-to-square"></i> Update Room</a>
        </li>
        <li>
            <a href="roomdel.php"><i class="fa fa-desktop"></i> Delete Room</a>
        </li>
    </div>
    </nav>

            <div class="addnewroom content">
                <br>
                <fieldset>
                    
                    <div class="panel-heading">
                        ADD NEW ROOM
                    </div>

                    <div class="panel-body">
                        <div class="mbg">
                            <form action="room-b.php" method="post" >
                                <div class="form-group">
                                    <label>Type Of Room</label><br>
                                    <select name="troom" required>
                                        <option value selected></option>
                                        <option value="Junior Room">JUNIOR ROOM</option>
                                        <option value="Standard Room">STANDARD ROOM</option>
                                        <option value="Superior Room">SUPERIOR ROOM</option>
                                        <option value="Sunshine House">SUNSHINE ROOM</option>
                                        <option value="Deluxe Room">DELUXE ROOM</option>
                                        <option value="King Room">KING ROOM</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Room Cost</label><br>
                                   <input type="text" name="costroom">
                                </div>

                                <div class="form-group">
                                    <label>Bedding Type</label><br>
                                    <select name="bed"  required>
                                        <option value selected></option>
                                        <option value="Single">Single</option>
                                        <option value="Double">Double</option>
                                        <option value="Triple">Triple</option>
                                        <option value="Quad">Quad</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Bed Type Cost</label><br>
                                   <input type="text" name="costbed">
                                </div>
                                <input type="submit" name="add" value="Add Room" class="btn">
                            </form>
                        </div>


                        <?php
                        include('db.php');
                        if (isset($_POST['add'])) {
                            $room = $_POST['troom'];
                            $roomamount = $_POST['costroom'];
                            $Bed = $_POST['bed'];
                            $bedamount = $_POST['costbed'];
                            $place = 'Free';

                            $check = "SELECT * FROM room WHERE type = '$room' AND bedding = '$Bed'";
                            $rs = mysqli_query($con, $check);
                            $data = mysqli_fetch_array($rs, MYSQLI_NUM);
                        }
                        ?>
                    </div>
                </fieldset>
            </div>
            <br>
            <br>


            <div class="panel content">
                <fieldset>
                    <div class="panel-heading">
                        ROOMS INFORMATION
                    </div>
                    <div class="panel-body">
                        <div class="mbg">

                            <div class="panel">
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

                                </div>
                            </div>
                        </div>
                </fieldset>
            </div>

</body>

</html>