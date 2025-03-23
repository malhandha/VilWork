<?php
$conn = new mysqli("localhost", "root", "", "villwork");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// CREATE DATA
if (isset($_POST['submit'])) {
    $id_perusahaan = $_POST['id_perusahaan'];
    $judul_pekerjaan = $_POST['judul_pekerjaan'];
    $deskripsi = $_POST['deskripsi'];
    $lokasi = $_POST['lokasi'];
    $gaji_min = $_POST['gaji_min'];
    $gaji_max = $_POST['gaji_max'];
    $tanggal_berakhir = $_POST['tanggal_berakhir'];

    $sql = "INSERT INTO lowongan (id_perusahaan, judul_pekerjaan, deskripsi, lokasi, gaji_min, gaji_max, tanggal_berakhir) 
            VALUES ('$id_perusahaan', '$judul_pekerjaan', '$deskripsi', '$lokasi', '$gaji_min', '$gaji_max', '$tanggal_berakhir')";

    if (mysqli_query($koneksi, $sql)) {
        echo "✅ Data berhasil ditambahkan ke database.";
    } else {
        echo "❌ ERROR: " . mysqli_error($koneksi);
    }
}

// UPDATE DATA
if (isset($_POST['update'])) {
    $id_perusahaan = $_POST['id_perusahaan'];
    $judul_pekerjaan = $_POST['judul_pekerjaan'];
    $deskripsi = $_POST['deskripsi'];
    $lokasi = $_POST['lokasi'];
    $gaji_min = $_POST['gaji_min'];
    $gaji_max = $_POST['gaji_max'];
    $tanggal_berakhir = $_POST['tanggal_berakhir'];

    $sql = "UPDATE lowongan SET id_perusahaan='$id_perusahaan', deskripsi='$deskripsi', lokasi='$lokasi', gaji_min='$gaji_min', gaji_max='$gaji_max', tanggal_berakhir='$tanggal_berakhir' WHERE judul_pekerjaan='$judul_pekerjaan'";

    if (mysqli_query($koneksi, $sql)) {
        echo "✅ Data berhasil diperbarui.";
    } else {
        echo "❌ ERROR: " . mysqli_error($koneksi);
    }
}

// DELETE DATA
if (isset($_POST['delete'])) {
    $judul_pekerjaan = $_POST['judul_pekerjaan'];

    $sql = "DELETE FROM lowongan WHERE judul_pekerjaan='$judul_pekerjaan'";

    if (mysqli_query($koneksi, $sql)) {
        echo "✅ Data berhasil dihapus.";
    } else {
        echo "❌ ERROR: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Publish Lowongan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .header {
            background: #21a779;
            color: white;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header .logo {
            font-size: 20px;
            font-weight: bold;
        }

        .header nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
        }

        .header .search {
            background: white;
            padding: 5px;
            border-radius: 20px;
            display: flex;
            align-items: center;
        }

        .header .search input {
            border: none;
            outline: none;
            padding: 5px;
            border-radius: 20px;
        }

        .container {
            background: #21a779;
            padding: 20px;
            border-radius: 10px;
            width: 500px;
            color: white;
            margin: 20px auto;
        }

        h2 {
            text-align: center;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: none;
            border-radius: 5px;
            background: #ddd;
        }

        .row {
            display: flex;
            justify-content: space-between;
            gap: 10px;
        }

        .row .column {
            width: 48%;
        }

        button {
            background: #007bff;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 15px;
            width: 100%;
        }

        button:hover {
            background: #0056b3;
        }

        nav a.underline {
            text-decoration: underline;
        }

        .action-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
        }

        .action-buttons button {
            padding: 8px;
            font-size: 14px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        .update-btn {
            background-color: #ffc107;
            color: white;
        }

        .delete-btn {
            background-color: #dc3545;
            color: white;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="logo">
            <img src="black_on_trans 2.png" alt="Villwork Logo" width="30"> Villwork
        </div>
        <nav>
            <a href="#"><i class="fas fa-briefcase"></i> Lowongan</a>
            <a href="#" class="underline"><i class="fas fa-paper-plane"></i> Publish Lowongan</a>
            <a href="#"><i class="fas fa-ellipsis-h"></i> Lainnya</a>
        </nav>
        <div class="search">
            <input type="text" placeholder="Cari">
        </div>
    </div>

    <div class="container">
        <h2>Publish Lowongan</h2>
        <form action="create.php" method="POST">
            <label for="id_perusahaan">ID Perusahaan</label>
            <input type="text" name="id_perusahaan" placeholder="Masukkan ID Perusahaan" required>

            <label for="judul_pekerjaan">Judul Pekerjaan</label>
            <input type="text" name="judul_pekerjaan" placeholder="Contoh: Graphic Designer" required>

            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" rows="4" placeholder="Tulis deskripsi pekerjaan..." required></textarea>

            <label for="lokasi">Lokasi</label>
            <input type="text" name="lokasi" placeholder="Contoh: Jakarta / Remote" required>

            <div class="row">
                <div class="column">
                    <label for="gaji_min">Gaji Min</label>
                    <input type="number" name="gaji_min" placeholder="Contoh: 5000000" step="0.01" required>
                </div>
                <div class="column">
                    <label for="gaji_max">Gaji Max</label>
                    <input type="number" name="gaji_max" placeholder="Contoh: 10000000" step="0.01" required>
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <label for="tanggal_berakhir">Tanggal Berakhir</label>
                    <input type="date" name="tanggal_berakhir" required>
                </div>
            </div>

            <button type="submit" formaction="create.php" name="submit">Publish Lowongan</button>


            <div class="action-buttons">
                <button type="submit" formaction="update.php" name="update" class="update-btn">
                    <i class="fas fa-edit"></i> Update
                </button>
                <button type="submit" formaction="delete.php" name="delete" class="delete-btn" onclick="return confirm('Yakin ingin menghapus lowongan ini?');">
                    <i class="fas fa-trash"></i> Delete
                </button>
            </div>
        </form>
    </div>
</body>

</html>