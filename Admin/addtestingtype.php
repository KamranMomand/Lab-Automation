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
       url:'config2.php',
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


    $('#btntadd').click(function(){
        var tename=$('#txttname').val();
        var tedes=$('#txttdes').val();
        var tecode=$('#txttcode').val();

        $.ajax({

        url:'config2.php',
        type:'POST',
        data:{
        Add:1,
        t_name:tename,
        t_des:tedes,
        t_code:tecode,
        },
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


    $(document).on('click','.btntdelete',function(){
        var id=$(this).val();
        $.ajax({
            url:'config2.php',
            type:'POST',
            data:{Delete:1,
            t_id:id,
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


    $(document).on('click','.btntedit',function(){
        var row=$(this).closest('tr').find('td');
        $('#txttid').val(row[0].innerText);
        $('#txttname').val(row[1].innerText);
        $('#txttdes').val(row[2].innerText);
        $('#txttcode').val(row[3].innerText);

        $('#btntupdate').show();
        $('#btntadd').hide();
    });


    $('#btntupdate').click(function(){
        var teid=$('#txttid').val();
        var tename=$('#txttname').val();
        var tedes=$('#txttdes').val();
        var tecode=$('#txttcode').val();

        $.ajax({

        url:'config2.php',
        type:'POST',
        data:{
        Update:1,
        t_id:teid,
        t_name:tename,
        t_des:tedes,
        t_code:tecode,
        },
        success:function(response){
            if(response)
            {
                alldata();
                blankfield();
                $('#btntadd').show();
                $('#btntupdate').hide();
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
        $('#txttname').val("");
        $('#txttdes').val("");
        $('#txttcode').val("");
    }
    
});

</script>

<main>
                <div class="vd jd tto vv oq ar ri">
                    <!-- Page header -->
                    <div class="ry">
                        <h1 class="gg zj text-slate-800 font-bold">Add Testing Types</h1>
                    </div>

                    <div class="ck border-slate-200">
                        <div class="la ie">
                            
                        <!-- Input Types -->
                        <div>
                                <div class="sq fx qz">

                                    <div>
                                        <!-- Start -->
                                        <div>
                                        <input class="tn oq" name="txttid" id="txttid" type="hidden">
                                            <label class="block text-sm gk rx" for="default">Test Name</label>
                                            <input class="tn oq" name="txttname" id="txttname" type="text">
                                        </div>
                                        <!-- End -->
                                    </div>

                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <div class="flex items-center fg">
                                                <label class="block text-sm gk rx" for="tooltip">Test Description</label>
                                                
                                            </div>
                                            <input class="tn oq" name="txttdes" id="txttdes" type="text">
                                        </div>
                                        <!-- End -->
                                    </div>

                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <label class="block text-sm gk rx" for="mandatory">Test Code <span
                                                    class="yl">*</span></label>
                                            <input class="tn oq" name="txttcode" id="txttcode" type="text" required="">
                                        </div>
                                        <!-- End -->
                                    </div>

                                </div>
                            </div>

                                            <button class="btn hb xs yo" name="btntadd" id="btntadd"> <svg class="ue on db bh ap" viewBox="0 0 16 16"> 
                                    <path
                                        d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z">
                                    </path>
                                </svg> <span class="hidden tro r_">Add Testing Types</span> </button>


                                <button class="btn hb xs yo" name="btntupdate" id="btntupdate" style="display: none ;"> <svg class="ue on db bh ap" viewBox="0 0 16 16"> 
                                    <path
                                        d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z">
                                    </path>
                                </svg> <span class="hidden tro r_">Update Testing Types</span> </button>

                        </div>

                    </div>

                </div>
            
                <div class="vd jd tto vv oq ar ri">
                    <!-- Page header -->
                    <div class="_y js jn ry">

                        <!-- Left: Title -->
                        <div class="rw _a">
                            <h1 class="gg zj text-slate-800 font-bold">List of Testing Types</h1>
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
                                                <div class="g_ gh">Type_Id</div>
                                            </th>
                                            <th class="v_ wk vm ">
                                                <div class="g_ gh">Type_Name</div>
                                            </th>
                                            <th class="v_ wk vm ">
                                                <div class="g_ gh">Type_Description</div>
                                            </th>
                                            <th class="v_ wk vm ">
                                                <div class="g_ gh">Type_Code</div>
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