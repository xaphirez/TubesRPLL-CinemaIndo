<div class="container">
	<?php
        echo "<h1>" . $data['film']['nama_film'] . "</h1>";
        echo "<img src='data:image/jpeg;base64," . base64_encode($data['film']['gambar']) . "' width='300' height='450'><br><br>";
        echo "<strong>Genre:</strong> " . $data['film']['genre'] . "<br>";
        echo "<strong>Durasi:</strong> " . $data['film']['durasi'] . "<br>";
        echo "<strong>Rating:</strong> " . $data['film']['rating'] . "<br>";
        echo "<strong>Sinopsis:</strong> " . $data['film']['sinopsis'] . "<br>";
        
        // Mendapatkan jenis film yang sedang ditampilkan
        $jenis_film = $data['film']['status'];
        
        // Mengatur link yang akan digunakan pada tombol "Kembali"
        if ($jenis_film == 'now playing') {
            $link_kembali = BASEURL . '/film/nowplaying';
        } else {
            $link_kembali = BASEURL . '/film/upcoming';
        }
    ?>
	<br>
	<a href="<?php echo $link_kembali; ?>" class="btn btn-primary">Kembali</a>
</div>