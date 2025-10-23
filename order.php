<?php
$host = "localhost";
$user = "root";       // ganti jika username MySQL kamu beda
$pass = "";           // ganti jika MySQL ada password
$db   = "shoesshop";  // ganti sesuai nama database kamu

// koneksi
$conn = new mysqli($host, $user, $pass, $db);

// cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// ambil data dari form
$nama    = $_POST['nama'];
$telepon = $_POST['telepon'];
$menu    = $_POST['menu'];
$alamat  = $_POST['alamat'];

// query simpan
$sql = "INSERT INTO orders (nama, telepon, menu, alamat) 
        VALUES ('$nama', '$telepon', '$menu', '$alamat')";

if ($conn->query($sql) === TRUE) {
    echo "Pesanan berhasil disimpan!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
