<?php
session_start();
$authenticated = (isset($_SESSION['credentials'])) ? $_SESSION['credentials']:[];

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

$visi = (isset($_POST['visi'])) ? htmlentities($_POST['visi']) : "" ;
$misi = (isset($_POST['misi'])) ? htmlentities($_POST['misi']) : "" ;
$foto = '';

$query = mysqli_query($conn,"SELECT warga.*, kandidat.id as id_kandidat, kandidat.visi, kandidat.misi,  kandidat.foto FROM warga 
                            LEFT JOIN kandidat ON kandidat.id = warga.id WHERE nik = '".$nik."' ");
$kandidat = [];

while ($record = mysqli_fetch_array($query)) {
    $kandidat[] = $record;
}

   
if(isset($authenticated['level']) && $authenticated['level']==1 && $kandidat && isset($_GET['request']) && $_GET['request'] === 'pilih'){
    $sql = mysqli_query($conn, "UPDATE warga SET level=3 WHERE nik = '".$nik."'");        
    $page = 'warga';
    $message = ($sql)? 'alert("Data berhasil di update");':'alert("Data gagal diupdate");';
}
if(isset($authenticated['level']) && $authenticated['level']==1 && $kandidat && isset($_GET['request']) && $_GET['request'] === 'aktif'){
    $sql = mysqli_query($conn, "UPDATE warga SET aktif='Y' WHERE nik = '".$nik."'");       
    $page = 'warga';
    $message = ($sql)? 'alert("Data berhasil di update");':'alert("Data gagal diupdate");';
}
if(isset($authenticated['level']) && $authenticated['level']==1 && $kandidat && isset($_GET['request']) && $_GET['request'] === 'nonaktif'){
    $sql = mysqli_query($conn, "UPDATE warga SET aktif='T' WHERE nik = '".$nik."'");       
    $page = 'warga';    
    $message = ($sql)? 'alert("Data berhasil di update");':'alert("Data gagal diupdate");';    
}
if(isset($authenticated['level']) && ($authenticated['level']==1) && $kandidat && isset($_GET['request']) && $_GET['request'] === 'tolak'){
    $sql = mysqli_query($conn, "UPDATE warga SET level=2 WHERE nik = '".$nik."'");    
    $sql2 =  mysqli_query($conn, "DELETE FROM kandidat WHERE id = '".$kandidat[0]['id_kandidat']."'");    
    $sql3 =  mysqli_query($conn, "DELETE FROM datapemilihan WHERE id_kandidat = '".$kandidat[0]['id_kandidat']."'");    
    $page = 'kandidat';   
    $message = ($sql)? 'alert("Data berhasil di update");':'alert("Data gagal diupdate");';
}

if(isset($authenticated['level']) && ($authenticated['level']==1) && $kandidat && isset($_GET['request']) && $_GET['request'] === 'hapus'){
    $sql = mysqli_query($conn, "DELETE FROM warga WHERE nik = '".$nik."'");    
    $sql2 =  mysqli_query($conn, "DELETE FROM kandidat WHERE id = '".$kandidat[0]['id_kandidat']."'");    
    $sql3 =  mysqli_query($conn, "DELETE FROM datapemilihan WHERE id_kandidat = '".$kandidat[0]['id_kandidat']."'");    
    $page = 'warga';   
    $message = ($sql)? 'alert("Data berhasil di update");':'alert("Data gagal diupdate");';
}


if(isset($authenticated['level']) && $authenticated['level']==1 && $kandidat && ($kandidat[0]['level']==3) && isset($_POST['request']) && $_POST['request'] === 'input'){

    $targetDir = "../assets/img/warga/"; // Directory where uploaded files will be stored
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check file size (adjust as needed)
    if ($_FILES["image"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow only certain file formats (you can customize this)
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (file_exists($targetFile)) {
            unlink($targetFile); // Delete the existing file
        }

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            echo "The file " . basename($_FILES["image"]["name"]) . " has been uploaded and replaced if it existed.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    $foto = ($_FILES["image"]["name"])?$_FILES["image"]["name"] : $kandidat[0]['foto'];

    if(($kandidat[0]['id_kandidat'] !=null)){
        $sql = mysqli_query($conn, "UPDATE kandidat SET visi='".$visi."', misi='".$misi."', foto='".$foto."' WHERE id = '".$kandidat[0]['id_kandidat']."'");        
    }else{
        $sql = mysqli_query($conn, "INSERT INTO `kandidat` (`id`, `visi`, `misi`, `foto`) VALUES
                                    (".$kandidat[0]['id'].",'".$visi."', '".$misi."', '".$foto."')");        
    }
    
    $page = 'kandidat';   
    $message = ($sql)? 'alert("Data berhasil di update");':'alert("Data gagal diupdate");';
}


mysqli_close($conn);

echo '<script> '.$message.'window.location="'.$url.'?page='.$page.'";</script>';


?>

