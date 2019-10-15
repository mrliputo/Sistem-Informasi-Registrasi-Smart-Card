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
						<li><a href="<?= url('home') ?>">Daftar Organisasi</a></li>
						<li><a href="<?= url('logout') ?>">Logout</a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>

	<div class="main grey">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-offset-2 col-md-8 section-title">
					Persetujuan Event
				</div>
			</div>
			<div class="row">
				<div class="col-md-offset-2 col-md-8 panel panel-default content">


					<?php if(empty($registrations)): ?>

						<div class="main-box add-reg">
							<p class="main-message">Belum ada registrasi yang membutuhkan persetujuan.</p>
							<a href="<?= url('home') ?>" class="button-msg"><button class="button button-blue ">Daftar Organisasi</button></a>
						</div>

					<?php else: ?>

						<table class="table table-hover main-table">
							<thead>
								<tr>
									<th class="col-md-1">No.</th>
									<th class="col-md-5">Perihal</th>
									<th class="4">Tanggal</th>
									<th class="col-md-2">Aksi</th>
								</tr>
							</thead>
							<tbody>

								<?php $i = 1; foreach($registrations as $registration): ?>

								<tr>
									<td><?= $i ?></td>
									<td><?= $registration->title ?></td>
									<td><?= date('j F Y', strtotime($registration->date)) ?></td>
									<td>
										<a href="<?= url('detail_persetujuan/'.Security::encrypt($registration->id)) ?>"><button class="button-small button-green">Lihat</button></a>
									</td>
								</tr>
								
								<?php $i++; endforeach; ?>

							</tbody>
						</table>

					<?php endif; ?>
				
				</div>
			</div>
		</div>
	</div>