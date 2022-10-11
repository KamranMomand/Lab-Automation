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
                                                <div class='g_ gh' style='font-weight:bolder; color: rgb(79 70 229 / .9);'> Customer Name: &nbsp; &nbsp;" .$row['contact_name'] .
        "</div>
        </th>
                                                   
    </tr>
</thead>

<thead class='gb g_ gq text-slate-500 hq ck cx border-slate-200'>
    <tr>
             
        <th class='v_ wk vm '>
        <div class='g_ gh'>Messages &nbsp;(".$row['contact_who'].")</div>
            </th>
                                        
            </tr>
        </thead>
        <tbody class='text-sm lg lb' id='datadisplay'>
        <tr><td class='v_ wk vm'><div class='gh'>".$row['contact_messages']."</div></td></tr></tbody>

    </table></div><br/>"
            ;
    
    }
    echo $empr;
}


if(isset($_GET['Display2']))
{
    $query="select * from `admin`";
    $result=mysqli_query($conn,$query);
    $empr="";
    while($row=mysqli_fetch_assoc($result))
    {
        $empr .="<tr><td class='v_ wk vm'><div class='gh'>".$row['admin_id']."</div></td><td class='v_ wk vm'><div class='gh'>".$row['admin_name']."</div></td><td class='v_ wk vm'>" .$row['admin_designation']. "</td><td class='v_ wk vm'>" .$row['admin_email']. "</td><td class='v_ wk vm'>".$row['admin_password']."</td><td class='v_ wk vm'><a class='block'><img class='uo oa rounded-full' src='data:image/jpg;charset=utf8;base64,".base64_encode($row['admin_profile'])."' width='36' height='36' alt='User 01'></a></td></tr>";
    }
    echo $empr;
}


?>