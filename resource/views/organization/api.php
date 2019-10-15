
<div class="container mt-4">
	<h3>Dokumentasi API</h3>
	<h6 class="alert alert-info">Halaman ini dikhususkan bagi <strong>Developer</strong> yang ingin mengakses data ke sistem yang dibuat</h6>

	<h3 class="mt-2">API</h3>
	<h6>Data Registrasi :</h6>
	<h6 class=" alert alert-success">
		<pre>
url : <a href="<?= url('api/get/'.$_SESSION['key']) ?>">https://sireg.unja.ac.id/api/get/<?= $_SESSION['key'] ?></a>
method : GET
</pre>
	</h6>
	<h6 class="alert alert-info">Data yang disediakan merupakan data mahasiswa terdaftar pada registrasi 
	<strong><?= $registration->title ?></strong></h6>

	<h6>Hapus Data Registrasi :</h6>
	<h6 class=" alert alert-success">
		<pre>
url : https://sireg.unja.ac.id/api/delete 
method : POST
body: 
{
	key: <?= $_SESSION['key']; ?>

	nim: NIM Mahasiswa
}
		</pre>
	</h6>

	<h3 class="mt-2">WebHook</h3>

	<form class="row container webhook" method="POST">
		<input type="text"   class="col-6 form-control mr-2" name="url" placeholder="URL anda" value="<?= Security::decrypt($registration->url) ?>">
		<input type="submit" class="col-2 btn btn-primary" value="Submit">
		<div class="response"></div>
	</form>

	<h6 class="alert alert-info mt-3">Data akan dikirimkan setiap terdapat data baru yang masuk ke registrasi <strong>Pendaftaran Perpustakaan 2018</strong></h6>
		
</div>