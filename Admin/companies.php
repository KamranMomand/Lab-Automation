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
       url:'config5.php',
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


    $(document).on('click','.btncdelete',function(){
        var id=$(this).val();
        $.ajax({
            url:'config5.php',
            type:'POST',
            data:{Delete:1,
            c_id:id,
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
        $('#editbox').show();
        $('#txtcid').val(row[0].innerText);
        $('#txtcname').val(row[1].innerText);
        $('#txtcreg').val(row[2].innerText);
        $('#txtcweb').val(row[3].innerText);
        $('#txtcuname').val(row[4].innerText);
        $('#txtcemail').val(row[5].innerText);
        $('#txtcpass').val(row[6].innerText);
        $('#txtcadd').val(row[7].innerText);
        $('#txtclogo').val(row[8].innerText);

        
    });

    $('#btncupdate').click(function(){
        var data1 = new FormData();
        data1.append('Update', '1');
        data1.append('cid', $('#txtcid').val());
        data1.append('cname', $('#txtcname').val());
        data1.append('creg', $('#txtcreg').val());
        data1.append('cweb', $('#txtcweb').val());
        data1.append('cuname', $('#txtcuname').val());
        data1.append('cemail', $('#txtcemail').val());
        data1.append('cpass', $('#txtcpass').val());
        data1.append('cadd', $('#txtcadd').val());
        data1.append('clogo', $("#txtclogo").prop('files')[0]);

        $.ajax({

        url:'config5.php',
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
        $('#txtcid').val("");
        $('#txtcname').val("");
        $('#txtcreg').val("");
        $('#txtcweb').val("");
        $('#txtcuname').val("");
        $('#txtcemail').val("");
        $('#txtcpass').val("");
        $('#txtcadd').val("");
        $('#txtclogo').val("");
    }
    
});

</script>

<main>
                
            
                <div class="vd jd tto vv oq ar ri">
                    <!-- Page header -->
                    <div class="_y js jn ry">

                        <!-- Left: Title -->
                        <div class="rw _a">
                            <h1 class="gg zj text-slate-800 font-bold">List of Companies</h1>
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
                                                <div class="g_ gh">Company_Id</div>
                                            </th>
                                            <th class="v_ wk vm ">
                                                <div class="g_ gh">Company Name</div>
                                            </th>
                                            <th class="v_ wk vm ">
                                                <div class="g_ gh">Registration #</div>
                                            </th>
                                            <th class="v_ wk vm ">
                                                <div class="g_ gh">Website</div>
                                            </th>
                                            <th class="v_ wk vm ">
                                                <div class="g_ gh">Username</div>
                                            </th>
                                            <th class="v_ wk vm ">
                                                <div class="g_ gh">Email</div>
                                            </th>
                                            <th class="v_ wk vm ">
                                                <div class="g_ gh">Password</div>
                                            </th>
                                            <th class="v_ wk vm ">
                                                <div class="g_ gh">Address</div>
                                            </th>
                                            <th class="v_ wk vm ">
                                                <div class="g_ gh">Logo</div>
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
                        <h1 class="gg zj text-slate-800 font-bold">Edit Company Account</h1>
                    </div>

                    <div class="ck border-slate-200">
                        <div class="la ie">
                            
                        <!-- Input Types -->
                        <div>
                                <div class="sq fx qz">

                                    <div>
                                        <!-- Start -->
                                        <div>
                                        <input class="tn oq" name="txtcid" id="txtcid" type="hidden">
                                            <label class="block text-sm gk rx" for="default">Company Name</label>
                                            <input class="tn oq" name="txtcname" id="txtcname" type="text">
                                        </div>
                                        <!-- End -->
                                    </div>

                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <div class="flex items-center fg">
                                                <label class="block text-sm gk rx" for="tooltip">Registration #</label>
                                                
                                            </div>
                                            <input class="tn oq" name="txtcreg" id="txtcreg" type="text">
                                        </div>
                                        <!-- End -->
                                    </div>

                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <label class="block text-sm gk rx" for="mandatory">Website <span
                                                    class="yl">*</span></label>
                                            <input class="tn oq" name="txtcweb" id="txtcweb" type="url" required="">
                                        </div>
                                        <!-- End -->
                                    </div>

                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <label class="block text-sm gk rx" for="mandatory">Username <span
                                                    class="yl">*</span></label>
                                            <input class="tn oq" name="txtcuname" id="txtcuname" type="text" required="">
                                        </div>
                                        <!-- End -->
                                    </div>

                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <label class="block text-sm gk rx" for="mandatory">Email <span
                                                    class="yl">*</span></label>
                                            <input class="tn oq" name="txtcemail" id="txtcemail" type="email" required="">
                                        </div>
                                        <!-- End -->
                                    </div>

                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <label class="block text-sm gk rx" for="mandatory">Password <span
                                                    class="yl">*</span></label>
                                            <input class="tn oq" name="txtcpass" id="txtcpass" type="text" required="">
                                        </div>
                                        <!-- End -->
                                    </div>

                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <label class="block text-sm gk rx" for="mandatory">Company Address <span
                                                    class="yl">*</span></label>
                                            <input class="tn oq" name="txtcadd" id="txtcadd" type="text" required="">
                                        </div>
                                        <!-- End -->
                                    </div>

                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <label class="block text-sm gk rx" for="mandatory">Company Logo <span
                                                    class="yl">*</span></label>
                                            <input class="tn oq" name="txtclogo" id="txtclogo" type="file" required="">
                                        </div>
                                        <!-- End -->
                                    </div>

                                </div>
                            </div>

                                <button class="btn hb xs yo" name="btncupdate" id="btncupdate"> <svg class="ue on db bh ap" viewBox="0 0 16 16"> 
                                    <path
                                        d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z">
                                    </path>
                                </svg> <span class="hidden tro r_">Update Company</span> </button>

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