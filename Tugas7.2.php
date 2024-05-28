<?php

// Mendapatkan data biodata dari formulir HTML
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];

// Menampilkan biodata yang telah disimpan
echo "<h2>Biodata</h2>";
echo "Nama Lengkap: $nama<br>";
echo "Tempat Lahir: $tempat_lahir<br>";
echo "Tanggal Lahir: $tanggal_lahir<br>";
echo "Jenis Kelamin: $jenis_kelamin<br>";
?>
