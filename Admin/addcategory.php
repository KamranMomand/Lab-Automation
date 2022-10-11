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
       url:'config.php',
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

    $('#btncadd').click(function(){
        var cname=$('#txtcname').val();

        $.ajax({

        url:'config.php',
        type:'POST',
        data:{
        Add:1,
        cat_name:cname,
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


    $(document).on('click','.btncdelete',function(){
        var id=$(this).val();
        $.ajax({
            url:'config.php',
            type:'POST',
            data:{Delete:1,
            cat_id:id,
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


    $(document).on('click','.btncedit',function(){
        var row=$(this).closest('tr').find('td');
        $('#txtcid').val(row[0].innerText);
        $('#txtcname').val(row[1].innerText);

        $('#btncupdate').show();
        $('#btncadd').hide();
    });


    $('#btncupdate').click(function(){
        var cid=$('#txtcid').val();
        var cname=$('#txtcname').val();

        $.ajax({

        url:'config.php',
        type:'POST',
        data:{
        Update:1,
        cat_id:cid,
        cat_name:cname,
        },
        success:function(response){
            if(response)
            {
                alldata();
                blankfield();
                $('#btncadd').show();
                $('#btncupdate').hide();
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
        $('#txtcname').val("");
    }
    
});


</script>




<main>
                <div class="vd jd tto vv oq ar ri">
                    <!-- Page header -->
                    <div class="ry">
                        <h1 class="gg zj text-slate-800 font-bold">Add Product Category</h1>
                    </div>

                    <div class="ck border-slate-200">
                        <div class="la ie">
                            <div>
                            
                                <div class="sq fx qz">
                                    
                                        <!-- Start -->
                                        <div>
                                            <label class="block text-sm gk rx" for="default">Category Name:</label>
                                            <input id="txtcid" class="tn oq" name="txtcid" type="hidden"> 
                                            <input id="txtcname" class="tn oq" name="txtcname" type="text"> 
                                            <br/><br/>
                                            <button class="btn hb xs yo" name="btncadd" id="btncadd"> <svg class="ue on db bh ap" viewBox="0 0 16 16"> 
                                    <path
                                        d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z">
                                    </path>
                                </svg> <span class="hidden tro r_">Add Category</span> </button>

                                <button class="btn hb xs yo" name="btncupdate" id="btncupdate" style="display: none ;"> <svg class="ue on db bh ap" viewBox="0 0 16 16"> 
                                    <path
                                        d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z">
                                    </path>
                                </svg> <span class="hidden tro r_">Update Category</span> </button>
                                        </div>
                                        <!-- End -->
                                </div>
                            
                            </div>
                        </div>

                    </div>

                </div>
            




                <div class="vd jd tto vv oq ar ri">
                    <!-- Page header -->
                    <div class="_y js jn ry">

                        <!-- Left: Title -->
                        <div class="rw _a">
                            <h1 class="gg zj text-slate-800 font-bold">List of Categories</h1>
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
                                                <div class="g_ gh">Category_Id</div>
                                            </th>
                                            <th class="v_ wk vm ">
                                                <div class="g_ gh">Category_Name</div>
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
                    <script>document.addEventListener("alpine:init", () => { Alpine.data("handleSelect", () => ({ selectall: !1, selectAction() { countEl = document.querySelector(".table-items-action"), countEl && (checkboxes = document.querySelectorAll("input.table-item:checked"), document.querySelector(".table-items-count").innerHTML = checkboxes.length, checkboxes.length > 0 ? countEl.classList.remove("hidden") : countEl.classList.add("hidden")) }, toggleAll() { this.selectall = !this.selectall, checkboxes = document.querySelectorAll("input.table-item"), [...checkboxes].map(e => { e.checked = this.selectall }), this.selectAction() }, uncheckParent() { this.selectall = !1, document.getElementById("parent-checkbox").checked = !1, this.selectAction() } })) })</script>
                </div>
                </main>


<?php include 'footer.php' ?>
<?php
    }
else{

    header('location:adminlogin.php');
}
    ?>