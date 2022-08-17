<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-calendar-alt"></i> Form Edit <?= $title; ?>
    </div>

    <form action="" method="post">
        <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $tahun_akademik->id ?> ">

            <label for="ta">Tahun Akademik</label>
            <input type="text" name="tahun_akademik" id="ta" class="form-control" value="<?php echo $tahun_akademik->tahun_akademik ?>">
            <?php echo form_error('tahun_akademik', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="semester">Semester</label>
            <select name="semester" id="semester" class="custom-select">
                <option value="">-- Pilih Semester --</option>
                <option value="Ganjil" <?php if ($tahun_akademik->semester && $tahun_akademik->semester == "Ganjil") echo "selected" ?>>Ganjil</option>
                <option value="Genap" <?php if ($tahun_akademik->semester && $tahun_akademik->semester == "Genap") echo "selected" ?>>Genap</option>
            </select>
            <?php echo form_error('semester', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label>Status</label><br>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="aktif" name="status" class="custom-control-input" value="Aktif" <?php if ($tahun_akademik->status && $tahun_akademik->status == "Aktif") echo "checked" ?>>
                <label class="custom-control-label" for="aktif">Aktif</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="tidak" name="status" class="custom-control-input" value="Tidak Aktif" <?php if ($tahun_akademik->status && $tahun_akademik->status == "Tidak Aktif") echo "checked" ?>>
                <label class="custom-control-label" for="tidak">Tidak Aktif</label>
            </div>
            <?php echo form_error('status', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <button type="submit" class="btn btn-primary mb-5">Simpan</button>
    </form>
</div>