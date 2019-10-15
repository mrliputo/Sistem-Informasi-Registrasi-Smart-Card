
<div class="container">
	<div class="row">
		<div class="col-12">
			<h4>Tambah Registrasi</h4>
		</div>
		<div class="col-10 offset-5">
			<form method="POST" action="<?= url('proses_tambah_registrasi') ?>">
				<input type="text" name="title" class="form-control mb-2" placeholder="Judul" pattern=".{1,80}" title="Judul Maksimum 80 Karakter" required>
				<textarea name="description"    class="form-control mb-2" placeholder="Deskripsi" pattern=".{1,255}" title="Deskripsi Maksimum 255 Karakter" required></textarea>
				<input type="checkbox" name="privacy"> Membutuhkan Data Privasi
				<div class="col-12 alert alert-info">Untuk mendapatkan Data Privasi dibutuhkan persetujuan dari pihak LPTIK. Data Privasi meliputi No. Telp, E-mail, dan Alamat Mahasiswa</div>
				<input type="submit" class="btn btn-primary" value="Tambah">
			</form>
		</div>
	</div>
</div>