<body class="bg-gradient-primary">

    <div class="container"><br><br><br>

        <div class="card o-hidden border-0 shadow-lg my-5 col-md-5 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat akun SIAKAD!</h1>
                            </div>
                            <form class="user" method="post" action="<?php echo base_url('auth/registration') ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="username" id="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="name" id="name" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" name="password1" id="password1" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" name="password2" id="password2" placeholder="Ulangi Password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Daftar
                                </button>
                            </form>
                            <hr>
                            <!-- <div class="text-center">
                                <a class="small" href="#">Lupa Password?</a>
                            </div> -->
                            <div class="text-center">
                                <a class="small" href="<?php echo base_url('auth'); ?>">Sudah memiliki akun? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>