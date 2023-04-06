<?php foreach ($data['films'] as $film) : ?>
<div class="card">
    <img src="data:image/jpeg;base64,<?= base64_encode($film['gambar']) ?>" alt="<?= $film['nama_film'] ?>">
    <div class="card-body">
        <h3><?= $film['nama_film'] ?></h3>
        <p>Genre: <?= $film['genre'] ?></p>
        <p>Durasi: <?= $film['durasi'] ?> menit</p>
        <p>Rating: <?= $film['rating'] ?></p>
    </div>
</div>
<?php endforeach; ?>