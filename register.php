<?php
require 'connectdb.php';
$login_EMP = $_POST['id_emp'];
$login_username = $_POST['username'];
$login_password = $_POST['password'];
//เข้ารหัส ของรหัสผ่าน
$salt='sfsfbhfk7j75lk6ro-0-45ddg';
$hash_user_password = hash_hmac('sha256', $login_password, $salt);


$login_email = $_POST['email'];
$qurey = "INSERT INTO admin (admin_EMP,admin_username,admin_password,admin_email) VALUES('$login_EMP','$login_username','$hash_user_password','$login_email')";
$result = mysqli_query($dbcon,$qurey);
if($result){

    header("Location: index.php");

}else {
   echo "เกิดข้อผิดพลาด" .mysqli_error($dbcon);
}
mysqli_close($dbcon)
?>