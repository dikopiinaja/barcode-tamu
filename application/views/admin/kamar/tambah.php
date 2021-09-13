<div class="container d-flex justify-content-center">
	<div class="card col-6">
		<div class="card-header">Input Bagian
		</div>
		<div class="card-body">
            <form action="<?= site_url('admin/storeKamar')?>" method="post">
                <div class="form-group">
                    <label for="nama">No. Kamar</label>
                    <input type="text" name="no_kamar" class="form-control form-group" placeholder="No. Kamar">
                    <label for="id_karyawn">Karyawan</label>
                    <select name="" id="id_karyawan" class="form-control">
                        <option value="">-Pilih Karyawan-</option>
                        <?php foreach ($karyawan as $k ) : ?>
                           <option value="<?= $k->id_karyawan?>"><?= $k->nama_karyawan?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <button type="sub,it" class="btn btn-success float-right">Simpan</button>
            </form>
		</div>
	</div>
</div>
