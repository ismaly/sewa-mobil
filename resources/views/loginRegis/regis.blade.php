<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Registrasi</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('login/css/my-login.css') }}">
</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="{{ asset('login/img/logomobil.jpg') }}" alt="bootstrap 4 login page">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Registrasi</h4>
							<form method="POST" class="my-login-validation" novalidate="" action="{{ route('regisproses') }}">
								@csrf
								<div class="form-group">
									<label for="nama">Nama</label>
									<input id="nama" type="text" class="form-control" name="nama" required autofocus>
									<div class="invalid-feedback">
										Masukkan nama anda
									</div>
								</div>

								<div class="form-group">
									<label for="alamat">Alamat</label>
									<input id="alamat" type="text" class="form-control" name="alamat" required>
									<div class="invalid-feedback">
										Alamat lengkap
									</div>
								</div>

								<div class="form-group">
									<label for="nohp">No HP</label>
									<input id="nohp" type="number" class="form-control" name="nohp" required>
									<div class="invalid-feedback">
										Nomor Handphone
									</div>
								</div>

								<div class="form-group">
									<label for="nosim">No SIM</label>
									<input id="nosim" type="number" class="form-control" name="nosim" required>
									<div class="invalid-feedback">
										Nomor SIM
									</div>
								</div>

								<div class="form-group">
									<label for="password">Password</label>
									<input id="password" type="password" class="form-control" name="password" required>
									<div class="invalid-feedback">
										Password min 8
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Register
									</button>
								</div>
								<div class="mt-4 text-center">
									Punya akun? <a href="{{ route('loginview') }}">Login</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2024 &mdash; Rentcar 
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="{{ asset('login/js/my-login.js') }}"></script>
</body>
</html>

