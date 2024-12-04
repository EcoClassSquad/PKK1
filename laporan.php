<?php
include 'koneksi.php';

// Ambil data laporan beserta nama admin
$sql = "SELECT laporan.id, laporan.nama_siswa, laporan.kelas, laporan.laporan, laporan.tanggal, admin.nama_admin 
        FROM laporan
        LEFT JOIN admin ON laporan.admin_id = admin.id
        ORDER BY laporan.tanggal DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Laporan Kebersihan</title>
</head>
<body>
    <h1>Daftar Laporan Kebersihan Kelas</h1>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>Laporan</th>
            <th>Admin</th>
            <th>Tanggal</th>
        </tr>
        <?php if ($result->num_rows > 0): ?>
            <?php $no = 1; while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row['nama_siswa']; ?></td>
                    <td><?= $row['kelas']; ?></td>
                    <td><?= $row['laporan']; ?></td>
                    <td><?= $row['nama_admin']; ?></td>
                    <td><?= $row['tanggal']; ?></td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="6">Belum ada laporan.</td>
            </tr>
        <?php endif; ?>
    </table>
</body>
</html>
