<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-edit"></i> Form Edit <?= $title; ?>
    </div>

    <form action="" method="post">
        <input type="hidden" name="id_siswa" value="<?php echo $siswa->id_siswa ?>">

        <div class="form-group">
            <label for="nis">NIS</label>
            <input type="text" name="nis" id="nis" class="form-control" value="<?php echo $siswa->nis ?>">
            <?php echo form_error('nis', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="nisn">NISN</label>
            <input type="text" name="nisn" id="nisn" class="form-control" value="<?php echo $siswa->nisn ?>">
            <?php echo form_error('nisn', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="nama">Nama Siswa</label>
            <input type="text" name="nama_siswa" id="nama" class="form-control" value="<?php echo $siswa->nama_siswa ?>">
            <?php echo form_error('nama_siswa', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class=" form-group">
            <label for="tempat">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" id="tempat" class="form-control" value="<?php echo $siswa->tempat_lahir ?>">
            <?php echo form_error('tempat_lahir', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="tgl">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" id="tgl" class="form-control" value="<?php echo $siswa->tgl_lahir ?>">
            <?php echo form_error('tgl_lahir', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label>Gender</label><br>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="laki" name="gender" class="custom-control-input" value="Laki-Laki" <?php if ($siswa->gender && $siswa->gender == "Laki-Laki") echo "checked" ?>>
                <label class="custom-control-label" for="laki">Laki-Laki</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="perempuan" name="gender" class="custom-control-input" value="Perempuan" <?php if ($siswa->gender && $siswa->gender == "Perempuan") echo "checked" ?>>
                <label class="custom-control-label" for="perempuan">Perempuan</label>
            </div>
            <?php echo form_error('gender', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="agama">Agama</label>
            <select name="agama" id="agama" class="custom-select">
                <option value="">-- Pilih Agama --</option>
                <option value="Islam" <?php if ($siswa->agama && $siswa->agama == "Islam") echo "selected" ?>>Islam</option>
                <option value="Kristen" <?php if ($siswa->agama && $siswa->agama == "Kristen") echo "selected" ?>>Kristen</option>
                <option value="Khatolik" <?php if ($siswa->agama && $siswa->agama == "Khatolik") echo "selected" ?>>Khatolik</option>
                <option value="Hindu" <?php if ($siswa->agama && $siswa->agama == "Hindu") echo "selected" ?>>Hindu</option>
                <option value="Buddha" <?php if ($siswa->agama && $siswa->agama == "Buddha") echo "selected" ?>>Buddha</option>
                <option value="Konghucu" <?php if ($siswa->agama && $siswa->agama == "Konghucu") echo "selected" ?>>Konghucu</option>
                <option value="Lain-lain" <?php if ($siswa->agama && $siswa->agama == "Lain-lain") echo "selected" ?>>Lain-lain</option>
            </select>
            <?= form_error('agama', '<div class="text-danger small ml-3">', '</div>')  ?>
        </div>
        <div class="form-group">
            <label for="rombel">Rombel</label>
            <select name="rombel_id" id="rombel" class="custom-select">
                <option value="null">-- Pilih Rombel --</option>
                <?php foreach ($rombel as $rb) : ?>
                    <option value="<?= $rb->id_rombel;  ?>" <?php if ($siswa->rombel_id == $rb->id_rombel) echo "selected" ?>><?= $rb->nama_rombel; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary mb-5">Simpan</button>
    </form>
</div>