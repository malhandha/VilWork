<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "VillWork";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " .mysqli_connect_error());
}

?>
<?php
try {
    $dsn = "mysql:host=localhost;dbname=VillWork";
    $username = "root";
    $password = "";
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    $pdo = new PDO($dsn, $username, $password, $options);
    echo "Koneksi berhasil!";
    } catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
    }
    ?>