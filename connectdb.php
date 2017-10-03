<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "master_list_trel";

// Create connection
$dbcon = new mysqli($servername, $username, $password,$db_name);

if(mysqli_connect_error()){
    echo "ไม่สามารถเชื่อมต่อฐานข้อมูลได้". mysqli_connect_error();
}
mysqli_set_charset($dbcon,'utf8');
?>