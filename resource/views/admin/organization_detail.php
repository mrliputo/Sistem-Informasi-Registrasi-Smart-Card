
<div class="container">

	<h3>Data Organisasi</h3>

	<table class="table">
		<tr>
			<td>Nama Organisasi</td>
			<td><?= $organization->name ?></td>
		</tr>
		<tr>
			<td>Penanggung Jawab</td>
			<td><a href="<?= url('lihat_anggota/'.Security::encrypt($organization->nim)) ?>"><?= $user->nama ?></td>
		</tr>
		<tr>
			<td>E-mail</td>
			<td><?= $organization->email ?></td>
		</tr>
		<tr>
			<td>No. Telp</td>
			<td><?= $organization->phone ?></td>
		</tr>
		<tr>
			<td>Tanggal Terdaftar</td>
			<td><?= date('j F Y', strtotime($organization->date)) ?></td>
		</tr>
	</table>
	
	<a href="<?= $GLOBALS['assets'].'/file/'.Security::encrypt($organization->id).'.pdf' ?>" class="col-2 btn btn-info" target="_blank">Lihat Berkas</a>

	<?php if($organization->verify == 0){ ?>

		<div>Organisasi belum verifikasi KTM</div>

	<?php } else if($organization->verify == 1){ ?>

		<a class="col-2 btn btn-success" href="<?= url('approve_organization/'.$organization->id) ?>" onclick="return confirm('Yakin?')">Setujui</a>

	<?php } ?>

</div>