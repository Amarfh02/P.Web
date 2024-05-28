<?php

// Retrieve guestbook entries from `buku_tamu` table
$sql = "SELECT id, nama, isi FROM buku_tamu ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='guestbook-entry'>";
        echo "<h3>" . $row['nama'] . "</h3>";
        echo "<p>" . $row['isi'] . "</p>";
        echo "</div>";
    }
} else {
    echo "No guestbook entries found.";
}

$conn->close();
?>
