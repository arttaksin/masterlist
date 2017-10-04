<?php
	include("connectdb.php");
	session_start();
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$username = mysqli_real_escape_string($dbcon,$_POST['username']);
		$password = mysqli_real_escape_string($dbcon,$_POST['password']);

		$sql = "SELECT * FROM admin WHERE user = '$username' and pwd = '$password'";
		$result = mysqli_query($dbcon,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$active = $row['active'];

		$count = mysqli_num_rows($result);

		if($count==1){
			header("location: main.php");
		}else{
			echo "Username and Password Incorrect!!!";
		}
	}
?>