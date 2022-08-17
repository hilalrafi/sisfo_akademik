<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-edit"></i> Form Edit <?= $title; ?>
    </div>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $user->id ?>">

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Username" value="<?php echo $user->username ?>">
            <?php echo form_error('username', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            <?php echo form_error('password', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Nama Lengkap" value="<?php echo $user->name ?>">
            <?php echo form_error('name', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label>Role</label><br>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="admin" name="role_id" class="custom-control-input" value="1" <?php if ($user->role_id && $user->role_id == 1) echo "checked" ?>>
                <label class="custom-control-label" for="admin">Admin</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="guru" name="role_id" class="custom-control-input" value="2" <?php if ($user->role_id && $user->role_id == 2) echo "checked" ?>>
                <label class="custom-control-label" for="guru">Guru</label>
            </div>
            <?php echo form_error('role_id', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label>Blokir</label><br>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="yes" name="is_active" class="custom-control-input" value="0" <?php if ($user->is_active && $user->is_active == 0) echo "checked" ?>>
                <label class="custom-control-label" for="yes">Ya</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="no" name="is_active" class="custom-control-input" value="1" <?php if ($user->is_active && $user->is_active == 1) echo "checked" ?>>
                <label class="custom-control-label" for="no">Tidak</label>
            </div>
            <?php echo form_error('blokir', '<div class="text-danger small ml-3">', '</div>'); ?>
        </div>
        <button type="submit" class="btn btn-primary mb-5">Simpan</button>
    </form>
</div>