<div class="bg-secondary text-white">
    <div class="container text-center">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-8">
                <h1 class="text-center">History Pembelian</h1>
                <table class="table table-striped table-bordered bg-white" style="border-radius: 1rem;">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No. Tiket</th>
                            <th scope="col">No. Kursi</th>
                            <th scope="col">Total Harga</th>
                            <th scope="col">Tanggal Transaksi</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['transaksi'] as $transaksi) : ?>
                        <tr>
                            <td><?= $transaksi['no_tiket'] ?></td>
                            <td><?= $transaksi['no_kursi'] ?></td>
                            <td>Rp <?= number_format($transaksi['total'], 0, ',', '.') ?></td>
                            <td><?= date('d-m-Y H:i:s', strtotime($transaksi['tanggal_transaksi'])) ?></td>
                            <td><?= $transaksi['status_transaksi'] ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>