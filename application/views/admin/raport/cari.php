<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-door-open"></i> <?= $title; ?>
    </div>

    <span><b>Daftar Raport</b></span>
    <hr>
    <table id="mytable" class="table table-border table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">NIS</th>
                <th scope="col">NAMA</th>
                <th scope="col">AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($nilai as $report) :
                $siswa = $this->db->select('*')->from('siswa')->where('id_siswa', $report->siswa_id)->get()->row();
                ?>
                <tr>
                    <td scope="row"><?php echo $no++; ?></td>
                    <td>
                        <?php
                            if ($siswa != null) {
                                echo $siswa->nis;
                            } else {
                                echo "-";
                            }
                            ?>
                    </td>
                    <td><?php
                            if ($siswa != null) {
                                echo $siswa->nama_siswa;
                            } else {
                                echo "-";
                            }
                            ?>
                    </td>
                    <td>
                        <a class="text-decoration-none" target="_blank" href="<?= base_url('raport/cetak/' . $report->siswa_id . '/' . $report->tahun_akademik_id) ?>">
                            <div class="btn btn-sm btn-danger"><i class="fa fa-print"></i> Cetak Raport</div>
                    </td>
                </tr>
            <?php
            endforeach;
            ?>
        </tbody>
    </table>
</div>