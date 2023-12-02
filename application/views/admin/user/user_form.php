<div class="content">
	<div class="container">
		<div class="usfor card border-danger">
			<div class="card-title">
				<div class="row">
					<div class="col-sm-9 mt-3">
						<h3><?= ucfirst($page) ?> Data User</h3>
					</div>
					<div class="col-sm-3 mt-3" align="right">
						<a href="<?= base_url('user') ?>" class="btn btn-secondary"><i class="fa fa-undo"></i> Kembali</a>
					</div>
				</div>
			</div>
			<div class="card-body">
				<div class="col-md-6">
					<form action="<?= base_url('user/process') ?>" method="post">
						<div class="form-group mb-3">
							<label for="username"><b>USERNAME *</b></label>
							<input type="hidden" name="id" value="<?= $row->id_user ?>">
							<input type="text" name="username" value="<?= $row->username ?>" id="username" placeholder="Masukkan username" class="form-control" required>
						</div>
						<div class="form-group mb-3">
							<label for="email"><b>EMAIL *</b></label>
							<input type="text" name="email" value="<?= $row->email ?>" id="email" placeholder="Masukkan email" class="form-control" required>
						</div>
						<div class="form-group mb-3">
							<label for="password"><b>PASSWORD *</b></label>
							<input type="text" name="password" value="<?= $row->password ?>" id="password" placeholder="Masukkan password" class="form-control" required>
						</div>
						<div class="form-group mb-3">
							<label for="level"><b>LEVEL *</b></label>
							<select name="level" class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
								<option value="<?= $row->level ?>">2</option>
							</select>
							<!-- <input type="text" name="level" value="<?= $row->level ?>" id="level" placeholder="Masukkan level" class="form-control" required> -->
						</div>
						<div class="form-group">
							<button type="submit" class="daa btn" name="<?= $page ?>">Simpan</button>
							<button type="reset" class="btn btn-secondary">Hapus</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
