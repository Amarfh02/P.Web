<?php

// Definisikan variabel untuk panjang dan lebar
$panjang = 0;
$lebar = 0;

// Periksa apakah data panjang dan lebar telah dikirimkan melalui formulir
if (isset($_POST['panjang']) && isset($_POST['lebar'])) {
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];

    // Validasi data input (opsional)
    if (!is_numeric($panjang) || !is_numeric($lebar)) {
        echo "<p style='color: red;'>Nilai panjang dan lebar harus berupa angka!</p>";
    } else {
        // Hitung luas persegi panjang
        $luas = $panjang * $lebar;

        // Tampilkan hasil perhitungan
        echo "<p>Luas persegi panjang dengan panjang $panjang dan lebar $lebar adalah: $luas</p>";
    }
}

?>
