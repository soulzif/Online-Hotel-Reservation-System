<?php
include ('db.php');	
			$id =$_GET['eid'];		
			$newsql ="DELETE FROM `admin` WHERE id ='$id' ";
			if(mysqli_query($con,$newsql))
				{
				echo' <script language="javascript" type="text/javascript"> alert("User name and password Deleted") </script>';				
				}
			header("Location: userprofile.php");	
?>


