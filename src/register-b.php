<!-- calculate date differents -->
<?php
function datediff($date1, $date2)
{
    //diff=checkout date - check in date
    $diff = strtotime($date2) - strtotime($date1);


    //get/convert age in year format
    return floor($diff / (60 * 60 * 24));
}
?>

<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$databasename = 'myhotel';


$mysqli = mysqli_connect($hostname, $username, $password, $databasename);

$phone_number = $_POST['phone']; // get the phone number from the form

//if registration front-end 'submit' button clicked
if (isset($_POST['submit'])) {
    $userfullname = $_POST['userfullname'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $Country = $_POST['country'];
    $TRoom = $_POST['troom'];
    $Bed = $_POST['bed'];
    $cin = $_POST['cin'];
    $cout = $_POST['cout'];

    $new = "Not Confirm";

    // calculating age
    $today = date("Y-m-d");

    //pass this thorugh function and v can get date difference
    $age = datediff($dob, $today);

    // calculating staying days
    $stat = datediff($cin, $cout);

    // Name validation
    if (preg_match('/^[a-zA-Z ]+$/', $userfullname)) {
    } else {
        // echo "Name is not valid.Enter Only in English Letters";
        echo "<script> alert('Name is not valid.Enter Only in English Letters'); window.history.go(-1);</script>";
        exit();
    }


    //phone number validation
    if (preg_match('/^\d{10}$/', $phone_number)) {
        // phone number is valid
    } else {
        // phone number is not valid
        echo "<script> alert('Invalid phone number. Please enter a 10-digit phone number'); window.history.go(-1);</script>";
        exit();
    }


    // Date validation
    $date = $_POST['cin'];
    $date1 = $_POST['cout'];


    // convert input date to timestamp
    $input_timestamp = strtotime($date);
    $input_timestamp1 = strtotime($date1);

    // get today's timestamp
    $today_timestamp = strtotime(date('Y-m-d'));
    $today_timestamp1 = strtotime(date('Y-m-d'));

    // age validation
    if ($age < 6570) {
        // echo "Sorry, you must be at least 18 years old to register.";
        echo "<script> alert('Sorry, you must be at least 18 years old to register.'); window.history.go(-1);</script>";
        exit();
    }
    // compare check-in input date with today's date
    if ($input_timestamp < $today_timestamp) {
        echo "<script> alert('Error: Please select a Check-in date that is not in the past.'); window.history.go(-1);</script>";
        exit();
    }
    // compare check-out input date with today's date
    if ($input_timestamp1 < $today_timestamp) {
        echo "<script> alert('Error: Please select a Check-out date that is not in the past and not before check-in date'); window.history.go(-1);</script>";
        exit();
    } else {
                                                                                                                                                                             //notfree //staydays
        $result = mysqli_query($mysqli, "insert into roombook value('','$userfullname','$address','$dob','$email','$phone','$gender','$Country','$TRoom','$Bed','$cin','$cout','$new','$stat')");
        if ($result) {
            echo "Your Booking application has been sent";
            ?>
            <script>
                var count = 5; // Set the countdown timer in seconds
                var timer = setInterval(function () {
                    count--;
                    if (count == 0) {
                        clearInterval(timer); // Stop the timer when count reaches 0
                        window.location.href = 'reg-f.php'; // Redirect to next page
                    } else {
                        document.getElementById('countdown').innerHTML = count; // Update the countdown timer
                    }
                }, 1000); // 1000 milliseconds = 1 second

                document.getElementById('countdown').innerHTML = count; // Display initial countdown timer value
            </script>
            <p>Redirecting to Registration Page in <span id='countdown'></span> seconds...</p>
           <?php
        } else {
            echo "Something Went Wrong";
        }
    }
}