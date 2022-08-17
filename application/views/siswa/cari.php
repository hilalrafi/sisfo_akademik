<body class="bg-gradient-primary">

    <div class="container"><br><br><br>

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-6 col-md-5">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Cari Nilai Siswa</h1>
                                        <?php echo $this->session->flashdata('pesan'); ?>
                                    </div>
                                    <form method="post" action="<?php echo base_url('auth/list'); ?>" class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="nis" placeholder="NIS" name="nis">
                                            <?php echo form_error('nis', '<div class="text-danger small ml-3">', '</div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <select name="tahun_akademik_id" id="tahun_akademik_id" class="custom-select">
                                                <option value="">-- Pilih Tahun Akademik & Semester --</option>
                                                <?php foreach ($tahun_akademik as $rowAkademik) : ?>
                                                    <?php if ($rowAkademik->status == "Aktif") : ?>
                                                        <option value="<?= $rowAkademik->id ?>"><?= $rowAkademik->tahun_akademik ?> - <?= $rowAkademik->semester ?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                                <?php echo form_error('tahun_akademik_id', '<div class="text-danger small ml-3">', '</div>') ?>
                                            </select>
                                        </div>
                                        <br>
                                        <button class="btn btn-primary btn-user btn-block">Cari</button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('auth') ?>">Kembali Login</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>