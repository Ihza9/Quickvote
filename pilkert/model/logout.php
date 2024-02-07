<?php
session_start();
session_destroy();
$site =  'page/auth/login.php'; 
include "../config/connect.php";	
$page = 'login';
echo '<script> window.location="'.$url.'?page='.$page.'";</script>';
?>