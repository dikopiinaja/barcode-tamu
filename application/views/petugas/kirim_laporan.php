<div class="container-fluid">
    <div class="card col-12">
        <div class="card-header">
            Kirim Laporan Data Tamu Mess Karyawan
        </div>
        <div class="card-body">
            <form method="post" enctype="multipart/form-data" action="<?= base_url('petugas/kirim'); ?>">
                <div class="form-group">
                    <label>Upload Laporan</label>
                    <input type="file" name="laporan_pdf" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea type="text" name="description" id="" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Kirim</button>
            </form>
        </div>
    </div>
</div>