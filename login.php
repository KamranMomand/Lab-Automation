<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
    
<!-- Mirrored from shreethemes.in/techwind/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Jul 2022 22:47:32 GMT -->
<head>
        <meta charset="UTF-8" />
        <title>Techwind - Tailwind CSS Multipurpose Landing Page Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta content="Tailwind CSS Saas & Software Landing Page Template" name="description" />
        <meta name="author" content="Shreethemes" />
        <meta name="website" content="https://shreethemes.in/" />
        <meta name="email" content="support@shreethemes.in" />
        <meta name="version" content="1.2.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico" />

        <!-- Css -->
        <!-- Main Css -->
        <link href="assets/libs/%40iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/css/icons.min.css" />
        <link rel="stylesheet" href="assets/css/tailwind.min.css" />
        <link rel="stylesheet" href="css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">

    </head>
    
    <body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">
    <?php
session_start();
$error=NULL;
$error2=NULL;
                    if(isset($_POST['btnlogin']))
                    {
                        $email=$_POST['txtemail'];
                        $password=$_POST['txtpassword'];
                        
                        include 'config.php';
                        $querry="select * from `company` where `company_email`='$email' && `company_password`='$password'";
                        $result=mysqli_query($conn,$querry);
                        $row=mysqli_fetch_assoc($result);
                        $check=mysqli_num_rows($result)>0;

                        if($check == 0)
                        {
                            $error="Alert!";
                            $error2="Invalid Account";
                        }
                        else{
                            $_SESSION['companyname'] = $row['company_name'];
                            $_SESSION['company_id'] = $row['company_id'];
                            Header('location: userprofile.php');
                        }
                    }
            ?>
             
        <section class="md:h-screen py-36 flex items-center bg-[url('../../assets/images/auth.html')] bg-no-repeat bg-center">
           
        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black"></div>
            <div class="container">
                <div class="flex justify-center">
                    <div class="max-w-[400px] w-full m-auto p-6 bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-700 rounded-md">
                    
                        <a href="index.php"><img src="assets/images/loginicon.png" class="mx-auto" alt=""></a><br/>
                        <?php
                        if($error != NULL && $error2 != NULL){
                            ?>
                            <div class="text-center" style="color:RED; font-weight:bold">
                                &nbsp;<?php echo $error2 ?>
                            </div>
                            <?php
                        }
                        ?>
                        <h5 class="my-6 text-xl font-semibold text-center">Login</h5>
                        
                        <form class="text-left" method="POST">
                            <div class="grid grid-cols-1">
                                <div class="mb-4">
                                    <label class="font-semibold" for="LoginEmail">Email Address:</label>
                                    <input id="LoginEmail" name="txtemail" type="email" class="form-input mt-3" placeholder="name@example.com">
                                </div>

                                <div class="mb-4">
                                    <label class="font-semibold" for="LoginPassword">Password:</label>
                                    <input id="LoginPassword" name="txtpassword" type="password" class="form-input mt-3" placeholder="Password:">
                                </div>

                                <div class="flex justify-between mb-4">
                                    <div class="form-checkbox flex items-center mb-0">
                                        <input class="mr-2 border border-inherit w-[14px] h-[14px]" type="checkbox" value="" id="RememberMe">
                                        <label class="text-slate-400" for="RememberMe">Remember me</label>
                                    </div>
                                    
                                </div>

                                <div class="mb-4">
                                    <input type="submit" name="btnlogin" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full" value="Login / Sign in">
                                </div>

                                <div class="text-center">
                                    <span class="text-slate-400 me-2">Don't have an account ?</span> <a href="signup.php" class="text-black dark:text-white font-bold">Sign Up</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section><!--end section -->

        <div class="fixed bottom-3 right-3">
            <a href="#" class="back-button btn btn-icon bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full"><i data-feather="arrow-left" class="h-4 w-4"></i></a>
        </div>

        <!-- Switcher -->
        <div class="fixed top-1/4 -right-1 z-3">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk" />
                <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-700 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
                    <i class="uil uil-moon text-[20px] text-yellow-500"></i>
                    <i class="uil uil-sun text-[20px] text-yellow-500"></i>
                    <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] w-7 h-7"></span>
                </label>
            </span>
        </div>
        <!-- Switcher -->

        <!-- JAVASCRIPTS -->
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/plugins.init.js"></script>
        <script src="assets/js/app.js"></script>
        <!-- JAVASCRIPTS -->
    </body>

<!-- Mirrored from shreethemes.in/techwind/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Jul 2022 22:47:36 GMT -->
</html>