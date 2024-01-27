<?php
    include "../../conf/conn.php";
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }
    
    // Ambil data dari formulir
    $hari = $_POST['hari'];
    $jam_mulai = $_POST['jam_mulai'];
    $jam_selesai = $_POST['jam_selesai'];
    $id_dokter = $_POST['id_dokter']; 

    if (isset($_POST['id_dokter'])) {
        $id_dokter = $_POST['id_dokter'];
        
        // Pastikan dokter dengan id_dokter yang diberikan benar-benar ada di tabel dokter
        $queryCheckDokter = "SELECT * FROM dokter WHERE id_dokter = '$id_dokter'";
        $resultCheckDokter = $conn->query($queryCheckDokter);
    
        if ($resultCheckDokter->num_rows > 0) {
            // Dokter ditemukan, maka tambahkan jadwal periksa
            $query = "INSERT INTO jadwal_periksa (nama_pasien, tanggal_periksa, keterangan, id_dokter) VALUES ('$nama_pasien', '$tanggal_periksa', '$keterangan', '$id_dokter')";
            
            if ($conn->query($query) === TRUE) {
                echo "Jadwal periksa berhasil ditambahkan.";
            } else {
                echo "Error: " . $query . "<br>" . $conn->error;
            }
        } else {
            // Dokter tidak ditemukan
            echo "Error: Dokter dengan ID $id_dokter tidak ditemukan.";
        }
    } else {
        // Jika 'id_dokter' tidak ada dalam $_POST
        echo "Error: ID Dokter tidak ditemukan dalam formulir.";
    }
    
    // Tutup koneksi
    $conn->close();
