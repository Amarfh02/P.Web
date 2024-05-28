<?php

// Get data from form
$nama = $_POST['nama'];
$isi = $_POST['isi'];

// Insert new entry into `buku_tamu` table
$sql = "INSERT INTO buku_tamu (nama, isi) VALUES ('$nama', '$isi')";
if ($conn->query($sql) === TRUE) {
    echo "Guestbook entry added successfully!";
} else {
    echo "Error: " . $conn->error;
}

?>
