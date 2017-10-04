<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>MasterList</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">

<link href="css/uikit.css" rel="stylesheet">
<script src="../vendor/jquery.js"></script>
<script src="js/uikit.js"></script>
<script src="js/uikit.min.js"></script>
</head>
    <body>
        <?php include("header.php");?>

        <div>
    <h1>ลงทะเบียน</h1>
        <form action="register.php" method="post">
            <label for="id_emp">ID EMP :</label>
            <input type="id_emp" name="id_emp" required autofocus>
            <label for="username">Username :</label>
            <input type="username" name="username" required autofocus>
            <label for="password">password :</label>
            <input type="password" name="password" required>
            <label for="email">E-Mail :</label>
            <input type="email" name="email" placeholder="@domain.com" required>
            <br><br>
            <input type="submit" value="ลงทะเบียน">
        </form>
            </div>
    </body>
</html>