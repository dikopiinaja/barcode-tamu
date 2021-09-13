<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-dark navbar-primary">
	<div class="container">
		<a href="<?= site_url('');?>" class="navbar-brand">
			<img src="<?= base_url('assets');?>/img/omron-logo.png" alt="Logo"
				class="brand-image img-circle elevation-3 bg-white" style="opacity: .8">
			<span class="brand-text font-weight-light">Srikandi OMI</span>
		</a>

		<button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
			aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse order-3" id="navbarCollapse">
			<!-- Right navbar links -->
			<ul class="order-1 order-3 navbar-nav navbar-no-expand ml-auto">
				<li class="nav-item">
					<a href="<?= site_url('')?>" class="nav-link">Home</a>
				</li>
				<li class="nav-item">
					<a href="<?= site_url('contact')?>" class="nav-link">Contact</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
