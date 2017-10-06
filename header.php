<?php
        include 'session.php';
?>
           <nav class="uk-navbar uk-margin-large-bottom">
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

  <!--<nav class="uk-navbar">

                                <ul class="uk-navbar-nav">
                                    <li class="uk-active"><a href="">Active</a></li>
                                    <li><a href="">Item</a></li>
                                    <li class="uk-parent" data-uk-dropdown>
                                        <a href="">Parent <i class="uk-icon-caret-down"></i></a>

                                        <div class="uk-dropdown uk-dropdown-navbar">
                                            <ul class="uk-nav uk-nav-navbar">
                                                <li><a href="#">Item</a></li>
                                                <li><a href="#">Another item</a></li>
                                                <li class="uk-nav-header">Header</li>
                                                <li><a href="#">Item</a></li>
                                                <li><a href="#">Another item</a></li>
                                                <li class="uk-nav-divider"></li>
                                                <li><a href="#">Separated item</a></li>
                                            </ul>
                                        </div>

                                    </li>
                                </ul>

                            </nav>-->
