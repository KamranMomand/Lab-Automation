<?php

if(isset($_GET['id']))
{
    $id=$_GET['id'];
    define('host','localhost');
    define('username','root');
    define('password','');
    define('dbname','lab_automation');

    $conn=mysqli_connect(host,username,password,dbname);
    if(!$conn)
    {
        alert("connection not created");
    }
        $query="DELETE FROM `team` WHERE team_id='$id'";
        $result=mysqli_query($conn,$query);
        if($result)
        {
            header('location:teams.php');
        }else{
            echo "Record not Deleted";
        }
}

?>