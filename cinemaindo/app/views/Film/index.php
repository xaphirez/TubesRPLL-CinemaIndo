<?php foreach ($films as $film) : ?>
<h2><?= $film['judul'] ?></h2>
<p><?= $film['genre'] ?></p>
<p><?= $film['tahun'] ?></p>
<p><?= $film['rating'] ?></p>
<?php endforeach; ?>