<?php
include 'db_connect.php'; // Hubungkan ke file koneksi database

$sql = "SELECT Serial_Number, Product, Company, Refrence, Status, Buffer_Status, Asset_Status, Location FROM inventory";
$result = $conn->query($sql);

$data = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row; // Menyimpan hasil query ke array
    }
}

header('Content-Type: application/json');
echo json_encode($data);

$conn->close(); // Tutup koneksi database
?>
