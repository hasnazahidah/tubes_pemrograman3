<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://upload.wikimedia.org/wikipedia/commons/4/49/Gambar_Buku.png" rel="shortcut icon">
    <link href="style.css" rel="stylesheet">

	<title>Login</title>

</head>

<body class="bg-gradient-primary">
	

		<!-- Outer Row -->
		<div class="row justify-content-center">
			<div class="col-sm-25 col-md-25">
				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0 " >
						<!-- Nested Row within Card Body -->
						<div class="row">
							<div class="col-lg-12">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div class="p-5">
									<div class="text">

									<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
									
									<?php if ($this->session->flashdata('success')) : ?>
										<div class="alert alert-success alert-dismissible fade show" role="alert">
											<?= $this->session->flashdata('success') ?>
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
									<?php elseif($this->session->flashdata('error')) : ?>
										<div class="alert alert-danger alert-dismissible fade show" role="alert">
											<?= $this->session->flashdata('error') ?>
											<!-- <button align="right" type="button" class="close btn-sm" data-dismiss="alert" aria-label="Close"> -->
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
									<?php endif ?>
										<h1 align="center" class="h4 text-gray-900 mb-4">Selamat Datang Di Toko Buku Berlin !</h1>
										<h3 align="center" class="h5 text-gray-900 mb-4">Silahkan Login</h3>

										<form class="user" method="POST" action="<?= base_url('login/proses_login') ?>">
										<div class="form-group">
											<input type="text" class="form-control" id="username" placeholder="Masukkan Username" autocomplete="off" required name="username">
										</div>
										<div class="form-group">
											<input type="password" class="form-control" id="password" placeholder="Masukkan Password" required name="password">
										</div>
										<div class="form-group">
											<select name="role" id="role" class="form-control" required>
												<option value="">Masuk Sebagai</option>
												<!-- <option value="petugas">Petugas</option> -->
												<option value="user">User</option>
											</select>
										</div>
										<br>
										<button type="submit" class="btn btn-primary btn-block" name="login">Login</button>
									</form>
									<p align="center">Belum punya akun?</p>
									<p align="center" color="blue"><a  href="<?= base_url('registrasi/add') ?>"><font color="blue">Daftar Sekarang!</font></a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<script src="<?= base_url('sb-admin') ?>/vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url('sb-admin') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('sb-admin') ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
	<script src="<?= base_url('sb-admin') ?>/js/sb-admin-2.min.js"></script>
</body>

</html>
