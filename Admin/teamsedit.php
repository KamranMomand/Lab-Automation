<?php
session_start();
if ($_SESSION['admin_id']) {
?>
<?php
$error=NULL;
$error2=NULL;
if(isset($_POST['btneteam']))
{
    $id=$_POST['txtid'];
    $name=$_POST['txtname']; 
        $desig=$_POST['txtdesig']; 
        $bio=$_POST['txtbio'];
        $email=$_POST['txtemail']; 
        $pass=$_POST['txtpass'];
        $profile=addslashes(file_get_contents($_FILES['txtprofile']['tmp_name']));
        define('host','localhost');
                        define('username','root');
                        define('password','');
                        define('dbname','lab_automation');

                        $conn=mysqli_connect(host,username,password,dbname);
                        if(!$conn)
                        {
                            alert("connection not created");
                        }

        $query = "UPDATE `team` SET `team_name`='$name',`team_designation`='$desig',`team_bio`='$bio',`team_email`='$email',`team_password`='$pass',`team_profile`='$profile' WHERE `team_id`='$id'";
        $result =mysqli_query($conn,$query);
        if($result)
        {
            $error="Congratulations!";
            $error2="You Team Has Been Updated.";
            header('location:teams.php');
        }else{
            $error3="Alert!";
        $error4="Something Wrong! Please Try Again...";
        }
    
}

?>
    <?php include 'header.php'; 
    
    if(isset($_GET['id']))
{
    $id=$_GET['id'];
    
        $query="Select * from `team` where `team_id`='$id'";
        $result=mysqli_query($conn,$query);
        $row=mysqli_fetch_assoc($result);
    
}else{
    header('location:teams.php');
}
    ?>




<main>
        <div class="vd jd tto vv oq ar ri">
            <!-- Page header -->
            <div class="ry">
                <h1 class="gg zj text-slate-800 font-bold">Edit Teams</h1>
            </div>
            
            <div class="ck border-slate-200">
                <div class="la ie">
                    <div>
                        <form method="POST" enctype="multipart/form-data">
                            <div class="sq fx qz">

                            <div>
                                    <!-- Start -->
                                    <div>
                                        <label class="block text-sm gk rx" for="mandatory">Full Name <span class="yl">*</span></label>
                                        <input id="txtname" name="txtname" class="tn oq" type="text" required="" value="<?php echo $row['team_name'];?>">
                                        <input id="txtid" name="txtid" class="tn oq" type="hidden" required="" value="<?php echo $row['team_id'];?>">
                                    </div>
                                    <!-- End -->
                                </div>

                                <div>
                                    <!-- Start -->
                                    <div>
                                        <label class="block text-sm gk rx" for="mandatory">Designation <span class="yl">*</span></label>
                                        <input id="txtdesig" name="txtdesig" class="tn oq" type="text" required="" value="<?php echo $row['team_designation'];?>">
                                    </div>
                                    <!-- End -->
                                </div>

                                <div>
                                    <!-- Start -->
                                    <div>
                                        <label class="block text-sm gk rx" for="mandatory">Bio <span class="yl">*</span></label>
                                        <input id="txtbio" name="txtbio" class="tn oq" type="text" required="" value="<?php echo $row['team_bio'];?>">
                                    </div>
                                    <!-- End -->
                                </div>
                                <div>
                                    <!-- Start -->
                                    <div>
                                        <label class="block text-sm gk rx" for="mandatory">Email <span class="yl">*</span></label>
                                        <input id="txtemail" name="txtemail" class="tn oq" type="text" required="" value="<?php echo $row['team_email'];?>">
                                    </div>
                                    <!-- End -->
                                </div>
                                <div>
                                    <!-- Start -->
                                    <div>
                                        <label class="block text-sm gk rx" for="mandatory">Password <span class="yl">*</span></label>
                                        <input id="txtpass" name="txtpass" class="tn oq" type="text" required="" value="<?php echo $row['team_password'];?>">
                                    </div>
                                    <!-- End -->
                                </div>
                                

                                <div>
                                    <!-- Start -->
                                    <div>
                                        <label class="block text-sm gk rx" for="mandatory">Profile <span class="yl">*</span></label>
                                        <input id="txtprofile" name="txtprofile" class="tn oq" type="file" required="" value="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['team_profile']);?>"/>
                                    </div>
                                    <!-- End -->
                                </div>
                                <div>
                                <button class="btn hb xs yo" name="btneteam" id="btneteam"> <svg class="ue on db bh ap" viewBox="0 0 16 16"> 
                                    <path
                                        d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z">
                                    </path>
                                </svg> <span class="hidden tro r_">Update Team</span> </button> <div style="color:rgb(79 70 229 / .9); font-weight:bold">
                        <br/><strong>&nbsp; <?php echo $error ?></strong> &nbsp;<?php echo $error2 ?>
                        </div>

                                </div>

                            </div>
                        </form>
                    </div>

                </div>

            </div>

        </div>

        <br />


        
    </main>


    <?php include 'footer.php' ?>
<?php
} else {

    header('location:adminlogin.php');
}
?>