<div class="content d-flex align-items-center mt-3">
	<div class="container">
		<div class="alert alert-secondary alert-dismissible fade show" role="alert">
			<strong><h5><?= ucfirst($this->fungsi->user_login()->username) ?></h5></strong>
			<p>SELAMAT DATANG DI APLIKASI PEMILIHAN KETUA OSIS SMKN 1 BONDOWOSO</p>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>

		<div class="user card border-danger">
			<div class="card-title">
				<h3>DATA PENGGUNA</h3>
				<a href="<?= base_url('user/add') ?>" class="btn">Tambah</a>
			</div>
			<div class="card-body table-responsive">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>Username</th>
							<th>Email</th>
							<th>Password</th>
							<th>Action</th>
						</tr>
					</thead>
					<?php $no = 1;
					foreach ($row->result() as $user) { ?>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $user->username ?></td>
							<td><?= $user->email ?></td>
							<td><?= $user->password ?></td>
							<td>
								<a href="<?= base_url('user/edit/' . $user->id_user) ?>" class="da btn">Edit</a>
								<a href="<?= base_url('user/delete/' . $user->id_user) ?>" class="btn btn-secondary">Hapus</a>
							</td>
						</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
</div>
