<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css"> <!-- Gantilah dengan path yang sesuai -->
    <title>Data Nilai Mahasiswa</title>
</head>
<body>
    <div class="container">
        <h1>Data Nilai Mahasiswa</h1>
        <a href="tambah_data_form.php">Tambah Data</a> <!-- Link ke halaman tambah_data_form.php -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Mahasiswa</th>
                    <th>Mata Kuliah</th>
                    <th>Grade</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("koneksi.php");

                $sql = "SELECT * FROM nilai_mahasiswa";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["nama"] . "</td>";
                        echo "<td>" . $row["mata_kuliah"] . "</td>";
                        echo "<td>" . $row["grade"] . "</td>";
                        echo '<td><a href="edit_data_form.php?id=' . $row["id"] . '">Edit</a> | <a href="hapus_data.php?id=' .$row["id"] . '">Hapus</a></td>';
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Tidak ada data.</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
    
    <!-- FOOTER -->
    <footer>
        <p>Developed by <a href="https://github.com/pyyyy1/">Zhafia Rabbani Amalia</a></p>
    </footer>
</body>
</html>