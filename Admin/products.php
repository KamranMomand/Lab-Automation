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
       url:'config7.php',
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

    $(document).on('click','.btnpdelete',function(){
        var id=$(this).val();
        $.ajax({
            url:'config7.php',
            type:'POST',
            data:{Delete:1,
            p_id:id,
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

});

</script>
<div class="vd jd tto vv oq ar ri">
                    <!-- Page header -->
                    <div class="_y js jn ry">

                        <!-- Left: Title -->
                        <div class="rw _a">
                            <h3 class="zj text-slate-800 font-bold">Company Products</h3>
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
                                                <div class="g_ gh">Product Id</div>
                                            </th> 
                                            <th class="v_ wk vm ">
                                                <div class="g_ gh">Company</div>
                                            </th> 
                                            <th class="v_ wk vm ">
                                                <div class="g_ gh">Product Image</div>
                                            </th>
                                            <th class="v_ wk vm ">
                                                <div class="g_ gh">Product Name</div>
                                            </th>                                  
                                            <th class="v_ wk vm ">
                                                <div class="g_ gh">Product Code</div>
                                            </th>
                                            <th class="v_ wk vm ">
                                                <div class="g_ gh">Product Manufacturing #</div>
                                            </th>
                                            <th class="v_ wk vm ">
                                                <div class="g_ gh">Product Category</div>
                                            </th>
                                            <th class="v_ wk vm ">
                                                <div class="g_ gh">Product Description</div>
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



<?php include 'footer.php' ?>
<?php
    }
else{

    header('location:adminlogin.php');
}
    ?>