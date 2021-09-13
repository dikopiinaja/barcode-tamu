<div class="container d-flex justify-content-center">
	<div class="card col-9 card-primary card-outline">
		<div class="card-header">
			<button class="btn btn-default float-right"><a href="<?= site_url('admin/tambahKamar');?>"><i
						class="fa fa-plus"> Tambah
						Kamar</i></a></button>
		</div>
		<div class="card-body">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>No. Kamar</th>
						<th>Karyawan</th>
						<th style="text-align:center">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; foreach ($kamar as $km): ?>
					<tr>
						<td><?= $no++;?></td>
						<td><?= $km->no_kamar?></td>
						<td><?= $km->id_karyawan?></td>
						<td style="text-align:center">
							<a href="" class="btn btn-sm btn-warning">Edit</a>
							<a href="" class="btn btn-sm btn-danger">Hapus</a>
						</td>
					</tr>
					<?php endforeach?>
				</tbody>
			</table>
		</div>
	</div>
</div>
