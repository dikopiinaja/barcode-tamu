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

<script>
	$(function () {
		//Initialize Select2 Elements
		$('.select2').select2()

		//Initialize Select2 Elements
		$('.select2bs4').select2({
			theme: 'bootstrap4'
		})
	});

</script>
