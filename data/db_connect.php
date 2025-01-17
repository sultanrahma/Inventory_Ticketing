<?php
$servername = "localhost"; // Ubah jika menggunakan server selain localhost
$username = "root"; // Username MySQL Anda
$password = ""; // Password MySQL Anda
$dbname = "inventory_db"; // Nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
