<div class="content d-flex align-items-center mt-3">
    <div class="container">
        <div class="alert alert-secondary alert-dismissible fade show" role="alert">
            <strong>
                <h5><?= ucfirst($this->fungsi->user_login()->username) ?></h5>
            </strong>
            <p>SELAMAT DATANG DI APLIKASI PEMILIHAN KETUA OSIS SMKN 1 BONDOWOSO</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <div class="row mb-5">
            <div class="col-sm-4 mb-3">
                <div class="card" style="padding: 20px; background-color:pink;">
                    <div class="card-title">
                        <h4>Jumlah Vote Kandidat 1</h4>
                    </div>
                    <div class="card-body">
                        <?= $pas1 ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 mb-3">
                <div class="card" style="padding: 20px; background-color:pink;">
                    <div class="card-title">
                        <h4>Jumlah Vote Kandidat 2</h4>
                    </div>
                    <div class="card-body">
                        <?= $pas2 ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 mb-3">
                <div class="card" style="padding: 20px; background-color:pink;">
                    <div class="card-title">
                        <h4>Jumlah Vote Kandidat 3</h4>
                    </div>
                    <div class="card-body">

                    <!-- View untuk count. setelah mengambil data dari database melalui model lalu di load di controller dan dipanggil di view -->
                        <?= $pas3 ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="user card border-danger">
            <div class="card-title">
                <h3>DATA HASIL VOTE</h3>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th style="width: 3%;">No</th>
                            <th style="width: 35%;">Kandidat</th>
                            <th>Pemilih</th>
                            <th style="width: 15%;">Tanggal dan Jam</th>
                            <!-- <th>Action</th> -->
                        </tr>
                    </thead>
                    <?php $no = 1;
                    foreach ($row->result() as $hasil) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $hasil->nama_ketos ?> & <?= $hasil->nama_waketos ?></td>
                            <td><?= $hasil->nama ?></td>
                            <td><?= $hasil->tanggal_jam ?></td>
                            <!-- <td>
                                <a href="<?= base_url('hasil/detail_data/') ?>" class="da btn btn-sm">Detail</a>
                            </td> -->
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>