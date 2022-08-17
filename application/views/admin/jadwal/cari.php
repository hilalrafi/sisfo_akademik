<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-door-open"></i> <?= $title; ?>
    </div>

    <table id="mytable" class="table table-border table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">HARI</th>
                <th scope="col">JAM</th>
                <th scope="col">MATA PELAJARAN</th>
                <th scope="col">GURU</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($jadwal as $rowJadwal) :
                $mapel = $this->db->select('*')->from('mapel')->where('id_mapel', $rowJadwal->mapel_id)->get()->row();
                $guru = $this->db->select('*')->from('guru')->where('id_guru', $rowJadwal->guru_id)->get()->row();
                ?>
                <tr>
                    <td scope="row"><?php echo $no++; ?></td>
                    <td><?php echo $rowJadwal->hari; ?></td>
                    <td><?php echo $rowJadwal->jam_awal . " - " . $rowJadwal->jam_akhir; ?></td>
                    <td><?php
                            if ($mapel != null) {
                                echo $mapel->nama_mapel;
                            } else {
                                echo "-";
                            }
                            ?>
                    </td>
                    <td><?php
                            if ($guru != null) {
                                echo $guru->nama_guru;
                            } else {
                                echo "-";
                            }
                            ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>