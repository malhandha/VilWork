<?php
$servername = "localhost";
$username = "root"; // Sesuaikan dengan MySQL Anda
$password = "";
$dbname = "VillWork"; // Sesuaikan dengan database Anda

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$query = "SELECT * FROM pelatihan"; 
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Riwayat Pelatihan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <div class="max-w-4xl mx-auto mt-10 bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-center text-2xl font-semibold mb-6">Riwayat Pendaftaran Pelatihan</h2>
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-green-500 text-white">
                    <th class="border border-gray-300 px-4 py-2">ID</th>
                    <th class="border border-gray-300 px-4 py-2">Nama</th>
                    <th class="border border-gray-300 px-4 py-2">Pelatihan</th>
                    <th class="border border-gray-300 px-4 py-2">No. Telepon</th>
                    <th class="border border-gray-300 px-4 py-2">Email</th>
                    <th class="border border-gray-300 px-4 py-2">Tanggal</th>
                    <th class="border border-gray-300 px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr class='bg-gray-100 text-center'>";
                        echo "<td class='border px-4 py-2'>" . $row["id_pelatihan"] . "</td>";
                        echo "<td class='border px-4 py-2'>" . $row["nama"] . "</td>";
                        echo "<td class='border px-4 py-2'>" . $row["nama_pelatihan"] . "</td>";
                        echo "<td class='border px-4 py-2'>" . $row["no_tlp"] . "</td>";
                        echo "<td class='border px-4 py-2'>" . $row["email"] . "</td>";
                        echo "<td class='border px-4 py-2'>" . $row["tanggal"] . "</td>";
                        echo "<td class='border px-4 py-2'>
                                <a href='edit_pelatihan.php?id_pelatihan=" . $row["id_pelatihan"] . "' class='bg-blue-500 text-white px-3 py-1 rounded'>Edit</a>
                                <a href='hapus_pelatihan.php?id_pelatihan=" . $row["id_pelatihan"] . "' class='bg-red-500 text-white px-3 py-1 rounded' onclick='return confirm(\"Yakin ingin menghapus?\")'>Hapus</a>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7' class='text-center py-4'>Belum ada pendaftaran</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php
$conn->close();
?>
