<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];
    
    // Perintah SQL untuk menghapus data berdasarkan ID
    $sql = "DELETE FROM nilai_mahasiswa WHERE id = $id";
    
    if ($conn->query($sql) === TRUE) {
        // Redirect kembali ke halaman utama setelah penghapusan berhasil
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
