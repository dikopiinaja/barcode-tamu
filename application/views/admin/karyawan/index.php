<div class="container">
	<div class="card card-primary card-outline">
		<div class="card-header">
			<h3 class="card-title float-right"><button type="button" class="btn btn-default" data-toggle="modal"
					data-target="#input_karyawan">
					<i class="fa fa-plus"></i> Tambah Karyawan
				</button></h3>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<table class="table table-striped" id="mydata">
				<thead>
					<tr>
						<th>ID Karyawan</th>
						<th>Nama</th>
						<th>Bagian</th>
						<th>TTL</th>
						<th>No. Hp</th>
						<th style="text-align:center">Aksi</th>
					</tr>
				</thead>
				<tbody id="ListKaryawan">

				</tbody>
			</table>
		</div>
		<!-- /.card-body -->
	</div>
</div>

<!-- MODAL TAMBAH -->
<form>
	<div class="modal fade" id="input_karyawan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Isi Data Karyawan</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row form-group">
						<div class="col-4">
							<label for="id_karyawan">ID Karyawan</label>
							<input type="number" name="id_karyawan" id="id_karyawan" class="form-control">
						</div>
						<div class="col-8">
							<label for="nama_karyawan">Nama Karyawan</label>
							<input type="text" name="nama_karyawan" id="nama_karyawan" class="form-control">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-6">
							<label for="bagian">Bagian</label>
							<!-- <input type="text" name="bagian" class="form-control"> -->
							<select name="" id="bagian" class="form-control">
								<option value="">-Pilih Bagian-</option>
								<?php foreach($bagian as $b): ?>
								<option value="<?= $b->id_bagian?>"><?= $b->nama_bagian ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="col-6">
							<label for="kontrak">Kontrak</label>
							<input type="text" name="kontrak" id="kontrak" class="form-control">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-3">
							<label for="jk">Jenis Kelamin</label>
							<!-- <input type="text" name="jk" class="form-control"> -->
							<select name="" id="jk" class="form-control">
								<option value="">- Pilih jenis Kelamin -</option>
								<option value="1">Laki-laki</option>
								<option value="2">Perempuan</option>
							</select>
						</div>
						<div class="col-6">
							<label for="ttl">TTL</label>
							<input type="text" name="ttl" id="ttl" class="form-control">
						</div>
						<div class="col-3">
							<label for="no_hp">No. HP</label>
							<input type="number" name="no_hp" id="no_hp" class="form-control">
						</div>
					</div>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" id="btn_save" class="btn btn-primary">Save changes</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
</form>
<!-- END MODAL TAMBAH -->
<!-- MODAL EDIT -->
<form>
	<div class="modal fade" id="edit_karyawan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Edit Data Karyawan</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row form-group">
						<div class="col-4">
							<label for="id_karyawan">ID Karyawan</label>
							<input type="number" name="id_karyawan_edit" id="id_karyawan_edit" class="form-control">
						</div>
						<div class="col-8">
							<label for="nama_karyawan">Nama Karyawan</label>
							<input type="text" name="nama_karyawan_edit" id="nama_karyawan_edit" class="form-control">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-6">
							<label for="bagian">Bagian</label>
							<!-- <input type="text" name="bagian" class="form-control"> -->
							<select name="bagian_edit" id="bagian_edit" class="form-control">
								<option value="">-Pilih Bagian-</option>
								<?php foreach($bagian as $b): ?>
								<option value="<?= $b->id_bagian?>"><?= $b->nama_bagian ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="col-6">
							<label for="kontrak">Kontrak</label>
							<input type="text" name="kontrak_edit" id="kontrak_edit" class="form-control">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-3">
							<label for="jk">Jenis Kelamin</label>
							<!-- <input type="text" name="jk" class="form-control"> -->
							<select name="jk_edit" id="jk_edit" class="form-control">
								<option value="">- Pilih jenis Kelamin -</option>
								<option value="1">Laki-laki</option>
								<option value="2">Perempuan</option>
							</select>
						</div>
						<div class="col-6">
							<label for="ttl">TTL</label>
							<input type="text" name="ttl_edit" id="ttl_edit" class="form-control">
						</div>
						<div class="col-3">
							<label for="no_hp">No. HP</label>
							<input type="number" name="no_hp_edit" id="no_hp_edit" class="form-control">
						</div>
					</div>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" id="btn_update_karyawan" class="btn btn-primary">Update Karyawan</button>
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
	<div class="modal fade" id="detail_karyawan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Data Karyawan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div id="detail">
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<!-- MODAL DELETE-->
<form>
	<div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Hapus Data !!!</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<strong>Apakah Anda yakin akan menghapus data ini</strong>
				</div>
				<div class="modal-footer">
					<input type="hidden" name="id_karyawan_delete" id="id_karyawan_delete" class="form-control">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
					<button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
				</div>
			</div>
		</div>
	</div>
</form>
<!--END MODAL DELETE-->
