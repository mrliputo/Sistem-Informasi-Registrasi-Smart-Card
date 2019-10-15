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
					<form method="POST" action="<?= url('register') ?>" enctype="multipart/form-data">
						<label>Daftar</label>
						<div class="clear"></div>
						
						<input type="text" name="name" placeholder="Nama Organisasi" required pattern=".{1,60}" title="Nama Organisasi Maksimum 60 Karakter"/>
						<input type="text" name="nim" placeholder="NIP/NIM Penanggung Jawab" required pattern=".{9,18}" title="Mohon masukkan NIP / NIM yang valid" />
						<input type="number" name="phone" placeholder="Nomor Telepon" required />
						<input type="email" name="email" placeholder="Email" required />

						<div class="msg-username daftar-msg"></div>
						<input class="validate-username" type="text" name="username" placeholder="Username" required pattern=".{1,40}" title="Username Maksimum 40 Karakter" />
						

						<input type="password" name="password" placeholder="Password" required />

						<div class="msg-password daftar-msg"></div>
						<input class="validate-password" type="password" name="validate" placeholder="Ulangi Password" required />

						<div class="daftar-berkas">Upload berkas organisasi</div>
						<input type="file" name="berkas" accept="application/pdf" required>
						<button class="main-button">Daftar</button>
						<p class="already">Sudah memiliki akun? <a href="<?= url('login') ?>">Login</a></p>
					</form>
				</div>
			</div>
		</div>
	</div>