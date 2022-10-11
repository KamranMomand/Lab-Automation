<?php
    if(session_id()==null) 
    { 
        session_start(); 
    } 
    ?>
       <body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">
        <!-- Loader Start -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader End -->
        
        <!-- Start Navbar -->
        <nav id="topnav" class="defaultscroll is-sticky">
            <div class="container">
                <!-- Logo container-->
                <a class="logo" href="index.php">
                    <span class="inline-block dark:hidden">
                        <img src="assets/images/logo-dark2.png" class="l-dark" height="24" alt="">
                       <img src="assets/images/logoicon.png" class="l-light" height="24" alt="">
                    </span>
                    <img src="assets/images/logoicon.png" height="24" class="hidden dark:inline-block" alt="">
                    
                </a>

                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>

                <div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu nav-light">
                    
                        <li><a href="index.php" class="sub-menu-item active">HOME</a></li>
                        <li><a href="about.php" class="sub-menu-item">ABOUT US</a></li>
                        <li><a href="services.php" class="sub-menu-item">APPLIANCES TESTING</a></li>
                        <li><a href="team.php" class="sub-menu-item">TEAM</a></li>                                       
                        <li><a href="contact.php" class="sub-menu-item">CONTACT</a></li>
                        <?php
                                        if(isset($_SESSION['companyname']))
                                        {
                                        ?>
                                        <li><a href="userprofile.php" class="sub-menu-item">DASHBOARD</a></li>
                                        <li><a href="logout.php" class="sub-menu-item">LOG OUT</a></li>
                                        <?php
                                        }else
                                        {
                                        ?>
                        <li><a href="login.php" class="sub-menu-item">SIGN IN</a></li>
                        <li><a href="signup.php" class="sub-menu-item">SIGN UP</a></li>
                        <?php
                                        }?>
                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </nav><!--end header-->
        <!-- End Navbar -->