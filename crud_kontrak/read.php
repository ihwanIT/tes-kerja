<?php
$sql = "SELECT nama, jabatan, kontrak FROM kontrak";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <h2>Daftar User</h2>
    <a href="create.php">Tambah Data Kontrak Baru</a><br><br>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>kontrak</th>
            <th>Actions</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["nama"]. "</td>
                        <td>" . $row["jabatan"]. "</td>
                        <td>" . $row["kontrak"]. "</td>
                        <td>
                            <a href='update.php?id=".$row["id"]."'>Edit</a>
                            <a href='delete.php?id=".$row["id"]."'>Delete</a>
                        </td>
                    </tr>";
            }
        } 
        $conn->close();
        ?>
    </table>
</body>
</html>
