<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>"> -->

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <!-- font icon kit  -->
    <script src="https://kit.fontawesome.com/2f06fa1967.js" crossorigin="anonymous"></script>
 
    <title>ADMIN Home new</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg"  style="background-color: #f8f9fa";  >
        <div class="container-fluid">

        <nav class="navbar navbar-expand-lg">
            <div class="container">

            <a class="navbar-brand" href="adminHome1.php">
            <img src="../pics/print1.png" alt="Bootstrap" width="150" height="64">
            </a>
    
            </div>
        </nav>
            <a class="navbar-brand" href="adminHome1.php">ADMIN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="admindex.php">ADMINISTRATOR ACCOUNT</a>
                    </li>
                
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            ROOMS
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="room.php">ADD ROOM</a></li>
                            <li><a class="dropdown-item" href="roomdel.php">DELETE ROOM</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="payment.php">PAYMENT</a>
                    </li>
                </ul>
 
                <form class="d-flex">
                <a href="../src/logout.php" class="btn btn-outline-success"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                </form>
            </div>
        </div>
    </nav>


    <?php
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



<div class="container">
<div class="table-responsive">
  <table >
  <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>address</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Country</th>
                    <th>Room</th>
                    <th>Bed</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th>Status</th>
                    <th>More</th>
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
                                <td><a href='roombook.php?rid=" . $trow['id'] . " ' class='btn btnprimary'>Action</a></th>
                                </tr>";
                                                    }
                                                            }
                    ?>
            </tbody>
  </table>

</div>
 


</body>

</html>