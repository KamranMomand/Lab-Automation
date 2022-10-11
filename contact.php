<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
    
<!-- Mirrored from shreethemes.in/techwind/layouts/contact-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Jul 2022 22:47:37 GMT -->
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
        ?>

<?php
$error2=NULL;
    include 'config.php';

    if(isset($_POST['btnmsg']))
    {
        $name=$_POST['txtname']; 
        $email=$_POST['txtemail']; 
        $subject=$_POST['txtsubject'];
        $comments=$_POST['txtcomments'];

        $query="INSERT INTO `contact`(`contact_name`, `contact_email`, `contact_question`, `contact_comment`) VALUES ('$name','$email','$subject','$comments')";
        $result=mysqli_query($conn,$query);
        if($result)
        {
           $error2="Message Send Successfully.";
        }
    }   ?> 

    <!-- Start Hero -->
    <section class="relative table w-full py-36 lg:py-44 bg-no-repeat ">
        
            <div class="absolute inset-0 bg-black"><img src="../E-Project/assets/images/corporate/12.jpg" /></div>
            <div class="container">
                <div class="grid grid-cols-1 pb-8 text-center mt-10">
                    <h3 class="md:text-4xl text-3xl md:leading-normal tracking-wide leading-normal font-medium text-white">Contact Us</h3>
                </div><!--end grid-->
            </div><!--end container-->
            
            <div class="absolute text-center z-10 bottom-5 right-0 left-0 mx-3">
                <ul class="breadcrumb tracking-[0.5px] breadcrumb-light mb-0 inline-block">
                   <li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="index.php">Techwind</a></li>
                    <li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">Contact Us</li>
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
                <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">
                    <div class="text-center px-6 mt-6">
                        <div class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-700 mx-auto">
                            <i class="uil uil-question-circle"></i>
                        </div>

                        <div class="content mt-7">
                            <h5 class="title h5 text-xl font-medium">Phone</h5>
                            <p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit</p>
                            
                            <div class="mt-5">
                                <a href="tel:+152534-468-854" class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">+152 534-468-854</a>
                            </div>
                        </div>
                    </div>

                    <div class="text-center px-6 mt-6">
                        <div class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-700 mx-auto">
                            <i class="uil uil-file-bookmark-alt"></i>
                        </div>

                        <div class="content mt-7">
                            <h5 class="title h5 text-xl font-medium">Email</h5>
                            <p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit</p>
                            
                            <div class="mt-5">
                                <a href="mailto:contact@example.com" class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">contact@example.com</a>
                            </div>
                        </div>
                    </div>

                    <div class="text-center px-6 mt-6">
                        <div class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-700 mx-auto">
                            <i class="uil uil-cog"></i>
                        </div>

                        <div class="content mt-7">
                            <h5 class="title h5 text-xl font-medium">Location</h5>
                            <p class="text-slate-400 mt-3">C/54 Northwest Freeway, Suite 558, <br> Houston, USA 485</p>
                            
                            <div class="mt-5">
                                <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin"
                                data-type="iframe" class="video-play-icon read-more lightbox btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">View on Google map</a>
                            </div>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->

            <div class="container md:mt-24 mt-16">
                <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                    <div class="lg:col-span-7 md:col-span-6">
                        <img src="assets/images/contact.svg" alt="">
                    </div>

                    <div class="lg:col-span-5 md:col-span-6 mt-8 md:mt-0">
                        <div class="lg:ml-5">
                            <div class="bg-white dark:bg-slate-900 rounded-md shadow dark:shadow-gray-700 p-6">
                                <h3 class="mb-6 text-2xl leading-normal font-medium">Get in touch !</h3>

                                <form method="post" name="myForm" id="myForm" >
                                    <p class="mb-0" id="error-msg"></p>
                                    <div id="simple-msg"></div>
                                    <div class="grid lg:grid-cols-12 lg:gap-6">
                                        <div class="lg:col-span-6 mb-5">
                                            <div class="text-left">
                                                <label for="name" class="font-semibold">Your Name:</label>
                                                <div class="form-icon relative mt-2">
                                                    <i data-feather="user" class="w-4 h-4 absolute top-3 left-4"></i>
                                                    <input name="txtname" id="name" type="text" class="form-input pl-11" placeholder="Name :">
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="lg:col-span-6 mb-5">
                                            <div class="text-left">
                                                <label for="email" class="font-semibold">Your Email:</label>
                                                <div class="form-icon relative mt-2">
                                                    <i data-feather="mail" class="w-4 h-4 absolute top-3 left-4"></i>
                                                    <input name="txtemail" id="email" type="email" class="form-input pl-11" placeholder="Email :">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="grid grid-cols-1">
                                        <div class="mb-5">
                                            <div class="text-left">
                                                <label for="subject" class="font-semibold">Your Question:</label>
                                                <div class="form-icon relative mt-2">
                                                    <i data-feather="book" class="w-4 h-4 absolute top-3 left-4"></i>
                                                    <input name="txtsubject" id="subject" class="form-input pl-11" placeholder="Subject :">
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="mb-5">
                                            <div class="text-left">
                                                <label for="comments" class="font-semibold">Your Comment:</label>
                                                <div class="form-icon relative mt-2">
                                                    <i data-feather="message-circle" class="w-4 h-4 absolute top-3 left-4"></i>
                                                    <textarea name="txtcomments" id="comments" class="form-input pl-11 h-28" placeholder="Message :"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" id="submit" name="btnmsg" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md justify-center flex items-center">Send Message</button>
                                    <div style="color:rgb(79 70 229 / .9); font-weight:bold">
                                        <br/>&nbsp;<?php echo $error2 ?>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Section-->

        <div class="container-fluid relative">
            <div class="grid grid-cols-1">
                <div class="w-full leading-[0] border-0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" style="border:0" class="w-full h-[500px]" allowfullscreen></iframe>
                </div>
            </div><!--end grid-->
        </div><!--end container-->

        <?php
        include 'footer.php';
        ?>