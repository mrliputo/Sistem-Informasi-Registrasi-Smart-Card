
<div class="container">
	<h3><?= $registration->title ?></h3>
	<h6><?= $registration->description ?></h6>

	<?php if($registration->privacy == 1 && $registration->verify == 0): ?>

		<div class="col-12 alert alert-info">Registrasi ini memerlukan data privasi, maka perlu menunggu persetujuan dari pihak LPTIK agar registrasi ini dapat digunakan</div>

	<?php else: ?>

		<table class="table table-striped" id="member">
			
			<tr>
				<td>No.</td>
				<td>NIM</td>
				<td>Nama</td>
				<td>Aksi</td>
			</tr>

			<?php if(empty($members)): ?>

				<div class="col-12 alert alert-info nodata">Belum ada anggota terdaftar</div>

			<?php else: $i = 1; foreach ($members as $member): ?>
			
			<tr>
				<td class="number"><?= $i ?></td>
				<td><?= $member->nim ?></td>
				<td><?= $member->nama ?></td>
				<td>
					<a href="<?= url('lihat_anggota/'.Security::encrypt($member->nim)) ?>" class="btn btn-primary">Lihat</a>
					<a href="<?= url('hapus_anggota/'.Security::encrypt($member->nim)) ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
				</td>
			</tr>

			<?php $i++; endforeach; endif;?>

		</table>

		<div class="col-12 mb-4">
			<div class="hiddenTable"></div>
			<button class="col-2 btn btn-success download_csv">Download CSV</button>
			<a href="<?= url('data_tambahan/'.$_SESSION['key']) ?>" class="col-2 btn btn-success">Data Tambahan</a>
			<a href="<?= url('dokumentasi_api') ?>" class="col-2 btn btn-primary">Dokumentasi API</a>
		</div>

		<div class="row justify-content-md-center">
			<h6 class="alert alert-info text-center col-9">Scan QR Code dibawah atau salin key untuk setting key pada Pembaca Kartu</h6>
			<div class="col-4">
				<img src="https://chart.googleapis.com/chart?cht=qr&chl=<?= $_SESSION['key'] ?>&chs=300x300&chld=L|0">
				<input type="text" class="key form-control col-10 mt-2" value="<?= $_SESSION['key'] ?>">
				<button class="copyKey col-3 btn btn-primary">Copy</button><div class="msgKey"></div>
			</div>
		</div>

	<?php endif; ?>
</div>

<script src="<?= $GLOBALS['assets'] ?>/js/api_newMember.js"></script>