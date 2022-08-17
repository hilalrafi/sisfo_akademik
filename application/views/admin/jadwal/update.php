<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-door-open"></i> Form Edit <?= $title; ?>
    </div>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $jadwal->id_jadwal ?> ">
        <div class="form-group">
            <label for="tahun_akademik_id">Tahun Akademik (Semester)</label>
            <select name="tahun_akademik_id" id="tahun_akademik_id" class="custom-select">
                <option value="null">-- Pilih Tahun Akademik (Semester) --</option>
                <?php
                foreach ($tahun_akademik as $rowAkademik) : ?>
                    <?php if ($rowAkademik->status == "Aktif") : ?>
                        <option value="<?= $rowAkademik->id ?>" <?php if ($jadwal->tahun_akademik_id && $jadwal->tahun_akademik_id == $rowAkademik->id) echo "selected" ?>><?= $rowAkademik->tahun_akademik ?> - <?= $rowAkademik->semester ?></option>
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
                <option value="null">-- Pilih Rombel --</option>
                <?php
                foreach ($rombel as $rowRombel) : ?>
                    <option value="<?= $rowRombel->id_rombel ?>" <?php if ($jadwal->rombel_id && $jadwal->rombel_id == $rowRombel->id_rombel) echo "selected" ?>><?= $rowRombel->nama_rombel ?></option>
                <?php
                endforeach;
                ?>
            </select>
            <?php echo form_error('rombel_id', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="guru_id">Guru</label>
            <select name="guru_id" id="guru_id" class="custom-select">
                <option value="null">-- Pilih Guru --</option>
                <?php
                foreach ($guru as $rowGuru) : ?>
                    <option value="<?= $rowGuru->id_guru ?>" <?php if ($jadwal->guru_id && $jadwal->guru_id == $rowGuru->id_guru) echo "selected" ?>><?= $rowGuru->nama_guru ?></option>
                <?php
                endforeach;
                ?>
            </select>
            <?php echo form_error('guru_id', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="mapel_id">Mata Pelajaran</label>
            <select name="mapel_id" id="mapel_id" class="custom-select">
                <option value="null">-- Pilih Mata Pelajaran --</option>
                <?php
                foreach ($mapel as $rowMapel) : ?>
                    <option value="<?= $rowMapel->id_mapel ?>" <?php if ($jadwal->mapel_id && $jadwal->mapel_id == $rowMapel->id_mapel) echo "selected" ?>><?= $rowMapel->nama_mapel ?></option>
                <?php
                endforeach;
                ?>
            </select>
            <?php echo form_error('mapel_id', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="hari">Hari</label>
            <select name="hari" id="hari" class="custom-select">
                <option value="Senin" <?php if ($jadwal->hari && $jadwal->hari == "Senin") echo "selected" ?>>Senin</option>
                <option value="Selasa" <?php if ($jadwal->hari && $jadwal->hari == "Selasa") echo "selected" ?>>Selasa</option>
                <option value="Rabu" <?php if ($jadwal->hari && $jadwal->hari == "Rabu") echo "selected" ?>>Rabu</option>
                <option value="Kamis" <?php if ($jadwal->hari && $jadwal->hari == "Kamis") echo "selected" ?>>Kamis</option>
                <option value="Jum'at" <?php if ($jadwal->hari && $jadwal->hari == "Jum'at") echo "selected" ?>>Jum'at</option>
                <option value="Sabtu" <?php if ($jadwal->hari && $jadwal->hari == "Sabtu") echo "selected" ?>>Sabtu</option>
            </select>
            <?php echo form_error('hari', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="jam_awal">Jam Awal</label><br>
            <input type="time" name="jam_awal" id="jam_awal" value="<?= $jadwal->jam_awal ?>">
            <?php echo form_error('jam_awal', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="jam_akhir">Jam Akhir</label><br>
            <input type="time" name="jam_akhir" id="jam_akhir" value="<?= $jadwal->jam_akhir ?>">
            <?php echo form_error('jam_akhir', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <button type="submit" class="btn btn-primary mb-5">Simpan</button>
    </form>
</div>