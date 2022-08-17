<div class="content-wrapper">
	<!-- Main content -->
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
					  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
					</div>
					<div class="card mt-3">
						<form action="" method="POST">
							<div class="card-body">
								<div class="row form-group">
									<div class="col-6">
										<label>Nama</label>
										<input type="text" name="nama_tamu" id="nama_tamu" class="form-control"
											placeholder="Isi Nama Anda" required>
										<input type="date" hidden name="tgl_berkunjung" class="tgl_berkunjung">
									</div>
									<div class="col-6">
										<label>NIK</label>
										<input type="number" name="nik" id="nik" class="form-control"
											placeholder="Isi Nomer KTP">
									</div>
								</div>
								<div class="row form-group">
									<div class="col-6">
										<label>Alamat</label>
										<input type="text" name="alamat" id="alamat" class="form-control"
											placeholder="Isi Alamat Anda" required>
									</div>
									<div class="col-6">
										<label>No. HP</label>
										<input type="number" name="no_hp_tamu" id="no_hp_tamu" class="form-control"
											placeholder="Isi Nomer Hp/Wa" required>
									</div>
								</div>
								<div class="row form-group">
									<div class="col-6 form-group">
										<label>Karyawati</label>
										<select class="form-control select2" name="karyawan" style="width: 100%;" id="id_karyawan">
											<option value="">- Pilih Karyawan/i -</option>
											<?php foreach($karyawan as $k): ?>
											<option value="<?= $k->id_karyawan?>"><?= $k->nama_karyawan ?></option>
											<?php endforeach; ?>
										</select>
									</div>
									<div class="col-6">
										<label>Keperluan</label>
										<input type="text" name="keperluan" id="keperluan" class="form-control"
											placeholder="Isi Keperluan" required>
									</div>
								</div>
								<br>
								<button type="submit" class="btn btn-success float-right" id="btnSave">Simpan</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

  	
<script>

</script>
