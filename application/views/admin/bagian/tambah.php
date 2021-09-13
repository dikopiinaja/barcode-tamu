<div class="container d-flex justify-content-center">
	<div class="card col-6">
		<div class="card-header">Input Bagian
		</div>
		<div class="card-body">
            <form action="<?= site_url('admin/storeBagian')?>" method="post">
                <div class="form-group">
                    <label for="nama">Nama bagian</label>
                    <input type="text" name="nama_bagian" class="form-control form-group">
                    <label for="departemen">Departemen</label>
                    <input type="text" name="departemen" class="form-control form-group">
                </div>
                <button class="btn btn-success float-right">Simpan</button>
            </form>
		</div>
	</div>
</div>
