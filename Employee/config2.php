<?php
session_start();
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
    $empid=$_SESSION['team_id'];
    $at_query="select * from product_testing pt join product p on pt.pro_id=p.pro_id join testing_type tt on pt.testing_id=tt.testing_id where pt.employee_id='$empid'";
    $at_result=mysqli_query($conn,$at_query);
    
    $empr="";
    while($atrow=mysqli_fetch_assoc($at_result))
    {
        $t_query="Select * from product_testing where pro_id=".$atrow['pro_id']." AND pro_testing_status!='Process'";
        $t_result=mysqli_query($conn,$t_query);
        $num=mysqli_num_rows($t_result);
        if($num>0)
        {
            $empr .="<tr><td class='v_ wk vm'>" .$atrow['pro_testing_id']. "</td><td class='v_ wk vm'><div class='gh'><img
            class='rounded-full 'src='data:image/jpg;charset=utf8;base64,".base64_encode($atrow['pro_image'])."' width='30' height='30' alt='User 01'/>&nbsp;".$atrow['pro_name']."</div></td><td class='v_ wk vm'><div class='gh'>".$atrow['pro_testing_code']."</div></td><td class='v_ wk vm'>" .$atrow['pro_revision']. "</td><td class='v_ wk vm'>" .$atrow['testing_title']. "</td><td class='v_ wk vm'>".$atrow['pro_testing_start_date']."</td><td class='v_ wk vm'>" .$atrow['pro_testing_end_date']. "</td><td class='v_ wk vm'><div class='scrollable'>" .$atrow['pro_testing_result'] ."</div></td><td class='v_ wk vm'>" .$atrow['pro_testing_fault'] ."</td><td class='v_ wk vm'><div class='inline-flex gk pe yh rounded-full gp vk vy'>" .$atrow['pro_testing_status']."</div></td></tr>";
        }
    }
    echo $empr;
}


?>