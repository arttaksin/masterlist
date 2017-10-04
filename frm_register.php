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
            <div class="uk-container">
                <div class="uk-vertical-align-middle" style="width:80%;">
            
                <form class="uk-panel uk-panel-box uk-form" action="register.php" method="post">
                <h2>ลงทะเบียน</h2>
                <hr>
                <div class="uk-form-row">
                        <input class="uk-width-1-2 uk-form-large" type="text" name="id_emp" placeholder="ID EMP" required autofocus>
                    </div>
                    <div class="uk-form-row">
                        <input class="uk-width-1-2 uk-form-large" type="username" name="username" placeholder="Username" required autofocus>
                    </div>
                    <div class="uk-form-row">
                        <input class="uk-width-1-2 uk-form-large" type="password" name="password" placeholder="Password" required autofocus>
                    </div>
                    <div class="uk-form-row">
                        <input class="uk-width-1-2 uk-form-large" type="email" name="email" placeholder="E-Mail" required autofocus>
                    </div>
                    
                    <div class="uk-form-row">
                        <input class=" uk-button uk-button-primary uk-button-large" type="submit" name="Submit" value="ลงทะเบียน">
                    </div>
                </form>
            </div>
        </div>
         <br>
         <br>
         <br>
         <br>
         <br>

    <?php include("footer.php");?>
    </body>
</html>