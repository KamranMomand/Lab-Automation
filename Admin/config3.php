<?php

define('host','localhost');
define('username','root');
define('password','');
define('dbname','lab_automation');

$conn=mysqli_connect(host,username,password,dbname);
if(!$conn)
{
    alert("connection not created");
}

if(isset($_POST['Add']))
{
    $name=$_POST['aname'];
    $desig=$_POST['adesig'];
    $email=$_POST['aemail'];
    $pass=$_POST['apass'];
    $profile = addslashes(file_get_contents($_FILES['aprofile']['tmp_name']));

    $query="INSERT INTO `admin`(`admin_name`, `admin_designation`, `admin_email`, `admin_password`, `admin_profile`) VALUES ('$name','$desig','$email','$pass','$profile')";
    $result=mysqli_query($conn,$query);
  
    echo $result;
    
}

if(isset($_GET['Display']))
{
    $query="select * from `admin`";
    $result=mysqli_query($conn,$query);
    $empr="";
    while($row=mysqli_fetch_assoc($result))
    {
        $empr .="<tr><td class='v_ wk vm'><div class='gh'>".$row['admin_id']."</div></td><td class='v_ wk vm'><div class='gh'>".$row['admin_name']."</div></td><td class='v_ wk vm'>" .$row['admin_designation']. "</td><td class='v_ wk vm'>" .$row['admin_email']. "</td><td class='v_ wk vm'>".$row['admin_password']."</td><td class='v_ wk vm'><a class='block'><img class='uo oa rounded-full' src='data:image/jpg;charset=utf8;base64," . base64_encode($row['admin_profile']) . "' width='36' height='36' alt='User 01'></a></td><td class='v_ wk vm'>
        <button class='btn hb xs yo btnaedit' value='".$row['admin_id']."'> <span class='hidden tro r_'>Edit</span> </button> | <button class='btn hb xs yo btnadelete' value='".$row['admin_id']."'> <span class='hidden tro r_'>Delete</span> </button>
        </td></tr>";
    }
    echo $empr;
}


if(isset($_POST['Delete']))
{
    $id=$_POST['a_id'];
    $query="DELETE FROM `admin` WHERE `admin_id`='$id'";
    $result=mysqli_query($conn,$query);
    echo $result;
}

if(isset($_POST['Update']))
{
    $id=$_POST['aid'];
    $name=$_POST['aname'];
    $desig=$_POST['adesig'];
    $email=$_POST['aemail'];
    $pass=$_POST['apass'];
   $profile = addslashes(file_get_contents($_FILES['aprofile']['tmp_name']));

    $query="UPDATE `admin` SET `admin_name`='$name',`admin_designation`='$desig',`admin_email`='$email',`admin_password`='$pass',`admin_profile`='$profile' WHERE `admin_id` = '$id'";
    $result=mysqli_query($conn,$query);
    echo $result;
}

?>