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
                        <li><strong>Nama User:</strong> <?= $_SESSION['nama_user']; ?></li>
                    </ul>
                    <form action="<?= BASEURL ?>/transaksi/proses_beli_tiket" method="POST">
                        <input type="hidden" name="id_sesi" value="<?= $data['id_sesi']; ?>">
                        <input type="hidden" name="id_user" value="<?= $_SESSION['id_user']; ?>">
                        <div class="form-group">
                            <label for="jumlah_tiket">Jumlah Tiket</label>
                            <input type="number" class="form-control" id="jumlah_tiket" name="jumlah_tiket" min="1"
                                max="10" required>
                        </div>
                        <div class="form-group">
                            <label for="total_harga">Total Harga</label>
                            <input type="number" class="form-control" id="total_harga" name="total_harga"
                                value="<?= $data['harga']; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Beli Tiket</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>