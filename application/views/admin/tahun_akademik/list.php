<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-calendar-alt"></i> <?= $title; ?>
    </div>

    <?php echo $this->session->flashdata('pesan'); ?>
    <?php echo anchor('tahun_akademik/add', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Data</button>'); ?>

    <table id="mytable" class="table table-border table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">TAHUN AKADEMIK</th>
                <th scope="col">SEMESTER</th>
                <th scope="col">STATUS</th>
                <th scope="col">AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($tahun_akademik as $ta) : ?>
                <tr>
                    <td scope="row"><?php echo $no++; ?></td>
                    <td><?php echo $ta->tahun_akademik; ?></td>
                    <td><?php echo $ta->semester; ?></td>
                    <td><?php echo $ta->status; ?></td>
                    <td>
                        <a class="text-decoration-none" href="<?= base_url('tahun_akademik/update/' . $ta->id) ?>">
                            <div class="btn btn-sm btn-success"><i class="fa fa-edit"></i></div>
                        </a>
                        <a class="text-decoration-none" href="<?= base_url('tahun_akademik/delete/' . $ta->id) ?>">
                            <div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>