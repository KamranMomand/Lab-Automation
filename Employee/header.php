<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from preview.cruip.com/mosaic/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Jul 2022 19:01:27 GMT -->

<head>
    <meta charset="utf-8">
    <title>Mosaic HTML Demo - Home</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="style.a49749f4fb5cff923e10.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body class="gm bf hy ys" :class="{ 'sidebar-expanded': sidebarExpanded }"
    x-data="{ page: 'dashboard-main', sidebarOpen: false, sidebarExpanded: localStorage.getItem('sidebar-expanded') == 'true' }"
    x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))">

    <script>
        if (localStorage.getItem('sidebar-expanded') == 'true') {
            document.querySelector('body').classList.add('sidebar-expanded');
        } else {
            document.querySelector('body').classList.remove('sidebar-expanded');
        }
    </script>
    <?php
if($_SESSION['team_id'])
{
    define('host','localhost');
                        define('username','root');
                        define('password','');
                        define('dbname','lab_automation');

                        $conn=mysqli_connect(host,username,password,dbname);
                        if(!$conn)
                        {
                            alert("connection not created");
                        }
    $team_id=$_SESSION['team_id'];
    $query="select * from `team` WHERE team_id='$team_id'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_assoc($result);
}
 ?>

    <!-- Page wrapper -->
    <div class="flex ot lq">

        <!-- Sidebar -->
        <div>
            <div class="th tm bg-slate-900 pb nb tec tei wi wf"
                :class="sidebarOpen ? 'bv' : 'opacity-0 pointer-events-none'" aria-hidden="true" x-cloak=""></div>
            <div id="sidebar"
                class="flex fh tp nb tb tk zq ten ter tek fe ot cr ttn ta uk teg ttg 2xl:!w-64 ap pa va wo wf wc"
                :class="sidebarOpen ? 'translate-x-0' : '-translate-x-64'" @click.outside="sidebarOpen = false"
                @keydown.escape.window="sidebarOpen = false" x-cloak="lg">
                <div class="flex fg iv gu jm"> <button class="tec text-slate-500 xv"
                        @click.stop="sidebarOpen = !sidebarOpen" aria-controls="sidebar" :aria-expanded="sidebarOpen">
                        <span class="tc">Close sidebar</span> <svg class="ur oo db" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z"></path>
                        </svg> </button> <a class="block" href="index.php"> <img src="/E-Project/assets/images/loginicon.png" />
                            <defs>
                                <linearGradient x1="28.538%" y1="20.229%" x2="100%" y2="108.156%" id="logo-a">
                                    <stop stop-color="#A5B4FC" stop-opacity="0" offset="0%"></stop>
                                    <stop stop-color="#A5B4FC" offset="100%"></stop>
                                </linearGradient>
                                <linearGradient x1="88.638%" y1="29.267%" x2="22.42%" y2="100%" id="logo-b">
                                    <stop stop-color="#38BDF8" stop-opacity="0" offset="0%"></stop>
                                    <stop stop-color="#38BDF8" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <rect fill="#6366F1" width="32" height="32" rx="16"></rect>
                            <path
                                d="M18.277.16C26.035 1.267 32 7.938 32 16c0 8.837-7.163 16-16 16a15.937 15.937 0 01-10.426-3.863L18.277.161z"
                                fill="#4F46E5"></path>
                            <path
                                d="M7.404 2.503l18.339 26.19A15.93 15.93 0 0116 32C7.163 32 0 24.837 0 16 0 10.327 2.952 5.344 7.404 2.503z"
                                fill="url(#logo-a)"></path>
                            <path
                                d="M2.223 24.14L29.777 7.86A15.926 15.926 0 0132 16c0 8.837-7.163 16-16 16-5.864 0-10.991-3.154-13.777-7.86z"
                                fill="url(#logo-b)"></path>
                        </svg> </a> </div>
                <div class="la">
                    <div>
                        <h3 class="gb gq text-slate-500 g_ ga"> <span class="hidden tea ttv 2xl:hidden gp ur"
                                aria-hidden="true">•••</span> <span class="tec ttd 2xl:block">Pages</span> </h3>
                        <ul class="im">
                            <li class="me vg rounded-sm ib wj"
                                :class="{ 'bg-slate-900': page.startsWith('dashboard-') }" x-data="{ open: false }"
                                x-init="$nextTick(() => open = page.startsWith('dashboard-'))"> <a
                                    class="block ya xw ci wr wu"
                                    :class="page.startsWith('dashboard-') &amp;&amp; 'hover--text-slate-200'" 
                                    href="index.php">
                                    
                                    <div class="flex items-center fg">
                                        
                                        <div class="flex items-center"> <svg class="ap oo ur" viewBox="0 0 24 24">
                                    <path class="db yu"
                                                    :class="page.startsWith('ecommerce-') &amp;&amp; 'text-indigo-300'"
                                                    d="M13 15l11-7L11.504.136a1 1 0 00-1.019.007L0 7l13 8z"></path>
                                                    <path class="db ys"
                                                :class="page === 'calendar' &amp;&amp; 'text-indigo-500'"
                                                d="M1 3h22v20H1z"></path>
                                            <path class="db yu"
                                                :class="page === 'calendar' &amp;&amp; 'text-indigo-300'"
                                                d="M21 3h2v4H1V3h2V1h4v2h10V1h4v2Z"></path>
                                        </svg> <span
                                                class="text-sm gk ml-3 ttl ttb 2xl:opacity--100 wf">Testing Request</span>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="me vg rounded-sm ib wj" :class="page === 'campaigns' &amp;&amp; 'bg-slate-900'">
                                <a class="block ya xw ci wr wu"
                                    :class="page === 'campaigns' &amp;&amp; 'hover--text-slate-200'"
                                    href="history.php">
                                    <div class="flex items-center"> <svg class="ap oo ur" viewBox="0 0 24 24">
                                    <path class="db yu"
                                                    :class="page.startsWith('finance-') &amp;&amp; 'text-indigo-300'"
                                                    d="M13 6.068a6.035 6.035 0 0 1 4.932 4.933H24c-.486-5.846-5.154-10.515-11-11v6.067Z">
                                                </path>
                                    <path class="db bo"
                                                    :class="page.startsWith('finance-') &amp;&amp; '!text-indigo-500'"
                                                    d="M18.007 13c-.474 2.833-2.919 5-5.864 5a5.888 5.888 0 0 1-3.694-1.304L4 20.731C6.131 22.752 8.992 24 12.143 24c6.232 0 11.35-4.851 11.857-11h-5.993Z">
                                                </path>
                                                <path class="db ys"
                                                    :class="page.startsWith('finance-') &amp;&amp; 'text-indigo-600'"
                                                    d="M6.939 15.007A5.861 5.861 0 0 1 6 11.829c0-2.937 2.167-5.376 5-5.85V0C4.85.507 0 5.614 0 11.83c0 2.695.922 5.174 2.456 7.17l4.483-3.993Z">
                                                </path>
                                            
                                        </svg> <span
                                            class="text-sm gk ml-3 ttl ttb 2xl:opacity--100 wf">History</span> </div>
                                </a>
                            </li>

                            </li>
                        </ul>
                    </div>
                </div>
                <div class="gi hidden tel 2xl:hidden justify-end sm">
                    <div class="me vg"> <button @click="sidebarExpanded = !sidebarExpanded"> <span class="tc">Expand /
                                collapse sidebar</span> <svg class="ur oo db kj" viewBox="0 0 24 24">
                                <path class="yu" d="M19.586 11l-5-5L16 4.586 23.414 12 16 19.414 14.586 18l5-5H7v-2z">
                                </path>
                                <path class="ys" d="M3 23H1V1h2z"></path>
                            </svg> </button> </div>
                </div>
            </div>
        </div>

        <!-- Content area -->
        <div class="td flex fh ac ce ct">

            <!-- Site header -->
            <header class="tv tk bg-white cx border-slate-200 ng">
                <div class="vd jd tto">
                    <div class="flex items-center fg op sn">
                        <div class="flex"> <button class="text-slate-500 hover--text-slate-600 tec"
                                @click.stop="sidebarOpen = !sidebarOpen" aria-controls="sidebar"
                                :aria-expanded="sidebarOpen"> <span class="tc">Open sidebar</span> <svg class="ur oo db"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="4" y="5" width="16" height="2"></rect>
                                    <rect x="4" y="11" width="16" height="2"></rect>
                                    <rect x="4" y="17" width="16" height="2"></rect>
                                </svg> </button> </div>
                        <div class="flex items-center lu">
                            
                                                        
                            <hr class="ut oo hw">
                            <div class="td inline-flex" x-data="{ open: false }"> <button
                                    class="inline-flex justify-center items-center kp" aria-haspopup="true"
                                    @click.prevent="open = !open" :aria-expanded="open"> <img class="uu of rounded-full"
                                        src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['team_profile']);?>" width="32" height="32" alt="User">
                                    <div class="flex items-center ci"> <span class="ci r_ text-sm gk km"><?php echo $row['team_name'];?></span> <svg class="w-3 h-3 ap rq db yu" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                        </svg> </div>
                                </button>
                                <div class="am nv tp tq tw uj bg-white border border-slate-200 ms rounded by lq iu"
                                    @click.outside="open = false" @keydown.escape.window="open = false" x-show="open"
                                    x-transition:enter="wr wh wf fe" x-transition:enter-start="opacity-0 aw"
                                    x-transition:enter-end="bv ax" x-transition:leave="wr wh wf"
                                    x-transition:leave-start="bv" x-transition:leave-end="opacity-0" x-cloak="">
                                    <div class="mm mv me rx cx border-slate-200">
                                        <div class="gk text-slate-800"><?php echo $row['team_name'];?></div>
                                        <div class="gb text-slate-500 gz"><?php echo $row['team_designation'];?></div>
                                    </div>
                                    <ul>
                                        <li> <a class="gk text-sm text-indigo-500 xd flex items-center mt me"
                                                href="logout.php" @click="open = false" @focus="open = true"
                                                @focusout="open = false">Sign Out</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>