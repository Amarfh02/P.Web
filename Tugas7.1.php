<?php

// Mendapatkan tanggal dan waktu saat ini
$sekarang = new DateTime();

// Menampilkan tanggal dan waktu dalam format standar
echo "Tanggal dan Waktu Saat Ini (Format Standar): " . $sekarang->format("Y-m-d H:i:s") . "<br>";

// Menampilkan tanggal dalam format Indonesia
echo "Tanggal (Format Indonesia): " . $sekarang->format("d F Y") . "<br>";

// Menampilkan waktu dalam format jam dan menit
echo "Jam dan Menit: " . $sekarang->format("H:i") . "<br>";

// Menampilkan tanggal dan waktu dengan format UNIX timestamp
echo "UNIX Timestamp: " . $sekarang->getTimestamp() . "<br>";
?>
