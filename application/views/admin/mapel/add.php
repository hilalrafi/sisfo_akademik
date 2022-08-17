<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-clipboard"></i> Form Input <?= $title; ?>
    </div>

    <form method="post" action="<?php echo base_url('mapel/add'); ?>">
        <div class="form-group">
            <label for="kode">Kode Mata Pelajaran</label>
            <input type="text" name="kd_mapel" id="kode" class="form-control">
            <?php echo form_error('kd_mapel', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="nama">Nama Mata Pelajaran</label>
            <input type="text" name="nama_mapel" id="nama" class="form-control">
            <?php echo form_error('nama_mapel', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <button type="submit" class="btn btn-primary mb-5">Simpan</button>
    </form>
</div>