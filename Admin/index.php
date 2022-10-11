<?php
session_start(); 
if($_SESSION['admin_id']){
?>
<?php
  include 'header.php';
?>


<main>
                <div class="vd jd tto vv oq ar ri">

                    <div class="td py va jp rounded-sm lq ry">
                        <div class="tp tw tk sk s_ pointer-events-none hidden tnn" aria-hidden="true"> <svg width="319"
                                height="198" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs>
                                    <path id="welcome-a" d="M64 0l64 128-64-20-64 20z"></path>
                                    <path id="welcome-e" d="M40 0l40 80-40-12.5L0 80z"></path>
                                    <path id="welcome-g" d="M40 0l40 80-40-12.5L0 80z"></path>
                                    <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="welcome-b">
                                        <stop stop-color="#A5B4FC" offset="0%"></stop>
                                        <stop stop-color="#818CF8" offset="100%"></stop>
                                    </linearGradient>
                                    <linearGradient x1="50%" y1="24.537%" x2="50%" y2="100%" id="welcome-c">
                                        <stop stop-color="#4338CA" offset="0%"></stop>
                                        <stop stop-color="#6366F1" stop-opacity="0" offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <g fill="none" fill-rule="evenodd">
                                    <g transform="rotate(64 36.592 105.604)">
                                        <mask id="welcome-d" fill="#fff">
                                            <use xlink:href="#welcome-a"></use>
                                        </mask>
                                        <use fill="url(#welcome-b)" xlink:href="#welcome-a"></use>
                                        <path fill="url(#welcome-c)" mask="url(#welcome-d)" d="M64-24h80v152H64z">
                                        </path>
                                    </g>
                                    <g transform="rotate(-51 91.324 -105.372)">
                                        <mask id="welcome-f" fill="#fff">
                                            <use xlink:href="#welcome-e"></use>
                                        </mask>
                                        <use fill="url(#welcome-b)" xlink:href="#welcome-e"></use>
                                        <path fill="url(#welcome-c)" mask="url(#welcome-f)"
                                            d="M40.333-15.147h50v95h-50z"></path>
                                    </g>
                                    <g transform="rotate(44 61.546 392.623)">
                                        <mask id="welcome-h" fill="#fff">
                                            <use xlink:href="#welcome-g"></use>
                                        </mask>
                                        <use fill="url(#welcome-b)" xlink:href="#welcome-g"></use>
                                        <path fill="url(#welcome-c)" mask="url(#welcome-h)"
                                            d="M40.333-15.147h50v95h-50z"></path>
                                    </g>
                                </g>
                            </svg> </div>
                        <div class="td">

                        <?php
        
        $query="select * from `admin`";
        $result=mysqli_query($conn,$query);
             
?>  
                            <h1 class="gg zj text-slate-800 font-bold rx">Good afternoon, <?php echo $row['admin_name'];?> 👋</h1>
                            <p>Here is what’s happening with your projects today:</p>
                        </div>
                    </div>
                    <div class="_y js jn ry">
                    <ul class="flex flex-wrap justify-center jr ry _a lf si">
                    <?php

$query="select * from `team`";
$result=mysqli_query($conn,$query);

                                  
        while($row=mysqli_fetch_assoc($result))
        {
?>  
                    <li> <a class="block"> <img class="uo oa rounded-full" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['team_profile']);?>"
                                        width="36" height="36" alt="User 01"> </a> </li>
                            <?php
        }?>
                            <li> <button 
                                    class="flex justify-center items-center uo oa rounded-full bg-white border border-slate-200 hover--border-slate-300 text-indigo-500 bw wr wu r_">
                                    <span class="tc">Add new user</span> <a href="teams.php"><svg class="ue on db" viewBox="0 0 16 16">
                                        <path
                                            d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z">
                                        </path>
                                    </svg></a> </button> </li>
                        </ul>
                        <div class="sq fa _j fm ji fy">
                            <div class="td inline-flex" x-data="{ open: false }"> 
                                <div class="am nv tp tq tb tg jz qe uq bg-white border border-slate-200 mp rounded by lq iu"
                                    @click.outside="open = false" @keydown.escape.window="open = false" x-show="open"
                                    x-transition:enter="wr wh wf fe" x-transition:enter-start="opacity-0 aw"
                                    x-transition:enter-end="bv ax" x-transition:leave="wr wh wf"
                                    x-transition:leave-start="bv" x-transition:leave-end="opacity-0" x-cloak="">
                                    <div class="gb g_ yu gq mp mv vd">Filters</div>
                                    <ul class="rw">
                                        <li class="mt me"> <label class="flex items-center"> <input type="checkbox"
                                                    class="to" checked="checked"> <span class="text-sm gk r_">Direct VS
                                                    Indirect</span> </label> </li>
                                        <li class="mt me"> <label class="flex items-center"> <input type="checkbox"
                                                    class="to" checked="checked"> <span class="text-sm gk r_">Real Time
                                                    Value</span> </label> </li>
                                        <li class="mt me"> <label class="flex items-center"> <input type="checkbox"
                                                    class="to" checked="checked"> <span class="text-sm gk r_">Top
                                                    Channels</span> </label> </li>
                                        <li class="mt me"> <label class="flex items-center"> <input type="checkbox"
                                                    class="to"> <span class="text-sm gk r_">Sales VS Refunds</span>
                                            </label> </li>
                                        <li class="mt me"> <label class="flex items-center"> <input type="checkbox"
                                                    class="to"> <span class="text-sm gk r_">Last Order</span> </label>
                                        </li>
                                        <li class="mt me"> <label class="flex items-center"> <input type="checkbox"
                                                    class="to"> <span class="text-sm gk r_">Total Spent</span> </label>
                                        </li>
                                    </ul>
                                    <div class="vg me ck border-slate-200 hq">
                                        <ul class="flex items-center fg">
                                            <li> <button
                                                    class="btn-xs bg-white border-slate-200 hover--border-slate-300 text-slate-500 hover--text-slate-600">Clear</button>
                                            </li>
                                            <li> <button class="btn-xs hb xs yo" @click="open = false"
                                                    @focusout="open = false">Apply</button> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="td"> <input
                                    class="datepicker tn mf text-slate-500 hover--text-slate-600 gk kn oz"
                                    placeholder="Select dates" data-class="flatpickr-right">
                                <div class="tp tm tg flex items-center pointer-events-none"> <svg
                                        class="ue on db text-slate-500 ml-3" viewBox="0 0 16 16">
                                        <path
                                            d="M15 2h-2V0h-2v2H9V0H7v2H5V0H3v2H1a1 1 0 00-1 1v12a1 1 0 001 1h14a1 1 0 001-1V3a1 1 0 00-1-1zm-1 12H2V6h12v8z">
                                        </path>
                                    </svg> </div>
                            </div> 
                        </div>
                    </div>

                    <!-- Cards -->
                    <h3 class="gg text-slate-800 font-bold ">Teams</h3>
                    <div class="sq ff fb">
                    
                    <?php

$query="select * from `team`";
$result=mysqli_query($conn,$query);

                                  
        while($row=mysqli_fetch_assoc($result))
        {
?>  
                
                <div class="nk
                                _s ttj bg-white by rounded-sm border
                                border-slate-200">
                    <div class="flex fh or">
                        <div class="ad vl">
                            
                            <header>
                                <div class="flex justify-center in">
                                    <a class="td inline-flex fd" >
                                        <div class="tp tk
                                                        tw sb bg-white
                                                        rounded-full shadow" aria-hidden="true"> <svg class="uu of db ym" viewBox="0 0 32 32">
                                                <path d="M21
                                                                14.077a.75.75 0
                                                                01-.75-.75 1.5
                                                                1.5 0
                                                                00-1.5-1.5.75.75
                                                                0 110-1.5 1.5
                                                                1.5 0
                                                                001.5-1.5.75.75
                                                                0 111.5 0 1.5
                                                                1.5 0 001.5
                                                                1.5.75.75 0 010
                                                                1.5 1.5 1.5 0
                                                                00-1.5 1.5.75.75
                                                                0 01-.75.75zM14
                                                                24.077a1 1 0
                                                                01-1-1 4 4 0
                                                                00-4-4 1 1 0
                                                                110-2 4 4 0
                                                                004-4 1 1 0 012
                                                                0 4 4 0 004 4 1
                                                                1 0 010 2 4 4 0
                                                                00-4 4 1 1 0
                                                                01-1 1z"></path>
                                            </svg> </div> <img class="rounded-full" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['team_profile']);?>" width="64" height="64" alt="User 12">
                                    </a>
                                </div>
                                <div class="gp"> <a class="inline-flex
                                                    text-slate-800 xk" href="#0">
                                        <h2 class="gy yt
                                                        justify-center g_"><?php echo $row['team_name'];?></h2>
                                    </a>
                                </div>
                                <div class="flex
                                                justify-center items-center"><span class="text-sm gk yu sw
                                                    mr-1">-&gt;</span> <span><?php echo $row['team_designation'];?></span></div>
                            </header>
                            <div class="gp i_">
                                <div class="text-sm"><?php echo $row['team_bio'];?></div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <?php
                            }
                            ?>
                            </div>
                            <br/>
                            <h3 class="gg text-slate-800 font-bold ">Companies</h3>
                            <div class="sq ff fb">                   
<?php
$cquery="select * from `company`";
$cresult=mysqli_query($conn,$cquery);

                                  
        while($crow=mysqli_fetch_assoc($cresult))
        {
?>  
                
                <!-- Users cards -->
                <div class="nk _s ttk bg-white by rounded-sm border
                                border-slate-200">
                <div class="flex fh or ">
                <div
                                        class="ad vl "> <div class="flex fg fd">
                                            <header> <div class="flex in"> <a
                                                        class="td inline-flex fd
                                                        iy" > <div
                                                            class="tp tk tw sb
                                                            bg-white
                                                            rounded-full shadow "
                                                            aria-hidden="true">
                                                            <svg class="uu of db
                                                                ym" viewBox="0 0
                                                                32 32"> <path
                                                                    d="M21
                                                                    14.077a.75.75
                                                                    0 01-.75-.75
                                                                    1.5 1.5 0
                                                                    00-1.5-1.5.75.75
                                                                    0 110-1.5
                                                                    1.5 1.5 0
                                                                    001.5-1.5.75.75
                                                                    0 111.5 0
                                                                    1.5 1.5 0
                                                                    001.5
                                                                    1.5.75.75 0
                                                                    010 1.5 1.5
                                                                    1.5 0 00-1.5
                                                                    1.5.75.75 0
                                                                    01-.75.75zM14
                                                                    24.077a1 1 0
                                                                    01-1-1 4 4 0
                                                                    00-4-4 1 1 0
                                                                    110-2 4 4 0
                                                                    004-4 1 1 0
                                                                    012 0 4 4 0
                                                                    004 4 1 1 0
                                                                    010 2 4 4 0
                                                                    00-4 4 1 1 0
                                                                    01-1 1z"></path>
                                                            </svg> </div> <img
                                                            class="rounded-full"
                                                            src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($crow['company_logo']);?>"
                                                            width="64"
                                                            height="64"
                                                            alt="User 01"> </a>
                                                    <div class="iu gc"> <a
                                                            class="inline-flex
                                                            text-slate-800 xk"
                                                            href="#0"> <h2
                                                                class="gy yt
                                                                justify-center
                                                                g_"><?php echo $crow['company_name'];?></h2>
                                                        </a> <div class="flex
                                                            items-center"><span
                                                                class="text-sm
                                                                gk yu sw mr-1">-&gt;</span>
                                                            <span><?php echo $crow['company_registration_no'];?></span></div>
                                                    </div> </div> </header> </div> <div class="i_"> <div
                                                class="text-sm"><a href="<?php echo $crow['company_website'];?>" target="blank"><?php echo $crow['company_website'];?></a> | <a href="<?php echo $crow['company_email'];?>" target="blank"><?php echo $crow['company_email'];?></a></div> </div> </div> <div
                                        class="ck border-slate-200">  </div> </div>
                                        </div>
                <?php
                            }
                            ?>
                            
                            </div>

<script>
    $(document).ready(function(){

        alldata();
        function alldata(){
   $.ajax({
       url:'config6.php',
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

                            <br/>
                            <div class="sq ff fb">
                        <!-- Line chart (Sales Over Time) -->
                        <div class="flex fh nk _s bg-white by rounded-sm border border-slate-200">
                            <!-- Table (Top Channels) -->
                        <div class="nk tt_ bg-white by rounded-sm border border-slate-200">
                            <header class="mn mr cx hp">
                                <h2 class="g_ text-slate-800">Customer Care</h2>
                            </header>                            
                            <div class="vd jd tto vv oq ar ri">
                            <a  href="admincustomercare.php" class="btn hb xs yo"> <span class="hidden tro r_">Reply</span> </a>
                    <!-- Page header -->
                    <div class="_y js jn ry">
                        <!-- Left: Title -->
                    </div>
                    <!-- Table -->
                    <div id="datadisplay">
                    
                    </div>
                    </div>

                        </div>
                        </div>
                        <!-- Stacked bar chart (Sales VS Refunds) -->
                        <div class="flex fh nk _s bg-white by rounded-sm border border-slate-200">
                            <header class="mn mr cx hp flex items-center">
                                <h2 class="g_ text-slate-800">Sales VS Refunds</h2>
                                <div class="td r_" x-data="{ open: false }" @mouseenter="open = true"
                                    @mouseleave="open = false"> <button class="block" href="#0" aria-haspopup="true"
                                        :aria-expanded="open" @focus="open = true" @focusout="open = false"
                                        @click.prevent=""> <svg class="ue on db yu" viewBox="0 0 16 16">
                                            <path
                                                d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z">
                                            </path>
                                        </svg> </button>
                                    <div class="nv tp tz ne fe ag">
                                        <div class="at bg-white border border-slate-200 vf rounded by lq in"
                                            x-show="open" x-transition:enter="wr wh wf fe"
                                            x-transition:enter-start="opacity-0 ak" x-transition:enter-end="bv ax"
                                            x-transition:leave="wr wh wf" x-transition:leave-start="bv"
                                            x-transition:leave-end="opacity-0" x-cloak="">
                                            <div class="text-sm">Sint occaecat cupidatat non proident, sunt in culpa qui
                                                officia deserunt mollit.</div>
                                        </div>
                                    </div>
                                </div>
                            </header>
                            <div class="mn vm">
                                <div class="flex fd">
                                    <div class="text-3xl font-bold text-slate-800 mr-2">+$6,796</div>
                                    <div class="text-sm g_ yo mi hj rounded-full">-34%</div>
                                </div>
                            </div>
                            <div class="ad"> <canvas id="dashboard-card-09" width="595" height="248"></canvas> </div>
                        </div>
                            </div>
                            <br/>

                            <script>
    $(document).ready(function(){

        alldata();
        function alldata(){
   $.ajax({
       url:'config6.php',
       type:'GET',
       data:{Display2:1,},
       success:function(response)
       {
           $('#datadisplay2').html(response);
       },
       error:function(err)
       {
           alert ("Api Call Failed");
       },
   });
}  
});

</script>


                        <!-- Card (Recent Activity) -->
                        <div class="nk ttx bg-white by rounded-sm border border-slate-200">
                            <div class="vd jd tto vv oq ar ri">
                        <!-- Page header -->
                            <div class="_y js jn ry">

                        <!-- Left: Title -->
                                <div class="rw _a">
                            <h2 class="gg text-slate-800 font-bold">List of Admin Accounts</h2>
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
                                                <div class="g_ gh">Admin Id</div>
                                            </th>
                                            <th class="v_ wk vm ">
                                                <div class="g_ gh">Admin Name</div>
                                            </th>
                                            <th class="v_ wk vm ">
                                                <div class="g_ gh">Admin Designation</div>
                                            </th>
                                            <th class="v_ wk vm ">
                                                <div class="g_ gh">Admin Email</div>
                                            </th>
                                            <th class="v_ wk vm ">
                                                <div class="g_ gh">Admin Password</div>
                                            </th>
                                            <th class="v_ wk vm ">
                                                <div class="g_ gh">Admin Profile</div>
                                            </th>
                                                                                        
                                        </tr>
                                    </thead>
                                    <tbody class="text-sm lg lb" id="datadisplay2">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                   </div>
                   
                      
                        
                    </div>

                </div>
            </main>

            <?php
            include 'footer.php';
            ?>
<?php
    }
else{

    header('location:adminlogin.php');
}
    ?>