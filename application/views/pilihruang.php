<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIDIN | MAHASISWA</title>


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
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url('index.php/control_peminjaman/kelas'); ?>" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      </li>
    </ul>
    <!--form-->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        
        <div class="input-group-append">
          
          </button>
        </div>
      </div>
    </form>
      <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li>
        <a href="<?php echo base_url('index.php/helloword/logout'); ?>" class="btn btn-primary btn-block btn-flat" >LogOut <i class="fa fa-sign-out nav-icon"></i> </a>
      </li>
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
            <?php $status = $this->session->userdata('status'); ?>
            <?php echo validation_errors(); ?>
            <form role="form" method="post" action="<?php echo base_url().'index.php/control_peminjaman/proses_kelas' ?>">
               <div class="form-group">
                  <label for="exampleInputEmail1">Pilih Hari</label>
                  <select class="form-control" name="hari">
                  <option selected value="senin">Senin</option>
                  <option value="selasa">Selasa</option>
                  <option value="rabu">Rabu</option>
                  <option value="kamis">Kamis</option>
                  <option value="jumat">Jumat</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Pilih Jam</label>
                  <select class="form-control" name="jam">
                  <option value="07.00-09.30" selected>07.00-09.30</option>
                  <option value="07.00-08.40" >07.00-08.40</option>
                  <option value="08.40-10.20" >08.40-10.20</option>
                  <option vlaue="09.30-12.00" >09.30-12.00</option>
                  <option value="10.20-12.00" >10.20-12.00</option>
                  <option value="12.30-14.10" >12.30-14.10</option>
                  <option value="12.30-15.00" >12.30-15.00</option>
                  <option value="14.10-16.20" >14.10-16.20</option>

                  </select>
                </div>
                      <input type="hidden" name="nim" value="<?php echo $this->session->userdata('username'); ?>  " ></br>
                <div class="form-group">
                  <div class="box-header">
                    <h3 class="box-title">Keperluan</h3>
                    <!-- tools box -->
                    <div class="pull-right box-tools">
                    </div>
                    <!-- /. tools -->
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body pad">
                      <textarea name="keperluan"  class="textarea" placeholder="Jelaskan Keperluan Anda" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>
              </div>
           
            <div class="card-footer">
              <input type="submit" name="submit" class="btn btn-primary" value="NEXT"></input>
            </div>


            <?php
        
  if($status == "ya"){

    foreach ($data as $mhs) {
      echo "<div class='jumbotron'>
  <h2 class='display-4'>UDINUS SEMARANG</h2>
 <h3 style=color:green;>Permintaan Kelas Diterima</h3>
  <p class='lead'>Terima kasih "; ?><?php echo $this->session->userdata('nama'); ?><?php echo " permintaan peminjaman kelasmu untuk hari ";?><?php echo $mhs['hari'];?><?php echo " jam ";?><?php echo $mhs['jam'];?><?php echo " di ruangan "?><?php echo $mhs['kelas'];?><?php
    }
    
  }elseif($status == "tidak"){
    foreach ($data as $mhs) {
      echo "<div class='jumbotron'>
  <h2 class='display-4'>UDINUS SEMARANG</h2>
 <h3 style=color:red;>Permintaan Kelas Tidak Diterima</h3>
  <p class='lead'>Terima kasih "; ?><?php echo $this->session->userdata('nama'); ?><?php echo " permintaan peminjaman kelasmu untuk hari ";?><?php echo $mhs['hari'];?><?php echo " jam ";?><?php echo $mhs['jam'];?><?php echo " di ruangan "?><?php echo $mhs['kelas'];?><?php
    }
  }elseif ($status == "") {
    echo ""; ?><?php
  }
?>





             </form>
           
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