<div class="content d-flex align-items-center mt-3">
    <div class="container">
        <div class="alert alert-secondary alert-dismissible fade show" role="alert">
            <strong>
                <h5><?= ucfirst($this->fungsi->user_login()->username) ?></h5>
            </strong>
            <p>SELAMAT DATANG DI APLIKASI PEMILIHAN KETUA OSIS SMKN 1 BONDOWOSO</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <div class="row">
            <div class="col-sm-4">
                <div class="border-bottom border-danger card">
                    <div class="card-title"><h4>Jumlah Vote Kandidat 1</h4></div>
                    <div class="card-body">
                        <?= $pas1 ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>