<div class="container">
	<div class="card card-primary card-outline">
		<div class="card-header">
			<h3 class="card-title float-right"><button type="button" class="btn btn-default" data-toggle="modal"
					data-target="#tambah_petugas">
					<i class="fa fa-plus"></i> Tambah Petugas
				</button></h3>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>No. Hp</th>
						<th style="text-align:center">Aksi</th>
					</tr>
				</thead>
				<tbody id="ListPetugas">

				</tbody>
			</table>
		</div>
		<!-- /.card-body -->
	</div>
</div>
<!-- MODAL TAMBAH -->
<div class="modal fade" id="tambah_petugas">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Tambah Petugas</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row form-group">
					<!-- <div class="col-4"> -->
						<!-- <label for="id_karyawan">ID Karyawan</label> -->
						<input type="hidden" name="id_petugas" id="id_petugas" class="form-control">
					<!-- </div> -->
					<div class="col-8">
						<label for="nama_petugas">Nama Petugas</label>
						<input type="text" name="nama_petugas" id="nama_petugas" class="form-control">
					</div>
                    <div class="col-4">
                        <label for="bagian">Jenis Kelamain</label>
                        <!-- <input type="text" name="bagian" class="form-control"> -->
                        <select name="" id="jk" class="form-control">
                            <option value="">-Pilih Jenis Kelamin-</option>
                            <option value="Laki - laki">Laki - laki</option>
							<option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
				</div>
                <div class="row form-group">
                    <div class="col-6">
                        <label for="alamat">Alamat</label>
                        <textarea type="text" name="alamat" id="alamat" class="form-control"></textarea>
                    </div>
                    <div class="col-6">
                        <label for="no_hp">No. HP</label>
                        <input type="text" name="no_hp" id="no_hp" class="form-control">
                    </div>
                </div>
			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" id="btn_save-petugas" class="btn btn-primary">Save changes</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- END MODAL TAMBAH -->

<!-- MODAL EDIT -->
<form>
	<div class="modal fade" id="edit_petugas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Edit Data Petugas</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row form-group">
						<div class="col-8">
							<label for="nama_karyawan">Nama Karyawan</label>
							<input type="hidden" name="id_petugas_edit" id="id_petugas_edit" class="form-control">
							<input type="text" name="nama_petugas_edit" id="nama_petugas_edit" class="form-control">
						</div>
						<div class="col-4">
							<label for="jk">Jenis Kelamin</label>
							<!-- <input type="text" name="jk" class="form-control"> -->
							<select name="jk_edit" id="jk_edit" class="form-control">
								<option value="">- Pilih jenis Kelamin -</option>
								<option value="1">Laki-laki</option>
								<option value="2">Perempuan</option>
							</select>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-6">
							<label for="ttl">TTL</label>
							<textarea type="text" name="alamat_edit" id="alamat_edit" class="form-control"></textarea>
						</div>
						<div class="col-6">
							<label for="no_hp">No. HP</label>
							<input type="number" name="no_hp_edit" id="no_hp_edit" class="form-control">
						</div>
					</div>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" id="btn_update_petugas" class="btn btn-primary">Update Petugas</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
</form>
<!-- END MODAL EDIT -->

<!--MODAL DELETE-->
<form>
	<div class="modal fade" id="Modal_Delete-petugas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<strong>Apakah Anda yakin akan menghapus data ini</strong>
				</div>
				<div class="modal-footer">
					<input type="hidden" name="id_petugas_delete" id="id_petugas_delete" class="form-control">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
					<button type="button" type="submit" id="btn_delete-petugas" class="btn btn-primary">Yes</button>
				</div>
			</div>
		</div>
	</div>
</form>
<!--END MODAL DELETE-->
