<div class="bg-secondary text-white">
    <div class="container text-center">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-10">
                <h1 class="text-center py-4 mb-2">Daftar Sesi Film</h1>
                <div class="table-responsive">
                    <table class="table table-striped table-hover bg-light mb-5" style="border-radius: 1rem;">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Gambar</th>
                                <th scope="col">Film</th>
                                <th scope="col">Tanggal Mulai</th>
                                <th scope="col">Tanggal Selesai</th>
                                <th scope="col">Screen</th>
                                <th scope="col">Jam Mulai</th>
                                <th scope="col">Jam Selesai</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Beli Tiket</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data['sesi'] as $sesi) : ?>
                            <tr>
                                <td class="align-middle"><img
                                        src="data:image/jpeg;base64,<?= base64_encode($sesi['gambar']); ?>"
                                        alt="<?= $sesi['nama_film']; ?>" width="200" height="300"></td>
                                <td class="align-middle"><?= $sesi['nama_film']; ?></td>
                                <td class="align-middle"><?= $sesi['tanggal_mulai']; ?></td>
                                <td class="align-middle"><?= $sesi['tanggal_selesai']; ?></td>
                                <td class="align-middle"><?= $sesi['screen_number']; ?></td>
                                <td class="align-middle"><?= $sesi['waktu_mulai']; ?></td>
                                <td class="align-middle"><?= $sesi['waktu_selesai']; ?></td>
                                <td class="align-middle"><?= $sesi['harga']; ?></td>
                                <td class="align-middle"><a
                                        href="<?= BASEURL ?>/transaksi/beli_tiket/<?= $sesi['id']; ?>"
                                        class="btn-color btn btn-primary btn-block fa-lg gradient-custom-2">Beli
                                        Tiket</a></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>