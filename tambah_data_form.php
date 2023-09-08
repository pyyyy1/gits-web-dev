<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css"> <!-- Gantilah dengan path yang sesuai -->
    <title>Tambah Data Nilai Mahasiswa</title>
</head>
<body>
    <div class="container">
        <h1>Tambah Data Nilai Mahasiswa</h1>
        <form action="tambah_data.php" method="POST"> <!-- Ganti action dengan skrip PHP yang sesuai -->
            <label for="nama">Nama Mahasiswa:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="mataKuliah">Mata Kuliah:</label>
            <input type="text" id="mataKuliah" name="mata_kuliah" required>

            <label for="grade">Grade:</label>
            <select id="grade" name="grade">
                <option value="4">A</option>
                <option value="3">B</option>
                <option value="2">C</option>
                <option value="1">D</option>
                <option value="0">E</option>
            </select>

            <button type="submit">Simpan</button>
        </form>
        <a href="index.php">Kembali ke Data Nilai Mahasiswa</a>
    </div>
</body>
</html>
