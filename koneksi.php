<?php
include 'koneksi.php';

// Ambil data dari form
$nama_siswa = $_POST['nama_siswa'];
$kelas = $_POST['kelas'];
$laporan = $_POST['laporan'];
$admin_id = $_POST['admin_id']; // Tambahkan admin_id

// Simpan ke database
$sql = "INSERT INTO laporan (nama_siswa, kelas, laporan, admin_id) 
        VALUES ('$nama_siswa', '$kelas', '$laporan', '$admin_id')";

if ($conn->query($sql) === TRUE) {
    echo "Laporan berhasil dikirim! <a href='laporan.php'>Lihat laporan</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
