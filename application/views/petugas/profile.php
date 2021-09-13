<div class="container">
	<div class="col-md-6">
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
					<dd class="col-sm-8"><?php echo $this->session->userdata('nama_petugas');?></dd>
					<dt class="col-sm-4">Alamat</dt>
					<dd class="col-sm-8">php
					</dd>
					<dd class="col-sm-8 offset-sm-4">No. HP</dd>
					<dt class="col-sm-4">No. HP</dt>
					<dd class="col-sm-8"><?php echo $this->session->userdata('no_hp');?></dd>
					<dt class="col-sm-4">Email</dt>
					<dd class="col-sm-8"><?php echo $this->session->userdata('email');?>
					</dd>
				</dl>
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
	</div>
	<!-- ./col -->
</div>
