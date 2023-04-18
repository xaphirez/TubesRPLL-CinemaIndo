<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center mb-4">Pembayaran</h1>
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">No. Tiket: <?= $data['NoTiket']; ?></h5>
                </div>
                <div class="card-body">
                    <p class="card-text">Nama Film: <?= $data['nama_film']; ?></p>
                    <p class="card-text">Waktu Mulai: <?= $data['waktu_mulai']; ?></p>
                    <p class="card-text">No. Kursi: <?= $data['no_kursi']; ?></p>
                    <p class="card-text">Harga: <?= $data['total_harga']; ?></p>
                    <p class="card-text">Status: <?= $data['status_transaksi']; ?></p>
                    <form action="<?= BASEURL ?>/transaksi/proses_pembayaran" method="POST">
                        <input type="hidden" name="id_transaksi" value="<?= $data['id_transaksi']; ?>">
                        <button type="submit" class="btn btn-primary">Bayar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

