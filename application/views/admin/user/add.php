<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-user"></i> Form Input <?= $title; ?>
    </div>

    <form method="post" action="<?php echo base_url('users/add'); ?>">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Username">
            <?php echo form_error('username', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            <?php echo form_error('password', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Nama Lengkap">
            <?php echo form_error('name', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label>Role</label><br>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="admin" name="role_id" class="custom-control-input" value="1">
                <label class="custom-control-label" for="admin">Admin</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="guru" name="role_id" class="custom-control-input" value="2">
                <label class="custom-control-label" for="guru">Guru</label>
            </div>
            <?php echo form_error('role_id', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label>Blokir</label><br>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="yes" name="is_active" class="custom-control-input" value="0">
                <label class="custom-control-label" for="yes">Ya</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="no" name="is_active" class="custom-control-input" value="1">
                <label class="custom-control-label" for="no">Tidak</label>
            </div>
            <?php echo form_error('is_active', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <button type="submit" class="btn btn-primary mb-5">Simpan</button>
    </form>
</div>