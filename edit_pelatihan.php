<?php
include 'koneksi.php';
if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "<script>alert('ID tidak ditemukan!'); window.location='riwayat_pelatihan.php';</script>";
    exit();
}

$id = $_GET['id']; 
$query = "SELECT * FROM pelatihan WHERE id='$id'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

if (!$data) {
    echo "<script>alert('Data tidak ditemukan!'); window.location='riwayat_pelatihan.php';</script>";
    exit();
}

if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $pelatihan = $_POST['pelatihan'];
    $no_telepon = $_POST['no_telepon'];
    $email = $_POST['email'];
    $tanggal = $_POST['tanggal'];

    $update = "UPDATE pelatihan SET 
                nama='$nama', 
                pelatihan='$pelatihan', 
                no_telepon='$no_telepon', 
                email='$email', 
                tanggal='$tanggal' 
               WHERE id='$id'";

    if (mysqli_query($conn, $update)) {
        echo "<script>alert('Data berhasil diperbarui!'); window.location='riwayat_pelatihan.php';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui data!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pendaftaran</title>
</head>
<body>
    <h2>Edit Pendaftaran Pelatihan</h2>
    <form action="" method="POST">
        <label>Nama:</label>
        <input type="text" name="nama" value="<?= $data['nama']; ?>" required><br>

        <label>Pelatihan:</label>
        <input type="text" name="pelatihan" value="<?= $data['pelatihan']; ?>" required><br>

        <label>No. Telepon:</label>
        <input type="text" name="no_telepon" value="<?= $data['no_telepon']; ?>" required><br>

        <label>Email:</label>
        <input type="email" name="email" value="<?= $data['email']; ?>" required><br>

        <label>Tanggal:</label>
        <input type="date" name="tanggal" value="<?= $data['tanggal']; ?>" required><br>

        <button type="submit" name="update">Simpan Perubahan</button>
        <a href="riwayat_pelatihan.php">Batal</a>
    </form>
</body>
</html>
