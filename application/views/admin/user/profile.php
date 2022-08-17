<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-id-card"></i> <?= $title; ?>
    </div>

    <div class="card text-white  mb-3" style="max-width: 18rem;">
        <div class="card-header bg-info">Information</div>
        <div class="card-body bg-light text-info">
            <h5 class="card-title">Profile</h5>
            <p class="card-text">Username &emsp;&emsp;&ensp;: <?= $this->session->userdata('username'); ?></p>
            <p class="card-text">Nama Lengkap &nbsp;: <?= $this->session->userdata('name'); ?></p>
            <?php
            $role = $this->db->select('*')->from('user_role')->where('id', $this->session->userdata('role_id'))->get()->row();
            ?>
            <p class="card-text">Role &emsp;&emsp;&emsp;&emsp;&ensp;&ensp;: <?= $role->role; ?></p>
        </div>
    </div>
</div>