<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-door-open"></i> Form Edit <?= $title; ?>
    </div>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $rombel->id_rombel ?> ">
        <div class="form-group">
            <label for="nama">Nama Rombel</label>
            <select name="nama_rombel" id="nama" class="custom-select">
                <option value="">-- Pilih Rombel --</option>
                <option value="Kelas 1" <?php if ($rombel->nama_rombel && $rombel->nama_rombel == "Kelas 1") echo "selected" ?>>Kelas 1</option>
                <option value="Kelas 2" <?php if ($rombel->nama_rombel && $rombel->nama_rombel == "Kelas 2") echo "selected" ?>>Kelas 2</option>
                <option value="Kelas 3" <?php if ($rombel->nama_rombel && $rombel->nama_rombel == "Kelas 3") echo "selected" ?>>Kelas 3</option>
                <option value="Kelas 4" <?php if ($rombel->nama_rombel && $rombel->nama_rombel == "Kelas 4") echo "selected" ?>>Kelas 4</option>
                <option value="Kelas 5" <?php if ($rombel->nama_rombel && $rombel->nama_rombel == "Kelas 5") echo "selected" ?>>Kelas 5</option>
                <option value="Kelas 6" <?php if ($rombel->nama_rombel && $rombel->nama_rombel == "Kelas 6") echo "selected" ?>>Kelas 6</option>
            </select>
            <?php echo form_error('nama_rombel', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <button type="submit" class="btn btn-primary mb-5">Simpan</button>
    </form>
</div>