<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $mata_kuliah = $_POST["mata_kuliah"];
    $grade = $_POST["grade"];

    $sql = "INSERT INTO nilai_mahasiswa (nama, mata_kuliah, grade) VALUES ('$nama', '$mata_kuliah', '$grade')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan.";
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
