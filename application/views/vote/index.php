<div class="content">
	<div class="container">
		<div class="alert alert-secondary alert-dismissible fade show" role="alert" style="width: 95%;">
			<strong>
				<h5><?= ucfirst($this->fungsi->user_login()->username) ?></h5>
			</strong>
			<p>SELAMAT DATANG DI APLIKASI PEMILIHAN KETUA OSIS SMKN 1 BONDOWOSO</p>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
		<!-- <div class="card"> -->
		<div class="card-title ms-3">
			<h4>KANDIDAT</h4>
		</div>
		<div class="card-body">
			<div class="row">
				<?php foreach ($row as $kandidat) : ?>
					<div class="col-sm-4">
						<div class="card mb-3" style="width: 87%; padding: 5px;">
							<h5>KANDIDAT <?= $kandidat['id_kandidat']; ?></h5>
						</div>
						<img src="<?= base_url('assets/img/') ?><?= $kandidat['image']; ?>" class="img-fluid" alt="">
						<div class="rauda row mt-3">
							<?php if ($this->fungsi->user_login()->level == 2) { ?>
								<div class="col-sm-6 d-flex align-items-center">
									<a href="<?= base_url('vote/pilih/'); ?><?= $kandidat['id_kandidat']; ?>" class="btn btn-danger">Vote kandidat</a>
								</div>
							<?php } ?>
							<div class="col-sm-6 d-flex align-items-center">
								<a href="<?= base_url('kandidat/detail_data/'); ?><?= $kandidat['id_kandidat']; ?>" class="btn btn-danger">Detail kandidat</a>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
		<!-- </div> -->
	</div>
</div>
