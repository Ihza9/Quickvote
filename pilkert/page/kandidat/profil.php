<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$authenticated = (isset($_SESSION['credentials'])) ? $_SESSION['credentials']:[];

include "../pilkert/config/connect.php";
$page = 'login';
$message = 'alert("Anda tidak diperkenankan mengakses halaman ini");';


$nik = (isset($_GET['nik'])) ? htmlentities($_GET['nik']) : "" ;

$query = mysqli_query($conn, "SELECT warga.*, kandidat.visi, kandidat.misi, kandidat.foto FROM warga 
                            LEFT JOIN kandidat ON kandidat.id = warga.id WHERE warga.nik = '".$nik."' ");
$kandidat = mysqli_fetch_array($query);

?>





<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> Profil Kandidat</h1>        
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box box-primary">
                            <div class="box-body box-profile">
                                <img class="profile-user-img img-responsive img-circle"   
                                src="<?php echo ($kandidat['foto'])? ($url.'assets/img/warga/'.$kandidat['foto']) :($url.'assets/img/avatar.png'); ?>"  alt="User profile picture">
                                <h3 class="profile-username text-center"><?php echo $kandidat['nama']; ?></h3>
                                
                            </div>
                            <!-- /.box-body -->
                        </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form action="<?php echo $url.'model/kandidat.php';?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="request" value="input">
                        <input type="hidden" name="nik" value="<?php echo $kandidat['nik']; ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Visi</label>
                                <textarea type="text" class="form-control" id="visi" name="visi" ><?php echo $kandidat['visi']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Misi</label>
                                <textarea type="text" class="form-control" id="misi" name="misi" ><?php echo $kandidat['misi']; ?></textarea>
                            </div>                           
                            <div class="form-group">
                                <label for="exampleInputFile">File image</label>
                                <input type="file" id="image" name="image">                               
                            </div>
                            
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
                
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->