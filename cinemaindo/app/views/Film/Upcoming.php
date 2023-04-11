<div class="position-relative bg-secondary">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php $upcomingChuncks = array_chunk($data['upcomings'], 3); ?>
            <?php foreach ($upcomingChuncks as $key => $upcomingChunck) : ?>
            <div class="carousel-item <?= $key == 0 ? 'active' : '' ?>">
                <div class="row">
                    <?php foreach ($upcomingChunck as $upcoming) : ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="data:image/jpeg;base64,<?= base64_encode($upcoming['gambar']) ?>"
                                class="card-img-top" alt="<?= $upcoming['nama_film'] ?>" width="700" height="700">
                            <div class="card-body">
                                <h5 class="card-title"><?= $upcoming['nama_film'] ?></h5>
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