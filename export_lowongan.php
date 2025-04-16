<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "VillWork";

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Set headers untuk download CSV
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=data_lowongan.csv');

// Buat output stream
$output = fopen('php://output', 'w');

// Tulis header kolom
fputcsv($output, ['ID', 'ID Perusahaan', 'Judul Pekerjaan', 'Deskripsi', 'Lokasi', 'Gaji Min', 'Gaji Max', 'Tanggal Berakhir']);

// Query data dari database
$query = "SELECT * FROM lowongan ORDER BY tanggal_berakhir DESC";
$result = $conn->query($query);

// Tulis data ke CSV
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        fputcsv($output, [
            $row['id'],
            $row['id_perusahaan'],
            $row['judul_pekerjaan'],
            $row['deskripsi'],
            $row['lokasi'],
            $row['gaji_min'],
            $row['gaji_max'],
            $row['tanggal_berakhir']
        ]);
    }
}

fclose($output);
exit;
?>
