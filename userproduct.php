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

    </head>

    <?php
    include 'header.php';
    include 'dashboardheader.php';
    
$pc_query="select * from pro_category";
$pc_result=mysqli_query($conn,$pc_query);
$success=NULL;
        $failed=NULL;
        $codeerr=NULL;
        $codeerr2=NULL;
if(isset($_POST['btnpadd']))
    {
        
        $cid=$_SESSION['company_id'];
        $pcode=$_POST['txtmno'];
        $pcode2=$_POST['txtpcode'];
        $pmno=$_POST['txtmno'];
        $pcode2_length=strlen($pcode2);
        $pcode3_length=strlen($pmno);
        $pname=$_POST['txtpname'];
        $pdes=$_POST['txtpdes'];
        $pcategory=$_POST['ddlcategory'];
        $pimage=addslashes(file_get_contents($_FILES['pimage']['tmp_name']));
        
        if($pcode2_length <= 8 && $pcode2_length > 7){
           if($pcode3_length <= 5 && $pcode3_length > 4){

        $p_query="INSERT INTO `product`(`pro_code`, `pro_name`, `pro_cat_id`, `pro_manufacturing_no`, `pro_description`, `pro_image`, `company_id`) VALUES ('$pcode2','$pname','$pcategory','$pmno','$pdes','$pimage','$cid')";
        $p_result=mysqli_query($conn,$p_query);
        if($p_result)
        {
            $success="Add Successfully!";
        }
        else
        {
            $failed="Add Successfully Failed!";
        } 
    }else{
        
        $codeerr2="Product Code Must be 5 Digits";
    }
    }else{
        $codeerr="Product Code Must be 8 Digits";
        
    }
    }  
    
?>

    <div class="lg:w-3/4 md:w-2/3 md:px-3 mt-[30px] md:mt-0">
        <div class="p-6 rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
            <h5 class="text-lg font-semibold mb-4">Product :</h5>
            <form method="POST" enctype="multipart/form-data">
                <div class="grid lg:grid-cols-2 grid-cols-1 gap-5">
                    <div>
                        <label class="form-label font-medium">Product Name : <span class="text-red-600">*</span></label>
                        <div class="form-icon relative mt-2">
                            <i data-feather="briefcase" class="w-4 h-4 absolute top-3 left-4"></i>
                            <input type="text" class="form-input pl-12" placeholder="Product Name:" id="txtpname" name="txtpname" required="">
                        </div>
                    </div>
                    <div>
                        <label class="form-label font-medium">Product Code : <span class="text-red-600">*</span></label>
                        <div class="form-icon relative mt-2">
                            <i data-feather="briefcase" class="w-4 h-4 absolute top-3 left-4"></i>
                            <input type="text" class="form-input pl-12" placeholder="Product Code: 8 Digits" id="txtpcode" name="txtpcode" required=""><br/>
                            <span style="color:red"><?php echo $codeerr ?></span>
                        </div>
                    </div>
                    <div>
                        <label class="form-label font-medium">Product Manufacturing # : <span class="text-red-600">*</span></label>
                        <div class="form-icon relative mt-2">
                            <i data-feather="hash" class="w-4 h-4 absolute top-3 left-4"></i>
                            <input type="text" class="form-input pl-12" placeholder="Product Manufacturing #: 5 Digits" id="txtmno" name="txtmno" required="">
                            <span style="color:red"><?php echo $codeerr2 ?></span>
                        </div>
                    </div>
                    <div>
                        <label class="form-label font-medium">Product Category : <span class="text-red-600">*</span></label>
                        <div class="form-icon relative mt-2">
                            <i data-feather="list" class="w-4 h-4 absolute top-3 left-4"></i>
                            <select name="ddlcategory" class="form-input pl-12" required="">
                                <option selected>Select Category..</option>
                                <?php
                                while ($pc_row = mysqli_fetch_assoc($pc_result)) {
                                ?>
                                    <option value="<?php echo $pc_row['pro_cat_id']; ?>"><?php echo $pc_row['pro_cat_name']; ?></option>
                                <?php
                                }
                                ?>
                            </select>

                        </div>
                    </div>
                    <div>
                        <label class="form-label font-medium">Product Image : <span class="text-red-600">*</span></label>
                        <div class="form-icon relative mt-2">
                            <i data-feather="image" class="w-4 h-4 absolute top-3 left-4"></i>
                            <input name="pimage" id="pimage" type="file" class="form-input pl-12" placeholder="Occupation :">
                        </div>
                    </div>
                </div>
                <!--end grid-->

                <div class="grid grid-cols-1">
                    <div class="mt-5">
                        <label class="form-label font-medium">Production Description : <span class="text-red-600">*</span> </label>
                        <div class="form-icon relative mt-2">
                            <i data-feather="align-justify" class="w-4 h-4 absolute top-3 left-4"></i>
                            <textarea name="txtpdes" id="txtpdes" class="form-input pl-11 h-28" placeholder="Description :"></textarea>
                        </div>
                    </div>
                </div>
                <!--end row-->

                <input type="submit" id="btnpadd" name="btnpadd" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-5" value="Add Product"> <br/><br/><span style="color:red"><?php echo $failed ?></span> <span style="color:purple"><?php echo $success ?></span>
            </form>
            <!--end form-->
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