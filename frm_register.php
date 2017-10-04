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