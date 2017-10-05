
<?php
    include 'session.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>MasterList</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">

<link href="css/uikit.css" rel="stylesheet">
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/uikit.js"></script>
<script src="js/uikit.min.js"></script>
</head>
    <body>
    <?php include("header.php");?>

<div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">
    <div class="uk-grid" data-uk-grid-margin>
      <div class="uk-width-medium-4">
        <h2>ลงทะเบียน</h2>
         <hr class="uk-article-divider">

                            <form class="uk-form uk-form-horizontal" action="register.php" method="post">

                                <div class="uk-form-row">
                                    <label class="uk-form-label" for="form-h-it">ID EMP  </label>
                                    <div class="uk-form-controls">
                                        <input type="text" id="form-h-it" name="id_emp" placeholder="กรอกรหัสพนักงาน" required="autofocus">
                                    </div>
                                </div>
                                <div class="uk-form-row">
                                    <label class="uk-form-label" for="form-h-it">USERNAME  </label>
                                    <div class="uk-form-controls">
                                        <input type="text" id="form-h-it" name="username" placeholder="กรอกชื่อพนักงาน">
                                    </div>
                                </div>
                                <div class="uk-form-row">
                                    <label class="uk-form-label" for="form-h-ip">PASSWORD</label>
                                    <div class="uk-form-controls">
                                        <input type="password" id="form-h-ip" name="password" placeholder="กรอกรหัสผ่าน">
                                    </div>
                                </div>
                                <div class="uk-form-row">
                                    <label class="uk-form-label" for="form-h-it">E-MAIL  </label>
                                    <div class="uk-form-controls">
                                        <input type="email" id="form-h-it" name="email" placeholder="กรอก E-Mail">
                                    </div>
                                </div>
                             <div class="uk-form-row">
                                <div class="uk-form-controls">
                         <input class=" uk-button uk-button-primary uk-button-large" type="submit" name="Submit" value="ลงทะเบียน">
                           </div>
                       </div>
                               
                            </form>
                        </div>
                    </div>
                </div>


    <?php include("footer.php");?>
    </body>
</html>