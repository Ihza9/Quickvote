<?php

session_start();
include "../config/connect.php";
$page = 'login';
$message = '';

$nik = (isset($_POST['nik'])) ? htmlentities($_POST['nik']) : "" ;
$password = (isset($_POST['password'])) ? htmlentities($_POST['password']) : "" ;

$query = mysqli_query($conn, "SELECT * FROM warga WHERE nik = '".$nik."' AND password = '".$password."' AND aktif='Y' ");
$result = mysqli_fetch_array($query);

if(! empty($result)){
    $_SESSION['credentials'] = $result;   
    $page = ($result['level']==1)? 'result':'vote';    
}else{
    $message = 'alert("Username atau Password yang anda masukkan salah");';
}
mysqli_close($conn);

echo '<script> '.$message.'window.location="'.$url.'?page='.$page.'";</script>';
?>

