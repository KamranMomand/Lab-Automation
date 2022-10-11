<?php
session_start(); 
if($_SESSION['companyname']){
?>

<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
    
<!-- Mirrored from shreethemes.in/techwind/layouts/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Jul 2022 22:45:35 GMT -->
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
        <link href="assets/libs/tobii/css/tobii.min.css" rel="stylesheet">
        <!-- Main Css -->
        <link href="assets/libs/%40iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/css/icons.min.css" />
        <link rel="stylesheet" href="assets/css/tailwind.min.css" />

    </head>
    
    <?php
        include 'header.php';
        include 'dashboardheader.php';
        ?>

                    <div class="lg:w-3/4 md:w-2/3 md:px-3 mt-[30px] md:mt-0">
                        <div class="pb-6 border-b dark:border-gray-700">
                            <h5 class="text-xl font-semibold">Techwind</h5>
                        
                            <p class="text-slate-400 mt-3">Electronics testing is done to not only determine the quality and safety of an electronic, but also to discover counterfeit electronics. The electronics industry is a highly regulated industry with a high demand for independent, third party testing.
                        <br/>
                        Electronics testing involves checking the safety of the device and ensuring its reliability, that it works as expected.</p>
                        </div>

                        <div class="grid lg:grid-cols-2 grid-cols-1 gap-[30px] pt-6">
                            <div>
                                <h5 class="text-xl font-semibold">Personal Details :</h5>
                                <div class="mt-6">
                                <div class="flex items-center mt-3">
                                        <i data-feather="phone" class="fea icon-ex-md text-slate-400 mr-3"></i>
                                        <div class="flex-1">
                                            <h6 class="text-indigo-600 dark:text-white font-medium mb-0">Username :</h6>
                                            <a class="text-slate-400"><?php echo $row['company_username'];?></a>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-center">
                                        <i data-feather="mail" class="fea icon-ex-md text-slate-400 mr-3"></i>
                                        <div class="flex-1">
                                            <h6 class="text-indigo-600 dark:text-white font-medium mb-0">Email :</h6>
                                            <a href="<?php echo $row['company_email'];?>" class="text-slate-400"><?php echo $row['company_email'];?></a>
                                        </div>
                                    </div>
                                    <div class="flex items-center mt-3">
                                        <i data-feather="bookmark" class="fea icon-ex-md text-slate-400 mr-3"></i>
                                        <div class="flex-1">
                                            <h6 class="text-indigo-600 dark:text-white font-medium mb-0">Registration # :</h6>
                                            <a class="text-slate-400"><?php echo $row['company_registration_no'];?></a>
                                        </div>
                                    </div>
                                    <div class="flex items-center mt-3">
                                        <i data-feather="globe" class="fea icon-ex-md text-slate-400 mr-3"></i>
                                        <div class="flex-1">
                                            <h6 class="text-indigo-600 dark:text-white font-medium mb-0">Website :</h6>
                                            <a href="<?php echo $row['company_website'];?>" class="text-slate-400"><?php echo $row['company_website'];?></a>
                                        </div>
                                    </div>
                                    <div class="flex items-center mt-3">
                                        <i data-feather="map-pin" class="fea icon-ex-md text-slate-400 mr-3"></i>
                                        <div class="flex-1">
                                            <h6 class="text-indigo-600 dark:text-white font-medium mb-0">Location :</h6>
                                            <a class="text-slate-400"><?php echo $row['company_address'];?></a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="mt-[30px] lg:mt-0">
                                <h5 class="text-xl font-semibold">Appliances Testing :</h5>
                            
                                <div class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-4 rounded-md bg-white dark:bg-slate-900 mt-6">
                                    <img src="assets/images/corporate/icon.png" class="h-16 w-16 p-4 bg-slate-50 dark:bg-slate-800 shadow dark:shadow-gray-700 rounded-md" alt="">
                                    <div class="flex-1 content ml-4">
                                        <h4 class="text-lg text-medium"><a href="services.php">Insulation Resistance Testing</a></h4>
                                        <p class="text-slate-400 mb-0">42 Hours</p>
                                           
                                    </div>
                                </div>

                                <div class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-4 rounded-md bg-white dark:bg-slate-900 mt-6">
                                    <img src="assets/images/corporate/icon2.png" class="h-16 w-16 p-4 bg-slate-50 dark:bg-slate-800 shadow dark:shadow-gray-700 rounded-md" alt="">
                                    <div class="flex-1 content ml-4">
                                        <h4 class="text-lg text-medium"><a href="services.php">Short Circuit Testing</a></h4>
                                        <p class="text-slate-400 mb-0">62 Hours</p>   
                                    </div>
                                </div>

                                <div class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-4 rounded-md bg-white dark:bg-slate-900 mt-6">
                                    <img src="assets/images/corporate/icon3.png" class="h-16 w-16 p-4 bg-slate-50 dark:bg-slate-800 shadow dark:shadow-gray-700 rounded-md" alt="">
                                    <div class="flex-1 content ml-4">
                                        <h4 class="text-lg text-medium"><a href="services.php">Fuse Testing</a></h4>
                                        <p class="text-slate-400 mb-0">36 Hours</p>    
                                    </div>
                                </div>

                                <div class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-4 rounded-md bg-white dark:bg-slate-900 mt-6">
                                    <img src="assets/images/corporate/icon4.png" class="h-16 w-16 p-4 bg-slate-50 dark:bg-slate-800 shadow dark:shadow-gray-700 rounded-md" alt="">
                                    <div class="flex-1 content ml-4">
                                        <h4 class="text-lg text-medium"><a href="services.php">Capacitor Testing</a></h4>
                                        <p class="text-slate-400 mb-0">24 Hours</p>    
                                    </div>
                                </div>

                                <div class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-4 rounded-md bg-white dark:bg-slate-900 mt-6">
                                    <img src="assets/images/corporate/icon5.png" class="h-16 w-16 p-4 bg-slate-50 dark:bg-slate-800 shadow dark:shadow-gray-700 rounded-md" alt="">
                                    <div class="flex-1 content ml-4">
                                        <h4 class="text-lg text-medium"><a href="services.php">Transformer Testing</a></h4>
                                        <p class="text-slate-400 mb-0">52 Hours</p>    
                                    </div>
                                </div>

                                <div class="flex transition-all duration-500 hover:scale-105 shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-4 rounded-md bg-white dark:bg-slate-900 mt-6">
                                    <img src="assets/images/corporate/icon2.png" class="h-16 w-16 p-4 bg-slate-50 dark:bg-slate-800 shadow dark:shadow-gray-700 rounded-md" alt="">
                                    <div class="flex-1 content ml-4">
                                        <h4 class="text-lg text-medium"><a href="services.php">RCD Testing</a></h4>
                                        <p class="text-slate-400 mb-0">36 Hours</p>    
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h5 class="text-xl font-semibold mt-[30px]">Tested Appliances :</h5>
                    
                        <div class="grid lg:grid-cols-3 md:grid-cols-2 mt-6 gap-[30px]">
                            <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                                <img src="assets/images/portfolio/33.jpg" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" alt="">
                                <div class="absolute inset-2 group-hover:bg-white/90 dark:group-hover:bg-slate-900/90 transition duration-500 z-0 rounded-md"></div>
    
                                <div class="content transition-all duration-500">
                                    <div class="icon absolute z-10 hidden group-hover:block top-6 right-6 transition-all duration-500">
                                        <a href="assets/images/portfolio/33.jpg" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white btn-icon rounded-full lightbox"><i class="uil uil-camera"></i></a>
                                    </div>
    
                                    <div class="title absolute z-10 hidden group-hover:block bottom-6 left-6">
                                        <a href="services.php" class="h6 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Capacitor Testing</a>
                                        <p class="text-slate-400 mb-0">Techwind</p>
                                    </div>
                                </div>
                            </div>
        
                            <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                                <img src="assets/images/portfolio/27.png" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" alt="">
                                <div class="absolute inset-2 group-hover:bg-white/90 dark:group-hover:bg-slate-900/90 transition duration-500 z-0 rounded-md"></div>
    
                                <div class="content transition-all duration-500">
                                    <div class="icon absolute z-10 hidden group-hover:block top-6 right-6 transition-all duration-500">
                                        <a href="assets/images/portfolio/27.png" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white btn-icon rounded-full lightbox"><i class="uil uil-camera"></i></a>
                                    </div>
    
                                    <div class="absolute z-10 hidden group-hover:block bottom-6 left-6 transition-all duration-500">
                                        <a href="services.php" class="h6 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Short Circuite Testing</a>
                                        <p class="text-slate-400 mb-0">Techwind</p>
                                    </div>
                                </div>
                            </div>
        
                            <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                                <img src="assets/images/portfolio/29.jpg" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" alt="">
                                <div class="absolute inset-2 group-hover:bg-white/90 dark:group-hover:bg-slate-900/90 transition duration-500 z-0 rounded-md"></div>
    
                                <div class="content transition-all duration-500">
                                    <div class="icon absolute z-10 hidden group-hover:block top-6 right-6 transition-all duration-500">
                                        <a href="assets/images/portfolio/29.jpg" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white btn-icon rounded-full lightbox"><i class="uil uil-camera"></i></a>
                                    </div>
    
                                    <div class="absolute z-10 hidden group-hover:block bottom-6 left-6 transition-all duration-500">
                                        <a href="services.php" class="h6 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Transformer Testing</a>
                                        <p class="text-slate-400 mb-0">Techwind</p>
                                    </div>
                                </div>
                            </div>
        
                            <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                                <img src="assets/images/portfolio/30.jpg" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" alt="">
                                <div class="absolute inset-2 group-hover:bg-white/90 dark:group-hover:bg-slate-900/90 transition duration-500 z-0 rounded-md"></div>
    
                                <div class="content transition-all duration-500">
                                    <div class="icon absolute z-10 hidden group-hover:block top-6 right-6 transition-all duration-500">
                                        <a href="assets/images/portfolio/30.jpg" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white btn-icon rounded-full lightbox"><i class="uil uil-camera"></i></a>
                                    </div>
    
                                    <div class="absolute z-10 hidden group-hover:block bottom-6 left-6 transition-all duration-500">
                                        <a href="services.php" class="h6 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Resistance Testing</a>
                                        <p class="text-slate-400 mb-0">Techwind</p>
                                    </div>
                                </div>
                            </div>
        
                            <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                                <img src="assets/images/portfolio/25.png" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" alt="">
                                <div class="absolute inset-2 group-hover:bg-white/90 dark:group-hover:bg-slate-900/90 transition duration-500 z-0 rounded-md"></div>
    
                                <div class="content transition-all duration-500">
                                    <div class="icon absolute z-10 hidden group-hover:block top-6 right-6 transition-all duration-500">
                                        <a href="assets/images/portfolio/25.png" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white btn-icon rounded-full lightbox"><i class="uil uil-camera"></i></a>
                                    </div>
    
                                    <div class="absolute z-10 hidden group-hover:block bottom-6 left-6 transition-all duration-500">
                                        <a href="services.php" class="h6 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Voltage Testing</a>
                                        <p class="text-slate-400 mb-0">Techwind</p>
                                    </div>
                                </div>
                            </div>
        
                            <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                                <img src="assets/images/portfolio/24.jpg" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500" alt="">
                                <div class="absolute inset-2 group-hover:bg-white/90 dark:group-hover:bg-slate-900/90 transition duration-500 z-0 rounded-md"></div>
    
                                <div class="content transition-all duration-500">
                                    <div class="icon absolute z-10 hidden group-hover:block top-6 right-6 transition-all duration-500">
                                        <a href="assets/images/portfolio/24.jpg" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white btn-icon rounded-full lightbox"><i class="uil uil-camera"></i></a>
                                    </div>
    
                                    <div class="absolute z-10 hidden group-hover:block bottom-6 left-6 transition-all duration-500">
                                        <a href="services.php" class="h6 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">RCD Testing</a>
                                        <p class="text-slate-400 mb-0">Techwind</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Hero -->

        <?php
        include 'footer.php';
        ?>
<?php
    }
else{

    header('location:login.php');
}
    ?>