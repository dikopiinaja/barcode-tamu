<div class="container">
	<div class="card">
		<div class="card-header">Data Kunjungan Harian</div>
		<div class="card-body">
			<table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Tamu</th>
                    <th>Karyawan</th>
                    <th>Alamat</th>
                    <th>No. Hp</th>
                    <th>Tanggal Kunjungan</th>
                    <th>Jam Masuk</th>
                    <th>Jam Keluar</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $no=1; foreach($kunjungan as $k):?>
                <tr>
                    <td><?= $no++?></td>
                    <td><?= $k->nama_tamu?></td>
                    <td><?= $k->nama_karyawan?></td>
                    <td><?= $k->alamat?></td>
                    <td><?= $k->no_hp?></td>
                    <td><?= longdate_indo($k->tgl_kunjungan)?></td>
                    <td><?= $k->jam_masuk?></td>
                    <td><?= $k->jam_keluar?></td>
                    <td>
                    <a class='btn btn-sm btn-primary' href="<?= site_url('petugas/detail_tamu')?>/<?php echo $k->id_tamu ?>">Detail</a>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
			</table>
		</div>
	</div>
</div>
