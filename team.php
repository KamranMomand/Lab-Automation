<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
    
<!-- Mirrored from shreethemes.in/techwind/layouts/page-team.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Jul 2022 22:45:13 GMT -->
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

    <?php
        include 'header.php';
        ?>

    <!-- Start Hero -->
    <section class="relative table w-full py-36 lg:py-44 bg-no-repeat ">
        
            <div class="absolute inset-0 bg-black"><img src="../E-Project/assets/images/corporate/7.jpg" /></div>
            <div class="container">
                <div class="grid grid-cols-1 pb-8 text-center mt-10">
                    <h3 class="mb-6 md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">Team Member</h3>

                    <p class="text-slate-300 text-lg max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
                </div><!--end grid-->
            </div><!--end container-->
            
            <div class="absolute text-center z-10 bottom-5 right-0 left-0 mx-3">
                <ul class="breadcrumb tracking-[0.5px] breadcrumb-light mb-0 inline-block">
                   <li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="index.php">Techwind</a></li>
                   <li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="#">Company</a></li>
                    <li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">Team</li>
                </ul>
            </div>
        </section><!--end section-->
        <div class="relative">
            <div class="shape overflow-hidden z-1 text-white dark:text-slate-900">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!-- End Hero -->

        <!-- Start Section-->
        <section class="relative md:py-24 py-16">
            <div class="container">
                <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                    <div class="lg:col-span-5 md:col-span-6">
                        <div class="grid grid-cols-12 gap-6 items-center">
                            <div class="col-span-6">
                                <div class="grid grid-cols-1 gap-6">
                                    <img src="assets/images/about/10.jpg" class="shadow rounded-md" alt="">
                                    <img src="assets/images/about/11.png" class="shadow rounded-md" alt="">
                                </div>
                            </div>

                            <div class="col-span-6">
                                <div class="grid grid-cols-1 gap-6">
                                    <img src="assets/images/about/12.jpg" class="shadow rounded-md" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-7 md:col-span-6 mt-8 md:mt-0">
                        <div class="lg:ml-5">
                            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-medium text-black dark:text-white">Who we are ?</h3>

                            <p class="text-slate-400 max-w-xl">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect. Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with 'real' content.</p>
                        
                            <div class="mt-6">
                                <a href="contact.php" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mr-2 mt-2"><i class="uil uil-envelope"></i> Contact us</a>
                            </div>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->

            <div class="container md:mt-24 mt-16">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-medium text-black dark:text-white">Our Professional Team</h3>

                    <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
                </div><!--end grid-->
                
                <div class="grid md:grid-cols-12 grid-cols-1 items-center mt-8 gap-[30px]">
                <?php
        include 'config.php';
        $query="select * from `team`";
        $result=mysqli_query($conn,$query);
                                    
        while($row=mysqli_fetch_assoc($result))
        {
?>    
                <div class="lg:col-span-3 md:col-span-6">
                    
                        <div class="team p-6 rounded-md shadow-md dark:shadow-gray-700 dark:border-gray-700 bg-white dark:bg-slate-900 relative">
                            <div class="absolute inset-0 bg-indigo-600/10 rounded-md -mt-[10px] -ml-[10px] h-[98%] w-[98%] -z-1"></div>
                            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['team_profile']);?>" class="h-24 w-24 rounded-full shadow-md dark:shadow-gray-700" alt="">

                            <div class="content mt-4">
                                <a class="text-lg font-medium hover:text-indigo-600 block"><?php echo $row['team_name'];?></a>
                                <span class="text-slate-400 block"><?php echo $row['team_designation'];?></span>

                                <p class="text-slate-400 mt-4"><?php echo $row['team_bio'];?></p>

                                <ul class="list-none mt-4">
                                    <li class="inline"><a href="https://www.facebook.com/" target="Blank" class="btn btn-icon btn-sm border dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i data-feather="facebook" class="h-4 w-4"></i></a></li>
                                    <li class="inline"><a href="https://www.instagram.com/" target="Blank" class="btn btn-icon btn-sm border dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i data-feather="instagram" class="h-4 w-4"></i></a></li>
                                    <li class="inline"><a href="https://www.twitter.com/" target="Blank" class="btn btn-icon btn-sm border dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i data-feather="twitter" class="h-4 w-4"></i></a></li>
                                    <li class="inline"><a href="https://www.linkedin.com/" target="Blank" class="btn btn-icon btn-sm border dark:border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i data-feather="linkedin" class="h-4 w-4"></i></a></li>
                                </ul><!--end icon-->
                            </div>
                        </div>
                        
                    </div>
                    <?php
                            }
                            ?>
            </div><!--end container-->                        
                </div>

            <div class="container md:mt-24 mt-16">
                <div class="grid grid-cols-1 text-center">
                    <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-medium text-black dark:text-white">Have Question ? Get in touch!</h3>

                    <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
                
                    <div class="mt-6">
                        <a href="contact.php" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mr-2 mt-2"><i class="uil uil-phone"></i> Contact us</a>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Section-->

        <?php
        include 'footer.php';
        ?>