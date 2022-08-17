<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-clipboard"></i> Form Edit <?= $title; ?>
    </div>

    <form action="" method="post">
        <div class="form-group">
            <input type="hidden" name="id_mapel" value="<?php echo $mapel->id_mapel ?>">

            <label for="kode">Kode Mata Pelajaran</label>
            <input type="text" name="kd_mapel" id="kode" class="form-control" value="<?php echo $mapel->kd_mapel ?>">
            <?php echo form_error('kd_mapel', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="nama">Nama Mata Pelajaran</label>
            <input type="text" name="nama_mapel" id="nama" class="form-control" value="<?php echo $mapel->nama_mapel ?>">
            <?php echo form_error('nama_mapel', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <button type="submit" class="btn btn-primary mb-5">Simpan</button>
    </form>
</div>