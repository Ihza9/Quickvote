<?php

session_start();
$authenticated = (isset($_SESSION['credentials'])) ? $_SESSION['credentials']:[];
$url = 'https://experiments.sehatnodev.exp/pilkert/';

include "../config/connect.php";
$page = 'login';
 $message = 'alert("Anda tidak diperkenankan mengakses halaman ini");';


$nik = "" ;
if(isset($_GET['nik'])){
    $nik = htmlentities($_GET['nik']);
}elseif(isset($_POST['nik'])){
    $nik = htmlentities($_POST['nik']);
}else{
    $nik = "" ;
}

$query = mysqli_query($conn,"SELECT warga.*, kandidat.id as id_kandidat, kandidat.visi, kandidat.misi,  kandidat.foto FROM warga 
                            LEFT JOIN kandidat ON kandidat.id = warga.id WHERE nik = '".$nik."' ");
$kandidat = [];

while ($record = mysqli_fetch_array($query)) {
    $kandidat[] = $record;
}

$nopemilih = '';
   
if(isset($authenticated['level']) && $kandidat && isset($_GET['request']) && $_GET['request'] === 'pilih'){
    $sql = mysqli_query($conn, "INSERT INTO `datapemilihan` (`nik`, `nopemilih`, `id_kandidat`, `waktu`) VALUES
                                    (".$authenticated['nik'].",'".$nopemilih."', '".$kandidat[0]['id_kandidat']."', '".date("Y-m-d H:i:s")."')");        
    $page = 'vote';
    $message = ($sql)? 'alert("Data berhasil di update");':'alert("Data gagal diupdate");';
}



mysqli_close($conn);

echo '<script> '.$message.'window.location="'.$url.'?page='.$page.'";</script>';
?>

