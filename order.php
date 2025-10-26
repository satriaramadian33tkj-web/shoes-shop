<?php
// Konfigurasi database
$host = "localhost";
$user = "root";     // ganti kalau user MySQL-mu bukan root
$pass = "";         // isi password MySQL
$db   = "shoesshop";

// Koneksi ke database
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$nama    = $_POST['nama'];
$telepon = $_POST['telepon'];
$menu    = $_POST['menu'];
$alamat  = $_POST['alamat'];

// Simpan ke database
$sql = "INSERT INTO orders (nama, telepon, menu, alamat) 
        VALUES ('$nama', '$telepon', '$menu', '$alamat')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Pesanan berhasil disimpan!'); window.location.href='indexshoesshop.html';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
