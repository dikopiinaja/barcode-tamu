<?php 
$jam = date('H:i:s');

?>
<div class="container">
	<div class="card">
		<div class="card-header">Data Kunjungan</div>
		<div class="card-body">
			<table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Tamu</th>
                    <th>Karyawan</th>
                    <th>Alamat</th>
                    <th>No. Hp Tamu</th>
                    <th>Tgl Kunjungan</th>
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
                    <td><?= $k->no_hp_tamu?></td>
                    <td><?= longdate_indo($k->tgl_berkunjung) ?></td>
                    <td><?= $k->jam_masuk?></td>
                    <td><?= $k->jam_keluar?></td>
                    <td>
                    <a href="<?= base_url('admin/detail_tamu')?>/<?php echo $k->id_tamu ?>" class='btn btn-sm btn-primary'>Detail</a>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
			</table>
		</div>
	</div>
</div>
