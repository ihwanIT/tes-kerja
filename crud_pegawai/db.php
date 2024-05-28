<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pegawai";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
$sql_table_kontrak= "CREATE TABLE pegawai(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(30) NOT NULL,
    jabatan VARCHAR(50),
    kontrak INT(3)
)";
if ($conn->query( $sql_table_kontrak) === TRUE) {
    echo "Tabel Users berhasil dibuat";
} else {
    echo "Error membuat tabel: " . $conn->error;
}
$conn->close();
?>
