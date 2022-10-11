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
    $cname=$_POST['cat_name'];

    $query="INSERT INTO `pro_category`(`pro_cat_name`) VALUES ('$cname')";
    $result=mysqli_query($conn,$query);
    echo $result;
}

if(isset($_GET['Display']))
{
    $query="select * from `pro_category`";
    $result=mysqli_query($conn,$query);
    $empr="";
    while($row=mysqli_fetch_assoc($result))
    {
        $empr .="<tr><td class='v_ wk vm'><div class='gh'>".$row['pro_cat_id']."</div></td><td class='v_ wk vm'><div class='gh'>".$row['pro_cat_name']."</div></td><td class='v_ wk vm'>
        <button class='btn hb xs yo btncedit' value='".$row['pro_cat_id']."'> <span class='hidden tro r_'>Edit</span> </button> | <button class='btn hb xs yo btncdelete' value='".$row['pro_cat_id']."'> <span class='hidden tro r_'>Delete</span> </button>
        </td></tr>";
    }
    echo $empr;
}


if(isset($_POST['Delete']))
{
    $c_id=$_POST['cat_id'];
    $query="DELETE FROM `pro_category` WHERE `pro_cat_id`='$c_id'";
    $result=mysqli_query($conn,$query);
    echo $result;
}

if(isset($_POST['Update']))
{
    $id=$_POST['cat_id'];
    $name=$_POST['cat_name'];

    $query="UPDATE `pro_category` SET `pro_cat_name`='$name' WHERE `pro_cat_id`='$id'";
    $result=mysqli_query($conn,$query);
    echo $result;
}

?>