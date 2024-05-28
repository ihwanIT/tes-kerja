<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $jabatan = $_POST["jabatan"];
    $kontrak = $_POST["kontrak"];

    $sql = "INSERT INTO pegawai (nama, jabatan, kontrak) VALUES ('$nama', '$jabatan', '$kontrak')";
    if ($conn->query($sql) === TRUE) {
        echo "Record berhasil ditambahkan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    // $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Create data Pegawai</title>
</head>
<body>

    <div class="container mx-20">
        <center>    <h2>Tambah Pegawai</h2></center>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nama</label>
  <input type="text" class="form-control" name="nama" id="exampleFormControlInput1" placeholder="nama">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Jabatan</label>
  <input type="text" class="form-control" name="jabatan" id="exampleFormControlInput1" placeholder="jabatan">
</div><div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Kontrak</label>
  <input type="text" class="form-control" name="kontrak" id="exampleFormControlInput1" placeholder="kontrak">
</div>
        <input type="submit" value="Submit">
    </form>
    </div>
</body>
</html>
