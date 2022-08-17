<!-- Main Footer -->
<footer class="main-footer">
	<!-- To the right -->
	<div class="float-right d-none d-sm-inline">
		Selvi Setyaningsih
	</div>
	<!-- Default to the left -->
	<strong>Copyright &copy; 2021 <a href="https://adminlte.io">Srikandi</a>.</strong> All rights
	reserved.
</footer>
</div>

<!-- ./wrapper -->
<div class="modal" tabindex="-1" id="barcode" role="dialog">
	<div class="modal-dialog justify-content-center" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Scan Me</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p class="text-center"><img src="<?= base_url('assets');?>/img/qr-code.png" alt=""></p>
				<p class="text-center">Scan Qr Code untuk mengisi data</p>
			</div>

		</div>
	</div>
</div>

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url('assets');?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets');?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets');?>/dist/js/adminlte.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url('assets');?>/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?= base_url('assets');?>/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- SweetAlert2 -->
<script href="<?= base_url('assets');?>/plugins/toastr/toastr.min.css"></script>
<script src="<?= base_url('assets');?>/plugins/toastr/toastr.min.js"></script>

<script>
	$(function () {
		//Initialize Select2 Elements
		$('.select2').select2()

		//Initialize Select2 Elements
		// $('.select2bs4').select2({
		// 	theme: 'bootstrap4'
		// })
	});

	$(document).ready(function() {

		// // $('#id_karyawan').val();
		// $('.select2').select2({
	 //      // theme: 'bootstrap4',
		//       allowClear: true,
		//       placeholder: '-- Cari Karyawan --',
		//       type: "post",
		//       ajax: {
		//           dataType: 'json',
		//           url: "<?php echo base_url("main/dataKaryawan");?>",
		//           delay: 1000,
		//           data: function (params) {
		//               return {
		//                   searchTerm: params.term
		//               }
		//           },
		//           processResults: function (response) {
		// 			 return {
		//                 results: $.map(response, function (item) {
		//                     return {
		//                         id: item.id,
		//                         text: item.text
		//                     }
		//                 })
		//             };
		//         },
		//         cache: true
		//     }
		// });
		// Save data tamu
		$('#btnSave').on('click', function() {
			var nama_tamu = $('#nama_tamu').val();
			var nik = $('#nik').val();
			var alamat = $('#alamat').val();
			var no_hp_tamu = $('#no_hp_tamu').val();
			var karyawan = $('#id_karyawan').val();
			// var karyawan = $('#id_karyawan').val();
			var keperluan = $('#keperluan').val();

			$.ajax({
				type: "POST",
				url: "<?php echo site_url('main/storeTamu')?>",
				dataType: "JSON",
				data: {
					nama_tamu: nama_tamu,
					nik: nik,
					alamat: alamat,
					no_hp_tamu: no_hp_tamu,
					karyawan: karyawan,
					keperluan: keperluan
				},
				success: function (data) {
					$('[name="nama_tamu"]').val("");
					$('[name="nik"]').val("");
					$('[name="alamat"]').val("");
					$('[name="no_hp_tamu"]').val("");
					$('[name="karyawan"]').val("");
					$('[name="keperluan"]').val("");
					// $(document).ajaxStop(function(){
					    // window.location.reload();
					// });
					toastr.success(data.message, data.title);

				}
			});

			// swal({
			//   title: "Good job!",
			//   text: "You clicked the button!",
			//   icon: "success",
			// });
			 // setTimeout(() => {
			  // },500)

			return false;
		});
	});

</script>
