<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-door-open"></i> Form Input <?= $title; ?>
    </div>

    <form method="post" action="<?php echo base_url('jadwal/add'); ?>">
        <div class="form-group">
            <label for="tahun_akademik_id">Tahun Akademik (Semester)</label>
            <select name="tahun_akademik_id" id="tahun_akademik_id" class="custom-select">
                <option value="null" selected>-- Pilih Tahun Akademik (Semester) --</option>
                <?php
                foreach ($tahun_akademik as $rowAkademik) : ?>
                    <?php if ($rowAkademik->status == "Aktif") : ?>
                        <option value="<?= $rowAkademik->id ?>"><?= $rowAkademik->tahun_akademik ?> - <?= $rowAkademik->semester ?></option>
                    <?php endif; ?>
                <?php
                endforeach;
                ?>
            </select>
            <?php echo form_error('tahun_akademik_id', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="rombel_id">Nama Rombel</label>
            <select name="rombel_id" id="rombel_id" class="custom-select">
                <option value="null" selected>-- Pilih Rombel --</option>
                <?php
                foreach ($rombel as $rowRombel) : ?>
                    <option value="<?= $rowRombel->id_rombel ?>"><?= $rowRombel->nama_rombel ?></option>
                <?php
                endforeach;
                ?>
            </select>
            <?php echo form_error('rombel_id', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="guru_id">Guru</label>
            <select name="guru_id" id="guru_id" class="custom-select">
                <option value="null" selected>-- Pilih Guru --</option>
                <?php
                foreach ($guru as $rowGuru) : ?>
                    <option value="<?= $rowGuru->id_guru ?>"><?= $rowGuru->nama_guru ?></option>
                <?php
                endforeach;
                ?>
            </select>
            <?php echo form_error('guru_id', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="mapel_id">Mata Pelajaran</label>
            <select name="mapel_id" id="mapel_id" class="custom-select">
                <option value="null" selected>-- Pilih Mata Pelajaran --</option>
                <?php
                foreach ($mapel as $rowMapel) : ?>
                    <option value="<?= $rowMapel->id_mapel ?>"><?= $rowMapel->nama_mapel ?></option>
                <?php
                endforeach;
                ?>
            </select>
            <?php echo form_error('mapel_id', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="hari">Hari</label>
            <select name="hari" id="hari" class="custom-select">
                <option value="Senin">Senin</option>
                <option value="Selasa">Selasa</option>
                <option value="Rabu">Rabu</option>
                <option value="Kamis">Kamis</option>
                <option value="Jum'at">Jum'at</option>
                <option value="Sabtu">Sabtu</option>
            </select>
            <?php echo form_error('hari', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="jam_awal">Jam Awal</label><br>
            <input type="time" name="jam_awal" id="jam_awal">
            <?php echo form_error('jam_awal', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="jam_akhir">Jam Akhir</label><br>
            <input type="time" name="jam_akhir" id="jam_akhir">
            <?php echo form_error('jam_akhir', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <button type="submit" class="btn btn-primary mb-5">Simpan</button>
    </form>
</div>