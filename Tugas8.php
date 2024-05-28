<?php

// Mendapatkan data login dari formulir
$username = $_POST['username'];
$password = $_POST['password'];

// Data pengguna dummy (asumsikan login berhasil)
$nama = "Nama Anda";
$email = "email@contoh.com";

// Menentukan tanggal dan waktu saat ini
$sekarang = new DateTime();
$tanggal = $sekarang->format("d F Y");
$jam = $sekarang->format("H:i:s");

// Simulasi proses login (asumsikan username dan password benar)
if ($username === "admin" && $password === "12345") {
    // Pengguna login berhasil
    echo "<h3>Selamat Datang, $nama!</h3>";
    echo "<p>Email: $email</p>";
    echo "<p>Tanggal Login: $tanggal</p>";
    echo "<p>Jam Login: $jam</p>";
} else {
    // Pengguna login gagal
    echo "<p style='color: red;'>Username atau password salah!</p>";
}

?>
