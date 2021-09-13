<div class="row">
        <div>
        <!-- <img src="assets/img/omron-logo.png" style="position: absolute; width:90px; height: auto;"> -->
        <h2 style="text-align:center"><i>Srikandi Mess</i></h2>
        <p></p>
        <h3 style="text-align:center"><b>PT. Omron Indonesia</b></h3>
        <p></p>
        <h6 style="text-align:center">Jl. Raya Bahkilong , Sukadami Cikarang Selatan, Bekasi Jawa Barat 17530, Indonesia</h6>
        <p></p>
        <hr>
        <h3 style="text-align:center">Data Laporan Tamu Mess Srikandi</h3>
        <p></p>
        </div>
        <div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <td>Nama</td>
                    <td>Nik</td>
                    <td>Karyawan</td>
                    <td>Tanggal Kunjungan</td>
                    <td>Jam Kedatangan</td>
                    <td>Jam Keluar</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($transaksi as $k): ?>
                <tr>
                    <td><?= $k->nama_tamu?></td>
                    <td><?= $k->nik?></td>
                    <td><?= $k->nama_karyawan?></td>
                    <td><?= longdate_indo($k->tgl_kunjungan)?></td>
                    <td><?= $k->jam_masuk?></td>
                    <td><?= $k->jam_keluar?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>
</div>



<style>
	.table {
		width: 100%;
		margin-top: 170px;
		margin-bottom: 1rem;
		color: #212529;
		background-color: transparent;
        border-collapse: separate;
        border-spacing: 1px;
	}

	.table th,
	.table td {
		padding: 0.75rem;
		vertical-align: top;
		border-top: 1px solid #dee2e6;
	}

	.table thead th {
		vertical-align: bottom;
		border-bottom: 2px solid #dee2e6;
	}

	.table-hover tbody tr:hover {
		color: #212529;
		background-color: rgba(0, 0, 0, 0.075);
	}

	.table-hover .table-primary:hover {
		background-color: #9fcdff;
	}

	.table-hover .table-primary:hover>td,
	.table-hover .table-primary:hover>th {
		background-color: #9fcdff;
	}

    .card {
        position: relative;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid rgba(0, 0, 0, 0.125);
        border-radius: 0.25rem;
    }

    hr {
        box-sizing: content-box;
        height: 0;
        overflow: visible;
    }

    h1, h2, h3, h4, h5, h6 {
        margin-top: 0;
        margin-bottom: 0.5rem;
        padding: 5px;
        
    }

    p {
        margin-top: 0;
        margin-bottom: 1rem;
    }

    .row {
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -7.5px;
        margin-left: -7.5px;
    }

</style>
