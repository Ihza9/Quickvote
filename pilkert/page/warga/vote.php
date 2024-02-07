<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);
$authenticated = (isset($_SESSION['credentials'])) ? $_SESSION['credentials']:[];
include "../pilkert/config/connect.php";

$query = mysqli_query($conn, "SELECT warga.*, kandidat.visi, kandidat.misi, kandidat.foto FROM warga 
                            LEFT JOIN kandidat ON kandidat.id = warga.id
                            WHERE warga.level = 3 ");
$kandidat = [];

while ($record = mysqli_fetch_array($query)) {
    $kandidat[] = $record;
}

$sql = mysqli_query($conn, "SELECT * FROM datapemilihan WHERE nik = '".$authenticated['nik']."' ");
$pemilih = mysqli_fetch_array($sql);

?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <?php 
                    if($kandidat){
                        foreach($kandidat as $kand => $k){
                    ?>
                    <div class="col-md-4">
                        <!-- Profile Image -->
                        <div class="box box-primary">
                            <div class="box-body box-profile">
                                <img class="profile-user-img img-responsive img-circle" 
                                src="<?php echo ($k['foto'])? ($url.'assets/img/warga/'.$k['foto']) :($url.'assets/img/avatar.png'); ?>" alt="User profile picture">
                                <h3 class="profile-username text-center"><?php echo $k['nama']; ?></h3>
                                <hr>
                                <p class="text-center">Visi:</p>
                                <p class="text-center"><?php echo $k['visi']; ?></p>
                                <p class="text-center">Misi:</p>
                                <p class="text-center"><?php echo $k['misi']; ?></p>
                                <?php
                                if(empty($pemilih)){
                                ?>
                                 <a href="<?php echo  $url.'model/vote.php/?request=pilih&nik='.$k['nik'];  ?>" class="btn btn-primary btn-block"><b>Pilih</b></a>
                                <?php
                                }
                                ?>
                               
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->                      
                    </div>

                    <?php

                        }
                    }
                    ?>
             
                   
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        