<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-user"></i> <?= $title; ?>
    </div>

    <?php echo $this->session->flashdata('pesan'); ?>
    <?php echo anchor('guru/add', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Data</button>'); ?>

    <table id="mytable" class="table table-border table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">NUPTK</th>
                <th scope="col">NAMA GURU</th>
                <th scope="col">JABATAN</th>
                <th scope="col">AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($guru as $gr) : ?>
                <tr>
                    <td scope="row"><?php echo $no++; ?></td>
                    <td><?php echo $gr->nuptk; ?></td>
                    <td><?php echo $gr->nama_guru; ?></td>
                    <td><?php echo $gr->jabatan; ?></td>
                    <td>
                        <a class="text-decoration-none" href="<?= base_url('guru/detail/' . $gr->id_guru) ?>">
                            <div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>
                        </a>
                        <a class="text-decoration-none" href="<?= base_url('guru/update/' . $gr->id_guru) ?>">
                            <div class="btn btn-sm btn-success"><i class="fa fa-edit"></i></div>
                        </a>
                        <a class="text-decoration-none" href="<?= base_url('guru/delete/' . $gr->id_guru) ?>">
                            <div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>