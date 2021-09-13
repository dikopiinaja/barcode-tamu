<div class="container">
	<div class="card">
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
				<tbody id="listkaryawan">

				</tbody>
			</table>
		</div>
		<!-- /.card-body -->
	</div>
</div>
<div class="modal fade" id="details_karyawan">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Details Karyawan</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row form-group">
					<div class="col-4">
						<label for="id_karyawan">ID Karyawan</label>
						<input type="Number" name="id_karyawan" class="form-control">
					</div>
					<div class="col-8">
						<label for="nama_karyawan">Nama Karyawan</label>
						<input type="text" name="nama_karyawan" class="form-control">
					</div>
				</div>
                <div class="row form-group">
                    <div class="col-6">
                        <label for="bagian">Bagian</label>
                        <!-- <input type="text" name="bagian" class="form-control"> -->
                        <select name="" id="" class="form-control">
                            <option value="">-Pilih Bagian-</option>
                            <option value="">Nama bagian</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <label for="kamar">Kamar</label>
                        <input type="text" name="kamar" class="form-control">
                    </div>
                    <div class="col-3">
                        <label for="kontrak">Kontrak</label>
                        <input type="text" name="kontrak" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-3">
                        <label for="jk">Jenis Kelamin</label>
                        <!-- <input type="text" name="jk" class="form-control"> -->
                        <select name="" id="" class="form-control">
                            <option value="">- Pilih jenis Kelamin -</option>
                            <option value="1">Laki-laki</option>
                            <option value="2">Perempuan</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="ttl">TTL</label>
                        <input type="text" name="ttl" class="form-control">
                    </div>
                    <div class="col-3">
                        <label for="no_hp">No. HP</label>
                        <input type="number" name="no_hp" class="form-control">
                    </div>
                </div>
			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!--MODAL DELETE-->
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
					<input type="hidden" name="karyawan_code_delete" id="karyawan_code_delete" class="form-control">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
					<button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
				</div>
			</div>
		</div>
	</div>
</form>
<!--END MODAL DELETE-->
