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
        ?>


    <script>
    $(document).ready(function(){

        alldata();
        function alldata(){
   $.ajax({
       url:'config10.php',
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

    $('#btnrsend').click(function(){
        
        var pid=$('#txtpid').val();
        var type=$('#ddlcategory2').val();

        $.ajax({

        url:'config10.php',
        type:'POST',
        data:{
        Add:1,
        p_id:pid,
        t_type:type,
        },
        success:function(response){
            if(response)
            {
                $('#fdisplay').hide();
                var msg = "Testing Request Successfully! Go to Status Page For More Details";
                document.getElementById("msgdisplay").innerHTML = msg;
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

    $(document).on('click','.btnapply',function(){
        var row=$(this).val();
        $('#txtpid').val(row);

        $('#fdisplay').show();
        
    });

    function blankfield(){
        $('#txtpid').val("");
        $('#ddlcategory2').val("");
    }
    
});

</script>
    
<div class="md:px-3 mt-[30px] md:mt-0 ">
                        <div class="p-6 rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <h5 class="text-lg font-semibold mb-4">Testing Request :</h5>

                        <div class="rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900 mt-[30px]">
                        
                        <table >
                                    <thead class="bg-gray">
                                        <tr style="background-color: rgba(77, 69, 230, 0.05); color: #4f46e5; overflow-x: hidden;">
                                            <th scope="col" style="text-align: left; vertical-align: bottom; border-top: 1px solid #dee2e6; padding: 12px; ">Product</th>
                                            <th scope="col" style="text-align: left; vertical-align: bottom; border-top: 1px solid #dee2e6; padding: 12px;">Name</th>
                                            <th scope="col" style="text-align: left; vertical-align: bottom; border-top: 1px solid #dee2e6; padding: 12px;">Category</th>
                                            <th scope="col" style="text-align: left; vertical-align: bottom; border-top: 1px solid #dee2e6; padding: 12px;">Description</th>
                                            <th scope="col" style="text-align: left; vertical-align: bottom; border-top: 1px solid #dee2e6; padding: 12px;">Product Code</th>
                                            <th scope="col" style="text-align: left; vertical-align: bottom; border-top: 1px solid #dee2e6; padding: 12px;">Manufacturing #</th>
                                            <th scope="col" style="text-align: left; vertical-align: bottom; border-top: 1px solid #dee2e6; padding: 12px;"></th>
                                        </tr>
                                    </thead>
                                    <tbody id="datadisplay">
                                       
                                    </tbody>
</table>
                                    </div>
                                    <br/>
                                    <span style="color: #4f46e5 ;" id="msgdisplay"></span>
<?php

$pc_query="select * from testing_type";
$pc_result=mysqli_query($conn,$pc_query);?>

<div id="fdisplay" style="display: none ;">
                                
                                <div class="grid lg:grid-cols-1 grid-cols-2 gap-5">
                                <label class="form-label font-medium">Testing Type : <span class="text-red-600">*</span></label>
                                <input type="hidden" id="txtpid"/>
                                <select id="ddlcategory2" class="form-input pl-12" required="">
                                <option selected>Select Types..</option>
                                <?php
                                while ($pc_row = mysqli_fetch_assoc($pc_result)) {
                                ?>
                                    <option value="<?php echo $pc_row['testing_id']; ?>"><?php echo $pc_row['testing_title']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                                    
                                </div><!--end row-->

                                <button id="btnrsend" name="btnrsend" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-5">Send Request</button>
                            
</div>


</div>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Hero -->
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