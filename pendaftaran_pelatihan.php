<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "VillWork";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $nama_pelatihan = $_POST['nama_pelatihan'];
    $nomor_telepon = $_POST['nomor_telepon'];
    $email = $_POST['email'];
    $tanggal_pelatihan = $_POST['tanggal_pelatihan'];

    $sql = "INSERT INTO pelatihan (nama, nama_pelatihan, no_tlp, email, tanggal) 
            VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $nama, $nama_pelatihan, $nomor_telepon, $email, $tanggal_pelatihan);

    if ($stmt->execute()) {
        echo "<script>alert('Pendaftaran berhasil!'); window.location.href='pelatihan.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Pelatihan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">
    <div class="max-w-lg mx-auto mt-10 bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-center text-2xl font-semibold mb-6">Daftar Pelatihan</h2>
        <form action="" method="POST" class="space-y-4">
            <div>
                <label class="block font-medium">Nama</label>
                <input type="text" name="nama" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            <div>
                <label class="block font-medium">Nama Pelatihan</label>
                <select name="nama_pelatihan" class="w-full p-2 border border-gray-300 rounded" required>
                    <option value="">Pilih Pelatihan</option>
                    <option value="Belajar Microsoft Office">Belajar Microsoft Office</option>
                    <option value="Cara Bertani Modern">Cara Bertani Modern</option>
                    <option value="Bertukang Modern">Bertukang Modern</option>
                    <option value="Ternak Sapi Sukses">Ternak Sapi Sukses</option>
                </select>
            </div>
            <div>
                <label class="block font-medium">Nomor Telepon</label>
                <input type="tel" name="nomor_telepon" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            <div>
                <label class="block font-medium">Email</label>
                <input type="email" name="email" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            <div>
                <label class="block font-medium">Tanggal Pelatihan</label>
                <input type="date" name="tanggal_pelatihan" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            <button type="submit" class="w-full bg-green-600 text-white p-2 rounded hover:bg-green-700">Submit</button>
        </form>
    </div>
</body>
</html>
