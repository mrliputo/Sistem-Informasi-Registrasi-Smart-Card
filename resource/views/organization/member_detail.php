
<div class="container">

	<h3>Data Anggota</h3>

	<table class="table">
		<tr>
			<td width="20%">NIM</td>
			<td><?= $member->nim ?></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><?= $member->nama ?></td>
		</tr>
		<tr>
			<td>Prodi</td>
			<td><?= $member->prodi ?></td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td><?= $member->fakultas ?></td>
		</tr>

		<?php
			if(isset($data->additional)):
			
			$datas = (array) json_decode($data->additional);
			foreach ($datas as $key => $value):
		?>
			<tr>
				<td><?= ucfirst($key) ?></td>
				<td><?= $value ?></td>
			</tr>

		<?php endforeach; endif; if($_SESSION['privacy']): ?>

		<tr>
			<td>Alamat</td>
			<td><?= $member->alamat ?></td>
		</tr>
		<tr>
			<td>No. Telp</td>
			<td><?= $member->nohp ?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><?= $member->email ?></td>
		</tr>

		<?php endif; ?>
	</table>
	
</div>