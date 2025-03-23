<?php
include_once("koneksi.php");

if (isset($_GET['id_pelatihan'])) {
    $id_pelatihan = $_GET['id_pelatihan'];
    
    $query = "DELETE FROM pelatihan WHERE id_pelatihan='$id_pelatihan'";
    $delete = mysqli_query($conn, $query);
    
    if ($delete) {
        echo "<script>alert('Data berhasil dihapus!'); window.location='riwayat_pelatihan.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data!'); window.location='riwayat_pelatihan.php';</script>";
    }
} else {
    echo "<script>alert('ID tidak ditemukan!'); window.location='riwayat_pelatihan.php';</script>";
}
?>
