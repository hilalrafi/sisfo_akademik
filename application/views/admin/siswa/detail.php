<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-user"></i> Detail <?= $title; ?>
    </div>

    <table class="table table-border table-striped">
        <tr>
            <th>NIS</th>
            <td><?php echo $siswa->nis; ?></td>
        </tr>
        <tr>
            <th>NISN</th>
            <td><?php echo $siswa->nisn; ?></td>
        </tr>
        <tr>
            <th>NAMA SISWA</th>
            <td><?php echo $siswa->nama_siswa; ?></td>
        </tr>
        <tr>
            <th>TEMPAT LAHIR</th>
            <td><?php echo $siswa->tempat_lahir; ?></td>
        </tr>
        <tr>
            <th>TANGGAL LAHIR</th>
            <td><?php echo $siswa->tgl_lahir; ?></td>
        </tr>
        <tr>
            <th>GENDER</th>
            <td><?php echo $siswa->gender; ?></td>
        </tr>
        <tr>
            <th>AGAMA</th>
            <td><?php echo $siswa->agama; ?></td>
        </tr>
        <tr>
            <th>ROMBEL</th>
            <td>
                <?php
                if ($siswa->rombel_id == null) {
                    echo "Belum punya rombel";
                } else {
                    $rombel = $this->db->select('*')->from('rombel')->where('id_rombel', $siswa->rombel_id)->get()->row();
                    echo $rombel->nama_rombel;
                }
                ?>
            </td>
        </tr>
    </table>

    <?php echo anchor('siswa', '<button class="btn btn-sm btn-primary mb-3">Kembali</button>'); ?>
</div>