<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-school"></i> <?= $title; ?>
    </div>

    <?php echo $this->session->flashdata('pesan'); ?>
    <?php if ($info_sekolah == null) echo anchor('sekolah/add', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Data</button>'); ?>

    <table class="table table-border table-striped">
        <?php foreach ($info_sekolah as $info) : ?>
            <tr>
                <th>NAMA SEKOLAH</th>
                <td>
                    <?php if ($info->nama_sekolah == null) {
                            echo "";
                        } else {
                            echo $info->nama_sekolah;
                        } ?>
                </td>
            </tr>
            <tr>
                <th>ALAMAT SEKOLAH</th>
                <td>
                    <?php if ($info->alamat_sekolah == null) {
                            echo "";
                        } else {
                            echo $info->alamat_sekolah;
                        } ?>
                </td>
            </tr>
            <tr>
                <th>EMAIL</th>
                <td>
                    <?php if ($info->email == null) {
                            echo "";
                        } else {
                            echo $info->email;
                        } ?>
                </td>
            </tr>
            <tr>
                <th>TELEPON</th>
                <td>
                    <?php if ($info->telepon == null) {
                            echo "";
                        } else {
                            echo $info->telepon;
                        } ?>
                </td>
            </tr>
    </table>

    <?php if ($info != null) echo anchor('sekolah/update/' . $info->id_sekolah, '<button class="btn btn-sm btn-success mb-3">Update</button>'); ?>
    <?php if ($info != null) echo anchor('sekolah/delete/' . $info->id_sekolah, '<button class="btn btn-sm btn-danger mb-3">Delete</button>'); ?>
<?php endforeach; ?>
</div>