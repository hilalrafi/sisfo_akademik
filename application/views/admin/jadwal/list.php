<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-door-open"></i> <?= $title; ?>
    </div>

    <?php echo $this->session->flashdata('pesan'); ?>

    <span><b>Filter <?= $title; ?></b></span>
    <form action="<?= base_url('jadwal/cari'); ?>" method="post">
        <table class="table">
            <tr>
                <td><label for="tahun_akademik_id">Tahun Akademik (Semester)</label></td>
                <td>
                    <select name="tahun_akademik_id" id="tahun_akademik_id" class="custom-select">
                        <?php
                        foreach ($tahun_akademik as $rowAkademik) : ?>
                            <?php if ($rowAkademik->status == "Aktif") : ?>
                                <option value="<?= $rowAkademik->id ?>"><?= $rowAkademik->tahun_akademik ?> - <?= $rowAkademik->semester ?></option>
                            <?php endif; ?>
                        <?php
                        endforeach;
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="rombel_id">Nama Rombel</label></td>
                <td>
                    <select name="rombel_id" id="rombel_id" class="custom-select">
                        <?php
                        foreach ($rombel as $rowRombel) : ?>
                            <option value="<?= $rowRombel->id_rombel ?>"><?= $rowRombel->nama_rombel ?></option>
                        <?php
                        endforeach;
                        ?>
                    </select>
                </td>
            </tr>
        </table>
        <button type="submit" class="btn btn-sm btn-info mb-5"><i class="fas fa-search fa-sm"></i> Cari Data</button>
    </form>

    <span><b>Daftar <?= $title; ?></b></span>
    <hr>
    <?php
    echo anchor('jadwal/add', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Data</button>');
    ?>
    <table id="mytable" class="table table-border table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">TAHUN AKADEMIK</th>
                <th scope="col">SEMESTER</th>
                <th scope="col">MATA PELAJARAN</th>
                <th scope="col">GURU</th>
                <th scope="col">ROMBEL</th>
                <th scope="col">HARI</th>
                <th scope="col">JAM</th>
                <th scope="col">AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($jadwal as $row) :
                $tahunAkademik = $this->db->select('*')->from('tahun_akademik')->where('id', $row->tahun_akademik_id)->get()->row();
                $mapel = $this->db->select('*')->from('mapel')->where('id_mapel', $row->mapel_id)->get()->row();
                $guru = $this->db->select('*')->from('guru')->where('id_guru', $row->guru_id)->get()->row();
                $rombel = $this->db->select('*')->from('rombel')->where('id_rombel', $row->rombel_id)->get()->row();
                ?>
                <tr>
                    <td scope="row"><?php echo $no++; ?></td>
                    <td><?php echo $tahunAkademik->tahun_akademik; ?></td>
                    <td><?php
                            if ($tahunAkademik != null) {
                                echo $tahunAkademik->semester;
                            } else {
                                echo "-";
                            }
                            ?>
                    </td>
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
                    <td><?php
                            if ($rombel != null) {
                                echo $rombel->nama_rombel;
                            } else {
                                echo "-";
                            }
                            ?>
                    </td>
                    <td><?php echo $row->hari; ?></td>
                    <td><?php echo $row->jam_awal . " - " . $row->jam_akhir; ?></td>
                    <td>
                        <a class="text-decoration-none" href="<?= base_url('jadwal/update/' . $row->id_jadwal) ?>">
                            <div class="btn btn-sm btn-success"><i class="fa fa-edit"></i></div>
                        </a>
                        <a class="text-decoration-none" href="<?= base_url('jadwal/delete/' . $row->id_jadwal) ?>">
                            <div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>