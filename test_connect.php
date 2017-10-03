 <?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "master_list_trel";

// Create connection
$dbconn = new mysqli($servername, $username, $password,$db_name);

// Check connection
if ($dbconn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 