<?php

if($_SESSION['company_id'])
{
    include 'config.php';
    $company_id=$_SESSION['company_id'];
    $query="select * from `company` WHERE company_id='$company_id'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_assoc($result);
}
 ?>
    <!-- Start Hero -->
    <section class="relative lg:pb-24 pb-16">
            <div class="container-fluid">
                <div class="profile-banner relative text-transparent">
                    <input id="pro-banner" name="profile-banner" type="file" class="hidden" onchange="loadFile(event)" />
                    <div class="relative shrink-0">
                        <img src="../E-Project/assets/images/corporate/8.jpg" class="h-80 w-full object-cover" id="profile-banner" alt="">
                        <div class="absolute inset-0 bg-black/70"></div>
                        <label class="absolute inset-0 cursor-pointer" for="pro-banner"></label>
                    </div>
                </div>
            </div><!--end container-->

            <div class="container lg:mt-24 mt-16">
                <div class="md:flex">
                    <div class="lg:w-1/4 md:w-1/3 md:px-3">
                        <div class="relative md:-mt-48 -mt-32">
                            <div class="p-6 rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                                <div class="profile-pic text-center mb-5">
                                    <input id="pro-img" name="profile-image" type="file" class="hidden" onchange="loadFile(event)" />
                                    <div>
                                        <div class="relative h-28 w-28 mx-auto">
                                            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['company_logo']);?>" class="rounded-full shadow dark:shadow-gray-700 ring-4 ring-slate-50 dark:ring-slate-800" id="profile-image" alt="">
                                            <label class="absolute inset-0 cursor-pointer" for="pro-img"></label>
                                        </div>

                                        <div class="mt-4">
                                            <h5 class="text-lg font-semibold"><?php echo $row['company_name'];?></h5>
                                            <p class="text-slate-400"><?php echo $row['company_email'];?></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="border-t dark:border-gray-700">
                                    <ul class="list-none sidebar-nav mb-0 mt-3" id="navmenu-nav">
                                        <li class="navbar-item account-menu">
                                            <a href="userprofile.php" class="navbar-link text-slate-400 flex items-center py-2 rounded">
                                                <span class="mr-2 text-[18px] mb-0"><i class="uil uil-dashboard"></i></span>
                                                <h6 class="mb-0 font-semibold">Profile</h6>
                                            </a>
                                        </li>
    
                                        <li class="navbar-item account-menu">
                                            <a href="userproduct.php" class="navbar-link text-slate-400 flex items-center py-2 rounded">
                                                <span class="mr-2 text-[18px] mb-0"><i class="uil uil-diary-alt"></i></span>
                                                <h6 class="mb-0 font-semibold">Product</h6>
                                            </a>
                                        </li>
    
                                        <li class="navbar-item account-menu">
                                            <a href="userproducttesting.php" class="navbar-link text-slate-400 flex items-center py-2 rounded">
                                                <span class="mr-2 text-[18px] mb-0"><i class="uil uil-credit-card"></i></span>
                                                <h6 class="mb-0 font-semibold">Testing Request</h6>
                                            </a>
                                        </li>
                                        <?php 
                                        $cid=$_SESSION['company_id'];
                                        $rf_query="select pro_testing_result, pro_testing_fault from product_testing where employee_id=$cid";
                                        $rf_result=mysqli_query($conn,$rf_query);
                                        $rf_row=mysqli_fetch_array($rf_result);
                                        if($rf_row>0){

                                        $tresult=$rf_row['pro_testing_result'];
                                        $tfault= $rf_row['pro_testing_fault'];

                                        if($tresult){
                            
                                        ?>
                                        <li class="navbar-item account-menu">
                                            <a href="testingresult.php" class="navbar-link text-slate-400 flex items-center py-2 rounded">
                                                <span class="mr-2 text-[18px] mb-0"><i class="uil uil-receipt"></i></span>
                                                <h6 class="mb-0 font-semibold">Result</h6>
                                            </a>
                                        </li>
                                        <?php }}?>
                                        <li class="navbar-item account-menu">
                                            <a href="userstatus.php" class="navbar-link text-slate-400 flex items-center py-2 rounded">
                                                <span class="mr-2 text-[18px] mb-0"><i class="uil uil-receipt"></i></span>
                                                <h6 class="mb-0 font-semibold">Status</h6>
                                            </a>
                                        </li>
    
                                        <li class="navbar-item account-menu">
                                            <a href="usercustomercare.php" class="navbar-link text-slate-400 flex items-center py-2 rounded">
                                                <span class="mr-2 text-[18px] mb-0"><i class="uil uil-process"></i></span>
                                                <h6 class="mb-0 font-semibold">Customer Care</h6>
                                            </a>
                                        </li>
        
                                        <li class="navbar-item account-menu">
                                            <a href="logout.php" class="navbar-link text-slate-400 flex items-center py-2 rounded">
                                                <span class="mr-2 text-[18px] mb-0"><i class="uil uil-power"></i></span>
                                                <h6 class="mb-0 font-semibold">Sign Out</h6>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>