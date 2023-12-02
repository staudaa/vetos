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
				<a href="<?= base_url('pemilih/add') ?>" class="btn">Tambah</a>
			</div>
			<div class="card-body table-responsive">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>Username</th>
							<th>Nama</th>
							<th>Password</th>
							<th>NISN</th>
							<th>Alamat</th>
							<th>Action</th>
						</tr>
					</thead>
					<?php $no = 1;
					foreach ($row->result() as $pem) { ?>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $pem->username ?></td>
							<td><?= $pem->nama ?></td>
							<td><?= $pem->password ?></td>
							<td><?= $pem->NISN ?></td>
							<td><?= $pem->alamat ?></td>
							<td>
								<a href="<?= base_url('pemilih/edit/' . $pem->id_pemilih) ?>" class="da btn">Edit</a>
								<a href="<?= base_url('pemilih/delete/' . $pem->id_pemilih) ?>" class="btn btn-secondary">Hapus</a>
							</td>
						</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
</div>
