<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-user"></i> <?= $title; ?>
    </div>

    <?php echo $this->session->flashdata('pesan'); ?>
    <?php echo anchor('siswa/add', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Data</button>'); ?>

    <table id="mytable" class="table table-border table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">NIS</th>
                <th scope="col">NISN</th>
                <th scope="col">NAMA SISWA</th>
                <th scope="col">ROMBEL</th>
                <th scope="col">AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($siswa as $si) : ?>
                <tr>
                    <td scope="row"><?php echo $no++; ?></td>
                    <td><?php echo $si->nis; ?></td>
                    <td><?php echo $si->nisn; ?></td>
                    <td><?php echo $si->nama_siswa; ?></td>
                    <td>
                        <?php
                            if ($si->rombel_id == null) {
                                echo "Belum punya rombel";
                            } else {
                                $rombel = $this->db->select('*')->from('rombel')->where('id_rombel', $si->rombel_id)->get()->row();
                                echo $rombel->nama_rombel;
                            }
                            ?>
                    </td>
                    <td>
                        <a class="text-decoration-none" href="<?= base_url('siswa/detail/' . $si->id_siswa) ?>">
                            <div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>
                        </a>
                        <a class="text-decoration-none" href="<?= base_url('siswa/update/' . $si->id_siswa) ?>">
                            <div class="btn btn-sm btn-success"><i class="fa fa-edit"></i></div>
                        </a>
                        <a class="text-decoration-none" href="<?= base_url('siswa/delete/' . $si->id_siswa) ?>">
                            <div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>