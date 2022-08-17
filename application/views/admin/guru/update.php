<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-edit"></i> Form Edit <?= $title; ?>
    </div>

    <form action="" method="post">
        <input type="hidden" name="id_guru" value="<?php echo $guru->id_guru ?>">

        <div class="form-group">
            <label for="nuptk">NUPTK</label>
            <input type="text" name="nuptk" id="nuptk" class="form-control" value="<?php echo $guru->nuptk ?>">
            <?php echo form_error('nuptk', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="nama">Nama Guru</label>
            <input type="text" name="nama_guru" id="nama" class="form-control" value="<?php echo $guru->nama_guru ?>">
            <?php echo form_error('nama_guru', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class=" form-group">
            <label for="tempat">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" id="tempat" class="form-control" value="<?php echo $guru->tempat_lahir ?>">
            <?php echo form_error('tempat_lahir', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="tgl">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" id="tgl" class="form-control" value="<?php echo $guru->tgl_lahir ?>">
            <?php echo form_error('tgl_lahir', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label>Gender</label><br>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="laki" name="gender" class="custom-control-input" value="Laki-Laki" <?php if ($guru->gender && $guru->gender == "Laki-Laki") echo "checked" ?>>
                <label class="custom-control-label" for="laki">Laki-Laki</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="perempuan" name="gender" class="custom-control-input" value="Perempuan" <?php if ($guru->gender && $guru->gender == "Perempuan") echo "checked" ?>>
                <label class="custom-control-label" for="perempuan">Perempuan</label>
            </div>
            <?php echo form_error('gender', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="agama">Agama</label>
            <select name="agama" id="agama" class="custom-select">
                <option value="">-- Pilih Agama --</option>
                <option value="Islam" <?php if ($guru->agama && $guru->agama == "Islam") echo "selected" ?>>Islam</option>
                <option value="Kristen" <?php if ($guru->agama && $guru->agama == "Kristen") echo "selected" ?>>Kristen</option>
                <option value="Khatolik" <?php if ($guru->agama && $guru->agama == "Khatolik") echo "selected" ?>>Khatolik</option>
                <option value="Hindu" <?php if ($guru->agama && $guru->agama == "Hindu") echo "selected" ?>>Hindu</option>
                <option value="Buddha" <?php if ($guru->agama && $guru->agama == "Buddha") echo "selected" ?>>Buddha</option>
                <option value="Konghucu" <?php if ($guru->agama && $guru->agama == "Konghucu") echo "selected" ?>>Konghucu</option>
                <option value="Lain-lain" <?php if ($guru->agama && $guru->agama == "Lain-lain") echo "selected" ?>>Lain-lain</option>
            </select>
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <input type="text" name="jabatan" id="jabatan" class="form-control" value="<?php echo $guru->jabatan ?>">
            <?php echo form_error('jabatan', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="status_pegawai">Status Pegawai</label>
            <select name="status_pegawai" id="status_pegawai" class="custom-select">
                <option value="">-- Pilih Status Pegawai --</option>
                <option value="PNS" <?php if ($guru->status_pegawai && $guru->status_pegawai == "PNS") echo "selected" ?>>PNS</option>
                <option value="CPNS" <?php if ($guru->status_pegawai && $guru->status_pegawai == "CPNS") echo "selected" ?>>CPNS</option>
                <option value="GTT" <?php if ($guru->status_pegawai && $guru->status_pegawai == "GTT") echo "selected" ?>>GTT</option>
            </select>
            <?php echo form_error('status_pegawai', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label>Status Sertifikasi Guru</label><br>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="sudah" name="status_sertifikasi" class="custom-control-input" value="Sudah" <?php if ($guru->status_sertifikasi && $guru->status_sertifikasi == "Sudah") echo "checked" ?>>
                <label class="custom-control-label" for="sudah">Sudah</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="belum" name="status_sertifikasi" class="custom-control-input" value="Belum" <?php if ($guru->status_sertifikasi && $guru->status_sertifikasi == "Belum") echo "checked" ?>>
                <label class="custom-control-label" for="belum">Belum</label>
            </div>
            <?php echo form_error('status_sertifikasi', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <button type="submit" class="btn btn-primary mb-5">Simpan</button>
    </form>
</div>