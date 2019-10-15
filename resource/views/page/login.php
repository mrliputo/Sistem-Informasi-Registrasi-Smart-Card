<div class="home-body">
	
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<div class="navbar-header">
						<a class="navbar-brand" href="<?= url('') ?>">
							<img src="<?= url('resource/assets/images/logo.png') ?>">
							<span class="logo-text">SIREG Universitas X</span>
						</a>
					</div>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?= url('login') ?>">Login</a></li>
						<li class="atau">atau</li>
						<li><a href="<?= url('daftar') ?>">Daftar</a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>

	<div class="main main-home">
		<div class="container-fluid">
			<div class="row">
				<div class="welcome-text col-md-offset-2 col-md-5">
					<div class="welcome-text-1">Selamat datang</div>
					<div class="welcome-text-2">
						SIREG adalah platform terintegrasi yang ditujukan bagi pengelola organisasi di lingkungan Universitas X untuk mengelola pendaftaran kegiatan organisasi. SIREG menggunakan KTM berbasis NFC sehingga proses pendaftaran menjadi lebih mudah, cepat, dan akurat.
					</div>
				</div>
				<div class="login-form col-md-3">
					<form method="POST" action="<?= url('login') ?>">
						<label>Login</label>
						<div class="clear"></div>
						<?= (isset($msg)) ? '<div class="alert alert-danger">' . $msg . '</div>' : null; ?>
						<input type="text" name="username" placeholder="Username" />
						<input type="password" name="password" placeholder="Password">
						<button class="main-button">Login</button>
						<p class="already">Belum memiliki akun? <a href="<?= url('daftar') ?>">Daftar</a></p>
					</form>
				</div>
			</div>
		</div>
	</div>