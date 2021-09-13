<div class="container">
    <div class="card">
        
        <table class="table table-hover">
            <tr>
                <td>#</td>
                <td>Nama File</td>
                <td>Description</td>
                <td>Action</td>
            </tr>
            <?php $no=1; foreach ($laporan as $l ) : ?>
                <tr>
                    <td><?= $no++?></td>
                    <td><?= $l->laporan_pdf?></td>
                    <td><?= $l->description?></td>
                    <td>
                        <a href="<?php echo base_url(); ?>petugas/download/<?php echo $l->id; ?>" class="btn btn-sm btn-success">Downloads</a>
                    </td>
                </tr>
            <?php
            endforeach;
            ?>
        </table>
    </div>
</div>