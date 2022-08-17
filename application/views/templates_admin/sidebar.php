<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-school"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SIAKAD</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Query Menu -->
            <?php
            $role_id = $this->session->userdata('role_id');
            $queryMenu = "SELECT *, `user_menu`.`id` AS user_menu_id
                        FROM `user_menu`JOIN `user_access_menu`
                        ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                        WHERE `user_access_menu`.`role_id` = $role_id
                        AND `user_menu`.`parent` = 0
                        AND `user_menu`.`is_active` = 1
                        ORDER BY `user_access_menu`.`menu_id` ASC
                        ";

            $menu = $this->db->query($queryMenu)->result_array();
            ?>

            <!-- Siapkan Menu -->
            <?php foreach ($menu as $m) :
                $id_menu = $m['user_menu_id'];
                $querySubMenu = "SELECT *
                                    FROM `user_menu`JOIN `user_access_menu`
                                    ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                                    WHERE `user_access_menu`.`role_id` = $role_id
                                    AND `user_menu`.`parent` = $id_menu
                                    ORDER BY `user_access_menu`.`menu_id` ASC
                                ";

                $subMenu = $this->db->query($querySubMenu)->result_array();
                ?>
                <!-- cari data sub menu -->
                <?php if ($title == $m['menu']) { ?>
                    <li class="nav-item active">
                    <?php } else { ?>
                    <li class="nav-item">
                    <?php } ?>
                    <?php if (count($subMenu) == 0) { ?>
                        <a class="nav-link" href="<?= base_url($m['url']); ?>">
                            <i class="<?= $m['icon'] ?>"></i>
                            <span><?= $m['menu'] ?></span>
                        </a>
                    <?php } else { ?>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse<?= $id_menu ?>" aria-expanded="true" aria-controls="collapse<?= $id_menu ?>">
                            <i class="<?= $m['icon'] ?>"></i>
                            <span><?= $m['menu'] ?></span>
                        </a>
                        <div id="collapse<?= $id_menu ?>" class="collapse" aria-labelledby="heading<?= $id_menu ?>" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header">Sub-Menu <?= $m['menu'] ?>:</h6>
                                <?php foreach ($subMenu as $sub) : ?>
                                    <a class="collapse-item" href="<?= base_url($sub['url']); ?>"><?= $sub['menu'] ?></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php } ?>
                    </li>
                <?php endforeach; ?>


                <!-- Nav Item - Logout -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('auth/logout') ?>">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $this->session->userdata('username') ?></span>
                                <img class="img-profile rounded-circle" src="<?php echo base_url() ?>assets/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?php echo base_url('users/profile') ?>">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="<?php echo base_url('auth/logout') ?>" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->