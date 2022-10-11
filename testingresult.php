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
        <link
            href="assets/style.a49749f4fb5cff923e10.css" rel="stylesheet">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    
    <?php
        include 'header.php';
        include 'dashboardheader.php';

        $cid=$_SESSION['company_id'];
        $at_query="select * from product_testing pt join product p on pt.pro_id=p.pro_id join testing_type tt on pt.testing_id=tt.testing_id where p.company_id='$cid'";
        $at_result=mysqli_query($conn,$at_query);

        ?>
<div class="md:px-3 mt-[30px] md:mt-0 ">
                        <div class="p-6 rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <h5 class="text-lg font-semibold mb-4">Testing Results :</h5>


                               
                                    <!-- Start -->
                                    <div class="rounded-sm border
                                        border-slate-200">
                                        
                                        <div class="lz">
                                        
                                            <table class="av oq lg lb responsive">
                                                <!-- Table body -->
                                                
                                                                                                
                                                <thead class="bg-gray">
                                        <tr style="background-color: rgba(77, 69, 230, 0.05); color: #4f46e5; overflow-x: hidden;">
                                            <th scope="col" style="text-align: left; vertical-align: bottom; border-top: 1px solid #dee2e6; padding: 12px; ">Product</th>
                                            <th scope="col" style="text-align: left; vertical-align: bottom; border-top: 1px solid #dee2e6; padding: 12px;">Product Code</th>
                                            <th scope="col" style="text-align: left; vertical-align: bottom; border-top: 1px solid #dee2e6; padding: 12px;">Testing Type</th>
                                            <th scope="col" style="text-align: left; vertical-align: bottom; border-top: 1px solid #dee2e6; padding: 12px;">Start Date</th>
                                            <th scope="col" style="text-align: left; vertical-align: bottom; border-top: 1px solid #dee2e6; padding: 12px;">End Date</th>
                                            <th scope="col" style="text-align: left; vertical-align: bottom; border-top: 1px solid #dee2e6; padding: 12px;">Status</th>
                                            <th scope="col" style="text-align: left; vertical-align: bottom; border-top: 1px solid #dee2e6; padding: 12px;"></th>
                                        </tr>
                                    </thead>
                                    <?php while($at_row=mysqli_fetch_assoc($at_result)) {?>
                                                <tbody class="text-sm" x-data="{
                                                    open: false }">
                                                    <!-- Row -->
                                                    
                                                    <tr>
                                                        <td class="v_ wk xe vm
                                                            co">
                                                            <div class="flex
                                                                items-center
                                                                text-slate-800">
                                                                <div class="ua
                                                                    ol ap flex
                                                                    items-center
                                                                    justify-center
                                                                    hy
                                                                    rounded-full
                                                                    mr-2 _f">
                                                                   
                                                                    <img
                                                                        class="rounded-full
                                                                        "
                                                                        src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($at_row['pro_image']);?>"
                                                                        width="30"
                                                                        height="30"
                                                                        alt="User
                                                                        01">
                                                                </div>
                                                                <div class="gk
                                                                    text-slate-800"><?php echo $at_row['pro_name'] ?></div>
                                                            </div>
                                                        </td>
                                                        <td class="v_ wk xe vm
                                                            co">
                                                            <div class="gh gk" style="color: #4f46e5"><?php echo $at_row['pro_testing_code'] ?></div>
                                                        </td>
                                                        <td class="v_ wk xe vm co">
                                                            <div class="gh"><?php echo $at_row['testing_title'] ?></div>
                                                        </td>
                                                        <td class="v_ wk xe vm
                                                            co">
                                                            <div class="gp"><?php echo $at_row['pro_testing_start_date'] ?></div>
                                                        </td>
                                                        <td class="v_ wk xe vm
                                                            co">
                                                            <div class="gh"><?php echo $at_row['pro_testing_end_date'] ?></div>
                                                        </td>
                                                        
                                                        <td class="v_ wk xe vm
                                                            co">
                                                            <div
                                                                class="inline-flex
                                                                gk pe yh
                                                                rounded-full gp
                                                                vk vy"><?php echo $at_row['pro_testing_status'] ?></div>
                                                        </td>
                                                        <td class="v_ wk xe vm
                                                            co ut">
                                                            <div class="flex
                                                                items-center">
                                                                <button
                                                                    class="yu xm
                                                                    fe"
                                                                    :class="{
                                                                    'az': open
                                                                    }"
                                                                    @click.prevent="open=
                                                                    !open"
                                                                    :aria-expanded="open"
                                                                    aria-controls="description-01">
                                                                    <span
                                                                        class="tc">Menu</span>
                                                                    <svg
                                                                        class="uu
                                                                        of db"
                                                                        viewBox="0
                                                                        0 32
                                                                        32">
                                                                        <path
                                                                            d="M16
                                                                            20l-5.4-5.4
                                                                            1.4-1.4
                                                                            4 4
                                                                            4-4
                                                                            1.4
                                                                            1.4z"></path>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!--
                                                Example of content revealing when clicking the button on the right side:
                                                Note that you must set a "colspan" attribute on the <td> element,
                                                and it should match the number of columns in your table
                                                -->
                                                    <tr id="description-01"
                                                        role="region"
                                                        x-show="open"
                                                        x-cloak="">
                                                        <td colspan="7"
                                                            class="v_ wk xe vm">
                                                            <div class="flex
                                                                items-center hq
                                                                vf ia">
                                                                <svg class="ue
                                                                    on ap db yu
                                                                    mr-2">
                                                                    <path d="M1
                                                                        16h3c.3
                                                                        0
                                                                        .5-.1.7-.3l11-11c.4-.4.4-1
                                                                        0-1.4l-3-3c-.4-.4-1-.4-1.4
                                                                        0l-11
                                                                        11c-.2.2-.3.4-.3.7v3c0
                                                                        .6.4 1 1
                                                                        1zm1-3.6l10-10L13.6
                                                                        4l-10
                                                                        10H2v-1.6z"></path>
                                                                </svg>
                                                                <div class="gz"><?php echo $at_row['pro_testing_result'] ?></div>
                                                            </div>
                                                            <br/>
                                                            <div style="background-color: #fff0f0" class="flex
                                                                items-center hq
                                                                vf ia">
                                                                <svg class="ue
                                                                    on ap db yu
                                                                    mr-2">
                                                                    <path d="M1
                                                                        16h3c.3
                                                                        0
                                                                        .5-.1.7-.3l11-11c.4-.4.4-1
                                                                        0-1.4l-3-3c-.4-.4-1-.4-1.4
                                                                        0l-11
                                                                        11c-.2.2-.3.4-.3.7v3c0
                                                                        .6.4 1 1
                                                                        1zm1-3.6l10-10L13.6
                                                                        4l-10
                                                                        10H2v-1.6z"></path>
                                                                </svg>
                                                                <div class="gz"><?php echo $at_row['pro_testing_fault'] ?></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    
                                                </tbody>
                                                <?php } ?> 
                                            </table>
                                            
                                        </div>
                                       
                                    </div><br/>
                                    <!-- End -->
                                
                                                               
                            
                            </div></div>







                                </section>
                                <script src="assets/main.f640b348fcfd37dfcd91.js"></script>
        <?php
        include 'footer.php';
        ?>
<?php
    }
else{

    header('location:login.php');
}
    ?>