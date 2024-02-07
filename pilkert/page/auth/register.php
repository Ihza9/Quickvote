<?php 
    include "../../config/connect.php";    
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quick Vote | Registration Page</title>
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
</head>

<body class="hold-transition register-page">
    <script src="<?php echo $url;?>assets/plugins/jquery/dist/jquery.min.js"></script>   
    <script src="<?php echo $url;?>assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>  
    <script src="<?php echo $url;?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>   
    <script src="<?php echo $url;?>assets/plugins/fastclick/lib/fastclick.js"></script>
    <script src="<?php echo $url;?>assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo $url;?>assets/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>   
    <script src="<?php echo $url;?>assets/plugins/iCheck/icheck.min.js"></script>
    <script src="<?php echo $url;?>assets/js/adminlte.min.js"></script>
    <script src="<?php echo $url;?>assets/js/demo.js"></script>
    <div class="register-box">
        <div class="register-logo">
            <a href="<?php echo 'http://localhost/evoting';?>"><b>Quick</b>vote</a>
        </div>
        <div class="register-box-body">
            <p class="login-box-msg">Register a new membership</p>
             <form action="<?php echo $url.'model/register.php'; ?>" method="post">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="NIK" name="nik">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="No. Telp" name="hp">
                    <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="date" class="form-control" placeholder="Tgl. Lahir" name="tgl_lahir">
                    <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                           <label>
                            <input type="radio"  name="jk" id="optionsRadios1" value="L" checked="">
                           Laki - laki
                        </label>
                    </div>
                     <div class="col-xs-6">
                         <label>
                            <input type="radio" name="jk" id="optionsRadios2" value="P">
                            Perempuan
                        </label>
                    </div>
                </div>
              
                <div class="form-group has-feedback">
                    <textarea type="text" class="form-control" placeholder="Alamat" name="alamat"></textarea>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <a href="login.php" class="text-center">Login</a>
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.form-box -->
    </div>
    <!-- /.register-box -->
    <!-- jQuery 3 -->
    <script>
    $(function() {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
    </script>
</body>

</html>