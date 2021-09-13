 <!-- Main content -->
 <section class="content">
 	<div class="container-fluid">
 		<!-- Info boxes -->
 		<div class="row">
 			<div class="col-12 col-sm-6 col-md-3">
 				<div class="info-box">
 					<span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

 					<div class="info-box-content">
 						<span class="info-box-text">Karyawan</span>
 						<span class="info-box-number">
 							<a href="<?= site_url('admin/karyawan')?>"> <?= $this->db->count_all('karyawan');?></a>
 						</span>
 					</div>
 					<!-- /.info-box-content -->
 				</div>
 				<!-- /.info-box -->
 			</div>
 			<!-- /.col -->
 			<div class="col-12 col-sm-6 col-md-3">
 				<div class="info-box mb-3">
 					<span class="info-box-icon bg-success elevation-1"><i class="fas fa-user"></i></span>

 					<div class="info-box-content">
 						<span class="info-box-text">Petugas</span>
 						<span class="info-box-number">
 							<a href="<?= site_url('admin/petugas')?>">
 								<?= $this->db->count_all('petugas');?>
 							</a>

 						</span>
 					</div>
 				</div>
 			</div>
 			<div class="clearfix hidden-md-up"></div>

 			<div class="col-12 col-sm-6 col-md-3">
 				<div class="info-box mb-3">
 					<span class="info-box-icon bg-success elevation-1"><i class="fas fa-home"></i></span>

 					<div class="info-box-content">
 						<span class="info-box-text">User Login</span>
 						<span class="info-box-number">
 							<a href="<?= site_url('admin/user');?>"> <?= $this->db->count_all('users');?></a>
 						</span>
 					</div>
 				</div>
 			</div>
 			<div class="col-12 col-sm-6 col-md-3">
 				<div class="info-box mb-3">
 					<span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

 					<div class="info-box-content">
 						<span class="info-box-text">Tamu</span>
 						<span class="info-box-number">
 							<a href="<?= site_url('admin/tamu');?>"><?= $this->db->count_all('tamu');?>
 							</a>
 						</span>
 					</div>
 				</div>
 			</div>
 		</div>

 	</div>

 </section>
