<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include "../config/connect.php";
$page = 'register';
$message = '';

$nik = (isset($_POST['nik'])) ? htmlentities($_POST['nik']) : "" ;
$password = (isset($_POST['password'])) ?  htmlentities($_POST['password']) : "" ;
$nama = (isset($_POST['nama'])) ? htmlentities($_POST['nama']) : "" ;
$jk = (isset($_POST['jk'])) ? htmlentities($_POST['jk']) : "" ;
$tgl_lahir = (isset($_POST['tgl_lahir'])) ? htmlentities($_POST['tgl_lahir']) : "" ;
$hp = (isset($_POST['hp'])) ? htmlentities($_POST['hp']) : "" ;
$alamat = (isset($_POST['alamat'])) ? htmlentities($_POST['alamat']) : "" ;
$level = 2 ;
$aktif ="T" ;


$query = mysqli_query($conn, "SELECT * FROM warga WHERE nik = '".$nik."' ");
$result = mysqli_fetch_array($query);

if(! empty($result)){
   $message = 'alert("NIK sudah terdaftar, konfirmasi hubungi admin");';  
}else{
    $insert = mysqli_query($conn, "INSERT INTO warga (`nik`, `password`, `nama`, `jk`, `alamat`, `tgl_lahir`,`hp`, `level`, `aktif`) 
                values(".$nik.",'".$password."','".$nama."','".$jk."','".$alamat."','".$tgl_lahir."','".$hp."','".$level."','".$aktif."')");
    $message = ($insert) ? 'alert("Data berhasil dimasukkan");':'alert("Data gagal dimasukkan");';  
}
mysqli_close($conn);

echo '<script> '.$message.'window.location="'.$url.'?page='.$page.'";</script>';
?>
