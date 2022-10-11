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
    $at_query="select * from product_testing pt join product p on pt.pro_id=p.pro_id join testing_type tt on pt.testing_id=tt.testing_id";
    $at_result=mysqli_query($conn,$at_query);
    
    $empr="";
    while($atrow=mysqli_fetch_assoc($at_result))
    {
        $empr .="<tr><td class='v_ wk vm'>" .$atrow['pro_testing_id']. "</td><td class='v_ wk vm'><div class='gh'><img
        class='rounded-full 'src='data:image/jpg;charset=utf8;base64,".base64_encode($atrow['pro_image'])."' width='30' height='30' alt='User 01'/>&nbsp;".$atrow['pro_name']."</div></td><td class='v_ wk vm'><div class='gh'>".$atrow['pro_testing_code']."</div></td><td class='v_ wk vm'>" .$atrow['pro_revision']. "</td><td class='v_ wk vm'>" .$atrow['testing_title']. "</td><td class='v_ wk vm'>".$atrow['pro_testing_start_date']."</td><td class='v_ wk vm'>" .$atrow['pro_testing_end_date']. "</td><td class='v_ wk vm'><div class='scrollable'>" .$atrow['pro_testing_result'] ."</div></td><td class='v_ wk vm'>" .$atrow['pro_testing_fault'] ."</td><td class='v_ wk vm'><div class='inline-flex gk pe yh rounded-full gp vk vy'>" .$atrow['pro_testing_status']."</div></td><td class='v_ wk vm'>
        <button class='btn hb xs yo btncresult' value='".$atrow['pro_testing_id']."'> <span class='hidden tro r_'>Result</span> </button> | <button class='btn hb xs yo btncdelete' value='".$atrow['pro_testing_id']."'> <span class='hidden tro r_'>Delete</span> </button> | <button class='btn hb xs yo btnassign' value='".$atrow['pro_testing_id']."'> <span class='hidden tro r_'>Asign</span> </button>
        </td></tr>";
    }
    echo $empr;
}

if(isset($_POST['Delete']))
{
    $id=$_POST['t_id'];
    $query="DELETE FROM `product_testing` WHERE `pro_testing_id`='$id'";
    $result=mysqli_query($conn,$query);
    echo $result;
}

if(isset($_POST['Update']))
{
    $tid=$_POST['t_id'];
    $result=$_POST['t_result'];
    $fault=$_POST['t_fault'];
    $status=$_POST['t_status'];
    
    $query="UPDATE `product_testing` SET `pro_testing_result`='$result',`pro_testing_fault`='$fault',`pro_testing_status`='$status' WHERE `pro_testing_id`='$tid'";    
    $result=mysqli_query($conn,$query);
    echo $result;
}

if(isset($_POST['Update2']))
{
    $tid2=$_POST['t_id'];
    $team=$_POST['t_team'];
    
    $query="UPDATE `product_testing` SET `employee_id`='$team' WHERE `pro_testing_id`='$tid2'";    
    $result2=mysqli_query($conn,$query);
    echo $result2;
}

?>