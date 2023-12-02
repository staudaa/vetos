<div class="content">
    <div class="container d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card border-danger">
                <div class="card-title">
                    <div class="border-bottom border-danger card-title">
                        <h3 class="text-center">KONFIRMASI VOTE!</h3>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post">
                        <div class="form-group mb-3">
                            <label><b>KANDIDAT</b></label>
                            <select name="id_kandidat" class="form-select" aria-label="Default select example">
                                <option value="<?= $kandidat['id_kandidat']; ?>"><?= $kandidat['nama_ketos']; ?> & <?= $kandidat['nama_waketos']; ?> </option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label><b>PEMILIH</b></label>
                            <select name="id_pemilih" class="form-select" aria-label="Default select example">
                                <option value="<?= $user['id_user']; ?>"><?= $user['username']; ?></option>
                            </select>
                        </div>
                        <div class="form-group" align="center">
                            <button type="submit" name="submit" class="btn btn-sm btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="content">
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">

                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
