<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css"> <!-- Gantilah dengan path yang sesuai -->
    <title>Edit Data Nilai Mahasiswa</title>
</head>
<body>
    <div class="container">
        <h1>Edit Data Nilai Mahasiswa</h1>
        <?php
        include("koneksi.php");

        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
            $id = $_GET["id"];
            $sql = "SELECT * FROM nilai_mahasiswa WHERE id = $id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
        ?>
        <form action="edit_data.php" method="POST"> <!-- Ganti action dengan skrip PHP yang sesuai -->
            <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
            <label for="nama">Nama Mahasiswa:</label>
            <input type="text" id="nama" name="nama" value="<?php echo $row["nama"]; ?>" required>

            <label for="mataKuliah">Mata Kuliah:</label>
            <input type="text" id="mataKuliah" name="mata_kuliah" value="<?php echo $row["mata_kuliah"]; ?>" required>

            <label for="grade">Grade:</label>
            <select id="grade" name="grade">
                <option value="4" <?php if ($row["grade"] == 4) echo "selected"; ?>>A</option>
                <option value="3" <?php if ($row["grade"] == 3) echo "selected"; ?>>B</option>
                <option value="2" <?php if ($row["grade"] == 2) echo "selected"; ?>>C</option>
                <option value="1" <?php if ($row["grade"] == 1) echo "selected"; ?>>D</option>
                <option value="0" <?php if ($row["grade"] == 0) echo "selected"; ?>>E</option>
            </select>

            <button type="submit">Simpan</button>
        </form>
        <?php
            } else {
                echo "Data tidak ditemukan.";
            }
        } else {
            echo "ID tidak valid.";
        }

        $conn->close();
        ?>
        <a href="index.php">Kembali ke Data Nilai Mahasiswa</a>
    </div>
</body>
</html>
