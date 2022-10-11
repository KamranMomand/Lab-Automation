<?php
session_start();
include 'config.php';

if(isset($_POST['Add']))
{
    $id=$_SESSION['company_id'];
    $name=$_SESSION['companyname'];
    $message=$_POST['c_msg'];
    $who="Company";

    $query="INSERT INTO `customercare`(`contact_name`, `contact_messages`, `company_id`, `contact_who`) VALUES ('$name','$message','$id','$who')";
    $result=mysqli_query($conn,$query);
    echo $result;
}

if(isset($_GET['Display']))
{
    $id=$_SESSION['company_id'];
    $query="SELECT * from `customercare` where company_id='$id'";
    $result=mysqli_query($conn,$query);
    $empr="";
    while($row=mysqli_fetch_assoc($result))
    {
        $empr .="<tr><td style='text-align: left; padding: 12px; border-top: 1px solid #dee2e6;'>".$row['contact_messages']."</td><td style='text-align: left; padding: 12px; border-top: 1px solid #dee2e6;'>" . $row['contact_who']. "</td></tr>";
    }
    echo $empr;
}


?>