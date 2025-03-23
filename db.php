<form action="db.php" method="POST">
Nama: <input type="text" name="nama"><br>
Email : <input type="text" name = "email"><br>
password : <input type="text" name="password">
<input type="submit" name="submit" value="Tambah Data">
</form>
<?php
include 'koneksi.php';
if(isset($_POST['submit'])){
$nama = $_POST['nama'];;
$query = "INSERT INTO users (nama) VALUES ('$nama')";
mysqli_query ($koneksi, $query);
echo "Data berhasil ditambahkan.";
}
?>