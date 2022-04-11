<?php
session_start();

if(isset($_POST['submit']))
{
	include'database.php';

	 $user= mysqli_real_escape_string($conn,$_POST['username']);
	 $pwd =  mysqli_real_escape_string($conn,$_POST['pass']);

	 if (empty($user)||empty($pwd)) {
			header("Location:../loginpage.php?login=empty");
			exit(); 
		 }else
		 {
		 	$sql = "select * from users where username='$user' or  password='$pawd'";
		 	$result = mysqli_query($conn,$sql);
		 	$resultCheck = mysqli_num_rows($result);
		 	if($resultCheck < 1)
		 	{    
		 		header("Location:../loginpage.php?loginpage=nouserexits");
		 		exit();
		 	}else{
		 		if($row= mysqli_fetch_assoc($result))
		 		{
		 		
		 			$_SESSION['user']= $row['username'];
		 			$_SESSION['pass']= $row['password'];
		 			

		 			header("Location:../index.php?adminlogin=succes");
		 			exit();
		 			
		 		}	
		 		}
		 	}
		 }
 else
{
	header("Location:../index.php?login=error");
	exit();
}
?>