<?php
include 'koneksi.php';
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $json = file_get_contents("php://input");
    $data = json_decode($json, true);
    
    if (!isset($data['id']) || empty($data['id'])) {
        echo json_encode(["success" => false, "message" => "ID tidak ditemukan."]);
        exit();
    }
    
    $id = $data['id'];
} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (!isset($_GET['id']) || empty($_GET['id'])) {
        echo json_encode(["success" => false, "message" => "ID tidak ditemukan."]);
        exit();
    }
    
    $id = $_GET['id'];
} else {
    echo json_encode(["success" => false, "message" => "Metode request tidak valid."]);
    exit();
}

$sql = "DELETE FROM lowongan WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo json_encode(["success" => true, "message" => "Lowongan berhasil dihapus."]);
} else {
    echo json_encode(["success" => false, "message" => "Gagal menghapus lowongan: " . $stmt->error]);
}

$stmt->close();
$conn->close();
?>
