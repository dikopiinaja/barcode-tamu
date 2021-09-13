<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
	<img class="animation__shake" src="<?= base_url('assets');?>/dist/img/adminlogo.png" alt="AdminLTELogo" height="60"
		width="60">
</div>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-light">
	<!-- Left navbar links -->
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-align-left"></i></a>
		</li>
		<li class="nav-item d-none d-sm-inline-block">
			<a href="<?= site_url('')?>" class="nav-link">Home</a>
		</li>
	</ul>

	<!-- Right navbar links -->
	<ul class="navbar-nav ml-auto">
		<!-- Navbar Search -->
		<li class="nav-item">
			<a class="nav-link" data-toggle="dropdown" href="#">
				<span class="badge badge-warning"> <?php echo $this->session->userdata('username');?></span>
			</a>
			<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
				<div class="dropdown-divider"></div>
				<a href="#" class="dropdown-item">
					<i class="fas fa-envelope mr-2"></i> <?php echo $this->session->userdata('email');?>
					<!-- <span class="float-right text-muted text-sm">3 mins</span> -->
				</a>
				<div class="dropdown-divider"></div>
				<a href="<?= site_url('auth/logout')?>" class="dropdown-item dropdown-footer">Log Out</a>
			</div>
		</li>
	</ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="#" class="brand-link navbar-dark text-white">
		<img src="<?= base_url('assets');?>/dist/img/adminlogo.png" alt="AdminLTE Logo"
			class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">Srikandi</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
				<?php if($this->session->userdata('level')==='1'):?>
				<li class="nav-item menu-open">
					<a href="<?= site_url('admin')?>" class="nav-link">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
						</p>
					</a>
				</li>
				<li class="nav-header">Data</li>
				<li class="nav-item">
					<a href="<?= site_url('admin/bagian')?>" class="nav-link">
						<i class="fas fa-archive nav-icon"></i>
						<p>Bagian</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= site_url('admin/karyawan')?>" class="nav-link">
						<i class="fas fa-address-card nav-icon"></i>
						<p>Karyawan</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= site_url('admin/petugas')?>" class="nav-link">
						<i class="fas fa-user nav-icon"></i>
						<p>Petugas</p>
					</a>
				</li>

				<!-- <li class="nav-item">
					<a href="<?= site_url('admin/user')?>" class="nav-link">
						<i class="fas fa-arrow-right nav-icon"></i>
						<p>User Login</p>
					</a>
				</li> -->


				<li class="nav-header">Pendataan</li>
				<li class="nav-item">
					<a href="<?= site_url('admin/kunjungan')?>" class="nav-link">
						<i class="nav-icon far fa-circle text-success"></i>
						<p class="text">Kunjungan Karyawan</p>
					</a>
				</li>
				<li class="nav-header">Laporan</li>

				<!-- <li class="nav-item">
					<a href="<?= site_url('laporanPetugas')?>" class="nav-link">
						<i class="nav-icon fas fa-print text-success"></i>
						<p class="text">Laporan Kunjungan</p>
					</a>
				</li> -->
				<li class="nav-item">
					<a href="<?= site_url('admin/laporan')?>" class="nav-link">
						<i class="nav-icon fas fa-file-pdf text-danger"></i>
						<p class="text">Laporan Pdf</p>
					</a>
				</li>

				<?php else:?>
				<li class="nav-item menu-open">
					<a href="<?= site_url('petugas')?>" class="nav-link">
						<i class="nav-icon fas fa-tasks"></i>
						<p>
							Dashboard
						</p>
					</a>
				</li>
				<li class="nav-header">Data</li>
				<li class="nav-item">
					<a href="<?= site_url('petugas/karyawan')?>" class="nav-link">
						<i class="fas fa-users nav-icon"></i>
						<p>Karyawan</p>
					</a>
				</li>
				<li class="nav-header">Pendataan</li>
				<li class="nav-item">
					<a href="<?= site_url('petugas/kunjungan')?>" class="nav-link">
						<i class="nav-icon far fa-circle text-success"></i>
						<p class="text">Kunjungan Karyawan</p>
					</a>
				</li>
				<li class="nav-header">Laporan</li>
				<li class="nav-item">
					<a href="<?= site_url('laporanPetugas')?>" class="nav-link">
						<i class="nav-icon fas fa-print text-primary"></i>
						<p class="text">Laporan Kunjungan</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="<?= site_url('petugas/laporan')?>" class="nav-link">
						<i class="nav-icon fas fa-file-pdf text-primary"></i>
						<p class="text">Kirim Laporan</p>
					</a>
				</li>
				<?php endif?>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
