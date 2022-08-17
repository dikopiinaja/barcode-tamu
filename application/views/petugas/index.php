<?php 
$label = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
?>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<?php foreach($profile as $p){ ?>
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">
							<i class="fas fa-user"></i>
							<?php echo $this->session->userdata('username');?>
						</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<dl class="row">
							<dt class="col-sm-4">Nama</dt>
							<dd class="col-sm-8"><?= $p->nama_petugas ?></dd>
							<dt class="col-sm-4">Alamat</dt>
							<dd class="col-sm-8"><?= $p->alamat ?></dd>
							<dt class="col-sm-4">No. HP</dt>
							<dd class="col-sm-8"><?= $p->no_hp ?></dd>
							<dt class="col-sm-4">Email</dt>
							<dd class="col-sm-8"><?php echo $this->session->userdata('email');?>
							</dd>
						</dl>
					</div>
					<!-- /.card-body -->
				</div>
				<?php }?>
				<!-- /.card -->
			</div>
			<div class="col-md-6">
				<canvas id="myChart"></canvas>
			</div>
		</div>
		<div class="row">
			<div class="container">
				<div class="card col-md-12">
					<div class="card-header text-center text-success text-bold">Tamu Hari ini</div>
					<!-- <div class="row"> -->
					<table class="table table-hover bg-gray-dark">
						<thead class="bg-primary">
							<tr>
								<th>No.</th>
								<th>Nama Tamu</th>
								<th>NIK</th>
								<th>Bertemu dengan</th>
								<th class="text-center">Act</th>
							</tr>
						</thead>
						<tbody>
							<form id="edit-tamu">
								<?php if (empty($tamu_h)) { ?>
								<tr>
									<td colspan="3">Tamu Kosong</td>
								</tr>

								<?php } else {
										$num = 1;
										foreach ($tamu_h as $t) {
											?>
								<td><?= $num++?></td>
								<td><?= $t['nama_tamu']?></td>
								<td>
									<?= $t['nik']?>
								</td>
								<td><?= $t['nama_karyawan']?></td>
								<td class="text-center">
									<?php if (empty($t['jam_masuk'])){ ?>
										
									<a type="submit" class="btn btn-danger btn-sm btn-datang"
										href="<?= base_url() ?>petugas/kunjungan_tamu/checkin/<?= $t['nik'] ?>">
										<i class="far fa-circle nav-icon">
										</i>
										Datang
									</a>
									<?php } else if (empty($t['jam_keluar'])){ ?>
									<a type="submit" class="btn btn-warning btn-sm btn-keluar"
										href="<?= base_url() ?>petugas/kunjungan_tamu/checkout/<?= $t['nik'] ?>">
										<i class="far fa-circle nav-icon">
										</i>
										Pulang
									</a>
									<?php } else {?>
									<button class="btn btn-success">
										<i class="far fa-check-circle nav-icon">
											Complete
										</i>
									</button>
									<?php } ?>
								</td>
								</tr>
								<?php }
								} ?>
							</form>
						</tbody>
					</table>
					<!-- </div> -->
				</div>
			</div>
		</div>
		
	</div>