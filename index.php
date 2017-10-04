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

<body class="uk-height-1-1">
    <div class="uk-vertical-align uk-text-center uk-height-1-1">
            <div class="uk-vertical-align-middle" style="width: 250px;">

                <img class="uk-margin-bottom" width="140" height="120" src="IMG/rotarylogo.jpg" alt="">

                <form class="uk-panel uk-panel-box uk-form" action="check_login.php" method="post">
                    <div class="uk-form-row">
                        <input class="uk-width-1-1 uk-form-large" type="text" name="username" placeholder="Username" required autofocus>
                    </div>
                    <div class="uk-form-row">
                        <input class="uk-width-1-1 uk-form-large" type="password"  name="password" placeholder="Password" required autofocus>
                    </div>
                    <div class="uk-form-row">
                        <input class="uk-width-1-1 uk-button uk-button-primary uk-button-large" type="submit" name="Submit" value="Login">
                    </div>
                    <div class="uk-form-row uk-text-small">
                        <label class="uk-float-left"><input type="checkbox"> Remember Me</label>
                        <a class="uk-float-right uk-link uk-link-muted" href="#">Forgot Password?</a>
                    </div>
                </form>

            </div>
  
</body>
</html>
