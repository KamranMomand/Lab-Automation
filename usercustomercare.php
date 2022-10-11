<?php
session_start();
if ($_SESSION['companyname']) {
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <style>
        .msgtbl{
            width: 100%;
        }
        </style>
    </head>
    <?php
    
    include 'header.php';
    include 'dashboardheader.php';
?>


<script>
    $(document).ready(function(){

        alldata();
        function alldata(){
   $.ajax({
       url:'ccconfig.php',
       type:'GET',
       data:{Display:1,},
       success:function(response)
       {
           $('#datadisplay').html(response);
       },
       error:function(err)
       {
           alert ("Api Call Failed");
       },
   });
}


    $('#btnmsg').click(function(){
        
        var message=$('#txtcomments').val();

        $.ajax({

        url:'ccconfig.php',
        type:'POST',
        data:{
        Add:1,
        c_msg:message,
        },
        success:function(response){
            if(response)
            {
                alldata();
                blankfield();
            }else
            {
                alert ("Failed");
            }
        },
        error:function(err)
        {
            alert ("Api Call Failed");
        },
           
        });
    });

    function blankfield(){
        $('#txtcomments').val("");
    }
    
});

</script>
 
    
<div class="lg:w-3/4 md:w-2/3 md:px-3 mt-[30px] md:mt-0">
        <div class="p-6 rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
            <h5 class="text-lg font-semibold mb-4">Customer Care :</h5>
            
                                    <p class="mb-0" id="error-msg"></p>

                                    <div class="rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900 mt-[30px]">
                                <table class="msgtbl">
                                    <thead class="bg-gray">
                                        <tr style="background-color: rgba(77, 69, 230, 0.05); color: #4f46e5; overflow-x: hidden;">
                                            <th scope="col" style="text-align: left; vertical-align: bottom; border-top: 1px solid #dee2e6; padding: 12px; ">Message</th>
                                            <th scope="col" style="text-align: left; vertical-align: bottom; border-top: 1px solid #dee2e6; padding: 12px; "></th>
                                        </tr>
                                    </thead>
                                    <tbody id="datadisplay">

                                    </tbody>
                                </table>
                                    </div>

                                    <br/>
                                    <div id="simple-msg"></div>
                                        
                                    <div class="grid grid-cols-1">
                                            
                                        <div class="mb-5">
                                            <div class="text-left">
                                                <label for="comments" class="font-semibold">Message:</label>
                                                <div class="form-icon relative mt-2">
                                                    <i data-feather="message-circle" class="w-4 h-4 absolute top-3 left-4"></i>
                                                    <textarea name="txtcomments" id="txtcomments" class="form-input pl-11 h-28" placeholder="Message :"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" id="btnmsg" name="btnmsg" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md justify-center flex items-center">Send Message</button>
                                 
        </div>
    </div>


    </div>
    <!--end grid-->
    </div>
    <!--end container-->
    </section>
    <!--end section-->
    <!-- End Hero -->

    <?php
    include 'footer.php';
    ?>
<?php
} else {

    header('location:login.php');
}
?>