<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <h1 class="text-center mb-4">History Pembelian</h1>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No. Tiket</th>
                        <th>No. Kursi</th>
                        <th>Total Harga</th>
                        <th>Tanggal Transaksi</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['transaksi'] as $transaksi) : ?>
                    <tr>
                        <td><?= $transaksi['no_tiket'] ?></td>
                        <td><?= $transaksi['no_kursi'] ?></td>
                        <td><?= $transaksi['total'] ?></td>
                        <td><?= $transaksi['tanggal_transaksi'] ?></td>
                        <td><?= $transaksi['status_transaksi'] ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>