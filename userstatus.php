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
        <link rel="icon" href="img/logo.png" type="image/png">
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
                        
                        <label  class="tc">Search</label> <input
                                    id="myInput" onkeyup="myFunction()" class="tn mf kn" type="search"
                                    placeholder="Search by Product Code…"> <input
                                    id="myInput2" onkeyup="myFunction2()" class="tn mf kn" type="search"
                                    placeholder="Search by Product Name…"> <br/><br/>
                                    
                        <div class="rounded-sm border
                                        border-slate-200">
                                        
                                        <div class="lz">
                                        
                                            <table class="av oq lg lb" id="myTable">
                                                <!-- Table body -->
                                                
                                                                                                
                                                <thead class="bg-gray">
                                        <tr style="background-color: rgba(77, 69, 230, 0.05); color: #4f46e5; overflow-x: hidden;">
                                            <th scope="col" style="text-align: left; vertical-align: bottom; border-top: 1px solid #dee2e6; padding: 12px; ">Product</th>
                                            <th scope="col" style="text-align: left; vertical-align: bottom; border-top: 1px solid #dee2e6; padding: 12px;">Product Code</th>
                                            <th scope="col" style="text-align: left; vertical-align: bottom; border-top: 1px solid #dee2e6; padding: 12px;">Revision</th>
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
                                                        <td class="v_ wk xe vm
                                                            co">
                                                            <div class="gh gk" ><?php echo $at_row['pro_revision'] ?></div>
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
                                                        <?php
                                                        $stat=$at_row['pro_testing_status'];
                                                        if($stat=="Failed"){ ?>
                                                            <div
                                                                class="inline-flex gk pt yl rounded-full gp vk vy"><?php echo $at_row['pro_testing_status'] ?>
                                                            </div>
                                                        <?php
                                                        }else{?>

                                                            <div
                                                                class="inline-flex
                                                                gk pe yh
                                                                rounded-full gp
                                                                vk vy"><?php echo $at_row['pro_testing_status'] ?>
                                                            </div>

                                                        <?php
                                                        }
                                                        
                                                        ?>

                                                        </td>
                                                        
                                                    </tr>
                                                    
                                                </tbody>
                                                <?php } ?> 
                                            </table>
                                            
                                        </div>
                                       
                                    </div><br/>
                   
                   
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Hero -->
      
        <script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

function myFunction2() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput2");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
        <?php
        include 'footer.php';
        ?>
<?php
    }
else{

    header('location:login.php');
}
    ?>



