<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-user"></i> <?= $title; ?>
    </div>

    <?php echo $this->session->flashdata('pesan'); ?>
    <?php echo anchor('users/add', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Data</button>'); ?>

    <table id="mytable" class="table table-border table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">USERNAME</th>
                <th scope="col">NAMA LENGKAP</th>
                <th scope="col">ROLE</th>
                <th scope="col">BLOKIR</th>
                <th scope="col">AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($user as $usr) :
                $role = $this->db->select('*')->from('user_role')->where('id', $usr->role_id)->get()->row();
                ?>
                <tr>
                    <td scope="row"><?php echo $no++; ?></td>
                    <td><?php echo $usr->username; ?></td>
                    <td><?php echo $usr->name; ?></td>
                    <td><?php echo $role->role; ?></td>
                    <td>
                        <?php
                            if ($usr->is_active == 1) {
                                echo "Tidak";
                            } else {
                                echo "Ya";
                            }
                            ?>
                    </td>
                    <td>
                        <a class="text-decoration-none" href="<?= base_url('users/update/' . $usr->id) ?>">
                            <div class="btn btn-sm btn-success"><i class="fa fa-edit"></i></div>
                        </a>
                        <a class="text-decoration-none" href="<?= base_url('users/delete/' . $usr->id) ?>">
                            <div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>