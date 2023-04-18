<div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center mb-4"><?= $data['nama_film']; ?></h1>
                <div class="row">
                    <div class="col-md-4">
                        <img src="data:image/jpeg;base64,<?= base64_encode($data['gambar']); ?>"
                            alt="<?= $data['nama_film']; ?>" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <ul class="list-unstyled">
                            <li><strong>Waktu Mulai:</strong> <?= $data['waktu_mulai']; ?></li>
                            <li><strong>Harga:</strong> <?= $data['harga']; ?></li>
                            <li><strong>Harga:</strong> <?= $data['tanggal_mulai']; ?></li>
                            <li><strong>Nama User:</strong> <?= $_SESSION['nama_user']; ?></li>
                        </ul>
                        <form action="<?= BASEURL ?>/transaksi/proses_beli_tiket" method="POST">
                            <input type="hidden" id="id_sesi" name="id_sesi" value="<?= $data['id_sesi']; ?>">
                            <input type="hidden" id="id_user" name="id_user" value="<?= $_SESSION['id_user']; ?>">
                            <div class="form-group">
                                <label for="Tanggal_Transaksi">Tanggal Transaksi</label>
                                <input type="text" class="form-control" id="TanggalTransaksi" name="TanggalTransaksi" value="<?= date('Y-m-d'); ?>" required readonly>
                            </div>
                            <div class="form-group">
                                <label for="No_kursi">No Kursi</label>
                                <input type="number" class="form-control" id="NoKursi" name="NoKursi" required>
                            </div>
                            <div class="form-group">
                                <label for="total_harga">Total Harga</label>
                                <input type="number" class="form-control" id="total_harga" name="total_harga"
                                    value="<?= $data['harga']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="jumlah_tiket">No Tiket</label>
                                <?php $no_tiket = mt_rand(100000,999999); ?>
                                <input type="number" class="form-control" id="NoTiket" name="NoTiket" value="<?= $no_tiket; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Beli Tiket</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>