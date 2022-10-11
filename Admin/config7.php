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
    $query="select * from `product` p join `pro_category` c on p.pro_cat_id=c.pro_cat_id join `company` u on p.company_id=u.company_id";
    $result=mysqli_query($conn,$query);
    $empr="";
    while($row=mysqli_fetch_assoc($result))
    {
        $empr .="<tr><td class='v_ wk vm'><div class='gh'>".$row['pro_id']."</div></td><td class='v_ wk vm'>" .$row['company_name']. "</td><td class='v_ wk vm'><a class='block'><img class='uo oa rounded-full' src='data:image/jpg;charset=utf8;base64,". base64_encode($row['pro_image']) .
        "' width='36' height='36' alt='User 01'></a></td><td class='v_ wk vm'>" .$row['pro_name']. "</td><td class='v_ wk vm'><div class='gh'>".$row['pro_code']."</div></td><td class='v_ wk vm'>".$row['pro_manufacturing_no']."</td><td class='v_ wk vm'>" .$row['pro_cat_name']. "</td><td class='v_ wk vm'>" .$row['pro_description']. "</td><td class='v_ wk vm'><button class='btn hb xs yo btnpdelete' value='".$row['pro_id']."'> <span class='hidden tro r_'>Delete</span> </button>
        </td></tr>";
    }
    echo $empr;
}


if(isset($_POST['Delete']))
{
    $id=$_POST['p_id'];
    $query="DELETE FROM `product` WHERE `pro_id`='$id'";
    $result=mysqli_query($conn,$query);
    echo $result;
}

?>