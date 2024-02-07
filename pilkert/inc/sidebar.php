<?php 
$authenticated = (isset($_SESSION['credentials'])) ? $_SESSION['credentials']:[];
?>

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>            
            <?php 
                if($authenticated['level']==1){
            ?>
            <li>
                <a href="?page=result">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>                   
                </a>
            </li>
            <li>
                <a href="?page=warga">
                    <i class="fa fa-dashboard"></i> <span>Daftar Pemilih</span>                    
                </a>
            </li>
            <li>
                <a href="?page=kandidat">
                    <i class="fa fa-dashboard"></i> <span>Daftar Kandidat</span>                    
                </a>
            </li>

            <?php               

                }
            ?>
            
            <li>
                <a href="?page=vote">
                    <i class="fa fa-dashboard"></i> <span>Profil</span>                   
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>