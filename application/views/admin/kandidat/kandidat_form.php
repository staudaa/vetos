<div class="content">
	<div class="container">
		<div class="usfor card border-danger">
			<div class="card-title">
				<div class="row">
					<div class="col-sm-9 mt-3">
						<h3><?= ucfirst($page) ?> Data Kandidat</h3>
					</div>
					<div class="col-sm-3 mt-3" align="right">
						<a href="<?= base_url('kandidat') ?>" class="btn btn-secondary"><i class="fa fa-undo"></i> Kembali</a>
					</div>
				</div>
			</div>
			<div class="card-body">
				<div class="col-md-6">
					<form action="<?= base_url('kandidat/process') ?>" method="post">
						<div class="form-group mb-3">
							<label for="nama_ketos"><b>NAMA KETOS *</b></label>
							<input type="hidden" name="id" value="<?= $row->id_kandidat ?>">
							<input type="text" name="nama_ketos" id="nama_ketos" value="<?= $row->nama_ketos ?>" placeholder="Masukkan nama ketos" class="form-control" required>
						</div>
						<div class="form-group mb-3">
							<label for="nama_waketos"><b> WAKETOS *</b></label>
							<input type="text" name="nama_waketos" id="nama_waketos" value="<?= $row->nama_waketos ?>" placeholder="Masukkan nama waketos" class="form-control" required>
						</div>
						<div class="form-group mb-3">
							<label for="image"><b>IMAGE *</b></label>
							<input type="file" name="image" id="image" value="<?= $row->image ?>" placeholder="Masukkan image" class="form-control" required>
						</div>
						<div class="form-group mb-3">
							<label for="visi"><b>VISI *</b></label>
							<input type="text" name="visi" id="visi" value="<?= $row->visi ?>" placeholder="Masukkan visi" class="form-control" required>
						</div>
						<div class="form-group mb-3">
							<label for="misi"><b>MISI *</b></label>
							<input type="text" name="misi" id="misi" value="<?= $row->misi ?>" placeholder="Masukkan misi" class="form-control" required>
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
