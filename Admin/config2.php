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
    $name=$_POST['t_name'];
    $des=$_POST['t_des'];
    $code=$_POST['t_code'];

    $query="INSERT INTO `testing_type`(`testing_title`, `testing_description`, `testing_code`) VALUES ('$name','$des','$code')";
    $result=mysqli_query($conn,$query);
    echo $result;
}

if(isset($_GET['Display']))
{
    $query="select * from `testing_type`";
    $result=mysqli_query($conn,$query);
    $empr="";
    while($row=mysqli_fetch_assoc($result))
    {
        $empr .="<tr><td class='v_ wk vm'><div class='gh'>".$row['testing_id']."</div></td><td class='v_ wk vm'><div class='gh'>".$row['testing_title']."</div></td><td class='v_ wk vm'>" .$row['testing_description']. "</td><td class='v_ wk vm'>" .$row['testing_code']. "</td><td class='v_ wk vm'>
        <button class='btn hb xs yo btntedit' value='".$row['testing_id']."'> <span class='hidden tro r_'>Edit</span> </button> | <button class='btn hb xs yo btntdelete' value='".$row['testing_id']."'> <span class='hidden tro r_'>Delete</span> </button>
        </td></tr>";
    }
    echo $empr;
}


if(isset($_POST['Delete']))
{
    $id=$_POST['t_id'];
    $query="DELETE FROM `testing_type` WHERE `testing_id`='$id'";
    $result=mysqli_query($conn,$query);
    echo $result;
}

if(isset($_POST['Update']))
{
    $id=$_POST['t_id'];
    $name=$_POST['t_name'];
    $des=$_POST['t_des'];
    $code=$_POST['t_code'];

    $query="UPDATE `testing_type` SET `testing_title`='$name',`testing_description`='$des',`testing_code`='$code' WHERE `testing_id` = '$id'";
    $result=mysqli_query($conn,$query);
    echo $result;
}

?>