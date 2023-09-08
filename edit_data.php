<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $mata_kuliah = $_POST["mata_kuliah"];
    $grade = $_POST["grade"];

    $sql = "UPDATE nilai_mahasiswa SET nama='$nama', mata_kuliah='$mata_kuliah', grade='$grade' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil diperbarui.";
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
