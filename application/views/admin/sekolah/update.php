<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-calendar-alt"></i> Form Edit <?= $title; ?>
    </div>

    <form method="post" action="">
        <div class="form-group">
            <input type="hidden" name="id_sekolah" value="<?php echo $info_sekolah->id_sekolah ?>">

            <label for="nama">Nama Sekolah</label>
            <input type="text" name="nama_sekolah" id="nama" class="form-control" value="<?php echo $info_sekolah->nama_sekolah ?>">
            <?php echo form_error('nama_sekolah', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat Sekolah</label>
            <input type="text" name="alamat_sekolah" id="alamat" class="form-control" value="<?php echo $info_sekolah->alamat_sekolah ?>">
            <?php echo form_error('alamat_sekolah', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control" value="<?php echo $info_sekolah->email ?>">
            <?php echo form_error('email', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="telepon">Telepon</label>
            <input type="text" name="telepon" id="telepon" class="form-control" value="<?php echo $info_sekolah->telepon ?>">
            <?php echo form_error('telepon', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <button type="submit" class="btn btn-primary mb-5">Simpan</button>
    </form>
</div>