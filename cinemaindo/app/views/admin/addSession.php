<div class="bg-secondary vh-100">
    <div class="container pt-3 p text-center h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-4">
                <div class="card p-3 bg-dark text-light" style="border-radius: 1rem;">
                    <div class="card-body-register text-center">
                        <img src="<?= BASEURL; ?>/img/Cindo.png" alt="Cinema Indo" width="100"
                            class="rounded-circle img-thumbnail shadow-sm mb-3">
                        <h2 class="card-title text-center">A D D</h2>
                        <h2 class="card-title text-center">S E S S I O N</h2>
                    </div>
                    <div class="container">
                        <form action="<?= BASEURL; ?>/admin/addSession" method="POST">

                            <div class="mb pt-1">
                                <label for="judul" class="form-label">Pilih Judul Film</label>
                                <select class="form-select" id="film" name="film">
                                    <?php foreach ($data['nowPlayings'] as $film) : ?>
                                    <option value="<?= $film['id'] ?>"><?= $film['nama_film'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="mb pt-1">
                                <label for="screen" class="form-label">Pilih Screen</label>
                                <select class="form-select" id="screen" name="screen">
                                    <?php foreach ($data['screens'] as $screen) : ?>
                                    <option value="<?= $screen['id'] ?>"><?= $screen['screen_number'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="mb pt-1">
                                <label for="nama" class="form-label">Tanggal Mulai</label>
                                <input type="text" class="form-control" id="tanggal_mulai" name="tanggal_mulai"
                                    placeholder="YY/MM/DD" required>
                            </div>
                            <div class="mb pt-1">
                                <label for="nama" class="form-label">Tanggal Selesai</label>
                                <input type="text" class="form-control" id="tanggal_selesai" name="tanggal_selesai"
                                    placeholder="YY/MM/DD" required>
                            </div>
                            <div class="mb pt-1">
                                <label for="nama" class="form-label">Waktu Mulai</label>
                                <input type="text" class="form-control" id="waktu_mulai" name="waktu_mulai"
                                    placeholder="Masukkan Jam Mulai" required>
                            </div>
                            <div class="mb pt-1">
                                <label for="nama" class="form-label">Waktu Selesai</label>
                                <input type="text" class="form-control" id="waktu_selesai" name="waktu_selesai"
                                    placeholder="Masukkan Jam Selesai" required>
                            </div>
                            <div class="mb pt-1">
                                <label for="nama" class="form-label">Harga</label>
                                <input type="text" class="form-control" id="harga" name="harga"
                                    placeholder="Masukkan Jam Harga" required>
                            </div>
                            <div class="text-center pt-4 pb-2">
                                <button type="submit"
                                    class="btn-color btn btn-primary btn-block fa-lg gradient-custom-2 mb-3">Submit</button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>