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
    $query="select * from `customercare`";
    $result=mysqli_query($conn,$query);
    $empr="";
    while($row=mysqli_fetch_assoc($result))
    {
        $empr .="<div class='bg-white by rounded-sm border border-slate-200'>
        <table class='av oq'>
                                <thead class='gb g_ gq text-slate-500 border-slate-200'>
                                        <tr>
                                                 
                                            <th class='v_ wk vm '>
                                                <div class='g_ gh' style='font-weight:bolder; color: rgb(79 70 229 / .9);'> Customer Name: &nbsp; &nbsp;" .$row['contact_name']. "</div>
        </th>
                                                   
    </tr>
</thead>

<thead class='gb g_ gq text-slate-500 hq ck cx border-slate-200'>
    <tr>
             
        <th class='v_ wk vm '>
            <div class='g_ gh'>Messages &nbsp;(".$row['contact_who'].")</div>
            </th>
            <th class='v_ wk vm'>
            
                </th>
                
            </tr>
        </thead>
        <tbody class='text-sm lg lb' id='datadisplay'>
        <tr><td class='v_ wk vm'><div class='gh'>".$row['contact_messages']."</div></td><td class='v_ wk vm'><div class='gh'><button class='btn hb xs yo btnreply' value='".$row['company_id']."'> <span class='hidden tro r_'>Reply</span> </button></td></tr></tbody>

    </table></div><br/>"
            ;
    
    }
    echo $empr;
}


if(isset($_POST['Update']))
{
    $id=$_POST['m_id'];
    $message=$_POST['msg'];
    $name=$_SESSION['admin_name'];
    $who="Admin";

    $query="INSERT INTO `customercare`(`contact_name`, `contact_messages`, `company_id`, `contact_who`) VALUES ('$name','$message','$id','$who')";
    $result=mysqli_query($conn,$query);
    echo $result;
}

?>