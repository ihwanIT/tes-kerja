<?php
include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM kontrak WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $jabatan = $_POST["jabatan"];
    $kontrak = $_POST["kontrak"];

    $sql = "UPDATE pegawai SET nama='$nama', email='$jabatan', umur='$kontrak' WHERE id=$id";

    // if ($conn->query($sql) === TRUE) {
    //     echo "Record berhasil diperbarui";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Kontrak</title>
</head>
<body>
    <h2>Update User</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]).'?id='.$id;?>">
        Nama: <input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br><br>
        Jabatan: <input type="text" name="email" value="<?php echo $row['jabatan']; ?>"><br><br>
        Kontrak: <input type="text" name="umur" value="<?php echo $row['kontrak']; ?>"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
