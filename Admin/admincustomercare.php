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
       url:'config4.php',
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

$(document).on('click','.btnreply',function(){
        var row=$(this).val();
        $('#txtmid').val(row);

        $('#msgbox').show();
    });


    $('#btnsmsg').click(function(){
        var mid=$('#txtmid').val();
        var message=$('#txtcomments').val();

        $.ajax({

        url:'config4.php',
        type:'POST',
        data:{
        Update:1,
        m_id:mid,
        msg:message,
        },
        success:function(response){
            if(response)
            {
                alldata();
                blankfield();
                $('#msgbox').hide();
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
        $('#txtcomments').val("");
    }
    
});

</script>


<main>
<div class="vd jd tto vv oq ar ri">
                    <!-- Page header -->
                    <div class="_y js jn ry">

                        <!-- Left: Title -->
                        <div class="rw _a">
                            <h1 class="gg zj text-slate-800 font-bold">Customer Messages</h1>
                        </div>

                    </div>

                    <!-- Table -->
                    <div id="datadisplay">
                    
                    </div>
                    </div>

                <div class="vd jd tto vv oq ar ri">
                    <!-- Page header -->
                    
                    <div class="ck border-slate-200">
                        <div class="la ie">
                            <div>
                            
                                <div class="sq fx qz">
                                    
                                        <!-- Start -->
                                        <div id="msgbox" style="display: none ;">
                                            <label class="block text-sm gk rx" for="default">Message:</label>
                                            <input type="hidden" class="tn oq" name="txtmid" id="txtmid"/>
                                            <textarea name="txtcomments" id="txtcomments" class="tn oq" placeholder="Message :"  ></textarea>
                                            
                                            <br/><br/>
                                            <button class="btn hb xs yo" name="btnsmsg" id="btnsmsg" > <svg class="ue on db bh ap" viewBox="0 0 16 16"> 
                                    <path
                                        d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z">
                                    </path>
                                </svg> <span class="hidden tro r_">Send Message</span> </button>

                                
                                        </div>
                                        <!-- End -->
                                </div>
                            
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