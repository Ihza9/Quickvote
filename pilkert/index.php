<?php
session_start();
include "../pilkert/config/connect.php";

if (isset($_SESSION['credentials']) && $_SESSION['credentials']) {
    $site =  'inc/content.php'; 
	if(isset($_GET['page']) && $_GET['page'] === 'vote'){
		$site =  'page/warga/vote.php'; 
	}
	if(isset($_GET['page']) && $_GET['page'] === 'result'){
		$site =  'page/dashboard/result.php'; 
	}
	if(isset($_GET['page']) && $_GET['page'] === 'warga'){
		$site =  'page/warga/list.php'; 
	}
	if(isset($_GET['page']) && $_GET['page'] === 'kandidat'){
		$site =  'page/kandidat/list.php'; 
	}
	if(isset($_GET['page']) && $_GET['page'] === 'profil'){
		$nik = (isset($_GET['nik'])) ? htmlentities($_GET['nik']) : "" ;
		$site =  'page/kandidat/profil.php'; 
	}

    include 'inc/header.php';
    include 'inc/sidebar.php';
    include $site;
    include 'inc/footer.php';
}else{
    $site =  'page/auth/login.php'; 
    echo '<script>window.location="'.$url.$site.'";</script>';
}
	
	if(isset($_GET['page']) && $_GET['page'] === 'login'){
		//$page = 'login';
		$site =  'page/auth/login.php'; 
 		echo '<script> '.$message.'window.location="'.$url.$site.'";</script>';		
	}

	if(isset($_GET['page']) && $_GET['page'] === 'register'){
		//$page = 'register';
		$site =  'page/auth/register.php'; 
 		echo '<script> '.$message.'window.location="'.$url.$site.'";</script>';
	}
   
   

	
mysqli_close($conn);
   
?>
