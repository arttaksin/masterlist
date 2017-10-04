<?php
require 'connectdb.php';
$login_username = $_POST['username'];
$login_password = $_POST['password'];
//เข้ารหัส ของรหัสผ่าน
$salt='sfsfbhfk7j75lk6ro-0-45ddg';
$hash_user_password = hash_hmac('sha256', $login_password, $salt);
$qurey = "INSERT INTO admin (user,pwd) VALUES('$login_username','$hash_user_password')";
$result = mysqli_query($dbcon,$qurey);
if($result){

    header("Location: login.php");

}else {
   echo "เกิดข้อผิดพลาด" .mysqli_error($dbcon);
}
mysqli_close($dbcon)
?>