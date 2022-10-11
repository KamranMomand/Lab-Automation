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
if($_SESSION['admin_id'])
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
    $admin_id=$_SESSION['admin_id'];
    $query="select * from `admin` WHERE admin_id='$admin_id'";
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
                                                    :class="page.startsWith('dashboard-') &amp;&amp; '!text-indigo-500'"
                                                    d="M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12 12-5.383 12-12S18.617 0 12 0z">
                                                </path>
                                                <path class="db ys"
                                                    :class="page.startsWith('dashboard-') &amp;&amp; 'text-indigo-600'"
                                                    d="M12 3c-4.963 0-9 4.037-9 9s4.037 9 9 9 9-4.037 9-9-4.037-9-9-9z">
                                                </path>
                                                <path class="db yu"
                                                    :class="page.startsWith('dashboard-') &amp;&amp; 'text-indigo-200'"
                                                    d="M12 15c-1.654 0-3-1.346-3-3 0-.462.113-.894.3-1.285L6 6l4.714 3.301A2.973 2.973 0 0112 9c1.654 0 3 1.346 3 3s-1.346 3-3 3z">
                                                </path>
                                            </svg> <span
                                                class="text-sm gk ml-3 ttl ttb 2xl:opacity--100 wf">Dashboard</span>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="me vg rounded-sm ib wj" :class="page === 'campaigns' &amp;&amp; 'bg-slate-900'">
                                <a class="block ya xw ci wr wu"
                                    :class="page === 'campaigns' &amp;&amp; 'hover--text-slate-200'"
                                    href="teams.php">
                                    <div class="flex items-center"> <svg class="ap oo ur" viewBox="0 0 24 24">
                                    <path class="db ys"
                                                    :class="page.startsWith('community-') &amp;&amp; 'text-indigo-500'"
                                                    d="M18.974 8H22a2 2 0 012 2v6h-2v5a1 1 0 01-1 1h-2a1 1 0 01-1-1v-5h-2v-6a2 2 0 012-2h.974zM20 7a2 2 0 11-.001-3.999A2 2 0 0120 7zM2.974 8H6a2 2 0 012 2v6H6v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5H0v-6a2 2 0 012-2h.974zM4 7a2 2 0 11-.001-3.999A2 2 0 014 7z">
                                                </path>
                                                <path class="db yu"
                                                    :class="page.startsWith('community-') &amp;&amp; 'text-indigo-300'"
                                                    d="M12 6a3 3 0 110-6 3 3 0 010 6zm2 18h-4a1 1 0 01-1-1v-6H6v-6a3 3 0 013-3h6a3 3 0 013 3v6h-3v6a1 1 0 01-1 1z">
                                                </path>
                                        </svg> <span
                                            class="text-sm gk ml-3 ttl ttb 2xl:opacity--100 wf">Teams</span> </div>
                                </a>
                            </li>

                            <li class="me vg rounded-sm ib wj" :class="page === 'inbox' &amp;&amp; 'bg-slate-900'"> <a
                                    class="block ya xw ci wr wu"
                                    :class="page === 'inbox' &amp;&amp; 'hover--text-slate-200'" href="companies.php">
                                    <div class="flex items-center"> <svg class="ap oo ur" viewBox="0 0 24 24">
                                    <path class="db ys"
                                                :class="page === 'campaigns' &amp;&amp; 'text-indigo-500'"
                                                d="M20 7a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 0120 7zM4 23a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 014 23z">
                                            </path>
                                            <path class="db yu"
                                                :class="page === 'campaigns' &amp;&amp; 'text-indigo-300'"
                                                d="M17 23a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 010-2 4 4 0 004-4 1 1 0 012 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1zM7 13a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 110-2 4 4 0 004-4 1 1 0 112 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1z">
                                            </path>
                                        </svg> <span class="text-sm gk ml-3 ttl ttb 2xl:opacity--100 wf">Companies</span>
                                    </div>
                                </a> </li>
                            
                                <li class="me vg rounded-sm ib wj" :class="page === 'inbox' &amp;&amp; 'bg-slate-900'"> <a
                                    class="block ya xw ci wr wu"
                                    :class="page === 'inbox' &amp;&amp; 'hover--text-slate-200'" href="products.php">
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
                                        </svg> <span class="text-sm gk ml-3 ttl ttb 2xl:opacity--100 wf">Products</span>
                                    </div>
                                </a> </li>
                                                           
                                <li class="me vg rounded-sm ib wj" :class="page === 'inbox' &amp;&amp; 'bg-slate-900'"> <a
                                    class="block ya xw ci wr wu"
                                    :class="page === 'inbox' &amp;&amp; 'hover--text-slate-200'" href="testingrequest.php">
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
                                        </svg> <span class="text-sm gk ml-3 ttl ttb 2xl:opacity--100 wf">Testing Request</span>
                                    </div>
                                </a> </li>

                                <li class="me vg rounded-sm ib wj" :class="page === 'inbox' &amp;&amp; 'bg-slate-900'"> <a
                                    class="block ya xw ci wr wu"
                                    :class="page === 'inbox' &amp;&amp; 'hover--text-slate-200'" href="addcategory.php">
                                    <div class="flex items-center"> <svg class="ap oo ur" viewBox="0 0 24 24">
                                    
                                                    <path class="db bo"
                                                    :class="page.startsWith('job-') &amp;&amp; '!text-indigo-600'"
                                                    d="M4.418 19.612A9.092 9.092 0 0 1 2.59 17.03L.475 19.14c-.848.85-.536 2.395.743 3.673a4.413 4.413 0 0 0 1.677 1.082c.253.086.519.131.787.135.45.011.886-.16 1.208-.474L7 21.44a8.962 8.962 0 0 1-2.582-1.828Z">
                                                </path>
                                                <path class="db ys"
                                                    :class="page.startsWith('job-') &amp;&amp; '!text-indigo-500'"
                                                    d="M10.034 13.997a11.011 11.011 0 0 1-2.551-3.862L4.595 13.02a2.513 2.513 0 0 0-.4 2.645 6.668 6.668 0 0 0 1.64 2.532 5.525 5.525 0 0 0 3.643 1.824 2.1 2.1 0 0 0 1.534-.587l2.883-2.882a11.156 11.156 0 0 1-3.861-2.556Z">
                                                </path>
                                                <path class="db yu"
                                                    :class="page.startsWith('job-') &amp;&amp; '!text-indigo-300'"
                                                    d="M21.554 2.471A8.958 8.958 0 0 0 18.167.276a3.105 3.105 0 0 0-3.295.467L9.715 5.888c-1.41 1.408-.665 4.275 1.733 6.668a8.958 8.958 0 0 0 3.387 2.196c.459.157.94.24 1.425.246a2.559 2.559 0 0 0 1.87-.715l5.156-5.146c1.415-1.406.666-4.273-1.732-6.666Zm.318 5.257c-.148.147-.594.2-1.256-.018A7.037 7.037 0 0 1 18.016 6c-1.73-1.728-2.104-3.475-1.73-3.845a.671.671 0 0 1 .465-.129c.27.008.536.057.79.146a7.07 7.07 0 0 1 2.6 1.711c1.73 1.73 2.105 3.472 1.73 3.846Z">
                                                </path>
                                        </svg> <span class="text-sm gk ml-3 ttl ttb 2xl:opacity--100 wf">Add Product Category</span>
                                    </div>
                                </a> </li>

                                <li class="me vg rounded-sm ib wj" :class="page === 'inbox' &amp;&amp; 'bg-slate-900'"> <a
                                    class="block ya xw ci wr wu"
                                    :class="page === 'inbox' &amp;&amp; 'hover--text-slate-200'" href="addtestingtype.php">
                                    <div class="flex items-center"> <svg class="ap oo ur" viewBox="0 0 24 24">
                                    <path class="db bo"
                                                    :class="page.startsWith('job-') &amp;&amp; '!text-indigo-600'"
                                                    d="M4.418 19.612A9.092 9.092 0 0 1 2.59 17.03L.475 19.14c-.848.85-.536 2.395.743 3.673a4.413 4.413 0 0 0 1.677 1.082c.253.086.519.131.787.135.45.011.886-.16 1.208-.474L7 21.44a8.962 8.962 0 0 1-2.582-1.828Z">
                                                </path>
                                                <path class="db ys"
                                                    :class="page.startsWith('job-') &amp;&amp; '!text-indigo-500'"
                                                    d="M10.034 13.997a11.011 11.011 0 0 1-2.551-3.862L4.595 13.02a2.513 2.513 0 0 0-.4 2.645 6.668 6.668 0 0 0 1.64 2.532 5.525 5.525 0 0 0 3.643 1.824 2.1 2.1 0 0 0 1.534-.587l2.883-2.882a11.156 11.156 0 0 1-3.861-2.556Z">
                                                </path>
                                                <path class="db yu"
                                                    :class="page.startsWith('job-') &amp;&amp; '!text-indigo-300'"
                                                    d="M21.554 2.471A8.958 8.958 0 0 0 18.167.276a3.105 3.105 0 0 0-3.295.467L9.715 5.888c-1.41 1.408-.665 4.275 1.733 6.668a8.958 8.958 0 0 0 3.387 2.196c.459.157.94.24 1.425.246a2.559 2.559 0 0 0 1.87-.715l5.156-5.146c1.415-1.406.666-4.273-1.732-6.666Zm.318 5.257c-.148.147-.594.2-1.256-.018A7.037 7.037 0 0 1 18.016 6c-1.73-1.728-2.104-3.475-1.73-3.845a.671.671 0 0 1 .465-.129c.27.008.536.057.79.146a7.07 7.07 0 0 1 2.6 1.711c1.73 1.73 2.105 3.472 1.73 3.846Z">
                                                </path>
                                        </svg> <span class="text-sm gk ml-3 ttl ttb 2xl:opacity--100 wf">Add Testing Types</span>
                                    </div>
                                </a> </li>

                            <li class="me vg rounded-sm ib wj" :class="page === 'inbox' &amp;&amp; 'bg-slate-900'"> <a
                                    class="block ya xw ci wr wu"
                                    :class="page === 'inbox' &amp;&amp; 'hover--text-slate-200'" href="admincustomercare.php">
                                    <div class="flex items-center"> <svg class="ap oo ur" viewBox="0 0 24 24">
                                            <path class="db ys" :class="page === 'inbox' &amp;&amp; 'text-indigo-500'"
                                                d="M16 13v4H8v-4H0l3-9h18l3 9h-8Z"></path>
                                            <path class="db yu" :class="page === 'inbox' &amp;&amp; 'text-indigo-300'"
                                                d="m23.72 12 .229.686A.984.984 0 0 1 24 13v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1v-8c0-.107.017-.213.051-.314L.28 12H8v4h8v-4H23.72ZM13 0v7h3l-4 5-4-5h3V0h2Z">
                                            </path>
                                        </svg> <span class="text-sm gk ml-3 ttl ttb 2xl:opacity--100 wf">Customer Care</span>
                                    </div>
                                </a> </li>

                            <li class="me vg rounded-sm ib wj" :class="page === 'calendar' &amp;&amp; 'bg-slate-900'">
                                <a class="block ya xw ci wr wu"
                                    :class="page === 'calendar' &amp;&amp; 'hover--text-slate-200'"
                                    href="adminaccount.php">
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
                                            
                                        </svg> <span class="text-sm gk ml-3 ttl ttb 2xl:opacity--100 wf">Create Admin Accounts</span>
                                    </div>
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
                                        src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['admin_profile']);?>" width="32" height="32" alt="User">
                                    <div class="flex items-center ci"> <span class="ci r_ text-sm gk km"><?php echo $row['admin_name'];?></span> <svg class="w-3 h-3 ap rq db yu" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                        </svg> </div>
                                </button>
                                <div class="am nv tp tq tw uj bg-white border border-slate-200 ms rounded by lq iu"
                                    @click.outside="open = false" @keydown.escape.window="open = false" x-show="open"
                                    x-transition:enter="wr wh wf fe" x-transition:enter-start="opacity-0 aw"
                                    x-transition:enter-end="bv ax" x-transition:leave="wr wh wf"
                                    x-transition:leave-start="bv" x-transition:leave-end="opacity-0" x-cloak="">
                                    <div class="mm mv me rx cx border-slate-200">
                                        <div class="gk text-slate-800"><?php echo $row['admin_name'];?></div>
                                        <div class="gb text-slate-500 gz"><?php echo $row['admin_designation'];?></div>
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