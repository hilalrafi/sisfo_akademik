<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-door-open"></i> Form Input <?= $title; ?>
    </div>

    <form method="post" action="<?php echo base_url('nilai/add'); ?>">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="detail_siswa">NIS - Nama Siswa</label>
                <input type="hidden" name="siswa_id" id="siswa_id" value="">
                <input type="text" class="form-control pencarian" name="detail_siswa" id="detail_siswa" placeholder="NIS - Nama Siswa">
                <?php echo form_error('siswa_id', '<div class="text-danger small ml-3">', '</div>'); ?>
            </div>
            <div class="form-group col-md-6">
                <label for="nilai_tugas">Nilai Tugas</label>
                <input type="text" class="form-control" name="nilai_tugas" id="nilai_tugas" placeholder="0" onkeyup="nilai();">
                <?php echo form_error('nilai_tugas', '<div class="text-danger small ml-3">', '</div>'); ?>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
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
            <div class="form-group col-md-6">
                <label for="nilai_uts">Nilai UTS</label>
                <input type="text" class="form-control" name="nilai_uts" id="nilai_uts" placeholder="0" onkeyup="nilai();">
                <?php echo form_error('nilai_uts', '<div class="text-danger small ml-3">', '</div>'); ?>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="mapel_id">Mata Pelajaran</label>
                <select name="mapel_id" id="mapel_id" class="custom-select">
                    <option value="null" selected>-- Pilih Mata Pelajaran --</option>
                    <?php foreach ($mapel as $rowMapel) : ?>
                        <option value="<?= $rowMapel->id_mapel ?>"><?= $rowMapel->nama_mapel ?></option>
                    <?php endforeach; ?>
                </select>
                <?php echo form_error('mapel_id', '<div class="text-danger small ml-3">', '</div>'); ?>
            </div>
            <div class="form-group col-md-6">
                <label for="nilai_uas">Nilai UAS</label>
                <input type="text" class="form-control" name="nilai_uas" id="nilai_uas" placeholder="0" onkeyup="nilai();">
                <?php echo form_error('nilai_uas', '<div class="text-danger small ml-3">', '</div>'); ?>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="tahun_akademik_id">Tahun Akademik (Semester)</label>
                <select name="tahun_akademik_id" id="tahun_akademik_id" class="custom-select">
                    <option value="null" selected>-- Pilih Tahun Akademik (Semester) --</option>
                    <?php foreach ($tahun_akademik as $rowAkademik) : ?>
                        <?php if ($rowAkademik->status == "Aktif") : ?>
                            <option value="<?= $rowAkademik->id ?>"><?= $rowAkademik->tahun_akademik ?> - <?= $rowAkademik->semester ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
                <?php echo form_error('tahun_akademik_id', '<div class="text-danger small ml-3">', '</div>'); ?>
            </div>
            <div class="form-group col-md-6">
                <label for="nilai_akhir">Nilai Akhir</label>
                <input type="text" class="form-control" name="nilai_akhir" id="nilai_akhir" placeholder="0">
            </div>
        </div>
        <button type="submit" class="btn btn-primary mb-5">Simpan</button>
    </form>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fas fa-user"></i> Data Siswa</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <table id="dataSiswa" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>NIS</th>
                            <th>NAMA SISWA</th>
                            <th>ROMBEL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($siswa as $rowSiswa) : ?>
                            <tr id="data" onClick="masuk(this, <?= $rowSiswa->id_siswa ?>, '<?= $rowSiswa->nis ?>','<?= $rowSiswa->nama_siswa ?>')" href="javascript:void(0)">
                                <td><a id="data" onClick="masuk(this, <?= $rowSiswa->id_siswa ?>, '<?= $rowSiswa->nis ?>','<?= $rowSiswa->nama_siswa ?>')" href="javascript:void(0)"><?= $rowSiswa->nis; ?></a></td>
                                <td><?= $rowSiswa->nama_siswa ?></td>
                                <td>
                                    <?php
                                        if ($rowSiswa->rombel_id == null) {
                                            echo "Belum punya rombel";
                                        } else {
                                            $rombel = $this->db->select('*')->from('rombel')->where('id_rombel', $rowSiswa->rombel_id)->get()->row();
                                            echo $rombel->nama_rombel;
                                        }
                                        ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>