<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-clipboard"></i> <?= $title; ?>
    </div>

    <?php echo $this->session->flashdata('pesan'); ?>
    <?php echo anchor('mapel/add', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Data</button>'); ?>

    <table id="mytable" class="table table-border table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">KODE MATA PELAJARAN</th>
                <th scope="col">NAMA MATA PELAJARAN</th>
                <th scope="col">AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($mapel as $mp) : ?>
                <tr>
                    <td scope="row"><?php echo $no++; ?></td>
                    <td><?php echo $mp->kd_mapel; ?></td>
                    <td><?php echo $mp->nama_mapel; ?></td>
                    <td>
                        <a class="text-decoration-none" href="<?= base_url('mapel/update/' . $mp->id_mapel) ?>">
                            <div class="btn btn-sm btn-success"><i class="fa fa-edit"></i></div>
                        </a>
                        <a class="text-decoration-none" href="<?= base_url('mapel/delete/' . $mp->id_mapel) ?>">
                            <div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>
                        </a>
                    </td>
                </tr>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>