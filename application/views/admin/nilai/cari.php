<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-door-open"></i> <?= $title; ?>
    </div>

    <table id="mytable" class="table table-border table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">NIS</th>
                <th scope="col">NAMA</th>
                <th scope="col">NILAI TUGAS</th>
                <th scope="col">NILAI UTS</th>
                <th scope="col">NILAI UAS</th>
                <th scope="col">NILAI AKHIR</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($nilai as $rowNilai) :
                $siswa = $this->db->select('*')->from('siswa')->where('id_siswa', $rowNilai->siswa_id)->get()->row();
                ?>
                <tr>
                    <td scope="row"><?php echo $no++; ?></td>
                    <td><?php
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
                    <td><?php echo $rowNilai->nilai_tugas; ?></td>
                    <td><?php echo $rowNilai->nilai_uts; ?></td>
                    <td><?php echo $rowNilai->nilai_uas; ?></td>
                    <td><?php echo $rowNilai->nilai_akhir; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>