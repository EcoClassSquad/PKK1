<?php
include 'koneksi.php';

$nama_penjaga = $_POST['nama_penjaga'];
$kelas = $_POST['kelas'];
$tanggal = $_POST['tanggal'];
$kondisi = $_POST['kondisi'];
$catatan = $_POST['catatan'];
$foto_url = $_POST['foto_url'];

$sql = "INSERT INTO laporan (nama_penjaga, kelas, tanggal, kondisi, catatan, foto_url) 
        VALUES ('$nama_penjaga', '$kelas', '$tanggal', '$kondisi', '$catatan', '$foto_url')";

if ($conn->query($sql) === TRUE) {
    echo "Laporan berhasil ditambahkan.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
