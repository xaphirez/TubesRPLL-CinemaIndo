<div class="bg-secondary">
    <div class="position-relative">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php $nowPlayingChuncks = array_chunk($data['nowPlayings'], 3); ?>
                <?php foreach ($nowPlayingChuncks as $key => $nowPlayingChunck) : ?>
                <div class="carousel-item <?= $key == 0 ? 'active' : '' ?>">
                    <div class="row">
                        <?php foreach ($nowPlayingChunck as $nowPlaying) : ?>
                        <div class="col-md-4 pt-4 mb-4">
                            <div class="card" style="border-radius: 1rem;">
                                <img src="data:image/jpeg;base64,<?= base64_encode($nowPlaying['gambar']) ?>"
                                    class="card-img-top" alt="<?= $nowPlaying['nama_film'] ?>" width="700" height="700">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $nowPlaying['nama_film'] ?></h5>
                                    <a href="<?= BASEURL ?>/film/detail/<?= $nowPlaying['id'] ?>"
                                        class="btn btn-primary">Detail</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>