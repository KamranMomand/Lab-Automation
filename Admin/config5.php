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

if(isset($_GET['Display']))
{
    $query="select * from `company`";
    $result=mysqli_query($conn,$query);
    $empr="";
    while($row=mysqli_fetch_assoc($result))
    {
        $empr .="<tr><td class='v_ wk vm'><div class='gh'>".$row['company_id']."</div></td><td class='v_ wk vm'><div class='gh'>".$row['company_name']."</div></td><td class='v_ wk vm'>" .$row['company_registration_no']. "</td><td class='v_ wk vm'>" .$row['company_website']. "</td><td class='v_ wk vm'>".$row['company_username']."</td><td class='v_ wk vm'>" .$row['company_email']. "</td><td class='v_ wk vm'>" .$row['company_password'] ."</td><td class='v_ wk vm'>" .$row['company_address'] ."</td><td class='v_ wk vm'><a class='block'><img class='uo oa rounded-full' src='data:image/jpg;charset=utf8;base64,".base64_encode($row['company_logo'])."' width='36' height='36' alt='User 01'></a></td><td class='v_ wk vm'>
        <button class='btn hb xs yo btncedit' value='".$row['company_id']."'> <span class='hidden tro r_'>Edit</span> </button> | <button class='btn hb xs yo btncdelete' value='".$row['company_id']."'> <span class='hidden tro r_'>Delete</span> </button>
        </td></tr>";
    }
    echo $empr;
}


if(isset($_POST['Delete']))
{
    $id=$_POST['c_id'];
    $query="DELETE FROM `company` WHERE `company_id`='$id'";
    $result=mysqli_query($conn,$query);
    echo $result;
}

if(isset($_POST['Update']))
{
    $id=$_POST['cid'];
    $name=$_POST['cname'];
    $reg=$_POST['creg'];
    $web=$_POST['cweb'];
    $uname=$_POST['cuname'];
    $email=$_POST['cemail'];
    $pass=$_POST['cpass'];
    $add=$_POST['cadd'];
    $logo = addslashes(file_get_contents($_FILES['clogo']['tmp_name']));

    $query="UPDATE `company` SET `company_name`='$name',`company_registration_no`='$reg',`company_website`='$web',`company_username`='$uname',`company_email`='$email',`company_password`='$pass',`company_address`='$add',`company_logo`='$logo' WHERE `company_id`='$id' ";    
    $result=mysqli_query($conn,$query);
    echo $result;
}

?>