	<!-- /.content-wrapper -->
	<footer class="main-footer">
		<strong>Copyright &copy; 2021 <a href="https://adminlte.io">Selvi Setyaningsih</a>.</strong>
		All rights reserved.

	</footer>

	<!-- Control Sidebar -->
	<aside class="control-sidebar control-sidebar-dark">
		<!-- Control sidebar content goes here -->
	</aside>
	<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<?php echo "<script>".$this->session->flashdata('message')."</script>"?>

	<!-- jQuery -->
	<!-- <script src="<?= base_url('assets');?>/plugins/datatables/jquery.dataTables.js"></script> -->
	<!-- <script src="../../plugins/datatables/jquery.dataTables.js"></script> -->
<!-- <script src="<?= base_url('assets');?>/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script> -->
	<script src="<?= base_url('assets');?>/plugins/jquery/jquery.min.js"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="<?= base_url('assets');?>/plugins/jquery-ui/jquery-ui.min.js"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
		$.widget.bridge('uibutton', $.ui.button)

	</script>
	<!-- Bootstrap 4 -->
	<script src="<?= base_url('assets');?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- ChartJS -->
	<script src="<?= base_url('assets');?>/plugins/chart.js/Chart.js"></script>
	<!-- Sparkline -->
	<script src="<?= base_url('assets');?>/plugins/sparklines/sparkline.js"></script>
	<!-- daterangepicker -->
	<script src="<?= base_url('assets');?>/plugins/moment/moment.min.js"></script>
	<script src="<?= base_url('assets');?>/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- Tempusdominus Bootstrap 4 -->
	<script src="<?= base_url('assets');?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
	</script>

	<!-- overlayScrollbars -->
	<script src="<?= base_url('assets');?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?= base_url('assets');?>/dist/js/adminlte.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?= base_url('assets');?>/dist/js/demo.js"></script>
	<!-- DataTables -->
	<script src="<?= base_url('assets');?>/plugins/datatables/jquery.dataTables.js"></script>
	<script src="<?= base_url('assets');?>/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
	<!-- SweetAlert2 -->
	<script src="<?= base_url('assets');?>/plugins/sweetalert2/sweetalert2.min.js"></script>
	<script type="text/javascript">
	

	$(document).ready(function () {
				tampilkaryawan(); 
				karyawanpetugas();
				tampilpetugas();

				$('#mydata').DataTable();
			
			// data tampil karyawan -> admin
			function tampilkaryawan() {
				$.ajax({
					type: 'ajax',
					url: '<?php echo site_url('admin/listkaryawan')?>',
					async: false,
					dataType: 'json',
					success: function (data) {
						var html = '';
						var i;
						for (i = 0; i < data.length; i++) {
							html += '<tr>' +
								'<td>' + data[i].id_karyawan + '</td>' +
								'<td>' + data[i].nama_karyawan + '</td>' +
								'<td>' + data[i].nama_bagian + '</td>' +
								'<td>' + data[i].ttl + '</td>' +
								'<td>' + data[i].no_hp + '</td>' +
								'<td style="text-align:right;">' +
								'<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit_karyawan" data-id_karyawan="' +
								data[i].id_karyawan + '" data-nama_karyawan="' + data[i].nama_karyawan +
								'" data-bagian="' + data[i].bagian + '" + data-kontrak="' + data[i].kontrak + '"  + data-jk="' + data[i].jk + '" + data-ttl="' + data[i].ttl + '"  + data-no_hp="' + data[i].no_hp + '">Edit</a>' + ' ' +
								'<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id_karyawan="' +
								data[i].id_karyawan + '">Delete</a>' +
								'</td>' +
								'</tr>';
						}
						$('#ListKaryawan').html(html);
					}

				});
			}

			// data tampil karyawan -> petugas
			function karyawanpetugas() {
				$.ajax({
					type: 'ajax',
					url: '<?php echo site_url('admin/listkaryawan')?>',
					async: false,
					dataType: 'json',
					success: function (data) {
						var html = '';
						var i;
						for (i = 0; i < data.length; i++) {
							html += '<tr>' +
								'<td>' + data[i].id_karyawan + '</td>' +
								'<td>' + data[i].nama_karyawan + '</td>' +
								'<td>' + data[i].nama_bagian + '</td>' +
								'<td>' + data[i].ttl + '</td>' +
								'<td>' + data[i].no_hp + '</td>' +
								'<td style="text-align:right;">' +
								'<a href="javascript:void(0);" class="btn btn-primary btn-sm item_edit" data-id_karyawan="' +
								data[i].id_karyawan + '" data-product_name="' + data[i].product_name +
								'" data-price="' + data[i].product_price + '">Detail</a>' + ' ' +
								'</tr>';
						}
						$('#listkaryawan').html(html);
					}

				});
			}

			//data tampil petugas ->admin
			function tampilpetugas() {
				$.ajax({
					type: 'ajax',
					url: '<?php echo site_url('admin/listpetugas')?>',
					async: true,
					dataType: 'json',
					success: function (data) {
						var html = '';
						var i;
						for (i = 0; i < data.length; i++) {
							html += '<tr>' +
								'<td>' + data[i].id_petugas + '</td>' +
								'<td>' + data[i].nama_petugas + '</td>' +
								'<td>' + data[i].alamat + '</td>' +
								'<td>' + data[i].no_hp + '</td>' +
								'<td style="text-align:right;">' +
								'<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit_petugas" data-id_petugas="' +
								data[i].id_petugas + '" data-nama_petugas="' + data[i].nama_petugas +
								'" data-alamat="' + data[i].alamat + '" data-no_hp="' + data[i].no_hp + '">Edit</a>' + ' ' +
								'<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id_petugas="' +
								data[i].id_petugas + '">Delete</a>' +
								'</td>' +
								'</tr>';
						}
						$('#ListPetugas').html(html);
					}

				});
			}


			//Save Karyawan
			$('#btn_save').on('click', function () {
				var id_karyawan = $('#id_karyawan').val();
				var nama_karyawan = $('#nama_karyawan').val();
				var bagian = $('#bagian').val();
				var kamar = $('#kamar').val();
				var kontrak = $('#kontrak').val();
				var jk = $('#jk').val();
				var ttl = $('#ttl').val();
				var no_hp = $('#no_hp').val();
				$.ajax({
					type: "POST",
					url: "<?php echo site_url('admin/save_karyawan')?>",
					dataType: "JSON",
					data: {
						id_karyawan: id_karyawan,
						nama_karyawan: nama_karyawan,
						bagian: bagian,
						kontrak: kontrak,
						jk: jk,
						ttl: ttl,
						no_hp: no_hp
					},
					success: function (data) {
						$('[name="id_karyawan"]').val("");
						$('[name="nama_karyawan"]').val("");
						$('[name="bagian"]').val("");
						$('[name="kontrak"]').val("");
						$('[name="jk"]').val("");
						$('[name="ttl"]').val("");
						$('[name="no_hp"]').val("");
						$('#input_karyawan').modal('hide');
						// setInterval('location.reload()', 5000);  
						tampilkaryawan();
					}
				});
				return false;
			});

			//Save Petugas
			$('#btn_save-petugas').on('click', function () {
				var id_petugas = $('#id_petugas').val();
				var nama_petugas = $('#nama_petugas').val();
				var jk = $('#jk').val();
				var alamat = $('#alamat').val();
				var no_hp = $('#no_hp').val();
				$.ajax({
					type: "POST",
					url: "<?php echo site_url('admin/save_petugas')?>",
					dataType: "JSON",
					data: {
						id_petugas: id_petugas,
						nama_petugas: nama_petugas,
						jk: jk,
						alamat: alamat,
						no_hp: no_hp
					},
					success: function (data) {
						$('[name="id_karyawan"]').val("");
						$('[name="nama_karyawan"]').val("");
						$('[name="bagian"]').val("");
						$('[name="kamar"]').val("");
						$('[name="kontrak"]').val("");
						$('[name="jk"]').val("");
						$('[name="ttl"]').val("");
						$('[name="no_hp"]').val("");
						$('#tambah_petugas').modal('hide');
						// setInterval('location.reload()', 5000);  
						tampilpetugas();
					}
				});
				return false;
			});

			//get data for update record
			$('#ListKaryawan').on('click', '.item_edit_karyawan', function () {
				var id_karyawan = $(this).data('id_karyawan');
				var nama_karyawan = $(this).data('nama_karyawan');
				var bagian = $(this).data('bagian');
				var kontrak = $(this).data('kontrak');
				var jk = $(this).data('jk');
				var ttl = $(this).data('ttl');
				var no_hp = $(this).data('no_hp');

				$('#edit_karyawan').modal('show');
				$('[name="id_karyawan_edit"]').val(id_karyawan);
				$('[name="nama_karyawan_edit"]').val(nama_karyawan);
				$('[name="bagian_edit"]').val(bagian);
				$('[name="kontrak_edit"]').val(kontrak);
				$('[name="jk_edit"]').val(jk);
				$('[name="ttl_edit"]').val(ttl);
				$('[name="no_hp_edit"]').val(no_hp);
			});

			//update record to database
			$('#btn_update_karyawan').on('click', function () {
				var id_karyawan = $('#id_karyawan_edit').val();
				var nama_karyawan = $('#nama_karyawan_edit').val();
				var bagian = $('#bagian_edit').val();
				var kontrak = $('#kontrak_edit').val();
				var jk = $('#jk_edit').val();
				var ttl = $('#ttl_edit').val();
				var no_hp = $('#no_hp_edit').val();
				$.ajax({
					type: "POST",
					url: "<?php echo site_url('admin/update_karyawan')?>",
					dataType: "JSON",
					data: {
						id_karyawan: id_karyawan,
						nama_karyawan:	nama_karyawan,
						bagian: bagian,
						kontrak: kontrak,
						jk: jk,
						ttl: ttl,
						no_hp: no_hp
					},
					success: function (data) {
						$('[name="id_karyawan_edit"]').val("");
						$('[name="nama_karyawan_edit"]').val("");
						$('[name="bagian_edit"]').val("");
						$('[name="kontrak_edit"]').val("");
						$('[name="jk_edit"]').val("");
						$('[name="ttl_edit"]').val("");
						$('[name="no_hp_edit"]').val("");
						$('#edit_karyawan').modal('hide');
						tampilkaryawan();
					}
				});
				return false;
			});

			//get data for update-petugas record
			$('#ListPetugas').on('click', '.item_edit_petugas', function () {
				var id_petugas = $(this).data('id_petugas');
				var nama_petugas = $(this).data('nama_petugas');
				var jk = $(this).data('jk');
				var alamat = $(this).data('alamat');
				var no_hp = $(this).data('no_hp');

				$('#edit_petugas').modal('show');
				$('[name="id_petugas_edit"]').val(id_petugas);
				$('[name="nama_petugas_edit"]').val(nama_petugas);
				$('[name="jk_edit"]').val(jk);
				$('[name="alamat_edit"]').val(alamat);
				$('[name="no_hp_edit"]').val(no_hp);
			});

			//update-petugas record to database
			$('#btn_update_petugas').on('click', function () {
				var id_petugas = $('#id_petugas_edit').val();
				var nama_petugas = $('#nama_petugas_edit').val();
				var jk = $('#jk_edit').val();
				var alamat = $('#alamat_edit').val();
				var no_hp = $('#no_hp_edit').val();
				$.ajax({
					type: "POST",
					url: "<?php echo site_url('admin/update_petugas')?>",
					dataType: "JSON",
					data: {
						id_petugas: id_petugas,
						nama_petugas:	nama_petugas,
						jk: jk,
						alamat: alamat,
						no_hp: no_hp
					},
					success: function (data) {
						$('[name="id_petugas_edit"]').val("");
						$('[name="nama_petugas_edit"]').val("");
						$('[name="jk_edit"]').val("");
						$('[name="alamat_edit"]').val("");
						$('[name="no_hp_edit"]').val("");
						$('#edit_petugas').modal('hide');
						tampilpetugas();
					}
				});
				return false;
			});

			//get data for delete record list karyawan
			$('#ListKaryawan').on('click', '.item_delete', function () {
				var id_karyawan = $(this).data('id_karyawan');

				$('#Modal_Delete').modal('show');
				$('[name="id_karyawan_delete"]').val(id_karyawan);
			});

			//get data for delete record list petugas
			$('#ListPetugas').on('click', '.item_delete', function () {
				var id_petugas = $(this).data('id_petugas');

				$('#Modal_Delete-petugas').modal('show');
				$('[name="id_petugas_delete"]').val(id_petugas);
			});

			//delete record to database
			$('#btn_delete').on('click', function () {
				var id_karyawan = $('#id_karyawan_delete').val();
				$.ajax({
					type: "POST",
					url: "<?php echo site_url('admin/delete_karyawan')?>",
					dataType: "JSON",
					data: {
						id_karyawan: id_karyawan
					},
					success: function (data) {
						$('[name="id_karyawan_delete"]').val("");
						$('#Modal_Delete').modal('hide');
						tampilkaryawan();
					}
				});
				return false;
			});
			//delete record to database petugas
			$('#btn_delete-petugas').on('click', function () {
				var id_petugas = $('#id_petugas_delete').val();
				$.ajax({
					type: "POST",
					url: "<?php echo site_url('admin/delete_petugas')?>",
					dataType: "JSON",
					data: {
						id_petugas: id_petugas
					},
					success: function (data) {
						$('[name="id_petugas_delete"]').val("");
						$('#Modal_Delete-petugas').modal('hide');
						tampilpetugas();
					}
				});
				return false;
			});

			$('.input-tanggal').datepicker({            
			dateFormat: 'yy-mm-dd' // Set format tanggalnya jadi yyyy-mm-dd        
			});        
			$('#form-tanggal, #form-bulan, #form-tahun').hide(); // Sebagai default kita sembunyikan form filter tanggal, bulan & tahunnya        
			$('#filter').change(function(){ // Ketika user memilih filter            
			if($(this).val() == '1'){ // Jika filter nya 1 (per tanggal)                
			$('#form-bulan, #form-tahun').hide(); // Sembunyikan form bulan dan tahun                
			$('#form-tanggal').show(); // Tampilkan form tanggal            
				}else if($(this).val() == '2'){ // Jika filter nya 2 (per bulan)                
				$('#form-tanggal').hide(); // Sembunyikan form tanggal                
				$('#form-bulan, #form-tahun').show(); // Tampilkan form bulan dan tahun            
				}else{ // Jika filternya 3 (per tahun)                
				$('#form-tanggal, #form-bulan').hide(); // Sembunyikan form tanggal dan bulan                
				$('#form-tahun').show(); // Tampilkan form tahun            }            
				$('#form-tanggal input, #form-bulan select, #form-tahun select').val(''); // Clear data pada textbox tanggal, combobox bulan & tahun        
				}    
			})

		});

	
	</script>
	
	<script type="text/javascript">
		$(function() {
			const Toast = Swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 3000
			});

			$('.swalDefaultSuccess').click(function() {
			Toast.fire({
				type: 'success',
				title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
			})
			});
			$('.swalDefaultInfo').click(function() {
			Toast.fire({
				type: 'info',
				title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
			})
			});
			$('.swalDefaultError').click(function() {
			Toast.fire({
				type: 'error',
				title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
			})
			});
			$('.swalDefaultWarning').click(function() {
			Toast.fire({
				type: 'warning',
				title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
			})
			});
			$('.swalDefaultQuestion').click(function() {
			Toast.fire({
				type: 'question',
				title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
			})
			});
		});
	</script>
	</body>

	</html>
