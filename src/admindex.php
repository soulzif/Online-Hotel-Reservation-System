<?php
// Create database connection using config file
include_once("db.php");
$result = mysqli_query($con, "SELECT * FROM admin ORDER BY id DESC");
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">

    <!-- font icon kit  -->
    <script src="https://kit.fontawesome.com/2f06fa1967.js" crossorigin="anonymous"></script>
    <title>ADMIN CRUD</title>
</head>

<body>
    <div class="headercontent flex-design">

        <p><i class="fa-solid fa-user"></i>Admin</P>
        <ul class="nav-linksss flex-design">
            <li>  <a href="adminHome.php"> <i class="fa-solid fa-house">    </i> Home</a>    </li>
            <li>  <a href="logout.php">    <i class="fa fa-sign-out fa-fw"> </i> Logout</a> </li>

        </ul>
    </div>
    <h1 class="page-header">
        <div class="adminbg">
        <!-- behind adminbg clz --- background-color: #d9edf7;color:#089cff ; -->
            ADMINISTRATOR <small> accounts </small>
        </div>
        <hr class="adminhr">
    </h1>

    <div class="divmain content">
        <br>
        <a href="adadd.php" class="btnprime">Add New User</a><br />

        <table class="tablepending">
            <tr>
                <th>username</th>
                <th>password</th>
                <th>Action</th>
            </tr>
            <?php

            //fetching endlessly... :- if any changes made it will show real time
            while ($user_data = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $user_data['username'] . "</td>";
                echo "<td>" . $user_data['password'] . "</td>";
                echo "<td><a href='admedit.php?id=$user_data[id]' class='btnwarning'>Edit</a> | <a href='admdelete.php?id=$user_data[id]' class='btndanger'>Delete</a></td></tr>";
            }
            ?>
        </table>
    </div>

</body>

</html>