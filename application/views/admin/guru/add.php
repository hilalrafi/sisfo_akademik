<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-school"></i> Form Input <?= $title; ?>
    </div>

    <form method="post" action="<?php echo base_url('guru/add'); ?>">
        <div class="form-group">
            <label for="nuptk">NUPTK</label>
            <input type="text" name="nuptk" id="nuptk" class="form-control">
            <?php echo form_error('nuptk', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="nama">Nama Guru</label>
            <input type="text" name="nama_guru" id="nama" class="form-control">
            <?php echo form_error('nama_guru', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="tempat">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" id="tempat" class="form-control">
            <?php echo form_error('tempat_lahir', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="tgl">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" id="tgl" class="form-control">
            <?php echo form_error('tgl_lahir', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label>Gender</label><br>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="laki" name="gender" class="custom-control-input" value="Laki-Laki">
                <label class="custom-control-label" for="laki">Laki-Laki</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="perempuan" name="gender" class="custom-control-input" value="Perempuan">
                <label class="custom-control-label" for="perempuan">Perempuan</label>
            </div>
            <?php echo form_error('gender', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="agama">Agama</label>
            <select name="agama" id="agama" class="custom-select">
                <option value="" selected>-- Pilih Agama --</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Khatolik">Khatolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
                <option value="Konghucu">Konghucu</option>
                <option value="Lain-lain">Lain-lain</option>
            </select>
            <?php echo form_error('agama', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <input type="text" name="jabatan" id="jabatan" class="form-control">
            <?php echo form_error('jabatan', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="status_pegawai">Status Pegawai</label>
            <select name="status_pegawai" id="status_pegawai" class="custom-select">
                <option value="" selected>-- Pilih Status Pegawai --</option>
                <option value="PNS">PNS</option>
                <option value="CPNS">CPNS</option>
                <option value="GTT">GTT</option>
            </select>
            <?php echo form_error('status_pegawai', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label>Status Sertifikasi Guru</label><br>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="sudah" name="status_sertifikasi" class="custom-control-input" value="Sudah">
                <label class="custom-control-label" for="sudah">Sudah</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="belum" name="status_sertifikasi" class="custom-control-input" value="Belum">
                <label class="custom-control-label" for="belum">Belum</label>
            </div>
            <?php echo form_error('status_sertifikasi', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <button type="submit" class="btn btn-primary mb-5">Simpan</button>
    </form>
</div>