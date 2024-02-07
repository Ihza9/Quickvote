<?php 
include "../pilkert/config/connect.php";

$query = mysqli_query($conn, "SELECT warga.*, kandidat.visi, kandidat.misi, kandidat.foto FROM warga 
                            LEFT JOIN kandidat ON kandidat.id = warga.id
                            WHERE warga.level = 3 ");
$warga = [];

while ($record = mysqli_fetch_array($query)) {
    $warga[] = $record;
}

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> Daftar Kandidat</h1>
        
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data Calon</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>NIK</th>
                                    <th>Password</th>
                                    <th>Nama</th>
                                    <th>JK</th>
                                    <th>Tgl Lahir</th>
                                    <th>No. Telp</th>
                                    <th>Alamat</th>
                                    <th>Visi</th>               
                                    <th>Misi</th>
                                     
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    if($warga){
                                        foreach ($warga as $key => $w) {
                                ?>
                                <tr>
                                    <td><?php echo $w['nik'] ?></td>
                                    <td><?php echo $w['password'] ?></td>
                                    <td><?php echo $w['nama'] ?></td>
                                    <td><?php echo ($w['jk']=='L')? 'Laki - laki':'Perempuan'; ?></td>
                                    <td><?php echo $w['tgl_lahir'] ?></td>
                                    <td><?php echo $w['hp'] ?></td>
                                    <td><?php echo $w['alamat'] ?></td>
                                      <td><?php echo $w['visi'] ?></td>
                                    <td><?php echo $w['misi'] ?></td>
                                   
                                    
                                    
                                    <td>
                                        <a href="<?php echo $url.'?page=profil&nik='.$w['nik'];  ?>"  class="btn btn-info btn-sm"><i class="fa fa-pencil"></i></a>
                                        <a href="<?php echo $url.'model/kandidat.php/?request=tolak&nik='.$w['nik'];  ?>"  class="btn btn-success btn-sm"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>

                                <?php
                                            
                                        }
                                    }
                                ?>
                                
                                
                            </tbody>
                           
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
               
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>

<script>
$(function() {
    $('#example1').DataTable();
   
})
</script>