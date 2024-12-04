<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama_penjaga = $_POST['nama_penjaga'];
$kelas = $_POST['kelas'];
$tanggal = $_POST['tanggal'];
$kondisi = $_POST['kondisi'];
$catatan = $_POST['catatan'];

$sql = "UPDATE laporan SET 
        nama_penjaga = '$nama_penjaga', 
        kelas = '$kelas', 
        tanggal = '$tanggal', 
        kondisi = '$kondisi', 
        catatan = '$catatan' 
        WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Laporan berhasil diubah.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
