<?php
        include 'session.php';

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>MasterList</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
<link href="css/uikit.min.css" rel="stylesheet">
<link href="css/docs.css" rel="stylesheet">
<link href="css/uikit.css" rel="stylesheet">
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/uikit.js"></script>
<script src="js/uikit.min.js"></script>
</head>
           <nav class="tm-navbar uk-navbar uk-navbar-attached">
            <div class="uk-container uk-container-center">
                <a class="uk-navbar-brand uk-hidden-small" href="main.php">MasterList</a>
                <ul class="uk-navbar-nav uk-hidden-small">
                   <li>
                    <a href="main.php">Home</a>
                  </li>
                    <li>
                        <a href="page_RRDO.php">RR,DO</a>
                    </li>
                    <li>
                        <a href="page_masterlist.php">Masterlist</a>
                    </li>
                    <li>
                        <a href="page_softwarelist.php">Softwarelist</a>
                    </li>
                    <li>
                        <a href="page_DO.php">DO</a>
                    </li>
                    <li>
                        <a href="#">IT Service</a>
                    </li>
                    <li>
                        <a href="frm_register.php">Register</a>
                    </li>
                    
                </ul>
                <div class = "uk-navbar-flip">
                    <ul class = "uk-navbar-nav">
                        <li class="uk-parent" data-uk-dropdown>
                        <a> 
                        <?php 
                        echo "USER : $s_login_username ";
                        ?></a>
                            <div class = "uk-dropdown uk-dropdown-navbar">
                                <ul class = "uk-nav uk-nav-navbar">
                                    <li><a href = "#">View user</a></li>
                                    <li><a href = "logout.php">Logout</a></li>
                                </ul>
                            </div> 
                        </li>
                    </ul>
                </div>
                <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
                <div class="uk-navbar-brand uk-navbar-center uk-visible-small">Brand</div>
            </nav>
           <br><br>