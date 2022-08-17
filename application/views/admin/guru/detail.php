<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-user"></i> Detail <?= $title; ?>
    </div>

    <table class="table table-border table-striped">
        <tr>
            <th>NUPTK</th>
            <td><?php echo $guru->nuptk; ?></td>
        </tr>
        <tr>
            <th>NAMA GURU</th>
            <td><?php echo $guru->nama_guru; ?></td>
        </tr>
        <tr>
            <th>TEMPAT LAHIR</th>
            <td><?php echo $guru->tempat_lahir; ?></td>
        </tr>
        <tr>
            <th>TANGGAL LAHIR</th>
            <td><?php echo $guru->tgl_lahir; ?></td>
        </tr>
        <tr>
            <th>GENDER</th>
            <td><?php echo $guru->gender; ?></td>
        </tr>
        <tr>
            <th>AGAMA</th>
            <td><?php echo $guru->agama; ?></td>
        </tr>
        <tr>
            <th>JABATAN</th>
            <td><?php echo $guru->jabatan; ?></td>
        </tr>
        <tr>
            <th>STATUS PEGAWAI</th>
            <td><?php echo $guru->status_pegawai; ?></td>
        </tr>
        <tr>
            <th>STATUS SERTIFIKASI</th>
            <td><?php echo $guru->status_sertifikasi; ?></td>
        </tr>
    </table>

    <?php echo anchor('guru', '<button class="btn btn-sm btn-primary mb-3">Kembali</button>'); ?>
</div>