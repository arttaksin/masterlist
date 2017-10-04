<?php
		session_start();
		if(!isset($_SESSION['admin_id'])) {
				header("Location: index.php");
		}
		require 'connectdb.php';
		$session_login_id = $_SESSION['admin_id'];

		$qry_user = "SELECT * FROM admin WHERE admin_id = '$session_login_id'";
		$result_user = mysqli_query($dbcon,$qry_user);
		if($result_user){
			$row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC);
			$s_login_username = $row_user['admin_username'];
			mysqli_free_result($result_user);
		} 
		mysqli_close($dbcon);