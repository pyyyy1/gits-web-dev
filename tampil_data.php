<?php
include("koneksi.php");

$sql = "SELECT * FROM nilai_mahasiswa";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Nama: " . $row["nama"] . "<br>";
        echo "Mata Kuliah: " . $row["mata_kuliah"] . "<br>";
        echo "Grade: " . $row["grade"] . "<br><br>";
    }
} else {
    echo "Tidak ada data.";
}

$conn->close();
?>
