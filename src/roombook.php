<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="admstyle.css?v=<?php echo time(); ?>">
    <!-- font icon kit  -->
    <script src="https://kit.fontawesome.com/c653affa3f.js" crossorigin="anonymous"></script>
    <title>ROOM BOOK</title>
</head>

<body>
    <div class="headercontent flex-design">
        <p><i class="fa-solid fa-user"></i>Admin</P>
        <ul class="nav-linkss flex-design">
            <li><a href="adminHome.php"><i class="fa-solid fa-house"></i> Home</a></li>
            <li> <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a> </li>
    </div>


    <!-- //declaring variable for show table -->
    <?php
    include('db.php');
    // rid is getting from adminHome table row id
    if (!isset($_GET["rid"])) {
        header("location:roombook.php");
    } else {
        $curdate = date("Y/m/d");
        include('db.php');
        $id = $_GET['rid'];

        $sql = "Select * from roombook where id = '$id'";
        $re = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_array($re)) {
            $userfullname = $row['userfullname'];
            $address = $row['address'];
            $dob = $row['dob'];
            $email = $row['email'];
            $phone = $row['phone'];
            $gender = $row['gender'];
            $Country = $row['Country'];
            $TRoom = $row['TRoom'];
            $Bed = $row['Bed'];
            $cin = $row['cin'];
            $cout = $row['cout'];
            $status = $row['status'];
            $nodays = $row['nodays'];
        }
    }
    ?>


    <div class="panel-heading">
        <h1 class="page-header">
            Room Booking<small>
                <?php echo $curdate; ?>
            </small>
        </h1>
    </div>
    <h3>
        Booking Confirmation
    </h3>

    <table class="tablebookshow">
        <tr>
            <th>DESCRIPTION</th>
            <th>INFORMATION</th>
        </tr>

        <tr>
            <td>User Full Name</td>
            <td>
                <?php echo $userfullname; ?>
            </td>
        </tr>

        <tr>
            <td>Address</td>
            <td>
                <?php echo $address; ?>
            </td>
        </tr>

        <tr>
            <td>Email</td>
            <td>
                <?php echo $email; ?>
            </td>
        </tr>

        <tr>
            <td>Phone</td>
            <td>
                <?php echo $phone; ?>
            </td>
        </tr>

        <tr>
            <td>Gender </td>
            <td>
                <?php echo $gender; ?>
            </td>
        </tr>

        <tr>
            <td>Country </td>
            <td>
                <?php echo $Country; ?>
            </td>
        </tr>

        <tr>
            <td>Type Of the Room </td>
            <td>
                <?php echo $TRoom; ?>
            </td>
        </tr>

        <tr>
            <td>Bed</td>
            <td>
                <?php echo $Bed; ?>
            </td>

        </tr>

        <tr>
            <td>Check-in Date </td>
            <td>
                <?php echo $cin; ?>
            </td>
        </tr>

        <tr>
            <td>Check-out Date</td>
            <td>
                <?php echo $cout; ?>
            </td>
        </tr>

        <tr>
            <td>No of days</td>
            <td>
                <?php echo $nodays; ?>
            </td>
        </tr>

        <tr>
            <td>Status Level</td>
            <td>
                <?php echo $status; ?>
            </td>
        </tr>
    </table>



    <form method="post">
        <div class="form-group">
            <label>Select the Confirmation</label>
            <!-- combo box select  -->
            <select name="conff">
                <option value selected> </option>
                <option value="Confirm">Confirm</option>
                <option value="Cancel">Cancel</option>
            </select>
        </div>
        <!-- submit buton co -->
        <input type="submit" name="co" value="Confirm" class="btnsuccess">

    </form>


 


    <?php
    $csql = "select * from room WHERE  place='Free' ";
    $cre = mysqli_query($con, $csql);
    $cr = 0;
    $cjr = 0;
    $csr = 0;
    $cspr = 0;
    $csh = 0;
    $cdr = 0;
    $ckr = 0;
    while ($crow = mysqli_fetch_array($cre)) {
        $cr = $cr + 1;


        $cs = $crow['type'];

        if ($cs == "Junior Room") {
            $cjr = $cjr + 1;
        }
        if ($cs == "Standard Room") {
            $csr = $csr + 1;
        }
        if ($cs == "Superior Room") {
            $cspr = $cspr + 1;
        }
        if ($cs == "Sunshine House") {
            $csh = $csh + 1;
        }
        if ($cs == "Deluxe Room") {
            $cdr = $cdr + 1;
        }
        if ($cs == "King Room") {
            $ckr = $ckr + 1;
        }
    }
    ?>

    <div class="panel-diff content">
        <div class="panel-av">
            Available Room Details
        </div>
        <div class="panel-body">
            <table class="tableroominfo">
                <tr>
                    <td><b>Junior Room </b></td>
                    <td><button type="button" class="btncircle">
                            <?php

                            if ($cjr > 0) {
                                echo $cjr;
                            } else {
                                echo "No";
                            }
                            ?>
                        </button></td>
                </tr>
                <tr>
                    <td><b>Standard Room</b> </td>
                    <td><button type="button" class="btncircle">
                            <?php

                            if ($csr > 0) {
                                echo $csr;
                            } else {
                                echo "No";
                            }
                            ?>
                        </button></td>
                </tr>
                <tr>
                    <td><b>Superior Room</b></td>
                    <td><button type="button" class="btncircle">
                            <?php

                            if ($cspr > 0) {
                                echo $cspr;
                            } else {
                                echo "No";
                            }
                            ?>
                        </button></td>
                </tr>
                <tr>
                    <td><b>Sunshine House</b> </td>
                    <td><button type="button" class="btncircle">
                            <?php

                            if ($csh > 0) {
                                echo $csh;
                            } else {
                                echo "No";
                            }
                            ?>
                        </button></td>
                </tr>
                <tr>
                    <td><b>Deluxe Room</b> </td>
                    <td><button type="button" class="btncircle">
                            <?php

                            if ($cdr > 0) {
                                echo $cdr;
                            } else {
                                echo "No";
                            }
                            ?>
                        </button></td>
                </tr>

                <tr>
                    <td><b>King Room</b> </td>
                    <td><button type="button" class="btncircle">
                            <?php

                            if ($ckr > 0) {
                                echo $ckr;
                            } else {
                                echo "No";
                            }
                            ?>
                        </button></td>
                </tr>
                <tr>
                    <td><b>Total Rooms </b> </td>
                    <td> <button type="button" class="btntotcircle">
                            <?php
                            $tot = "select count(id) AS DUMMY FROM room WHERE place='Free'";
                            $exe = mysqli_query($con, $tot);
                            $row = mysqli_fetch_array($exe);


                            echo $row['DUMMY'];
                            ?>
                        </button></td>
                </tr>
            </table>
        </div>
    </div>

    <?php
    include('db.php');

    //submit button name co
    if (isset($_POST['co'])) {

        //get combox box selected item name
        $st = $_POST['conff'];


        if ($st == "Cancel") {
            $sqll = "DELETE FROM `roombook` WHERE id = '$id'";
            if (mysqli_query($con, $sqll)) {
                echo "<script>alert('Booking Cancelled') </script>";

            }

        } 
        
        elseif ($st == "Confirm") {
            include('db.php');
            // $id = $_GET['rid'];
    
            // $sql = "Select status from room where id = '$id'";
            // $re = mysqli_query($con, $sql);
            // while ($row = mysqli_fetch_array($re)) {
            

            //     while(){

            //     }
            //     if ()
            //     {

            //     }

            $qry = "Select * from room  ";
            $qryy = mysqli_query($con, $qry);
            $rowt = mysqli_fetch_array($qryy) ;
                // if ($rowt['place'] == 'NotFree') 
                // { 
                //     echo "<script> alert('Sorry! Room Not Available')</script>";
                // }
            
                    $urb = "UPDATE `roombook` SET `status`='$st' WHERE id = '$id'";
                    $var = "SELECT * FROM `room` WHERE type='$TRoom' and  bedding='$Bed'";
                    mysqli_query($con, $urb);
                    $res = mysqli_query($con, $var);
                    $u = mysqli_fetch_array($res);
        
                    $rooid = $u['id']; //roomid
                    $id = $_GET['rid']; //roombook cusid
            
                    $psql = "INSERT INTO `booking`(`bid`, `roomid`, `cusid`) VALUES ('','$rooid','$id')";
                    if (mysqli_query($con, $psql)) {
                        $notfree = "NotFree";
                        $rpsql = "UPDATE `room` SET `place`='$notfree' where id='$rooid'";
                       
                            if (mysqli_query($con, $rpsql)) {
                                echo "<script> alert('Booking Confirmed!')</script>";
            
                            }
        
                    }


                
            }
       


           
         
        
        // else {
        //     $urb = "UPDATE `roombook` SET `status`='$st' WHERE id = '$id'";
        //     $var = "SELECT * FROM `room` WHERE type='$TRoom' and  bedding='$Bed'";
        //     mysqli_query($con, $urb);
        //     $res = mysqli_query($con, $var);
        //     $u = mysqli_fetch_array($res);

        //     $rooid = $u['id']; //roomid
        //     $id = $_GET['rid']; //roombook cusid
    
        //     $psql = "INSERT INTO `booking`(`bid`, `roomid`, `cusid`) VALUES ('','$rooid','$id')";
        //     if (mysqli_query($con, $psql)) {
        //         $notfree = "NotFree";
        //         $rpsql = "UPDATE `room` SET `place`='$notfree' where id='$rooid'";
        //         //room id becomes cus id  &&  payment id also becomes cus id
    

        //         if (mysqli_query($con, $rpsql)) {
        //             echo "<script type='text/javascript'> alert('Booking Confirmed')</script>";

        //         }

        //     }

        // }

        // //Junior Room
    
        // if ($f1 == "NO") {
        //     echo "<script type='text/javascript'> alert('Sorry! Not Available Junior Room ')</script>";
        // }
        // //Standard Room
        // else if ($f2 == "NO") {
        //     echo "<script type='text/javascript'> alert('Sorry! Not Available Standard Room')</script>";
        // }
        // //Superior Room
        // else if ($f3 == "NO") {
        //     echo "<script type='text/javascript'> alert('Sorry! Not Available Superior Room')</script>";
        // }
        // //Sunshine House
        // else if ($f4 == "NO") {
        //     echo "<script type='text/javascript'> alert('Sorry! Not Available Sunshine Room')</script>";
        // }
        // //Deluxe Room
        // else if ($f5 == "NO") {
        //     echo "<script type='text/javascript'> alert('Sorry! Not Available Deluxe Room')</script>";
        // }
        // //King Room
        // else if ($f6 == "NO") {
        //     echo "<script type='text/javascript'> alert('Sorry! Not Available King Room')</script>";
        // } 
    
        // else 
    

        echo "<script> window.location='adminHome.php'</script>";

    }








    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../PHPMailer/src/Exception.php';
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/SMTP.php';

    if (isset($_POST['co'])) {
        $st = $_POST['conff'];
        if ($st == "Cancel") {
            include('db.php');
            $sql = "Select * from roombook";
            $re = mysqli_query($con, $sql);
            
            $message = "Dear ".$userfullname.",<br>

            We regret to inform you that your booking has been cancelled due to unavoidable circumstances. We apologize for any inconvenience this may cause.
            For more information and assistance regarding this cancellation,<br><br> we kindly request you to contact the Hilton administrator. We will be able to provide you with further details and assist you with any alternative arrangements if necessary.

            Thank you for your understanding and cooperation.<br><br>
            
            Best regards,<br>
            Hilton Administration";
            $mail = new PHPMailer(true);

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'zifan4466@gmail.com';
            $mail->Password = 'jtrkoqxpmvgtehcv';
            $mail->Port = 465;
            $mail->SMTPSecure = 'ssl';
            $mail->isHTML(true);
            $mail->setFrom($email, $name); // email gets from user
            $mail->addAddress($email);
            $mail->Subject = ("$email");
            $mail->Body = $message;
            $mail->send();

            echo "<script'> alert('Email Sent')</script>";


        }
    }

    if (isset($_POST['co'])) {
        $st = $_POST['conff'];
        if ($st == "Confirm") {
            include('db.php');
            $sql = "Select * from roombook";
            $re = mysqli_query($con, $sql);

            $message = "Dear ".$userfullname.",<br>
            We are delighted to inform you that your booking has been successfully approved! Thank you for choosing HILTON.<br> We genuinely appreciate your trust in our services,<br> and we look forward to providing you with a memorable stay.<br> We can't wait to welcome you as our esteemed guest.<br><br>

            Safe travels, and we'll see you soon!<br>
            
            Warm regards,<br>
            Zifan,<br>
            Manager,<br>
            HILTON";
            $mail = new PHPMailer(true);

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'zifan4466@gmail.com';
            $mail->Password = 'jtrkoqxpmvgtehcv';
            $mail->Port = 465;
            $mail->SMTPSecure = 'ssl';
            $mail->isHTML(true);
            $mail->setFrom($email, $name);  // email gets from user
            $mail->addAddress($email);
            $mail->Subject = ("$email");
            $mail->Body = $message;
            $mail->send();

            echo "<script> alert('Email Sent')</script>";

        }
    }

    ?>

</body>

</html>