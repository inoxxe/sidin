<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIDIN | LogIn</title>

    <link rel="stylesheet" href="<?php echo base_url('login/dist/css/adminlte.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('login/plugins/font-awesome/css/font-awesome.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url ('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('login/plugins/iCheck/flat/blue.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('login/plugins/morris/morris.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('login/plugins/jvectormap/jquery-jvectormap-1.2.2.css');?>">
    <link rel="stylesheet" href="<?php echo base_url ('login/plugins/datepicker/datepicker3.css');?>">
    <link rel="stylesheet" href="<?php echo base_url ('login/plugins/daterangepicker/daterangepicker-bs3.css');?>">
    <link rel="stylesheet" href="<?php echo base_url ('login/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');?>">
    <link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet')?>">
    <link rel="stylesheet" href="<?php echo base_url('css/stylelogin.css'); ?>">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/easy-responsive-tabs.css'); ?>">
</head>

<body class="bg login-page">

        <div class="login-box">
            <div class="login-logo">
                <a href="<?php echo base_url('/');?>" >SIDIN</a>
            </div><!-- /.login-logo -->
            <div class="bg-login">
                    <p class="login-box-msg">Login</p> 
                            <form action="<?php echo base_url('index.php/helloword/login_adm'); ?>" method="post">
                                <div class="form-group has-feedback">
                                    <input type="text" name="username" class="form-control" placeholder="Masukkan Username"/>
                                     <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                 </div>
                                    <div class="form-group has-feedback">
                                        <input type="password" name="password" class="form-control" placeholder="Masukkan Password"/>
                                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                    </div>
                      
                                    <div class="col-xs-4">                               
                                        <br>
                                        <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Login</button>
                                     </div>   
                            </form>     
            </div>                       
        </div>
                
                
            
       


    <!-- SCRIPT -->
<script src="<?php echo base_url('login/plugins/jquery/jquery.min.js');?>"></script>
<script src="<?php echo base_url('login/https://code.jquery.com/ui/1.12.1/jquery-ui.min.js');?>"></script>
<script src="<?php echo base_url('js/bootstrap.min.js');?>"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('js/bootstrap.bundle.min.js');?>"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('login/https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js');?>"></script>
<script src="<?php echo base_url('login/plugins/morris/morris.min.js');?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('login/plugins/sparkline/jquery.sparkline.min.js');?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('login/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js');?>"></script>
<script src="<?php echo base_url('login/plugins/jvectormap/jquery-jvectormap-world-mill-en.js');?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('login/plugins/knob/jquery.knob.js');?>"></script>
<script src="<?php echo base_url('js/jquery-1.9.1.min.js');?>"></script>

<!-- daterangepicker -->
<script src="<?php echo base_url('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js');?>"></script>
<script src="<?php echo base_url('login/plugins/daterangepicker/daterangepicker.js');?>"></script>
<!-- datepicker -->
<script src="<?php echo base_url('login/plugins/datepicker/bootstrap-datepicker.js');?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('login/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url('login/plugins/slimScroll/jquery.slimscroll.min.js');?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('login/plugins/fastclick/fastclick.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('login/dist/js/adminlte.js');?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('login/dist/js/pages/dashboard.js');?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('login/dist/js/demo.js');?>"></script>

</body>

</html>