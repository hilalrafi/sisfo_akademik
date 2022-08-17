<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-school"></i> Form Input <?= $title; ?>
    </div>

    <form method="post" action="<?php echo base_url('siswa/add'); ?>">
        <div class="form-group">
            <label for="nis">NIS</label>
            <input type="text" name="nis" id="nis" class="form-control">
            <?php echo form_error('nis', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="nisn">NISN</label>
            <input type="text" name="nisn" id="nisn" class="form-control">
            <?php echo form_error('nisn', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="nama">Nama Siswa</label>
            <input type="text" name="nama_siswa" id="nama" class="form-control">
            <?php echo form_error('nama_siswa', '<div class="text-danger small ml-3">', '</div>'); ?>
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
            <?= form_error('agama', '<div class="text-danger small ml-3">', '</div>')  ?>
        </div>
        <div class="form-group">
            <label for="rombel">Rombel</label>
            <select name="rombel_id" id="rombel" class="custom-select">
                <option value="null" selected>-- Pilih Rombel --</option>
                <?php foreach ($rombel as $rb) : ?>
                    <option value="<?= $rb->id_rombel;  ?>"><?= $rb->nama_rombel; ?></option>
                <?php endforeach; ?>
            </select>
            <?= form_error('rombel_id', '<div class="text-danger small ml-3">', '</div>')  ?>
        </div>
        <button type="submit" class="btn btn-primary mb-5">Simpan</button>
    </form>
</div>