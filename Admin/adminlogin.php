<!DOCTYPE html><html lang="en">
<!-- Mirrored from preview.cruip.com/mosaic/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Jul 2022 19:02:48 GMT -->
<head>
    <meta charset="utf-8">
    <title>Mosaic HTML Demo - Sign in</title>
<meta name="viewport" content="width=device-width,initial-scale=1"><link href="style.a49749f4fb5cff923e10.css" rel="stylesheet"></head>

<body class="gm bf hy ys">
<?php
session_start();
$error=NULL;
$error2=NULL;
                    if(isset($_POST['btnlogin']))
                    {
                        $email=$_POST['txtemail'];
                        $password=$_POST['txtpassword'];
                        
                        define('host','localhost');
                        define('username','root');
                        define('password','');
                        define('dbname','lab_automation');

                        $conn=mysqli_connect(host,username,password,dbname);
                        if(!$conn)
                        {
                            alert("connection not created");
                        }
                        $querry="select * from `admin` where `admin_email`='$email' && `admin_password`='$password'";
                        $result=mysqli_query($conn,$querry);
                        $row=mysqli_fetch_assoc($result);
                        $check=mysqli_num_rows($result)>0;

                        if($check == 0)
                        {
                            $error="Alert!";
                            $error2="Invalid Account";
                        }
                        else{
                            $_SESSION['admin_name'] = $row['admin_name'];
                            $_SESSION['admin_id'] = $row['admin_id'];
                            Header('location: index.php');
                        }
                    }
            ?>
    <script>
        if (localStorage.getItem('sidebar-expanded') == 'true') {
            document.querySelector('body').classList.add('sidebar-expanded');
        } else {
            document.querySelector('body').classList.remove('sidebar-expanded');
        }
    </script>    

    <main class="bg-white">

        <div class="td flex">

            <!-- Content -->
            <div class="oq qw">

                <div class="oj or flex fh wd">

                    <!-- Header -->
                    <div class="ac">
                        <div class="flex items-center fg op vd jd tto">
                            <!-- Logo -->
                            <a class="block">
                            <br/>
                                <img src="/E-Project/assets/images/loginicon.png" />
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
                                    <path d="M18.277.16C26.035 1.267 32 7.938 32 16c0 8.837-7.163 16-16 16a15.937 15.937 0 01-10.426-3.863L18.277.161z" fill="#4F46E5"></path>
                                    <path d="M7.404 2.503l18.339 26.19A15.93 15.93 0 0116 32C7.163 32 0 24.837 0 16 0 10.327 2.952 5.344 7.404 2.503z" fill="url(#logo-a)"></path>
                                    <path d="M2.223 24.14L29.777 7.86A15.926 15.926 0 0132 16c0 8.837-7.163 16-16 16-5.864 0-10.991-3.154-13.777-7.86z" fill="url(#logo-b)"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
    <div class="container">
    
                    <div class="as ri vd vv ">
                    <?php
                        if($error != NULL && $error2 != NULL){
                            ?>
                            <div class="text-center" style="color:RED; font-weight:bold">
                                &nbsp;<?php echo $error2 ?>
                            </div>
                            <?php
                        }
                        ?><br/>
                        <h1 class="text-3xl text-slate-800 font-bold rb">Admin Login! ✨</h1>
                        <!-- Form -->
                        <form method="POST">
                            <div class="ln">
                                <div>
                                    <label class="block text-sm gk rx" for="email">Email Address</label>
                                    <input id="txtemail" name="txtemail" class="tn oq" type="email">
                                </div>
                                <div>
                                    <label class="block text-sm gk rx" for="password">Password</label>
                                    <input id="txtpassword" name="txtpassword" class="tn oq" type="password" autocomplete="on">
                                </div>
                            </div>
                            <div class="flex fg ir">
                                <button class="btn hb xs yo" name="btnlogin" >Log In</button>
                            </div>
                        </form>
                    </div>
    </div>
                </div>

            </div>

            <!-- Image -->
            <div class="hidden qh tp tk ty tw qw" aria-hidden="true">
                <img class="vr vi oq or" src="images/3.jpg" width="760" height="1024" alt="Authentication image">
                <img class="tp ns tb fe ag st hidden tea" src="images/auth-decoration.png" width="218" height="224" alt="Authentication decoration">
            </div>

        </div>

    </main>

<script src="main.f640b348fcfd37dfcd91.js"></script>

<script async src='https://www.googletagmanager.com/gtag/js?id=UA-125021779-1'></script><script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-125021779-1', { 'anonymize_ip': true });</script><script>console.log("%cImportant!", "color: blue; font-size: x-large");console.log("%cThe page you are viewing is for demo purposes only. CSS and HTML have been minified and class names have been shortened to improve the page load time. Download our templates from https://cruip.com/ 😉", "font-size: large");</script><script>const pagesList = [{"name":"Dashboard","url":"https://preview.cruip.com/mosaic/index.html","active":false},{"name":"Analytics","url":"https://preview.cruip.com/mosaic/analytics.html","active":false},{"name":"Fintech","url":"https://preview.cruip.com/mosaic/fintech.html","active":false},{"name":"Customers","url":"https://preview.cruip.com/mosaic/customers.html","active":false},{"name":"Orders","url":"https://preview.cruip.com/mosaic/orders.html","active":false},{"name":"Invoices","url":"https://preview.cruip.com/mosaic/invoices.html","active":false},{"name":"Shop","url":"https://preview.cruip.com/mosaic/shop.html","active":false},{"name":"Shop 2","url":"https://preview.cruip.com/mosaic/shop-2.html","active":false},{"name":"Single Product","url":"https://preview.cruip.com/mosaic/product.html","active":false},{"name":"Cart","url":"https://preview.cruip.com/mosaic/cart.html","active":false},{"name":"Cart 2","url":"https://preview.cruip.com/mosaic/cart-2.html","active":false},{"name":"Cart 3","url":"https://preview.cruip.com/mosaic/cart-3.html","active":false},{"name":"Pay","url":"https://preview.cruip.com/mosaic/pay.html","active":false},{"name":"Campaigns","url":"https://preview.cruip.com/mosaic/campaigns.html","active":false},{"name":"Users Tabs","url":"https://preview.cruip.com/mosaic/users-tabs.html","active":false},{"name":"Users Tiles","url":"https://preview.cruip.com/mosaic/users-tiles.html","active":false},{"name":"Profile","url":"https://preview.cruip.com/mosaic/profile.html","active":false},{"name":"Feed","url":"https://preview.cruip.com/mosaic/feed.html","active":false},{"name":"Forum","url":"https://preview.cruip.com/mosaic/forum.html","active":false},{"name":"Forum Post","url":"https://preview.cruip.com/mosaic/forum-post.html","active":false},{"name":"Meetups","url":"https://preview.cruip.com/mosaic/meetups.html","active":false},{"name":"Meetups Post","url":"https://preview.cruip.com/mosaic/meetups-post.html","active":false},{"name":"Cards","url":"https://preview.cruip.com/mosaic/credit-cards.html","active":false},{"name":"Transactions","url":"https://preview.cruip.com/mosaic/transactions.html","active":false},{"name":"Transaction Details","url":"https://preview.cruip.com/mosaic/transaction-details.html","active":false},{"name":"Jobs Listing","url":"https://preview.cruip.com/mosaic/job-listing.html","active":false},{"name":"Jobs Post","url":"https://preview.cruip.com/mosaic/job-post.html","active":false},{"name":"Company Profile","url":"https://preview.cruip.com/mosaic/company-profile.html","active":false},{"name":"Kanban","url":"https://preview.cruip.com/mosaic/tasks-kanban.html","active":false},{"name":"Tasks List","url":"https://preview.cruip.com/mosaic/tasks-list.html","active":false},{"name":"Messages","url":"https://preview.cruip.com/mosaic/messages.html","active":false},{"name":"Inbox","url":"https://preview.cruip.com/mosaic/inbox.html","active":false},{"name":"Calendar","url":"https://preview.cruip.com/mosaic/calendar.html","active":false},{"name":"Applications","url":"https://preview.cruip.com/mosaic/applications.html","active":false},{"name":"My Account","url":"https://preview.cruip.com/mosaic/settings.html","active":false},{"name":"My Notifications","url":"https://preview.cruip.com/mosaic/notifications.html","active":false},{"name":"Connected Apps","url":"https://preview.cruip.com/mosaic/connected-apps.html","active":false},{"name":"Plans","url":"https://preview.cruip.com/mosaic/plans.html","active":false},{"name":"Billing & Invoices","url":"https://preview.cruip.com/mosaic/billing.html","active":false},{"name":"Give Feedback","url":"https://preview.cruip.com/mosaic/feedback.html","active":false},{"name":"Changelog","url":"https://preview.cruip.com/mosaic/changelog.html","active":false},{"name":"Roadmap","url":"https://preview.cruip.com/mosaic/roadmap.html","active":false},{"name":"FAQs","url":"https://preview.cruip.com/mosaic/faqs.html","active":false},{"name":"Empty State","url":"https://preview.cruip.com/mosaic/empty-state.html","active":false},{"name":"Page Not Found","url":"https://preview.cruip.com/mosaic/404.html","active":false},{"name":"Knowledge Base","url":"https://preview.cruip.com/mosaic/knowledge-base.html","active":false},{"name":"Sign in","url":"https://preview.cruip.com/mosaic/signin.html","active":true},{"name":"Sign up","url":"https://preview.cruip.com/mosaic/signup.html","active":false},{"name":"Reset password","url":"https://preview.cruip.com/mosaic/reset-password.html","active":false},{"name":"Onboarding 1","url":"https://preview.cruip.com/mosaic/onboarding-01.html","active":false},{"name":"Onboarding 2","url":"https://preview.cruip.com/mosaic/onboarding-02.html","active":false},{"name":"Onboarding 3","url":"https://preview.cruip.com/mosaic/onboarding-03.html","active":false},{"name":"Onboarding 4","url":"https://preview.cruip.com/mosaic/onboarding-04.html","active":false},{"name":"Button","url":"https://preview.cruip.com/mosaic/component-button.html","active":false},{"name":"Input Form","url":"https://preview.cruip.com/mosaic/component-form.html","active":false},{"name":"Dropdown","url":"https://preview.cruip.com/mosaic/component-dropdown.html","active":false},{"name":"Alert & Banner","url":"https://preview.cruip.com/mosaic/component-alert.html","active":false},{"name":"Modal","url":"https://preview.cruip.com/mosaic/component-modal.html","active":false},{"name":"Pagination","url":"https://preview.cruip.com/mosaic/component-pagination.html","active":false},{"name":"Tabs","url":"https://preview.cruip.com/mosaic/component-tabs.html","active":false},{"name":"Breadcrumb","url":"https://preview.cruip.com/mosaic/component-breadcrumb.html","active":false},{"name":"Badge","url":"https://preview.cruip.com/mosaic/component-badge.html","active":false},{"name":"Avatar","url":"https://preview.cruip.com/mosaic/component-avatar.html","active":false},{"name":"Tooltip","url":"https://preview.cruip.com/mosaic/component-tooltip.html","active":false},{"name":"Accordion","url":"https://preview.cruip.com/mosaic/component-accordion.html","active":false},{"name":"Icons","url":"https://preview.cruip.com/mosaic/component-icons.html","active":false}];if(window != top){window.parent.postMessage(pagesList, "https://cruip.com/")};</script></body>
<!-- Mirrored from preview.cruip.com/mosaic/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Jul 2022 19:02:49 GMT -->
</html>