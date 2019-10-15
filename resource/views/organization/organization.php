
<div class="container">
	<h3>Daftar Registrasi</h3>
	<h6><?= $organization->name ?></h6>

	<?php if($organization->id == $auth->id): ?>

	<a href="<?= url('tambah_registrasi') ?>" class="btn btn-success col-2 mb-2">Tambah Registrasi</a>
	<a href="<?= url('logout') ?>" class="btn btn-danger col-2 mb-2">Logout</a>

	<?php endif; if(empty($registrations)): ?> <div class="alert alert-info">Registrasi masih kosong</div>
	<?php else: ?>

	<table class="table table-striped">
		<tr>
			<td>No.</td>
			<td>Perihal</td>
			<td>Tanggal</td>
			<td>Aksi</td>
		</tr>
		<?php $i = 1; foreach ($registrations as $registration): ?>
		<tr>
			<td><?= $i ?></td>
			<td><?= $registration->title ?></td>
			<td><?= date('j F Y', strtotime($registration->date)) ?></td>
			<td>
				<a href="<?= url('lihat_registrasi/'.Security::encrypt($registration->id)) ?>" class="btn btn-primary">Lihat</a>
				<a href="<?= url('hapus_registrasi/'.Security::encrypt($registration->id)) ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
			</td>
		</tr>
		<?php $i++; endforeach; endif; ?>
		
	</table>
</div>