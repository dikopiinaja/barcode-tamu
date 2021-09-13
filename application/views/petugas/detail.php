<div class="container d-flex justify-content-center">
	<div class="col-7 ">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">
					<i class="fas fa-user"></i>
					 Data Tamu
				</h3>
			</div>
			<!-- /.card-header -->
			<div class="card-body">
				<dl class="row">
					<dt class="col-sm-4">Nama</dt>
					<dd class="col-sm-8"><?php echo $tamu->nama_tamu ?></dd>
					<dt class="col-sm-4">Alamat</dt>
					<dd class="col-sm-8"><?= $tamu->alamat?>
					</dd>
					<dt class="col-sm-4">Nama Karyawan</dt>
					<dd class="col-sm-8"><?= $tamu->nama_karyawan?>
					</dd>
					<dt class="col-sm-4">No. Hp</dt>
					<dd class="col-sm-8"><?= $tamu->no_hp_tamu?></dd>
					<dt class="col-sm-4">NIK</dt>
					<dd class="col-sm-8"><?= $tamu->nik?></dd>
                    <dt class="col-sm-4">Tanggal Berkunjung</dt>
					<dd class="col-sm-8"><?= longdate_indo($tamu->tgl_berkunjung) ?></dd>
				</dl>
       
                <dl>
                    <tr>
                        <td>Jam Masuk</td>
                    </tr>
                    <tr>
                        <td> : <?= $tamu->jam_masuk?></td>
                    </tr>
                </dl>
                <dl>
                    <tr>
                        <td>Jam Pulang</td>
                    </tr>
                    <tr>
                        <td> : <?= $tamu->jam_keluar?></td>
                    </tr>
                </dl>
                <a href="<?= site_url('admin/kunjungan')?>" class="btn btn-warning col-4 float-right"><i class="fa fa-arrow-left"> Kembali</i></a>
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
	</div>
	<!-- ./col -->
</div>
