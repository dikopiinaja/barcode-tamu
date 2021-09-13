<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card card-primary card-outline">
				<div class="card-body">
					<!-- Date range -->
					<form method="get" action="">
						<div class="row justify-content-center">
							<div class="form-group col-md-6">
								<label>Filter Laporan Kunjungan</label>
								<select name="filter" id="filter" class="form-control">
									<option value="">Pilih</option>
									<option value="1">Per Tanggal</option>
									<option value="2">Per Bulan</option>
									<option value="3">Per Tahun</option>
								</select>
								<br>
								<button class="btn btn-success" type="submit">Cari</button>
								<p></p>
								<a href="<?= site_url('laporan/laporanPetugas');?>">Reset Filter</a>
							</div>
						</div>
						<div id="form-tanggal">
							<label>Tanggal</label>
							<input type="text" name="tanggal" class="input-tanggal form-control">
						</div>
						<div id="form-bulan">
							<label>Bulan</label>
							<select name="bulan" class="form-control">
								<option value=""></option>
								<option value="1">Januari</option>
								<option value="2">Februari</option>
								<option value="3">Maret</option>
								<option value="4">April</option>
								<option value="5">Mei</option>
								<option value="6">Juni</option>
								<option value="7">Juli</option>
								<option value="8">Agustus</option>
								<option value="9">September</option>
								<option value="10">Oktober</option>
								<option value="11">Novemver</option>
								<option value="12">Desember</option>
							</select>
							&nbsp;
							&nbsp;
						</div>
						<div id="form-tahun">
							<label>Tahun</label>
							<select name="tahun" id="" class="form-control">
								<option value="">Pilih</option>
								<?php                
								foreach($option_tahun as $data){ ?>           
									<option value="<?= $data->tahun ?>"><?= $data->tahun ?></option>  
								<?php            
									}                
								?>
							</select>
						</div>
					</form>

					<hr>
					<?php echo $ket; ?>
					<a href="<?php echo $url_cetak; ?>" class="btn btn-success float-right">CETAK PDF</a>
					<br>
					<div class="col-12">
						<table class="table table-hover">
							<tr>
								<td>Tanggal</td>
								<td>Nama Tamu</td>
								<td>Karyawan</td>
								<td>NIK</td>
								<td>Jam Masuk</td>
								<td>Jam Keluar</td>
								<td>Keperluan</td>
							</tr>
							<?php 
							if( ! empty($transaksi)){      
								$no = 1;      
								foreach($transaksi as $k){            
									$tgl = date('d-m-Y', strtotime($k->tgl_berkunjung));            
							?>
							<tr>
								<td><?= $k->tgl_berkunjung?></td>
								<td><?= $k->nama_tamu?></td>
								<td><?= $k->nama_karyawan?></td>
								<td><?= $k->nik?></td>
								<td><?= $k->jam_masuk?></td>
								<td><?= $k->jam_keluar?></td>
								<td><?= $k->keperluan?></td>
							</tr>
							<?php  
									}
								} 
								
							?>
							
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
