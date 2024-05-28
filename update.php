<?php
include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM pegawai WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $jabatan = $_POST["jabatan"];
    $kontrak = $_POST["kontrak"];

    $sql = "UPDATE pegawai SET nama='$nama', jabatan='$jabatan', kontrak='$kontrak' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record berhasil diperbarui";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Update User</title>
</head>
<body>
    <div class="container">
    <h2>Update Pegawai</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]).'?id='.$id;?>">
        Nama: <input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br><br>
        Jabatan: <input type="text" name="jabatan" value="<?php echo $row['jabatan']; ?>"><br><br>
        Kontrak: <input type="text" name="kontrak" value="<?php echo $row['kontrak']; ?>"><br><br>
        <input type="submit" value="Submit">
    </form>
    </div>
</body>
</html>
