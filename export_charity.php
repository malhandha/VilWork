<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "VillWork";

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=charity.csv');

$output = fopen('php://output', 'w');

fputcsv($output, ['id_charity', 'Nama Lengkap', 'Email', 'Nomor Telepon', 'Nominal', 'Tanggal', 'Gaji Max']);

$query = "SELECT * FROM lowongan ORDER BY tanggal_berakhir DESC";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        fputcsv($output, [
            $row['id_charity'],
            $row['nama_lengkap'],
            $row['email'],
            $row['nomor_telepon'],
            $row['nominal_donasi'],
            $row['metode_pembayaran'],
            $row['tanggal_donasi'],
        ]);
    }
}

fclose($output);
exit;
