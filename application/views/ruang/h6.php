<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SI-DIN|MAHASISWA</title>


    <link rel="stylesheet" href="<?php echo base_url('asset/mahasiswa/dist/css/adminlte.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/mahasiswa/plugins/font-awesome/css/font-awesome.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url ('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/mahasiswa/plugins/iCheck/flat/blue.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/mahasiswa/plugins/morris/morris.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/mahasiswa/plugins/jvectormap/jquery-jvectormap-1.2.2.css');?>">
    <link rel="stylesheet" href="<?php echo base_url ('asset/mahasiswa/plugins/datepicker/datepicker3.css');?>">
    <link rel="stylesheet" href="<?php echo base_url ('asset/mahasiswa/plugins/daterangepicker/daterangepicker-bs3.css');?>">
    <link rel="stylesheet" href="<?php echo base_url ('asset/mahasiswa/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');?>">
    <link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet')?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/mahasiswa/asset/css/stylepenjual.css'); ?>">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
	<ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      
    </ul>
    <!--form-->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        
        <div class="input-group-append">

        </div>
      </div>
    </form>
      <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      
    </ul>
</nav>
<!--side navbar-->
<?php require_once(APPPATH. 'views/sidebar.php');?> ?>

<!-- KONTEN -->
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Pilih Ruangan</h3>
            </div>
            <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php $ruang = "h6.1";?> H 6.1</h3>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <p><?php 
                $hariku = $this->session->userdata('hari');
                $jamku = $this->session->userdata('jam');
                $res = 0;
                foreach ($data as $key) {
                  if($ruang == $key['kelas'] AND $hariku == $key['hari'] AND $jamku == $key['jam'])
                  $res++;
                }
                if($res>0){
                    echo "<p style=color:red;>Unavailable</p>";
                  }else{
                    echo "<p style=color:green;>Available</p>";
                  }

                ?></p>
              <a href="<?php echo base_url('index.php/control_peminjaman/pilih/').$ruang;?>" class="small-box-footer">Pilih <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
           <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php $ruang = "h6.2";?> H 6.2</h3>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <p><?php 
                $hariku = $this->session->userdata('hari');
                $jamku = $this->session->userdata('jam');
                $res = 0;
                foreach ($data as $key) {
                  if($ruang == $key['kelas'] AND $hariku == $key['hari'] AND $jamku == $key['jam'])
                  $res++;
                }
                if($res>0){
                    echo "<p style=color:red;>Unavailable</p>";
                  }else{
                    echo "<p style=color:green;>Available</p>";
                  }

                ?></p>
              <a href="<?php echo base_url('index.php/control_peminjaman/pilih/').$ruang;?>" class="small-box-footer">Pilih <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php $ruang = "h6.3";?> H 6.3</h3>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <p><?php 
                $hariku = $this->session->userdata('hari');
                $jamku = $this->session->userdata('jam');
                $res = 0;
                foreach ($data as $key) {
                  if($ruang == $key['kelas'] AND $hariku == $key['hari'] AND $jamku == $key['jam'])
                  $res++;
                }
                if($res>0){
                    echo "<p style=color:red;>Unavailable</p>";
                  }else{
                    echo "<p style=color:green;>Available</p>";
                  }

                ?></p>
              <a href="<?php echo base_url('index.php/control_peminjaman/pilih/').$ruang;?>" class="small-box-footer">Pilih <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php $ruang = "h6.4";?> H 6.4</h3>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <p><?php 
                $hariku = $this->session->userdata('hari');
                $jamku = $this->session->userdata('jam');
                $res = 0;
                foreach ($data as $key) {
                  if($ruang == $key['kelas'] AND $hariku == $key['hari'] AND $jamku == $key['jam'])
                  $res++;
                }
                if($res>0){
                    echo "<p style=color:red;>Unavailable</p>";
                  }else{
                    echo "<p style=color:green;>Available</p>";
                  }

                ?></p>
              <a href="<?php echo base_url('index.php/control_peminjaman/pilih/').$ruang;?>" class="small-box-footer">Pilih <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php $ruang = "h6.5";?> H 6.5</h3>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <p><?php 
                $hariku = $this->session->userdata('hari');
                $jamku = $this->session->userdata('jam');
                $res = 0;
                foreach ($data as $key) {
                  if($ruang == $key['kelas'] AND $hariku == $key['hari'] AND $jamku == $key['jam'])
                  $res++;
                }
                if($res>0){
                    echo "<p style=color:red;>Unavailable</p>";
                  }else{
                    echo "<p style=color:green;>Available</p>";
                  }

                ?></p>
              <a href="<?php echo base_url('index.php/control_peminjaman/pilih/').$ruang;?>" class="small-box-footer">Pilih <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>


           <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php $ruang = "h6.6";?> H 6.6</h3>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <p><?php 
                $hariku = $this->session->userdata('hari');
                $jamku = $this->session->userdata('jam');
                $res = 0;
                foreach ($data as $key) {
                  if($ruang == $key['kelas'] AND $hariku == $key['hari'] AND $jamku == $key['jam'])
                  $res++;
                }
                if($res>0){
                    echo "<p style=color:red;>Unavailable</p>";
                  }else{
                    echo "<p style=color:green;>Available</p>";
                  }

                ?></p>
              <a href="<?php echo base_url('index.php/control_peminjaman/pilih/').$ruang;?>" class="small-box-footer">Pilih <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
           <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php $ruang = "h6.7";?> H 6.7</h3>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <p><?php 
                $hariku = $this->session->userdata('hari');
                $jamku = $this->session->userdata('jam');
                $res = 0;
                foreach ($data as $key) {
                  if($ruang == $key['kelas'] AND $hariku == $key['hari'] AND $jamku == $key['jam'])
                  $res++;
                }
                if($res>0){
                    echo "<p style=color:red;>Unavailable</p>";
                  }else{
                    echo "<p style=color:green;>Available</p>";
                  }

                ?></p>
              <a href="<?php echo base_url('index.php/control_peminjaman/pilih/').$ruang;?>" class="small-box-footer">Pilih <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
           
          </div>
        </div>

      </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
</div>

</div><!--divakhir-->

<!-- SCRIPT -->
<script src="<?php echo base_url('asset/mahasiswa/plugins/jquery/jquery.min.js');?>"></script>
<script src="<?php echo base_url('asset/mahasiswa/https://code.jquery.com/ui/1.12.1/jquery-ui.min.js');?>"></script>
<script src="<?php echo base_url('asset/mahasiswa/asset/js/bootstrap.min.js');?>"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('asset/mahasiswa/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('asset/mahasiswa/https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js');?>"></script>
<script src="<?php echo base_url('asset/mahasiswa/plugins/morris/morris.min.js');?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('asset/mahasiswa/plugins/sparkline/jquery.sparkline.min.js');?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('asset/mahasiswa/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js');?>"></script>
<script src="<?php echo base_url('asset/mahasiswa/plugins/jvectormap/jquery-jvectormap-world-mill-en.js');?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('asset/mahasiswa/plugins/knob/jquery.knob.js');?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js');?>"></script>
<script src="<?php echo base_url('asset/mahasiswa/plugins/daterangepicker/daterangepicker.js');?>"></script>
<!-- datepicker -->
<script src="<?php echo base_url('asset/mahasiswa/plugins/datepicker/bootstrap-datepicker.js');?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('asset/mahasiswa/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url('asset/mahasiswa/plugins/slimScroll/jquery.slimscroll.min.js');?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('asset/mahasiswa/plugins/fastclick/fastclick.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('asset/mahasiswa/dist/js/adminlte.js');?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('asset/penjual/dist/js/pages/dashboard.js');?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('asset/mahasiswa/dist/js/demo.js');?>"></script>
<script src="<?php echo base_url('asset/mahasiswa/plugins/ckeditor/ckeditor.js');?>"></script>
<script src="<?php echo base_url('asset/mahasiswa/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');?>"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    ClassicEditor
      .create(document.querySelector('#CKEditor'))
      .then(function (ckeditor) {
        // The editor instance
      })
      .catch(function (error) {
        console.error(error)
      })

    // bootstrap WYSIHTML5 - text editor

    $('.textarea').wysihtml5({
      toolbar: { fa: true }
    })
  })
</script>

</body>
</html>