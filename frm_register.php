<?php
    include 'session.php';
?>
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
                                        <input type="text" id="form-h-it" name="username" placeholder="กรอกชื่อพนักงาน" required="autofocus">
                                    </div>
                                </div>
                                <div class="uk-form-row">
                                    <label class="uk-form-label" for="form-h-ip">PASSWORD</label>
                                    <div class="uk-form-controls">
                                        <input type="password" id="form-h-ip" name="password" placeholder="กรอกรหัสผ่าน" required="autofocus">
                                    </div>
                                </div>
                                <div class="uk-form-row">
                                    <label class="uk-form-label" for="form-h-it">E-MAIL  </label>
                                    <div class="uk-form-controls">
                                        <input type="email" id="form-h-it" name="email" placeholder="กรอก E-Mail" required="autofocus">
                                    </div>
                                </div>
                                </div>
                             <div class="uk-form-row">
                                <div class="uk-form-controls">
                         <button class=" uk-button uk-button-primary" type="submit" name="Submit">ลงทะเบียน</button>
                           </div>
                       </div>
                               
                        </form>
                        
                        </div>
                    </div>
                </div>


    <?php include("footer.php");?>
    </body>
</html>