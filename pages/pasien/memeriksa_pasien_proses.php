<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $keluhan = $_POST["keluhan"];


    // Proses data atau validasi dapat ditambahkan sesuai kebutuhan

    // Tampilkan hasil
    echo "<h2>Hasil Pemeriksaan</h2>";
    echo "Nama: $nama<br>";
    echo "Keluhan: $keluhan<br>";
} else {
    // Jika bukan metode POST, redirect atau berikan pesan error
    echo "Akses tidak sah.";
}
?>
