<?php
session_start();
unset ($_SESSION['company_id']);
unset ($_SESSION['companyname']);
header('location: index.php');
exit();

?>