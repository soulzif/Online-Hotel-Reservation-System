<html>

<head>
    <meta charset="utf-8">
    <title>Invoice</title>

    <link rel="stylesheet" href="print.css">
    <style>
        * {
            border: 0;
            box-sizing: content-box;
            text-decoration: none;
            vertical-align: top;
        }

        /* heading */
        h1 {
            font: bold 100% sans-serif;
            letter-spacing: 0.5em;
            text-align: center;
            text-transform: uppercase;
        }

        /* table */
        table {
            font-size: 75%;
            width: 100%;
        }

        th,
        td {
            border-width: 1px;
            padding: 0.5em;
            text-align: left;
            border-radius: 0.25em;
            border-style: solid;
        }

     

        th {
            background: #EEE;
            border-color: #BBB;
            font-weight: bold;
        }

        td {
            border-color: #DDD;
        }

        /* page */
        html {
            font: 16px 'Open Sans', sans-serif;
            overflow: auto;
            padding: 0.5in;
            background: #999;
            cursor: default;
        }


        body {
            box-sizing: border-box;

            /* page height */
            height: 11in;
            
            /* to center all elements */
            margin: 0 auto;
            
            overflow: hidden;
            padding: 0.5in;
            width: 8.5in;
            background: #FFF;
            border-radius: 1px;

            /* to get shadow around box  */
            box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5);  
        }


        /* header */

        header {
            margin: 0 0 5em;
        }

        header:after {
            clear: both;
            content: "";
            display: table;
        }

        /* invoice h1 black backround color */
        header h1 {
            background: #000;
            border-radius: 0.25em;
            color: #FFF;
            margin: 0 0 1em;
            padding: 0.5em 0;
        }

        header address {
            float: left;
            font-size: 75%;
            font-style: normal;
            line-height: 1.25;
            margin: 0 1em 1em 0;
        }

        header address p {
            margin: 0 0 0.25em;
        }

        header span,
        header img {
            /* display: block; */
            float: right;
        }

        header span {
            margin: 0 0 1em 1em;
            max-height: 25%;
            max-width: 60%;
            position: relative;
        }

        header img {
            max-height: 100%;
            max-width: 100%;
        }


        /* article */
        article,
        article address,
        table.meta,
        table.inventory {

            /* top, ryt/left, bottom  */
            margin: 0 0 3rem;
        }

        article:after {
            clear: both;
            content: "";
            display: table;
        }

        article h1 {
            clip: rect(0 0 0 0);
            position: absolute;
        }

        article address {
            float: left;
            font-size: 125%;
            font-weight: bold;
        }


       
        /* table balance 50 50  */
        table.balance th,
        table.balance td {
            width: 50%;
        }

        table.balance td {
            text-align: right;
        }


        /* print logo */
        .prlogo {
            height: 90px;
            width: 200px;
            margin-bottom: 30;
        }
    </style>

</head>

<body>


    <?php
    include('db.php');
    $sql = "select * from booking";
    $re = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($re)) //booking
    {

        $id = $row['bid'];
        $rid = $row['roomid'];
        $cusid = $row['cusid'];
       

        $sql1 = "select * from room where id='$rid'";
        $re2 = mysqli_query($con, $sql1);
        while ($row2 = mysqli_fetch_array($re2)) { //room
            $roorate=$row2['roomamnt'];
            $bedrate =$row2['bedamnt'];

            $sql2 = "select * from roombook where id='$cusid'";
            $re3 = mysqli_query($con, $sql2);
            while ($row3 = mysqli_fetch_array($re3)) { //roombook
                $name = $row3['userfullname'];
                $cout = $row3['cout'];
                $troom =$row3['TRoom'];
                $days=$row3['nodays'];
                $bed=$row3['Bed'];

                $ttot =$row2['roomamnt'] * $row3['nodays'];
                $btot=$row2['bedamnt'] * $row3['nodays'];
            
                $fintot=$btot + $ttot;


            }

        }
    }
    ?>
    <header>
        <h1>Invoice</h1>
        <address>
            <p>HILTON HOTEL,</p>
            <p>Orabi Basha Road,<br>Sainthamaruthu-02,<br>Sri Lanka.</p>
            <p>(+94) 123 456 789</p>
        </address>
        <span><img class="prlogo" alt="" src="../pics/print1.png"></span>
    </header>

    <article>
        <h1>Recipient</h1>
        <address>
            <p>
                <?php echo $name ?> <br>
            </p>
        </address>
        <table class="meta">
            <tr>
                <th><span>Invoice #</span></th>
                <td><span>
                        <?php echo $id; ?>
                    </span></td>
            </tr>
            <tr>
                <th><span>Date</span></th>
                <td><span>
                        <?php echo $cout; ?>
                    </span></td>
            </tr>

        </table>
        <table class="inventory">
            <thead>
                <tr>
                    <th><span>Item</span></th>
                    <th><span>No of Days</span></th>
                    <th><span>Rate</span></th>
                    <th><span>Price</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><span>
                            <?php echo $troom; ?>
                        </span></td>
                    <td><span>
                            <?php echo $days; ?>
                        </span></td>
                    <td><span data-prefix></span><span>
                            <?php echo $roorate; ?>
                        </span></td>
                    <td><span data-prefix>Rs.</span><span>
                            <?php echo $ttot; ?>
                        </span></td>
                </tr>
                <tr>
                    <td><span>
                            <?php echo $bed; ?> Bed
                        </span></td>
                    <td><span>
                            <?php echo $days; ?>
                        </span></td>
                    <td><span data-prefix></span><span>
                            <?php echo $bedrate ; ?>
                        </span></td>
                    <td><span data-prefix>Rs.</span><span>
                            <?php echo $btot; ?>
                        </span></td>
                </tr>

            </tbody>
        </table>

        <table class="balance">
            <tr>
                <th><span>Total</span></th>
                <td><span data-prefix>Rs.</span><span>
                        <?php echo $fintot; ?>
                    </span></td>
            </tr>
            <tr>
                <th><span>Amount Paid</span></th>
                <td><span data-prefix>Rs.</span><span><?php echo $fintot; ?></span></td>
            </tr>
            <tr>
                <th><span>Balance Due</span></th>
                <td><span data-prefix>Rs.</span><span>
                            0.00
                    </span></td>
            </tr>
        </table>
    </article>
   
        <h1><span>Contact us</span></h1>
        <div>
            <p align="center">Email :- hiltoncont@gmail.com || Web :- www.NotHostThankyou.com || Phone :- +94 123 456 789 </p>
        </div>

        <br>
        <br>
        <br>
    <center>
    <div >

    
    <button onclick="window.print();" class="print-btn">Print</button>
      </div>
    </center>
</body>

</html>

<?php

include('db.php');
$sql = "select * from booking";
$re = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($re)) //booking
{
    $id = $row['bid'];
    $rid = $row['roomid'];
    $cusid = $row['cusid'];
   

    $sql1 = "select * from room where id='$rid'";
    $re2 = mysqli_query($con, $sql1);
    while ($row2 = mysqli_fetch_array($re2)) { //room
        $roorate=$row2['roomamnt'];
        $bedrate =$row2['bedamnt'];

        $sql2 = "select * from roombook where id='$cusid'";
        $re3 = mysqli_query($con, $sql2);
        while ($row3 = mysqli_fetch_array($re3)) { //roombook
            $name = $row3['userfullname'];
            $cout = $row3['cout'];
            $troom =$row3['TRoom'];
            $days=$row3['nodays'];
            $bed=$row3['Bed'];

            $ttot =$row2['roomamnt'] * $row3['nodays'];
            $btot=$row2['bedamnt'] * $row3['nodays'];
        
            $fintot=$btot + $ttot;

            $free = "Free";
            $nul = null;
            $rpsql = "UPDATE `room` SET `place`='$free' WHERE id='$rid' ";
            if (mysqli_query($con, $rpsql)) {
           
            
            }
        }

    }


}
?>


