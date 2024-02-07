<?php 
    include "../../config/connect.php";    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Quick Vote | Log in</title>
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

    <body class="hold-transition login-page">
        <script src="<?php echo $url;?>assets/plugins/jquery/dist/jquery.min.js"></script>   
        <script src="<?php echo $url;?>assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>  
        <script src="<?php echo $url;?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>   
        <script src="<?php echo $url;?>assets/plugins/fastclick/lib/fastclick.js"></script>
        <script src="<?php echo $url;?>assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo $url;?>assets/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>   
        <script src="<?php echo $url;?>assets/plugins/iCheck/icheck.min.js"></script>
        <script src="<?php echo $url;?>assets/js/adminlte.min.js"></script>
        <script src="<?php echo $url;?>assets/js/demo.js"></script>
        <div class="login-box">
            <div class="login-logo">
                <a href="<?php echo 'http://localhost/evoting';?>"><b>Quick</b>vote</a>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <form action="<?php echo $url.'model/login.php'; ?>" method="post">
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="NIK" name="nik">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            <a href="register.php" class="text-center">Register</a>
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->
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