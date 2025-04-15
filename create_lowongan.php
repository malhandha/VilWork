<?php
include 'koneksi.php';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul_pekerjaan = isset($_POST['judul_pekerjaan']) ? trim($_POST['judul_pekerjaan']) : '';
    $nama_perusahaan = isset($_POST['nama_perusahaan']) ? trim($_POST['nama_perusahaan']) : '';
    $lokasi          = isset($_POST['lokasi']) ? trim($_POST['lokasi']) : '';
    $kategori        = isset($_POST['kategori']) ? trim($_POST['kategori']) : '';
    $deskripsi       = isset($_POST['deskripsi']) ? trim($_POST['deskripsi']) : '';
    $gaji_min        = isset($_POST['gaji_min']) ? floatval($_POST['gaji_min']) : 0;
    $gaji_max        = isset($_POST['gaji_max']) ? floatval($_POST['gaji_max']) : 0;
    $tanggal_berakhir= isset($_POST['tanggal_berakhir']) ? trim($_POST['tanggal_berakhir']) : '';
    $emailHRD        = isset($_POST['emailHRD']) ? trim($_POST['emailHRD']) : '';
    $id_perusahaan   = 0; 
    $tanggal_posting = date("Y-m-d H:i:s"); 
    $favorite        = 0; 

    if (empty($judul_pekerjaan) || empty($nama_perusahaan) || empty($lokasi) || empty($kategori) || empty($deskripsi) || empty($tanggal_berakhir) || empty($emailHRD)) {
        echo json_encode(["success" => false, "message" => "Semua field wajib diisi."]);
        exit;
    }
    if (!filter_var($emailHRD, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(["success" => false, "message" => "Format email tidak valid."]);
        exit;
    }
    if ($gaji_min < 0 || $gaji_max < 0 || $gaji_min > $gaji_max) {
        echo json_encode(["success" => false, "message" => "Rentang gaji tidak valid."]);
        exit;
    }
    $logo_perusahaan = "";
    if (isset($_FILES['logo_perusahaan']) && $_FILES['logo_perusahaan']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = "uploads/";
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        $allowedTypes = ['image/jpeg', 'image/png', 'image/jpg'];
        $fileType = mime_content_type($_FILES["logo_perusahaan"]["tmp_name"]);
        if (!in_array($fileType, $allowedTypes)) {
            echo json_encode(["success" => false, "message" => "Hanya file JPG, JPEG, dan PNG yang diperbolehkan."]);
            exit;
        }
        $filename   = time() . "_" . basename($_FILES["logo_perusahaan"]["name"]);
        $targetFile = $uploadDir . $filename;
        if (move_uploaded_file($_FILES["logo_perusahaan"]["tmp_name"], $targetFile)) {
            $logo_perusahaan = $targetFile;
        }
    }
    $sql = "INSERT INTO lowongan 
            (id_perusahaan, judul_pekerjaan, deskripsi, lokasi, gaji_min, gaji_max, tanggal_posting, tanggal_berakhir, logo_perusahaan, emailHRD, kategori, favorite, nama_perusahaan)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isssddsssssis",
        $id_perusahaan,
        $judul_pekerjaan,
        $deskripsi,
        $lokasi,
        $gaji_min,
        $gaji_max,
        $tanggal_posting,
        $tanggal_berakhir,
        $logo_perusahaan,
        $emailHRD,
        $kategori,
        $favorite,
        $nama_perusahaan
    );
    
    if ($stmt->execute()) {
        echo json_encode(["success" => true, "message" => "Lowongan berhasil ditambahkan!"]);
    } else {
        echo json_encode(["success" => false, "message" => "Gagal menambahkan lowongan: " . $stmt->error]);
    }
    
    $stmt->close();
}
$conn->close();
?>
