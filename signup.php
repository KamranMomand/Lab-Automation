<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
    
<!-- Mirrored from shreethemes.in/techwind/layouts/auth-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Jul 2022 22:47:36 GMT -->
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

    </head>
    
    <body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">
    <?php
    $error=NULL;
    $error2=NULL;
    $error3=NULL;
    $error4=NULL;
            include 'config.php';

    if(isset($_POST['btnregister']))
    {
        $compname=$_POST['txtname']; 
        $compregno=$_POST['txtregno']; 
        $compweb=$_POST['txtwebsite'];
        $compusername=$_POST['txtusername'];
        $compemail=$_POST['txtemail'];
        $comppassword=$_POST['txtpassword'];
        $compaddress=$_POST['txtaddress'];
        $complogo=addslashes(file_get_contents($_FILES['txtlogo']['tmp_name']));

        $query="INSERT INTO `company`(`company_name`, `company_registration_no`, `company_website`, `company_username`, `company_email`, `company_password`, `company_address`, `company_logo`) VALUES ('$compname','$compregno','$compweb','$compusername','$compemail','$comppassword','$compaddress','$complogo')";
        $result=mysqli_query($conn,$query);
        if($result)
        {
            $error="Congratulations!";
            $error2="You Account Has Been Registered.";
            header('location:login.php');
        }
    else
    {
        $error3="Alert!";
        $error4="Something Wrong! Please Try Again...";
    }
    }   ?>    
    <br/><br/><br/>
    <section  class="md:h-auto flex items-center bg-[url('../../assets/images/auth.jpg')] bg-no-repeat bg-center">
            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black"></div>
            <div class="container">
                <div class="flex justify-center">
                    <div class="min-w-[400px] w-100% m-auto p-6 bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-700 rounded-md">
                        <a href="index.php"><img src="assets/images/loginicon.png" class="mx-auto" alt=""></a>
                        <div class="text-center" style="color:rgb(79 70 229 / .9); font-weight:bold">
                        <br/><strong>&nbsp; <?php echo $error ?></strong> &nbsp;<?php echo $error2 ?>
                        </div>
                        <h5 class="my-6 text-xl font-semibold">Signup</h5>
                        <form class="text-left" method="POST" enctype="multipart/form-data">
                            
                            <div class="grid grid-cols-2">
                                <div class="mb-4">
                                    <label class="font-semibold" for="RegisterName">Company Name:</label>
                                    <input id="companyname" name="txtname" type="text" class="form-input mt-3" placeholder="Starmix">
                                </div>

                                <div class="mb-4">
                                    <label class="font-semibold" for="LoginRegistration">Registration Number:</label>
                                    <input id="regno" type="text" name="txtregno" class="form-input mt-3" placeholder="0011946">
                                </div>

                                <div class="mb-4">
                                    <label class="font-semibold" for="LoginAddress">Company Website:</label>
                                    <input id="address" type="url" name="txtwebsite" class="form-input mt-3" placeholder="Enter URL">
                                </div>

                                <div class="mb-4">
                                    <label class="font-semibold" for="LoginUsername">Username:</label>
                                    <input id="username" type="text" name="txtusername" class="form-input mt-3" placeholder="starmixelectronic">
                                </div>

                                <div class="mb-4">
                                    <label class="font-semibold" for="LoginEmail">Email:</label>
                                    <input id="email" type="email" name="txtemail" class="form-input mt-3" placeholder="name@example.com">
                                </div>

                                <div class="mb-4">
                                    <label class="font-semibold" for="LoginPassword">Password:</label>
                                    <input id="password" type="password" name="txtpassword" class="form-input mt-3" placeholder="password:">
                                </div>

                                <div class="mb-4">
                                    <label class="font-semibold" for="LoginAddress">Company Address:</label>
                                    <input id="address" type="text" name="txtaddress" class="form-input mt-3" placeholder="4166 Primrose Lane United States">
                                </div>

                                <div class="mb-4">
                                    <label class="font-semibold" for="LoginLogo">Company Logo:</label>
                                    <input id="logo" type="file" name="txtlogo" class="form-input mt-3">
                                </div>
</div>
                                <div class="mb-2">
                                <br/>
                                    <div class="form-checkbox flex items-center mb-0">
                                        <input class="mr-2 border border-inherit w-[14px] h-[14px]" type="checkbox" value="" id="AcceptT&C">
                                        <label class="form-check-label text-slate-400 ms-2 " for="AcceptT&C">I Accept <a href="#" class="text-primary">Terms And Condition</a></label>
                                    </div>
                                </div>
                                
                                <div class="mb-2">
                                    <input type="submit" name="btnregister" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full" value="Register">
                                </div>
                                <br/>
                                <div class="text-center">
                                    <span class="text-slate-400 me-2">Already have an account ? </span> <a href="login.php" class="text-black dark:text-white font-bold">Sign in</a>
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

<!-- Mirrored from shreethemes.in/techwind/layouts/auth-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Jul 2022 22:47:36 GMT -->
</html>