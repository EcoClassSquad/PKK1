<?php
include 'db.php';

$id = $_POST['id'];

$sql = "DELETE FROM laporan WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Laporan berhasil dihapus.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
