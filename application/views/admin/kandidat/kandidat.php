<div class="content">
	<div class="container">
		<div class="alert alert-secondary alert-dismissible fade show" role="alert">
			<strong>
				<h5><?= ucfirst($this->fungsi->user_login()->username) ?></h5>
			</strong>
			<p>SELAMAT DATANG DI APLIKASI PEMILIHAN KETUA OSIS SMKN 1 BONDOWOSO</p>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>

		<div class="user card border-danger">
			<div class="card-title">
				<h3>DATA PENGGUNA</h3>
				<a href="<?= base_url('kandidat/add') ?>" class="btn">Tambah</a>
			</div>
			<div class="card-body table-responsive">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Ketos</th>
							<th>Nama Waketos</th>
							<th width="15%">Image</th>
							<th>Visi</th>
							<th>Misi</th>
							<th>Action</th>
						</tr>
					</thead>
					<?php $no = 1;
					foreach ($row->result() as $kd) { ?>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $kd->nama_ketos ?></td>
							<td><?= $kd->nama_waketos ?></td>
							<td><img src="<?= base_url('assets/img/') ?><?= $kd->image ?>" width="60%"></td>
							<td><?= $kd->visi ?></td>
							<td><?= $kd->misi ?></td>
							<td>
								<a href="<?= base_url('kandidat/edit/' . $kd->id_kandidat) ?>" class="da btn">Edit</a>
								<a href="<?= base_url('kandidat/delete/' . $kd->id_kandidat) ?>" class="btn btn-secondary">Hapus</a>
							</td>
						</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
</div>
