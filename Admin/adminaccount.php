<?php
session_start(); 
if($_SESSION['admin_id']){
?>
<?php include 'header.php' ?>


<script>
    $(document).ready(function(){

        alldata();
        function alldata(){
   $.ajax({
       url:'config3.php',
       type:'GET',
       data:{Display:1,},
       success:function(response)
       {
           $('#datadisplay').html(response);
       },
       error:function(err)
       {
           alert ("Api Call Failed");
       },
   });
}

    $('#btnaadd').click(function(){
        var data1 = new FormData();
        data1.append('Add', '1');
        data1.append('aname', $('#txtaname').val());
        data1.append('adesig', $('#txtadesig').val());
        data1.append('aemail', $('#txtaemail').val());
        data1.append('apass', $('#txtapass').val());
        data1.append('aprofile', $("#txtaprofile").prop('files')[0]);
        
        $.ajax({
        url:'config3.php',
        type:'POST',
        data: data1,
        processData: false,
        cache: false,
        contentType: false,
        dataType: false,
        success:function(response){
            if(response)
            {
                alldata();
                blankfield();
            }else
            {
                alert ("Failed");
            }
        },
        error:function(err)
        {
            alert ("Api Call Failed");
        },
        });
    });

    $(document).on('click','.btnadelete',function(){
        var id=$(this).val();
        $.ajax({
            url:'config3.php',
            type:'POST',
            data:{Delete:1,
            a_id:id,
            },
            success: function(response){
                if(response){
                    
                    alldata();
                }else
                {
                    alert ("Failed");
                }
            },
            error:function(err)
        {
            alert ("Api Call Failed");
        },
        });
    });

    $(document).on('click','.btnaedit',function(){
        var row=$(this).closest('tr').find('td');
        $('#txtaid').val(row[0].innerText);
        $('#txtaname').val(row[1].innerText);
        $('#txtadesig').val(row[2].innerText);
        $('#txtaemail').val(row[3].innerText);
        $('#txtapass').val(row[4].innerText);
        $('#txtaprofile').val(row[5].innerText);

        $('#btnaupdate').show();
        $('#btnaadd').hide();
    });

    $('#btnaupdate').click(function(){
        var data2 = new FormData();
        data2.append('Update', '1');
        data2.append('aid', $('#txtaid').val());
        data2.append('aname', $('#txtaname').val());
        data2.append('adesig', $('#txtadesig').val());
        data2.append('aemail', $('#txtaemail').val());
        data2.append('apass', $('#txtapass').val());
        data2.append('aprofile', $("#txtaprofile").prop('files')[0]);

        $.ajax({

        url:'config3.php',
        type:'POST',
        data: data2,
        processData: false,
        cache: false,
        contentType: false,
        dataType: false,
        success:function(response){
            if(response)
            {
                alldata();
                blankfield();
                $('#btnaadd').show();
                $('#btnaupdate').hide();
            }else
            {
                alert ("Failed");
            }
        },
        error:function(err)
        {
            alert ("Api Call Failed");
        },
           
        });
    });

    function blankfield(){
        $('#txtaid').val("");
        $('#txtaname').val("");
        $('#txtadesig').val("");
        $('#txtaemail').val("");
        $('#txtapass').val("");
        $('#txtaprofile').val("");
    }
    
});
</script>
<main>
                <div class="vd jd tto vv oq ar ri">
                    <!-- Page header -->
                    <div class="ry">
                        <h1 class="gg zj text-slate-800 font-bold">Create Admin Accounts</h1>
                    </div>

                    <div class="ck border-slate-200">
                        <div class="la ie">
                            
                        <!-- Input Types -->
                        <div>
                                <div class="sq fx qz">

                                    <div>
                                        <!-- Start -->
                                        <div>
                                        <input class="tn oq" name="txtaid" id="txtaid" type="hidden">
                                            <label class="block text-sm gk rx" for="default">Admin Name</label>
                                            <input class="tn oq" name="txtaname" id="txtaname" type="text">
                                        </div>
                                        <!-- End -->
                                    </div>

                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <div class="flex items-center fg">
                                                <label class="block text-sm gk rx" for="tooltip">Admin Designation</label>
                                                
                                            </div>
                                            <input class="tn oq" name="txtadesig" id="txtadesig" type="text">
                                        </div>
                                        <!-- End -->
                                    </div>

                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <label class="block text-sm gk rx" for="mandatory">Admin Email<span
                                                    class="yl">*</span></label>
                                            <input class="tn oq" name="txtaemail" id="txtaemail" type="email" required="">
                                        </div>
                                        <!-- End -->
                                    </div>

                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <label class="block text-sm gk rx" for="mandatory">Admin Password<span
                                                    class="yl">*</span></label>
                                            <input class="tn oq" name="txtapass" id="txtapass" type="password" required="">
                                        </div>
                                        <!-- End -->
                                    </div>

                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <label class="block text-sm gk rx" for="mandatory">Admin Profile<span
                                                    class="yl">*</span></label>
                                            <input class="tn oq" id="txtaprofile" type="file" required="">
                                        </div>
                                        <!-- End -->
                                    </div>

                                </div>
                            </div>

                                            <button class="btn hb xs yo" name="btnaadd" id="btnaadd"> <svg class="ue on db bh ap" viewBox="0 0 16 16"> 
                                    <path
                                        d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z">
                                    </path>
                                </svg> <span class="hidden tro r_">Create Account</span> </button>


                                <button class="btn hb xs yo" name="btnaupdate" id="btnaupdate" style="display: none ;"> <svg class="ue on db bh ap" viewBox="0 0 16 16"> 
                                    <path
                                        d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z">
                                    </path>
                                </svg> <span class="hidden tro r_">Update Account</span> </button>

                        </div>

                    </div>

                </div>
            
                <div class="vd jd tto vv oq ar ri">
                    <!-- Page header -->
                    <div class="_y js jn ry">

                        <!-- Left: Title -->
                        <div class="rw _a">
                            <h1 class="gg zj text-slate-800 font-bold">List of Admin Accounts</h1>
                        </div>

                    </div>

                    <!-- Table -->
                    <div class="bg-white by rounded-sm border border-slate-200">
                    
                        <div x-data="handleSelect">
                            <div class="lz">
                                <table class="av oq">
                                    <thead class="gb g_ gq text-slate-500 hq ck cx border-slate-200">
                                        <tr>                                       
                                            <th class="v_ wk vm ">
                                                <div class="g_ gh">Admin_Id</div>
                                            </th>
                                            <th class="v_ wk vm ">
                                                <div class="g_ gh">Admin_Name</div>
                                            </th>
                                            <th class="v_ wk vm ">
                                                <div class="g_ gh">Admin_Designation</div>
                                            </th>
                                            <th class="v_ wk vm ">
                                                <div class="g_ gh">Admin_Email</div>
                                            </th>
                                            <th class="v_ wk vm ">
                                                <div class="g_ gh">Admin_Password</div>
                                            </th>
                                            <th class="v_ wk vm ">
                                                <div class="g_ gh">Admin_Profile</div>
                                            </th>
                                            <th class="v_ wk vm">
                                                <div class="g_ gh">Action</div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-sm lg lb" id="datadisplay">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                   </div>
                </main>






<?php include 'footer.php' ?>
<?php
    }
else{

    header('location:adminlogin.php');
}
    ?>