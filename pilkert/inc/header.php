<?php        
    $authenticated = (isset($_SESSION['credentials'])) ? $_SESSION['credentials']:[];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quick Vote|
        <?php echo $_GET['page']; ?>
    </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo $url;?>assets/plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $url;?>assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $url;?>assets/plugins/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo $url;?>assets/plugins/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $url;?>assets/plugins/iCheck/square/blue.css">
    <link rel="stylesheet" href="<?php echo $url;?>assets/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo $url;?>assets/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    
    <link rel="stylesheet" href="<?php echo $url;?>assets/css/style.css">

    <!-- JIKA HALAMAN CSS TIDAK BERUBAH PAKAU YANG DIBAWAH INI ATAU CLEAR CACHE BROWSER -->
    <!-- <link rel="stylesheet" href="<?php echo $url;?>assets/css/style.css?=<?= time();?>"> -->
    
</head>

<body class="hold-transition skin-red sidebar-mini">
    <script src="<?php echo $url;?>assets/plugins/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo $url;?>assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo $url;?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo $url;?>assets/plugins/fastclick/lib/fastclick.js"></script>
    <script src="<?php echo $url;?>assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo $url;?>assets/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo $url;?>assets/plugins/iCheck/icheck.min.js"></script>
    <script src="<?php echo $url;?>assets/js/adminlte.min.js"></script>
    <script src="<?php echo $url;?>assets/js/demo.js"></script>
    <!-- Site wrapper -->
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="#" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>Q</b>v</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Quick</b>vote</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <?php 
                            if($authenticated['level']==1){
                        ?>
                        <li class="dropdown user user-menu">
                            <a class="dropdown-toggle">
                                <span class="hidden-xs">Administrator </span>
                            </a>
                        </li>
                        <?php
                            }
                        ?>
                        
                        <li class="dropdown user user-menu">
                            <a href="<?php echo $url?>model/logout.php" class="dropdown-toggle" >                               
                                <span class="btn btn-default btn-rounded btn-xs">Logout</span>
                            </a>
                            
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </header>