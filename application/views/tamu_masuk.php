<div class="content-wrapper">
	<!-- Main content -->
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="card mt-3">
						<form action="<?= site_url('main/storeTamu')?>" method="post">
							<div class="card-header text-center bg-default ">Data Diri Tamu</div>
							<div class="card-body">
								<div class="row form-group">
									<div class="col-6">
										<label>Nama</label>
										<input type="text" name="nama_tamu" class="form-control"
											placeholder="Isi Nama Anda" required>
									</div>
									<div class="col-6">
										<label>NIK</label>
										<input type="number" name="nik" class="form-control"
											placeholder="Isi Nomer KTP">
									</div>
								</div>
								<div class="row form-group">
									<div class="col-6">
										<label>Alamat</label>
										<input type="text" name="alamat" class="form-control"
											placeholder="Isi Alamat Anda" required>
									</div>
									<div class="col-6">
										<label>No. HP</label>
										<input type="number" name="no_hp_tamu" class="form-control"
											placeholder="Isi Nomer Hp/Wa" required>
									</div>
								</div>
								<div class="row form-group">
									<div class="col-6 form-group">
										<label>Karyawati</label>
										<select class="form-control select2" style="width: 100%;" name="id_karyawan" required>
											<option selected="selected">- Pilih Karyawan/i -</option>
                                            <?php foreach($karyawan as $k): ?>
											<option value="<?= $k->id_karyawan?>"><?= $k->nama_karyawan?>
											</option>
											<?php endforeach; ?>
										</select>
									</div>
									<div class="col-6">
										<label>Keperluan</label>
										<input type="text" name="keperluan" class="form-control"
											placeholder="Isi Keperluan" required>
									</div>
								</div>
								<br>
								<button type="submit" class="btn btn-success float-right">Simpan</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- <script>
    $(document).ready(function(){
    $("#portLoading").select2({
        ajax: { 
            url: "<?php echo base_url();?>/api/get_data.php",
            type: "get",
            dataType: 'json',
            delay: 250,
            data: function (params) {
                return {
                    searchTerm: params.term // search term
                };
            },
            processResults: function (response) {
                return {
                    results: response
                };
            },
            cache: true
        }
    });
});
</script> -->
