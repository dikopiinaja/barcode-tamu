<div class="container d-flex justify-content-center">
	<div class="card col-6">
		<div class="card-header">Input Bagian
		</div>
		<div class="card-body">
            <form action="<?= site_url('admin/updateBagian')?>/<?= $bagian->id_bagian?>" method="post">
                <div class="form-group">
                    <label for="nama">Nama bagian</label>
                    <input type="hidden" name="id" value="<?= $bagian->id_bagian?>" class="form-control form-group">
                    <input type="text" name="nama_bagian" value="<?= $bagian->nama_bagian?>" class="form-control form-group">
                    <label for="departemen">Departemen</label>
                    <input type="text" name="departemen" value="<?= $bagian->departemen?>" class="form-control form-group">
                </div>
                <button class="btn btn-success float-right">Simpan</button>
            </form>
		</div>
	</div>
</div>
