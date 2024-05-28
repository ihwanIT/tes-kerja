<?php
include 'db.php';

$id = $_GET['id'];
$sql = "DELETE FROM jabatan WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record berhasil dihapus";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
