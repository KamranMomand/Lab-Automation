<?php
session_start();
unset ($_SESSION['team_id']);
header('location: emplogin.php');
exit();
?>