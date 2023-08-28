<?php
// include database connection file
include_once("db.php");

// Checks if below page form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	$name=$_POST['username'];
	$pass=$_POST['password'];
		
	// update user data
	$result = mysqli_query($con, "UPDATE admin SET username='$name',password='$pass' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	echo "Admin Updated successfully. <a href='admindex.php'>View Users</a>";
	header("Location: admindex.php");
}
?>

<?php
// Display selected user data based on id
// Getting id from admindex row variable id
$id = $_GET['id'];

// Fetch user data based on id
$result = mysqli_query($con, "SELECT * FROM admin WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['username'];
	$pass = $user_data['password'];
}

?>
<html>
<head>	
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="admstyle.css?v=<?php echo time(); ?>">

    <!-- font icon kit  -->
    <script src="https://kit.fontawesome.com/2f06fa1967.js" crossorigin="anonymous"></script>
	<title>Edit Admin</title>
</head>

<body>
<div class="navbar-header">
        <div class="headercontent flex-design">
            <ul>
			<p><i class="fa-solid fa-user"></i>Admin</P>
            </ul>
			<ul class="nav-linkss flex-design">
                <li><a href="adminHome.php"><i class="fa-solid fa-house"></i> Home</a></li>
                <li> <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
            </ul>
        </div>
</div>     
    
	<h1 class="page-header">
                    <div class="adminbg">
                    &nbsp; UPDATE<small> Admin</small>
                    </div>
    </h1>
	
	
	<div class="divmain content">
	<a href="admindex.php" class="gohomee">Go to Home</a>

	<form name="update_user" method="post" action="admedit.php">
				<table border="0">
					<tr> 
						<td>Name</td>
						<td><input type="text" name="username" value=<?php echo $name;?>></td>
					</tr>
					<tr> 
						<td>password</td>
						<td><input type="text" name="password" value=<?php echo $pass;?>></td>
					</tr>
				
					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input type="submit" name="update" value="Update" class="btnsuccess"></td>
					</tr>
				</table>
	</form>
</div>
</body>
</html>

