<div class="container d-flex justify-content-center">
	<div class="card col-9 card-primary card-outline">
		<div class="card-header">
			<button class="btn btn-default float-right"><a href="<?= site_url('admin/tambahBagian');?>"><i
						class="fa fa-plus"> Tambah
						Bagian</i></a></button>
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
				<tbody>
					<?php $no=1; foreach ($bagian as $bg): ?>
					<tr>
						<td><?= $no++;?></td>
						<td><?= $bg->nama_bagian?></td>
						<td><?= $bg->departemen?></td>
						<td style="text-align:center">
							<a href="<?= base_url('admin/editBagian')?>/<?php echo $bg->id_bagian ?>" class="btn btn-sm btn-warning">Edit</a>
							<a href="#hapus_bagian" data-toggle="modal"
										onclick="$('#hapus_bagian #formDelete').attr('action', '<?=site_url('admin/delete_bagian/'). $bg->id_bagian?>')"
										class="btn btn-circle btn-sm btn-danger">Hapus</a>
						</td>
					</tr>
					<?php endforeach?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<div class="modal fade" id="hapus_bagian" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title">Apakah Anda yakin ingin menghapusnya?</h6>
			</div>
			<div class="modal-footer">
				<form id="formDelete" action="" method="post">
					<button class="btn btn-default" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-primary">Delete</button>
				</form>
			</div>
		</div>
	</div>
</div>