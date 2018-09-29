
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SI-DIN | ADMIN</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('adminlte/plugins/font-awesome/css/font-awesome.min.css');?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('adminlte/dist/css/adminlte.min.css');?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('adminlte/plugins/iCheck/flat/blue.css');?>">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url('adminlte/plugins/morris/morris.css');?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url('adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.css');?>">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url('adminlte/plugins/datepicker/datepicker3.css');?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('adminlte/plugins/daterangepicker/daterangepicker-bs3.css');?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url('adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url('index.php/admin'); ?>" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
<a href="<?php echo base_url('index.php/admin/tampilpesan');?>" class="nav-link">Message</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li>
        <a href="<?php echo base_url('index.php/helloword/logout'); ?>" class="btn btn-primary btn-block btn-flat" >LogOut <i class="fa fa-sign-out nav-icon"></i> </a>
      </li>
    </ul>

    <!-- Right navbar links -->

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('index.php/admin'); ?>" class="brand-link">
      <span class="brand-text font-weight-light">Admin SI DIN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        </div>
        <div class="info">
         <h4 style="color:white;"><?php echo $this->session->userdata('nama');?></h4>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo base_url('index.php/admin'); ?>" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-edit"></i>
              <p>
                KRS
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url().'index.php/admin/matakuliah'; ?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Input Mata Kuliah</p>
                </a>
              </li>
            </ul>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url().'index.php/admin/pengambil'; ?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Data Pengambil KRS</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-table"></i>
              <p>
                Peminjaman Kelas
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url().'index.php/admin/daftar'; ?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Daftar Peminjam</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-edit"></i>
              <p>
                Pendaftaran Mahasiswa
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url().'index.php/helloword/formregister'; ?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Input Data Mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'index.php/helloword/daftar_mahasiswa'; ?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Daftar Data Mahasiswa</p>
                </a>
              </li>
          
          
          
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
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
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    	<form action="<?php echo base_url('index.php/helloword/prosesregister'); ?>" method="post">
	<table>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>Nama Mahasiswa</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
				<select name="jns_klmn">
					<option>Laki-Laki</option>
					<option>Perempuan</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Tgl Lahir</td>
			<td>:</td>
			<td><input type="text" name="lahir"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><textarea name="alamat"></textarea></td>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td>:</td>
			<td>
				<select name="jurusan">
					<option>Teknik Informatika S1</option>
					<option>Teknik Informatika D3</option>
					<option>Design Kompunikasi Visual S1</option>
					<option>Sistem Informasi S1</option>
					<option>Ilmu Komunikasi S1</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Nama Orang Tua</td>
			<td>:</td>
			<td><input type="text" name="orangtua"></td>
		</tr>
		<tr>
			<td>Status</td>
			<td>:</td>
			<td>
				<select name="level">
					<option>Mahasiswa</option>
					<option>Admin</option>
				</select>
			</td>
		</tr>
		
	</table>
	<button type="submit">Registrasi</button>
	</form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2018 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.0-alpha
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url('adminlte/plugins/jquery/jquery.min.js');?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url('adminlte/plugins/morris/morris.min.js');?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('adminlte/plugins/sparkline/jquery.sparkline.min.js');?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js');?>"></script>
<script src="<?php echo base_url('adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js');?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('adminlte/plugins/knob/jquery.knob.js');?>"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="<?php echo base_url('adminlte/plugins/daterangepicker/daterangepicker.js');?>"></script>
<!-- datepicker -->
<script src="<?php echo base_url('adminlte/plugins/datepicker/bootstrap-datepicker.js');?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url('adminlte/plugins/slimScroll/jquery.slimscroll.min.js');?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('adminlte/plugins/fastclick/fastclick.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('adminlte/dist/js/adminlte.js');?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('adminlte/dist/js/pages/dashboard.js');?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
