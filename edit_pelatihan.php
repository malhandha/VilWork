<?php
include_once('koneksi.php');
if (isset($_GET['id_pelatihan'])) {
    $id_pelatihan = $_GET['id_pelatihan'];
    $query = "SELECT * FROM pelatihan WHERE id_pelatihan='$id_pelatihan'";
    $hasil = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($hasil);
}


if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $nama_pelatihan = $_POST['nama_pelatihan'];
    $no_tlp = $_POST['no_tlp'];
    $email = $_POST['email'];
    $tanggal = $_POST['tanggal'];

    $query = "UPDATE pelatihan SET 
                nama='$nama', 
                nama_pelatihan='$nama_pelatihan', 
                no_tlp='$no_tlp', 
                email='$email', 
                tanggal='$tanggal' 
               WHERE id_pelatihan='$id_pelatihan'";
    $update = mysqli_query($conn, $query);

if ($update) {
    echo "<script>alert('Data berhasil diupdate!'); window.location='riwayat_pelatihan.php';</script>";
} else {
    echo "<script>alert('Update gagal!');</script>";
}
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/navbar.css">
    <title>Edit Pendaftaran</title>
</head>

<body>
    <form action="" method="POST">
        <label>Nama:</label>
        <input type="text" name="nama" value="<?= $data['nama']; ?>" required><br>
        <label class="block font-medium">Nama Pelatihan</label>
                <select name="nama_pelatihan" class="w-full p-2 border border-gray-300 rounded" value="<?= $data['nama_pelatihan']; ?>" required>
                    <option value="">Pilih Pelatihan</option>
                    <option value="Belajar Microsoft Office">Belajar Microsoft Office</option>
                    <option value="Cara Bertani Modern">Cara Bertani Modern</option>
                    <option value="Bertukang Modern">Bertukang Modern</option>
                    <option value="Ternak Sapi Sukses">Ternak Sapi Sukses</option>
                </select>
        <label>No. Telepon:</label>
        <input type="text" name="no_tlp" value="<?= $data['no_tlp']; ?>" required><br>

        <label>Email:</label>
        <input type="email" name="email" value="<?= $data['email']; ?>" required><br>

        <label>Tanggal:</label>
        <input type="date" name="tanggal" value="<?= $data['tanggal']; ?>" required><br>

        <button type="submit" name="update">Simpan Perubahan</button>
        <a href="riwayat_pelatihan.php">Batal</a>
    </form>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
            margin-top: 20px; 
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
            color: #555;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
            font-size: 16px;
        }

        input:focus {
            border-color: #1FC28B;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5);
        }

        button {
            width: 100%;
            padding: 12px;
            margin-top: 15px;
            background-color: #1FC28B;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background-color: #1FC28B;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #1FC28B;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        @media (max-width: 480px) {
            form {
                width: 90%;
            }
        }
    </style>
</body>

</html>