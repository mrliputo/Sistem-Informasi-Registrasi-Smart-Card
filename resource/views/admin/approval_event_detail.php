
<div class="container">
	<h3>Persetujuan Data</h3><hr>
	<h4><?= $registration->title ?></h4>
	<h6><?= $organization->name ?></h6>
	<h6>Deskripsi : </h6>
	<p><?= $registration->description ?></p>

	<div class="row">
		<p class="col-12">Meminta Persetujuan Untuk :</p>
		<div class="row alert alert-info">
			<i class="col-12">Data Pribadi Mahasiswa yang meliputi :</i>
			<i class="col-12">No. Hp</i>
			<i class="col-12">E-mail</i>
			<i class="col-12">Alamat</i>
		</div>
	</div>

	<a class="col-2 btn btn-success" href="<?= url('approve_event/'.$registration->id) ?>" onclick="return confirm('Yakin?')">Setujui</a>
</div>