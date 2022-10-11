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


});

</script>

<main>
                
            
                <div class="vd jd tto vv oq ar ri">
                    <!-- Page header -->
                    <div class="_y js jn ry">

                        <!-- Left: Title -->
                        <div class="rw _a">
                            <h1 class="gg zj text-slate-800 font-bold">History</h1>
                        </div>

                    </div>
                    <label  class="tc">Search</label> <input
                                    id="myInput" onkeyup="myFunction()" class="tn mf kn" type="search"
                                    placeholder="Search by Product Code…"> <input
                                    id="myInput2" onkeyup="myFunction2()" class="tn mf kn" type="search"
                                    placeholder="Search by Product Name…"> <br/><br/>
                    <!-- Table -->
                    <div class="bg-white by rounded-sm border border-slate-200">
                    
                        <div x-data="handleSelect">
                            <div class="lz">
                                <table class="av oq" id="myTable">
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
                <script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

function myFunction2() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput2");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

<?php include 'footer.php' ?>
<?php
    }
else{

    header('location:emplogin.php');
}
    ?>