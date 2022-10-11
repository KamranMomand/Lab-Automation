<?php
session_start(); 
if($_SESSION['team_id']){
?>
<?php include 'header.php' ?>


<script>
    $(document).ready(function(){

        alldata();
        function alldata(){
        $.ajax({
       url:'config8.php',
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



    $(document).on('click','.btncresult',function(){
        
        var row=$(this).closest('tr').find('td');
        $('#editbox').show();
        $('#txttid').val(row[0].innerText);
        $('#txtpname').val(row[1].innerText);
        $('#txtpcode').val(row[2].innerText);
        $('#txtrevis').val(row[3].innerText);
        $('#txttype').val(row[4].innerText);
        $('#txtsdate').val(row[5].innerText);
        $('#txtedate').val(row[6].innerText);
        $('#txtresult').val(row[7].innerText);
        $('#txtfault').val(row[8].innerText);
        $('#ddlscategory').val(row[9].innerText);
        
    });
    

    $('#btncomp').click(function(){
        var tid=$('#txttid').val();
        var tresult=$('#txtresult').val();
        var tfault=$('#txtfault').val();
        var tstatus=$('#ddlscategory').val();

        $.ajax({

        url:'config8.php',
        type:'POST',
        data: {
            Update:1,
        t_id:tid,
        t_result:tresult,
        t_fault:tfault,
        t_status:tstatus,
        },
        success:function(response){
            if(response)
            {
                alldata();
                blankfield();
                $('#editbox').hide();
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
        $('#txtpname').val("");
        $('#txtpcode').val("");
        $('#txtrevise').val("");
        $('#txttype').val("");
        $('#txtsdate').val("");
        $('#txtedate').val("");
        $('#txtresult').val("");
        $('#txtfault').val("");
        $('#ddlscategory').val("");
        
    }

});

</script>

<main>
                
            
                <div class="vd jd tto vv oq ar ri">
                    <!-- Page header -->
                    <div class="_y js jn ry">

                        <!-- Left: Title -->
                        <div class="rw _a">
                            <h1 class="gg zj text-slate-800 font-bold">Testing Request</h1>
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
                                                <div class="g_ gh">Testing Id</div>
                                            </th>                                       
                                            <th class="v_ wk vm ">
                                                <div class="g_ gh">Product</div>
                                            </th>
                                            <th class="v_ wk vm ">
                                                <div class="g_ gh">Product Code</div>
                                            </th>
                                            <th class="v_ wk vm ">
                                                <div class="g_ gh">Revision</div>
                                            </th>
                                            <th class="v_ wk vm ">
                                                <div class="g_ gh">Testing Type</div>
                                            </th>
                                            <th class="v_ wk vm ">
                                                <div class="g_ gh">Start Date</div>
                                            </th>
                                            <th class="v_ wk vm ">
                                                <div class="g_ gh">End Date</div>
                                            </th>
                                            <th class="v_ wk vm ">
                                                <div class="g_ gh">Result</div>
                                            </th>
                                            <th class="v_ wk vm ">
                                                <div class="g_ gh">Fault</div>
                                            </th>
                                            <th class="v_ wk vm ">
                                                <div class="g_ gh">Status</div>
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

                    <div class="vd jd tto vv oq ar ri" id="editbox" style="display: none ;">
                    <!-- Page header -->
                    <div class="ry">
                        <h1 class="gg zj text-slate-800 font-bold">Result</h1>
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
                                            <label class="block text-sm gk rx" for="default">Product Name</label>
                                            <input class="tn oq" name="txtpname" id="txtpname" type="text" disabled>
                                        </div>
                                        <!-- End -->
                                    </div>

                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <div class="flex items-center fg">
                                                <label class="block text-sm gk rx" for="tooltip">Product Code</label>
                                                
                                            </div>
                                            <input class="tn oq" name="txtpcode" id="txtpcode" type="text" disabled>
                                        </div>
                                        <!-- End -->
                                    </div>

                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <label class="block text-sm gk rx" for="mandatory">Revision <span
                                                    class="yl">*</span></label>
                                            <input class="tn oq" name="txtrevis" id="txtrevis" type="text" required="" disabled>
                                        </div>
                                        <!-- End -->
                                    </div>

                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <label class="block text-sm gk rx" for="mandatory">Testing Type <span
                                                    class="yl">*</span></label>
                                            <input class="tn oq" name="txttype" id="txttype" type="text" required="" disabled>
                                        </div>
                                        <!-- End -->
                                    </div>

                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <label class="block text-sm gk rx" for="mandatory">Start Date <span
                                                    class="yl">*</span></label>
                                            <input class="tn oq" name="txtsdate" id="txtsdate" type="text" required=""disabled>
                                        </div>
                                        <!-- End -->
                                    </div>

                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <label class="block text-sm gk rx" for="mandatory">End Date <span
                                                    class="yl">*</span></label>
                                            <input class="tn oq" name="txtedate" id="txtedate" type="text" required="" disabled>
                                        </div>
                                        <!-- End -->
                                    </div>

                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <label class="block text-sm gk rx" for="mandatory">Result <span
                                                    class="yl">*</span></label>
                                            <textarea name="txtresult" id="txtresult" class="tn oq" placeholder="Result :"  ></textarea>
                                            
                                        </div>
                                        <!-- End -->
                                    </div>

                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <label class="block text-sm gk rx" for="mandatory">Fault <span
                                                    class="yl">*</span></label>
                                                    <textarea name="txtfault" id="txtfault" class="tn oq" placeholder="Fault :"  ></textarea>
                                            
                                        </div>
                                        <!-- End -->
                                    </div>

                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <label class="block text-sm gk rx" for="mandatory">Status <span class="yl">*</span></label>
                                           
                                        <select id="ddlscategory" class="tn oq" required="">
                                        <option>Select Category..</option>
                                        <option>Applied</option>
                                        <option>Assign</option>
                                        <option>Process</option>
                                        <option>Pass</option>
                                        <option>Failed</option>
                                        </select>
                                        </div>

                                    </div>

                                </div>
                            </div>

                                <button class="btn hb xs yo" name="btncomp" id="btncomp"> <svg class="ue on db bh ap" viewBox="0 0 16 16"> 
                                    <path
                                        d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z">
                                    </path>
                                </svg> <span class="hidden tro r_">Complete</span> </button>

                        </div>

                    </div>
                </div>

                <div class="vd jd tto vv oq ar ri" id="editbox2" style="display: none ;">
                    <!-- Page header -->
                    <div class="ry">
                        <h1 class="gg zj text-slate-800 font-bold">Test Assign</h1>
                    </div>

                    <div class="ck border-slate-200">
                        <div class="la ie">
                            
                        <!-- Input Types -->
                        <div>
                                <div class="sq fx qz">

                                        <input class="tn oq" name="txttid2" id="txttid2" type="hidden">
                                            
                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <label class="block text-sm gk rx" for="mandatory">Select Employee <span class="yl">*</span></label>
                                           
                                        <select id="ddlscategory2" class="tn oq" required="">
                                        <option value="">Select Employee..</option>
                                        <?php

$ta_query="select * from team";
$ta_result=mysqli_query($conn,$ta_query);

                                while ($ta_row = mysqli_fetch_assoc($ta_result)) {
                                ?>
                                    <option value="<?php echo $ta_row['team_id']; ?>"><?php echo $ta_row['team_name']; ?></option>
                                <?php
                                }
                                ?>
                                        </select>
                                        </div>

                                    </div>

                                </div>
                            </div>

                                <button class="btn hb xs yo" name="btnass" id="btnass"> <svg class="ue on db bh ap" viewBox="0 0 16 16"> 
                                    <path
                                        d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z">
                                    </path>
                                </svg> <span class="hidden tro r_">Assign</span> </button>

                        </div>

                    </div>
                </div>

                </main>


<?php include 'footer.php' ?>
<?php
    }
else{

    header('location:emplogin.php');
}
    ?>