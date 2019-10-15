
<div class="container">
	<h3>Masukkan Data tambahan yang diperlukan :</h3>
	<form class="row" method="POST" action="<?= url('tambah_data_tambahan') ?>">
		<input type="text" name="data" class="form-control col-3" placeholder="Data">
		<input type="submit" value="Tambah" class="btn btn-primary col-1">
	</form>

	<div class="row">
		<table class="table col-6">
			<tr>
				<td>No.</td>
				<td colspan="2">Data</td>
			</tr>
			
			<?php $i = 1; foreach ($additionals as $additional): ?>
			
			<tr>
				<td><?= $i ?></td>
				<td><?= $additional ?></td>
				<td>
					<a href="<?= url('hapus_tambahan/'.str_replace(' ', '_', $additional)) ?>" class="btn btn-danger" onclick="return confirm('Yakin?')">Hapus</a>
				</td>
			</tr>

			<?php $i++; endforeach; ?>
		</table>

		<div class="col-12">
			<a href="<?= url('halaman_pendaftar/'.$_SESSION['key']) ?>" class="col-2 btn btn-primary">Halaman Pendaftar &raquo;</a>
		</div>
	</div>
</div>