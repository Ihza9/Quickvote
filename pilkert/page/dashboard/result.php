<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "../pilkert/config/connect.php";

$query1 = mysqli_query($conn, "SELECT count(nik) as jml FROM warga                             
                            WHERE warga.level = 2 AND aktif='Y' ");
$pemilih = mysqli_fetch_array($query1);

$query2 = mysqli_query($conn, "SELECT count(warga.nik) as jml,warga.* , dapil.jml_pilih
                            FROM warga 
                            LEFT JOIN kandidat ON kandidat.id = warga.id
                            LEFT JOIN 
                            (SELECT count(nik) as jml_pilih, id_kandidat FROM datapemilihan GROUP BY id_kandidat) 
                            dapil ON dapil.id_kandidat=warga.id
                            WHERE warga.level = 3 AND warga.aktif='Y' GROUP BY warga.nik" );
$kandidat = [];

$jml_kandidat = 0;
while ($record = mysqli_fetch_array($query2)) {
   $jml_kandidat = $jml_kandidat + $record['jml'];
    $kandidat[] = $record;
}

?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
                <div class="row">
                    <div class="col-md-6">
                        <!-- Profile Image -->
                        <div class="box box-primary">
                            <div class="box-body box-profile">
                                <p class="text-center"> Jumlah Pemilih</p>
                                <h5 class="profile-username text-center"><?php echo $pemilih['jml'] ;?></h5>
                                
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                      
                    </div>
                    <div class="col-md-6">
                        <!-- Profile Image -->
                        <div class="box box-primary">
                            <div class="box-body box-profile">
                                <p class="text-center"> Jumlah Kandidat</p>
                                <h3 class="profile-username text-center"><?php echo $jml_kandidat; ?></h3>
                                
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                      
                    </div>
                   
                </div>
                <!-- /.row -->
          
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Hover Data Table</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Jumlah Perolehan</th>
                                 
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                if($kandidat){
                                    $total = 0;
                                    foreach($kandidat as $kand => $k){
                                ?>
                                <tr>
                                    <td><?php echo $k['nik']; ?></td>
                                    <td><?php echo $k['nama'] ;?></td>
                                    <td><?php echo ($k['jml_pilih'] !=null) ?$k['jml_pilih']:0; ?></td>                                    
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
    $('#example1').DataTable()
    $('#example2').DataTable({
        'paging': true,
        'lengthChange': false,
        'searching': false,
        'ordering': true,
        'info': true,
        'autoWidth': false
    })
})
</script>