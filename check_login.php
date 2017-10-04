<?php
	require 'connectdb.php';

		$username = mysqli_real_escape_string($dbcon,$_POST['username']);
		$password = mysqli_real_escape_string($dbcon,$_POST['password']);

		$salt = 'sfsfbhfk7j75lk6ro-0-45ddg';
		$hash_login_pwd = hash_hmac('sha256', $password, $salt);

		$sql = "SELECT * FROM admin WHERE admin_username =? and admin_password =?";
		$stmt = mysqli_prepare($dbcon,$sql);
		mysqli_stmt_bind_param($stmt,"ss",$username,$hash_login_pwd);
		mysqli_execute($stmt);
		$result_user = mysqli_stmt_get_result($stmt);
		if($result_user->num_rows == 1){
			session_start();
			$row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC);
			$_SESSION['admin_id'] = $row_user['admin_id'];
			header("location: main.php");
		}else{
			echo "Username and Password Incorrect!!!";
		}
?>