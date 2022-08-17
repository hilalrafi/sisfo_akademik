<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-user"></i> Detail <?= $title; ?>
    </div>

    <table class="table table-border table-striped">
        <tr>
            <th>NIS</th>
            <td>
                <?php
                if ($nilai->siswa_id != null) {
                    $siswa = $this->db->select('*')->from('siswa')->where('id_siswa', $nilai->siswa_id)->get()->row();
                    echo $siswa->nis;
                } else {
                    echo "-";
                }
                ?>
            </td>
        </tr>
        <tr>
            <th>NAMA SISWA</th>
            <td>
                <?php
                if ($nilai->siswa_id != null) {
                    $siswa = $this->db->select('*')->from('siswa')->where('id_siswa', $nilai->siswa_id)->get()->row();
                    echo $siswa->nama_siswa;
                } else {
                    echo "-";
                }
                ?>
            </td>
        </tr>
        <tr>
            <th>ROMBEL</th>
            <td>
                <?php
                if ($nilai->rombel_id != null) {
                    $rombel = $this->db->select('*')->from('rombel')->where('id_rombel', $nilai->rombel_id)->get()->row();
                    echo $rombel->nama_rombel;
                } else {
                    echo "-";
                }
                ?>
            </td>
        </tr>
        <tr>
            <th>MATA PELAJARAN</th>
            <td>
                <?php
                if ($nilai->mapel_id != null) {
                    $mapel = $this->db->select('*')->from('mapel')->where('id_mapel', $nilai->mapel_id)->get()->row();
                    echo $mapel->nama_mapel;
                } else {
                    echo "-";
                }
                ?>
            </td>
        </tr>
        <tr>
            <th>SEMESTER</th>
            <td>
                <?php
                if ($nilai->tahun_akademik_id != null) {
                    $tahunAkademik = $this->db->select('*')->from('tahun_akademik')->where('id', $nilai->tahun_akademik_id)->get()->row();
                    echo $tahunAkademik->semester;
                } else {
                    echo "-";
                }
                ?>
            </td>
        </tr>
        <tr>
            <th>TAHUN AKADEMIK</th>
            <td>
                <?php
                if ($nilai->tahun_akademik_id != null) {
                    $tahunAkademik = $this->db->select('*')->from('tahun_akademik')->where('id', $nilai->tahun_akademik_id)->get()->row();
                    echo $tahunAkademik->tahun_akademik;
                } else {
                    echo "-";
                }
                ?>
            </td>
        </tr>
        <tr>
            <th>NILAI TUGAS</th>
            <td><?php echo $nilai->nilai_tugas; ?></td>
        </tr>
        <tr>
            <th>NILAI UTS</th>
            <td><?php echo $nilai->nilai_uts; ?></td>
        </tr>
        <tr>
            <th>NILAI UAS</th>
            <td><?php echo $nilai->nilai_uas; ?></td>
        </tr>
        <tr>
            <th>NILAI AKHIR</th>
            <td><?php echo $nilai->nilai_akhir; ?></td>
        </tr>
    </table>

    <?php echo anchor('nilai', '<button class="btn btn-sm btn-primary mb-3">Kembali</button>'); ?>
</div>