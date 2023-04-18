<div class="bg-secondary">
    <div class="container pt-3 p text-center">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-xl-4">
                <div class="card p-3 mb-3 bg-dark text-light" style="border-radius: 1rem;">
                    <div class="card-body-register text-center">
                        <img src="<?= BASEURL; ?>/img/Cindo.png" alt="Cinema Indo" width="100"
                            class="rounded-circle img-thumbnail shadow-sm mb-3">
                    </div>
                    <h1 class="text-center mb-4">Tambah Film</h1>
                    <form method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="nama_film" class="form-label">Nama Film</label>
                            <input type="text" class="form-control" id="nama_film" name="nama_film" required>
                        </div>
                        <div class="mb-3">
                            <label for="genre" class="form-label">Genre</label>
                            <input type="text" class="form-control" id="genre" name="genre" required>
                        </div>
                        <div class="mb-3">
                            <label for="durasi" class="form-label">Durasi (menit)</label>
                            <input type="number" class="form-control" id="durasi" name="durasi" required>
                        </div>
                        <div class="mb-3">
                            <label for="sinopsis" class="form-label">Sinopsis</label>
                            <textarea class="form-control" id="sinopsis" name="sinopsis" rows="2" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="rating" class="form-label">Rating</label>
                            <input type="number" class="form-control" id="rating" name="rating" required>
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar</label>
                            <input type="file" class="form-control" id="gambar" name="gambar" required>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="status" name="status" required>
                                <option value="now playing">Now Playing</option>
                                <option value="upcoming">Upcoming</option>
                            </select>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Tambah Film</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>