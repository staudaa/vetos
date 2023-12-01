<div class="content d-flex justify-content-center mt-5">
    <div class="container">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?= base_url('assets/img/') ?><?= $row['image'] ?>" class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-md-8">
                    <div class="border-bottom border-danger col-sm-5">
                        <h5 class="card-title ms-3 mt-3">Detail Data Kandidat Paslon <?= $row['id_kandidat']; ?></h5>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="form-group mb-1">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label><b>Nama Ketos</b></label>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="card-text">: <?= $row['nama_ketos'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-1 mt-3">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label><b>Nama Waketos</b></label>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="card-text">: <?= $row['nama_waketos'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-1 mt-3">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label><b>Visi</b></label>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="card-text">: <?= $row['visi'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-1 mt-3">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label><b>Misi</b></label>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="card-text">: <?= $row['misi'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <a href="<?= base_url('vote') ?>" class="btn btn-danger btn-sm">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>