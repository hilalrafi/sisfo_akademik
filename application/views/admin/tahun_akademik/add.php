<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-calendar-alt"></i> Form Input <?= $title; ?>
    </div>

    <form method="post" action="<?php echo base_url('tahun_akademik/add'); ?>">
        <div class="form-group">
            <label for="ta">Tahun Akademik</label>
            <input type="text" name="tahun_akademik" id="ta" class="form-control">
            <?php echo form_error('tahun_akademik', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="semester">Semester</label>
            <select name="semester" id="semester" class="custom-select">
                <option value="" selected>-- Pilih Semester --</option>
                <option value="Ganjil">Ganjil</option>
                <option value="Genap">Genap</option>
            </select>
            <?php echo form_error('semester', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label>Status</label><br>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="aktif" name="status" class="custom-control-input" value="Aktif">
                <label class="custom-control-label" for="aktif">Aktif</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="tidak" name="status" class="custom-control-input" value="Tidak Aktif">
                <label class="custom-control-label" for="tidak">Tidak Aktif</label>
            </div>
            <?php echo form_error('status', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <button type="submit" class="btn btn-primary mb-5">Simpan</button>
    </form>
</div>