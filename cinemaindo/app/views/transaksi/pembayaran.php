<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center mb-4"><?= $data['nama_film']; ?></h1>
            <?php if ($data['data_transaksi']) : ?>
            <?php foreach ($data['data_transaksi'] as $transaksi) : ?>
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">No. Tiket: <?= $transaksi['NoTiket']; ?></h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">Tanggal Transaksi: <?= $transaksi['tanggal_transaksi']; ?>
                    </h6>
                    <p class="card-text">Nama Film: <?= $transaksi['nama_film']; ?></p>
                    <p class="card-text">Waktu Mulai: <?= $transaksi['waktu_mulai']; ?></p>
                    <p class="card-text">No. Kursi: <?= $transaksi['no_kursi']; ?></p>
                    <p class="card-text">Harga: <?= $transaksi['total']; ?></p>
                    <p class="card-text">Status: <?= $transaksi['status_transaksi']; ?></p>
                    <?php if ($transaksi['status_transaksi'] == 'pending') : ?>
                    <form action="<?= BASEURL ?>/transaksi/proses_pembayaran" method="POST">
                        <input type="hidden" name="id_transaksi" value="<?= $transaksi['id']; ?>">
                        <button type="submit" class="btn btn-primary">Bayar</button>
                    </form>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
            <?php else : ?>
            <p class="text-center">Belum ada transaksi</p>
            <?php endif; ?>
        </div>
    </div>
</div>