<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&family=Poppins:wght@400;600&display=swap"
        rel="stylesheet">

    <!-- font icon kit  -->
    <script src="https://kit.fontawesome.com/c653affa3f.js" crossorigin="anonymous"></script>
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <title>HILTON Admin Login</title>
</head>

<body>
    <header class="headerbg">
        <!-- header content -->
        <div class="headercontent flex-design">
            <div class="hedti">
                WELCOME TO HILTON ADMIN PAGE &nbsp<i class="fa-sharp fa-solid fa-user-secret fa-2xl"></i>
            </div>
        </div>

        <form method="post">
            <div class="containerr mt ">
                <fieldset class="loginbox">
                    <p><input type="text" name="username" placeholder="Username" class="adminfield" required></p>
                    <p><input type="password" name="password" placeholder="Password" class="adminfield" required></p>


                    <p><input type="submit" name="sub" value="Login" class="btnlogin"></p>

                    <div class="bottom">
                        <h3><a href="../src/index.php" class="hover-effect">GO HILTON HOMEPAGE</a></h3>
                    </div>
                    <fieldset>
            </div>
        </form>
    </header>
</body>



<!-- footer content -->
<footer>
    <div class="footer-content">
        <div class="footer-top">

            <div class="footer-top-container  flex-design">


                <div class="logofoot">
                    <img src="../hotel logo/1976.png">

                </div>
                <div class="footer-links">
                    <li> <a href="#">H</a></li>
                    <li> <a href="#">I</a></li>
                    <li> <a href="#">L</a></li>
                    <li> <a href="#">T</a></li>
                    <li> <a href="#">O</a></li>
                    <li> <a href="#">N</a></li>

                </div>
                <div class="footer-hotel">
                    <h3>Hilton Hotel</h3>
                    <p class="footerp">Enjoy a Luxury experience <br>hiltoncont@gmail.com </p>
                    <br>24 HOURS A DAY
                    <br>+94 123456789
                </div>

            </div>

        </div>
    </div>
    <hr class="hrfooter">
    <div class="footer-bottom">
        <p class="copyright">Copyright &copy;2022-2023,Zifan - All Rights Reserved</p>
    </div>

</footer>
<script src="app.js"></script>
</html>



<!-- Login page db backend -->
<?php
include('db.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 

    $myusername = mysqli_real_escape_string($con, $_POST['username']);
    $mypassword = mysqli_real_escape_string($con, $_POST['password']);

    $sql = "SELECT id FROM admin WHERE username = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($con, $sql);

    // MYSQLI_ASSOC used to check database table and fetch(checks) each rows & Columns
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);


    $active = $row['active'];

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1) {
        $_SESSION['admin'] = $myusername;

        //redirect to adminHome
        header("location: adminHome.php");
    } else {
        echo '<script>alert("Your Login Name or Password is invalid") </script>';
    }
}
?>