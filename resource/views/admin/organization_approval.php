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
					Persetujuan Organisasi
				</div>
			</div>
			<div class="row">
				<div class="col-md-offset-2 col-md-8 panel panel-default content">


					<?php if(empty($organizations)): ?>

						<div class="main-box add-reg">
							<p class="main-message">Belum ada registrasi organisasi yang membutuhkan persetujuan.</p>
							<a href="<?= url('home') ?>" class="button-msg"><button class="button button-blue ">Daftar Organisasi</button></a>
						</div>

					<?php else: ?>

						<table class="table table-hover main-table">
							<thead>
								<tr>
									<th class="col-md-1">No.</th>
									<th class="col-md-4">Nama Organisasi</th>
									<th class="col-md-3">Tgl. Daftar</th>
									<th class="col-md-1">Aksi</th>
									<th class="col-md-1"></th>
								</tr>
							</thead>
							<tbody>

								<?php $i = 1; foreach($organizations as $organization): ?>

								<tr>
									<td><?= $i ?></td>
									<td><?= $organization->name ?></td>
									<td><?= date('j F Y', strtotime($organization->date)); ?></td>
									<td>

										<?php if($organization->verify == 1): ?>

											<a href="<?= url('detail_organisasi/'.Security::encrypt($organization->id)) ?>"><button class="button-small button-green">Lihat</button></a>

										<?php else: ?>

											<span class="red">Unverified</span>

										<?php endif; ?>

									</td>

									<td>
										<a href="<?= url(' hapus_organisasi/'.$organization->id) ?>" onclick="return confirm('Yakin ingin menghapus?')"><button class="button-small button-red">Hapus</button></a>
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