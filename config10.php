<?php
session_start();
define('host','localhost');
define('username','root');
define('password','');
define('dbname','lab_automation');

$conn=mysqli_connect(host,username,password,dbname);
if(!$conn)
{
    echo("connection not created");
}

if(isset($_POST['Add']))
{
    $pid=$_POST['p_id'];
    $ttype=$_POST['t_type'];
    $eid=$_SESSION['company_id'];
            $p_query="select * from product where pro_id=$pid";
            $p_result=mysqli_query($conn,$p_query);
            $p_row=mysqli_fetch_assoc($p_result);
            
            $t_query="select * from product_testing where pro_id=$pid";
            $t_result=mysqli_query($conn,$t_query);
            $count=mysqli_num_rows($t_result);
            
            $revise=1;
            if($count>0){
                $r_query="select max(pro_revision) from product_testing where pro_id=$pid";
                $r_result=mysqli_query($conn,$r_query);
                $r_row=mysqli_fetch_array($r_result);
                $revise=$r_row[0]+1;
            }
            $trow=mysqli_fetch_assoc($t_result);
            
            $testingcode=$p_row['pro_code'].$p_row['pro_manufacturing_no'].$revise;
    
            $sdate=date("Y-m-d");
            $edate=date('Y-m-d', strtotime($sdate. ' + 7 days')); 
            $ptcode=$testingcode;
            $cid=$eid;
            $previs=$revise;
            $pstatus="Process";
            
            $iquery="INSERT INTO `product_testing`(`pro_id`, `testing_id`, `pro_testing_start_date`, `pro_testing_end_date`, `pro_testing_result`, `pro_testing_fault`, `pro_testing_code`, `employee_id`, `pro_revision`, `pro_testing_status`) VALUES ('$pid','$ttype','$sdate','$edate','','','$testingcode','$cid','$previs','$pstatus')";
            $iresult=mysqli_query($conn,$iquery);
            echo $iresult;
}

if(isset($_GET['Display']))
{        
    $eid=$_SESSION['company_id'];
   
    $pa_query="SELECT * from `product` p join `pro_category` pc on p.pro_cat_id=pc.pro_cat_id where p.company_id='$eid'";
    $pa_result=mysqli_query($conn,$pa_query);

    $empr="";
  
    while($pa_row=mysqli_fetch_assoc($pa_result))
    {
        $t_query="Select * from product_testing where pro_id=".$pa_row['pro_id']." AND pro_testing_status!='Failed'";
        $t_result=mysqli_query($conn,$t_query);
        $num=mysqli_num_rows($t_result);
        if($num>0)
        {
            $empr .="
            <tr>
                <td style='text-align: left; padding: 12px; border-top: 1px solid #dee2e6;'><img class='rounded-full' src='data:image/jpg;charset=utf8;base64,". base64_encode($pa_row['pro_image'])."
                'width='35' height='35' alt='User 01'/></td>
                <td style='text-align: left; padding: 12px; border-top: 1px solid #dee2e6;'>".$pa_row['pro_name']."</td>
                <td style='text-align: left; padding: 12px; border-top: 1px solid #dee2e6;'>".$pa_row['pro_cat_name']."</td>
                <td style='text-align: left; padding: 12px; border-top: 1px solid #dee2e6;'>".$pa_row['pro_description']."</td>
                <td style='text-align: left; padding: 12px; border-top: 1px solid #dee2e6;'>".$pa_row['pro_code']."</td>
                <td style='text-align: left; padding: 12px; border-top: 1px solid #dee2e6;'>".$pa_row['pro_manufacturing_no']."</td>
                <td style='text-align: left; padding: 12px; border-top: 1px solid #dee2e6;'><button class='btn bg-indigo-600 border-indigo-600 hover:border-indigo-700 text-white rounded-md btnapply' disabled value='". $pa_row['pro_id']."'>Applied</button>
                </td>
            </tr>
            ";
        }else{
            $empr .="
            <tr>
                <td style='text-align: left; padding: 12px; border-top: 1px solid #dee2e6;'><img class='rounded-full' src='data:image/jpg;charset=utf8;base64,". base64_encode($pa_row['pro_image'])."
                'width='35' height='35' alt='User 01'/></td>
                <td style='text-align: left; padding: 12px; border-top: 1px solid #dee2e6;'>".$pa_row['pro_name']."</td>
                <td style='text-align: left; padding: 12px; border-top: 1px solid #dee2e6;'>".$pa_row['pro_cat_name']."</td>
                <td style='text-align: left; padding: 12px; border-top: 1px solid #dee2e6;'>".$pa_row['pro_description']."</td>
                <td style='text-align: left; padding: 12px; border-top: 1px solid #dee2e6;'>".$pa_row['pro_code']."</td>
                <td style='text-align: left; padding: 12px; border-top: 1px solid #dee2e6;'>".$pa_row['pro_manufacturing_no']."</td>
                <td style='text-align: left; padding: 12px; border-top: 1px solid #dee2e6;'><button class='btn bg-indigo-600 border-indigo-600 hover:border-indigo-700 text-white rounded-md btnapply' value='". $pa_row['pro_id']."'>Apply</button>
                </td>
            </tr>
            ";
        }
    }
    


    echo $empr;
}

?>