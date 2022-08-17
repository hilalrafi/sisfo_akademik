<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="alert alert-success" role="alert">
		<i class="fas fa-fw fa-tachometer-alt"></i> <?= $title;  ?>
	</div>

	<?php
	$role_id = $this->session->userdata('role_id');
	$queryRole = "SELECT *
			FROM `user_role` JOIN `user`
			ON `user_role`.`id` = `user`.`role_id`
			WHERE `user`.`role_id` = $role_id
			";
	$role = $this->db->query($queryRole)->result_array();
	?>

	<?php foreach ($role as $r) : ?>
		<?php if ($r['username'] == $username) : ?>
			<div class="alert alert-success" role="alert">
				<h4 class="alert-heading">Selamat Datang!</h4>
				<p>Selamat Datang <strong><?php echo $r['name']; ?></strong> di Sistem Informasi Akademik Sekolah Dasar Negeri 2 Karangbener Kudus, Anda login sebagai <strong><?php echo $r['role']; ?></strong></p>
				<hr>
				<!-- Button trigger modal -->
				<?php
						if ($r['role'] == 'admin') {
							echo "<button type='button' class='btn btn-sm btn-info' data-toggle='modal' data-target='#exampleModal'>
						<i class='fas fa-cogs'></i> Control Panel
						</button>";
						} else {
							echo "";
						}
						?>
			</div>
		<?php endif; ?>
	<?php endforeach; ?>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-cogs"></i> Control Panel</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-3 text-info text-center">
							<a href="<?php echo base_url('siswa'); ?>">
								<p class="nav-link small text-info">SISWA</p>
								<i class="fas fa-3x fa-user"></i>
							</a>
						</div>
						<div class="col-md-3 text-info text-center">
							<a href="<?php echo base_url('tahun_akademik'); ?>">
								<p class="nav-link small text-info">TAHUN AKADEMIK</p>
								<i class="fas fa-3x fa-calendar-alt"></i>
							</a>
						</div>
						<div class="col-md-3 text-info text-center">
							<a href="<?php echo base_url('jadwal'); ?>">
								<p class="nav-link small text-info">JADWAL PELAJARAN</p>
								<i class="fas fa-3x fa-calendar-week"></i>
							</a>
						</div>
						<div class="col-md-3 text-info text-center">
							<a href="<?php echo base_url('mapel'); ?>">
								<p class="nav-link small text-info">MATA PELAJARAN</p>
								<i class="fas fa-3x fa-clipboard"></i>
							</a>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-3 text-info text-center">
							<a href="<?php echo base_url('guru'); ?>">
								<p class="nav-link small text-info">GURU</p>
								<i class="fas fa-3x fa-user"></i>
							</a>
						</div>
						<div class="col-md-3 text-info text-center">
							<a href="<?php echo base_url('rombel'); ?>">
								<p class="nav-link small text-info">ROMBONGAN BELAJAR</p>
								<i class="fas fa-3x fa-door-open"></i>
							</a>
						</div>
						<div class="col-md-3 text-info text-center">
							<a href="<?php echo base_url('nilai'); ?>">
								<p class="nav-link small text-info">LAPORAN NILAI</p>
								<i class="fas fa-3x fa-file-alt"></i>
							</a>
						</div>
						<div class="col-md-3 text-info text-center">
							<a href="<?php echo base_url('raport'); ?>">
								<p class="nav-link small text-info">CETAK RAPORT</p>
								<i class="fas fa-3x fa-print"></i>
							</a>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-3 text-info text-center">
							<a href="<?php echo base_url('sekolah'); ?>">
								<p class="nav-link small text-info">INFO SEKOLAH</p>
								<i class="fas fa-3x fa-info-circle"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
	<div class="container my-auto">
		<div class="copyright text-center my-auto">
			<span>Copyright &copy; SIAKAD SD 2 Karangbener 2022</span>
		</div>
	</div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Apakah anda ingin keluar?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Pilih "Logout" jika anda ingin keluar dari halaman ini.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<a class="btn btn-primary" href="<?php echo base_url('auth/logout') ?>">Logout</a>
			</div>
		</div>
	</div>
</div>