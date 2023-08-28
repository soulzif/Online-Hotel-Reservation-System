<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="admstyle.css?v=<?php echo time(); ?>">

	<!-- font icon kit  -->
	<script src="https://kit.fontawesome.com/2f06fa1967.js" crossorigin="anonymous"></script>
	<title>Add Admin</title>
</head>

<body>
	<div class="navbar-header">
		<div class="headercontent flex-design">
			<ul>
				<p class="adminn"> <i class="fa-solid fa-user"></i> Admin </p>
			</ul>
			<ul class="nav-linkss flex-design">
				<li><a href="adminHome.php"><i class="fa-solid fa-house"></i> Home</a>
				</li>
				<li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
			</ul>
		</div>
	</div>
	<h1 class="page-header">
		<div class="adminbg">
			&nbsp; CREATE<small> Admin</small>
		</div>
		<hr class="adminhr">
	</h1>

	<div class="divmain content">
		<a href="admindex.php" class="gohome">Go to Home</a>
		<br /><br />

		<form action="adadd.php" method="post" name="form1">
			<table class="tableadmin">
				<tr>
					<td>username</td>
					<td><input type="text" name="username" class="adminfield" required></td>
				</tr>
				<tr>
					<td>password</td>
					<td><input type="text" name="password" class="adminfield" required></td>
				</tr>
				<tr>
					<td></td>

					<td><input type="submit" name="Submit" value="Add" class="btnsuccess"></td>
				</tr>
			</table>
		</form>
	</div>

	<center>
		<?php
		// Check If form submitted, insert form data into users table. & class name= 'Submit'
		if (isset($_POST['Submit'])) {
			$name = $_POST['username'];
			$pass = $_POST['password'];

			// include database connection file
			include_once("db.php");

			// Insert user data into admin table
			$result = mysqli_query($con, "INSERT INTO admin(username,password) VALUES('$name','$pass')");

			// Show message when user added
			echo "Admin added successfully. <a href='admindex.php'>View Users</a>";
		}
		?>
	</center>


</body>

</html>