<?php
session_start();
if ($_SESSION['admin_id']) {
?>
   <?php include 'header.php' ?>
<?php
$error=NULL;
$error2=NULL;

    if(isset($_POST['btnateam']))
    {
        $name=$_POST['txtname']; 
        $desig=$_POST['txtdesig']; 
        $bio=$_POST['txtbio'];
        $email=$_POST['txtemail']; 
        $pass=$_POST['txtpass'];
        $profile=addslashes(file_get_contents($_FILES['txtprofile']['tmp_name']));

        $query="INSERT INTO `team`(`team_name`, `team_designation`, `team_bio`, `team_email`, `team_password`, `team_profile`) VALUES ('$name','$desig','$bio','$email','$pass','$profile')";
        $result=mysqli_query($conn,$query);
        if($result)
        {
            $error="Congratulations!";
            $error2="You Team Has Been Added.";
            
        }
    else
    {
        $error3="Alert!";
        $error4="Something Wrong! Please Try Again...";
    }
    }   
    
        
    ?> 

     <main>
        <div class="vd jd tto vv oq ar ri">
            <!-- Page header -->
            <div class="ry">
                <h1 class="gg zj text-slate-800 font-bold">Add Teams</h1>
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
                                        <input id="txtname" name="txtname" class="tn oq" type="text" required="">
                                    </div>
                                    <!-- End -->
                                </div>

                                <div>
                                    <!-- Start -->
                                    <div>
                                        <label class="block text-sm gk rx" for="mandatory">Designation <span class="yl">*</span></label>
                                        <input id="txtdesig" name="txtdesig" class="tn oq" type="text" required="">
                                    </div>
                                    <!-- End -->
                                </div>

                                <div>
                                    <!-- Start -->
                                    <div>
                                        <label class="block text-sm gk rx" for="mandatory">Bio <span class="yl">*</span></label>
                                        <input id="txtbio" name="txtbio" class="tn oq" type="text" required="">
                                    </div>
                                    <!-- End -->
                                </div>
                                <div>
                                    <!-- Start -->
                                    <div>
                                        <label class="block text-sm gk rx" for="mandatory">Email <span class="yl">*</span></label>
                                        <input id="txtemail" name="txtemail" class="tn oq" type="email" required="">
                                    </div>
                                    <!-- End -->
                                </div>
                                <div>
                                    <!-- Start -->
                                    <div>
                                        <label class="block text-sm gk rx" for="mandatory">Password <span class="yl">*</span></label>
                                        <input id="txtpass" name="txtpass" class="tn oq" type="Password" required="">
                                    </div>
                                    <!-- End -->
                                </div>

                                <div>
                                    <!-- Start -->
                                    <div>
                                        <label class="block text-sm gk rx" for="mandatory">Profile <span class="yl">*</span></label>
                                        <input id="txtprofile" name="txtprofile" class="tn oq" type="file" required="">
                                    </div>
                                    <!-- End -->
                                </div>
                                <div>
                                <button class="btn hb xs yo" name="btnateam" id="btnateam"> <svg class="ue on db bh ap" viewBox="0 0 16 16"> 
                                    <path
                                        d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z">
                                    </path>
                                </svg> <span class="hidden tro r_">Add Team</span> </button> <div style="color:rgb(79 70 229 / .9); font-weight:bold">
                                <br/><strong>&nbsp; <?php echo $error ?></strong> &nbsp;<?php echo $error2 ?>
                                </div>
</div>
                            </div>
                        </form>
                    </div>

                </div>

            </div>

        </div>

    


        <div class="vd jd tto vv oq ar ri">

            <!-- Page header -->
            <div class="_y js jn ry">

                <!-- Left: Title -->
                <div class="rw _a">
                    <h1 class="gg zj text-slate-800 font-bold">Teams ✨</h1>
                </div>


            </div>
            
            <!-- Cards -->
            <div class="sq ff fb">

            <?php
        
        $query2="select * from `team`";
        $result=mysqli_query($conn,$query2);
                                    
        while($row=mysqli_fetch_assoc($result))
        {
?>  
                
                <div class="nk
                                _s ttj bg-white by rounded-sm border
                                border-slate-200">
                    <div class="flex fh or">
                        <div class="ad vl">
                            
                            <header>
                                <div class="flex justify-center in">
                                    <a class="td inline-flex fd" href="#0">
                                        <div class="tp tk
                                                        tw sb bg-white
                                                        rounded-full shadow" aria-hidden="true"> <svg class="uu of db ym" viewBox="0 0 32 32">
                                                <path d="M21
                                                                14.077a.75.75 0
                                                                01-.75-.75 1.5
                                                                1.5 0
                                                                00-1.5-1.5.75.75
                                                                0 110-1.5 1.5
                                                                1.5 0
                                                                001.5-1.5.75.75
                                                                0 111.5 0 1.5
                                                                1.5 0 001.5
                                                                1.5.75.75 0 010
                                                                1.5 1.5 1.5 0
                                                                00-1.5 1.5.75.75
                                                                0 01-.75.75zM14
                                                                24.077a1 1 0
                                                                01-1-1 4 4 0
                                                                00-4-4 1 1 0
                                                                110-2 4 4 0
                                                                004-4 1 1 0 012
                                                                0 4 4 0 004 4 1
                                                                1 0 010 2 4 4 0
                                                                00-4 4 1 1 0
                                                                01-1 1z"></path>
                                            </svg> </div> <img class="rounded-full" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['team_profile']);?>" width="64" height="64" alt="User 12">
                                    </a>
                                </div>
                                <div class="gp"> <a class="inline-flex
                                                    text-slate-800 xk" href="#0">
                                        <h2 class="gy yt
                                                        justify-center g_"><?php echo $row['team_name'];?></h2>
                                    </a>
                                </div>
                                <div class="flex
                                                justify-center items-center"><span class="text-sm gk yu sw
                                                    mr-1">-&gt;</span> <span><?php echo $row['team_designation'];?></span></div>
                            </header>
                            <div class="gp i_">
                                <div class="text-sm"><?php echo $row['team_bio'];?></div>
                            </div>
                        </div>
                        <div class="ck border-slate-200"> 
                                <div class="flex items-center
                                                justify-center"> 
                                    <a href="teamsedit.php?id=<?php echo $row['team_id'];?>" class="btn btn-success" >Edit</a> | <a href="teamsdelete.php?id=<?php echo $row['team_id'];?>" class="btn btn-success" >Delete</a>
                                </div>
                            </div>
                    </div>
                </div>
                <?php
                            }
                            ?>
            </div>
            

        </div>
    </main>


    <?php include 'footer.php' ?>
<?php
} else {

    header('location:adminlogin.php');
}
?>