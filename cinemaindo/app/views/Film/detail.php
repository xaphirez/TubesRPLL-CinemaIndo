<div class="bg-secondary">
    <div class="d-flex row justify-content-center h-100">
        <div class="row justify-content-center">
            <div class="col-md-8 pt-5">
                <div class="card bg-dark text-light" style="border-radius: 1rem;">
                    <div class="card-header">
                        <h1 class="mb-0"><?php echo $data['film']['nama_film']; ?></h1>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="data:image/jpeg;base64,<?php echo base64_encode($data['film']['gambar']); ?>"
                                    class="card-img" alt="<?php echo $data['film']['nama_film']; ?>">
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Genre:</label>
                                    <p><?php echo $data['film']['genre']; ?></p>
                                </div>
                                <div class="form-group">
                                    <label>Durasi:</label>
                                    <p><?php echo $data['film']['durasi']; ?></p>
                                </div>
                                <div class="form-group">
                                    <label>Rating:</label>
                                    <p><?php echo $data['film']['rating']; ?></p>
                                </div>
                                <div class="form-group">
                                    <label>Sinopsis:</label>
                                    <p><?php echo $data['film']['sinopsis']; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php
                             // Mendapatkan jenis film yang sedang ditampilkan
                            $jenis_film = $data['film']['status'];
        
                            // Mengatur link yang akan digunakan pada tombol "Kembali"
                            if ($jenis_film == 'now playing') {
                                $link_kembali = BASEURL . '/film/nowplaying';
                            } else {
                                $link_kembali = BASEURL . '/film/upcoming';
                            }
                        ?>
                        <div class="text-center pt-3 pb-1">
                            <a href="<?php echo $link_kembali; ?>"
                                class="btn-color btn btn-primary btn-block fa-lg gradient-custom-2 mb-3">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>