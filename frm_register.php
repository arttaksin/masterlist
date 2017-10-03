<html>
<head>
<tile></tile>  
    <style type="text/css">
        div{
            width: 200px;
            height: 100px;
            margin: auto;
            
        }
        label{
            display: block;
        }
  </style>
</head>
    <body>
        <div>
    <h1>ลงทะเบียน</h1>
        <form action="register.php" method="post">
            <label for="username">Username :</label>
            <input type="username" name="username" required autofocus>
            <label for="password">password :</label>
            <input type="password" name="password" required>
            <label for="location">Location :</label>
            <input type="location" name="location" required autofocus>
            <label for="deptid">Dept ID :</label>
            <input type="deptid" name="deptid" required autofocus>
            <label for="email">E-Mail :</label>
            <input type="email" name="email" placeholder="@domain.com" required>
            <br><br>
            <input type="submit" value="ลงทะเบียน">
        </form>
            </div>
    </body>
</html>