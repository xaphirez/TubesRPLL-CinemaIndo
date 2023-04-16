<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center mb-4">Beli Tiket</h1>
            <form action="<?= BASEURL ?>/transaksi/proses_beli" method="post">
                <input type="hidden" name="sesi_id" value="<?= $data['sesi']['id'] ?>">
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal">
                </div>
                <div class="form-group">
                    <label for="no_kursi">Nomor Kursi</label>
                    <input type="number" class="form-control" id="no_kursi" name="no_kursi">
                </div>
                <div class="form-group">
                    <label for="jumlah_pembelian">Jumlah Pembelian</label>
                    <input type="number" class="form-control" id="jumlah_pembelian" name="jumlah_pembelian">
                </div>
                <button type="submit" class="btn btn-primary">Beli</button>
            </form>
        </div>
    </div>
</div>