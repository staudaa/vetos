<div class="content">
	<div class="container">
		<div class="usfor card border-danger">
			<div class="card-title">
				<div class="row">
					<div class="col-sm-9 mt-3">
						<h3> Data Pemilih</h3>
					</div>
					<div class="col-sm-3 mt-3" align="right">
						<a href="<?= base_url('pemilih') ?>" class="btn btn-secondary"><i class="fa fa-undo"></i> Kembali</a>
					</div>
				</div>
			</div>
			<div class="card-body">
				<div class="col-md-6">
					<form action="<?= base_url('pemilih/process') ?>" method="post">
						<div class="form-group mb-3">
							<label for="username"><b>USERNAME *</b></label>
							<input type="hidden" name="id" value="<?= $row->id_pemilih ?>">
							<input type="text" name="username" id="username" value="<?= $row->username ?>" placeholder="Masukkan username" class="form-control" required>
						</div>
						<div class="form-group mb-3">
							<label for="nama"><b>NAMA *</b></label>
							<input type="text" name="nama" id="nama" value="<?= $row->nama ?>" placeholder="Masukkan nama" class="form-control" required>
						</div>
						<div class="form-group mb-3">
							<label for="password"><b>PASSWORD *</b></label>
							<input type="text" name="password" id="password" value="<?= $row->password ?>" placeholder="Masukkan password" class="form-control" required>
						</div>
						<div class="form-group mb-3">
							<label for="NISN"><b>NISN *</b></label>
							<input type="text" name="NISN" id="NISN" minlength="10" maxlength="10" value="<?= $row->NISN ?>" placeholder="Masukkan NISN" class="form-control" required>
							<div class="text-danger"><?php echo form_error('NISN'); ?></div>
						</div>
						<div class="form-group mb-3">
							<label for="alamat"><b>ALAMAT *</b></label>
							<input type="text" name="alamat" id="alamat" value="<?= $row->alamat ?>" placeholder="Masukkan alamat" class="form-control" required>
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
