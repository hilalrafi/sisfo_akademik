<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-door-open"></i> Form Input <?= $title; ?>
    </div>

    <form method="post" action="<?php echo base_url('rombel/add'); ?>">
        <div class="form-group">
            <label for="nama">Nama Rombel</label>
            <select name="nama_rombel" id="nama" class="custom-select">
                <option value="" selected>-- Pilih Rombel --</option>
                <option value="Kelas 1">Kelas 1</option>
                <option value="Kelas 2">Kelas 2</option>
                <option value="Kelas 3">Kelas 3</option>
                <option value="Kelas 4">Kelas 4</option>
                <option value="Kelas 5">Kelas 5</option>
                <option value="Kelas 6">Kelas 6</option>
            </select>
            <?php echo form_error('nama_rombel', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <button type="submit" class="btn btn-primary mb-5">Simpan</button>
    </form>
</div>