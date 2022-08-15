<div class="container d-flex justify-content-center">
	<div class="card col-9 card-primary card-outline">
		<div class="card-header">
			<button class="btn btn-default float-right" data-toggle="modal"
					data-target="#tambah_bagian"><i class="fa fa-plus"></i> Tambah Bagian</button>
		</div>
		
		<div class="card-body">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Nama Bagian</th>
						<th>Departemen</th>
						<th style="text-align:center">Aksi</th>
					</tr>
				</thead>
				<tbody id="listBagian">
					
				</tbody>
			</table>
		</div>
	</div>
</div>


<!-- MODAL TAMBAH -->
<div class="modal fade" id="tambah_bagian">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Tambah Bagian</h4>
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
					<div class="col-6">
						<label for="nama_petugas">Bagian</label>
						<input type="text" name="nama_bagian" id="nama_bagian" class="form-control">
					</div>
					<div class="col-6">
						<label for="nama_petugas">Departemen</label>
						<input type="text" name="departemen" id="departemen" class="form-control">
					</div>
                   
				</div>
			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" id="btn_save-bagian" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<!-- END MODAL TAMBAH -->


<!-- MODAL EDIT -->
<form>
	<div class="modal fade" id="edit_bagian" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Edit Data Bagian</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row form-group">
						<div class="col-6">
							<label for="nama_karyawan">Nama Bagian</label>
							<input type="hidden" name="id_bagian_edit" id="id_bagian_edit" class="form-control">
							<input type="text" name="nama_bagian_edit" id="nama_bagian_edit" class="form-control">
						</div>
						<div class="col-6">
							<label for="departemen">Departemen</label>
							<input type="text" name="departemen_edit" id="departemen_edit" class="form-control">
						</div>
					</div>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" id="btn_update_bagian" class="btn btn-primary">Update Bagian</button>
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
	<div class="modal fade" id="Modal_Delete-bagian" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<strong>Apakah Anda yakin akan menghapus data ini</strong>
				</div>
				<div class="modal-footer">
					<input type="hidden" name="id_bagian_delete" id="id_bagian_delete" class="form-control">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
					<button type="button" type="submit" id="btn_delete-bagian" class="btn btn-primary">Yes</button>
				</div>
			</div>
		</div>
	</div>
</form>
<!--END MODAL DELETE-->
