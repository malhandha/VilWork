<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$database = "VillWork";

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama_lengkap"];
    $email = $_POST["email"];
    $telepon = $_POST["nomor_telepon"];
    $nominal = $_POST["nominal_donasi"];
    $metode = $_POST["metode_pembayaran"];

    $stmt = $conn->prepare("INSERT INTO charity (nama_lengkap, email, nomor_telepon, nominal_donasi, metode_pembayaran) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssds", $nama, $email, $telepon, $nominal, $metode);
    $stmt->execute();
    $stmt->close();
}

$query = "SELECT * FROM charity ORDER BY tanggal_donasi DESC";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Donasi Charity | VillWork</title>
    <link rel="icon" type="image/png" href="foto/logo_baru.png">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">

    <header class="header">
        <nav class="nav container">
            <div class="nav__data">
                <a href="dashboard.php" class="nav__logo">
                    <img src="foto/logo_baru.png" alt="" class="logo" height="22px" width="22px">
                    <p>VillWork</p>
                </a>
                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line nav__burger"></i>
                    <i class="ri-close-line nav__close"></i>
                </div>
            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li><a href="#" class="nav__link">Home</a></li>

                    <li class="dropdown__item">
                        <div class="nav__link">
                            Cari Kerja <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <ul class="dropdown__menu">
                            <li>
                                <a href="#" class="dropdown__link">
                                    <i class="ri-pie-chart-line"></i> 
                                    Pekerjaan Terdekat
                                </a>
                            </li>

                            <li>
                                <a href="#" class="dropdown__link">
                                    <i class="ri-arrow-up-down-line"></i> Riwayat Pekerjaan
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown__item">
                        <div class="nav__link">
                            Unggah Pekerjaan <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <ul class="dropdown__menu">
                            <li>
                                <a href="#" class="dropdown__link">
                                    <i class="ri-user-line"></i> Postingan Saya
                                </a>
                            </li>

                            <li>
                                <a href="#" class="dropdown__link">
                                    <i class="ri-lock-line"></i> Tambah Unggahan
                                </a>
                            </li>

                            <li>
                                <a href="#" class="dropdown__link">
                                    <i class="ri-message-3-line"></i> Riwayat
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown__item">
                        <div class="nav__link">
                            Pelatihan <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <ul class="dropdown__menu">
                            <li>
                                <a href="pelatihan.php" class="dropdown__link">
                                    <i class="ri-presentation-line"></i>Pelatian Terbaru
                                </a>
                            </li>

                            <li>
                                <a href="pendaftaran_pelatihan.php" class="dropdown__link">
                                    <i class="ri-add-circle-line"></i>Tambah Pelatihan
                                </a>
                            </li>

                            <li>
                                <a href="riwayat_pelatihan.php" class="dropdown__link">
                                    <i class="ri-user-line"></i>Pelatihan Saya
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="charity.php" class="nav__link">Charity</a></li>
                    </li>
                    <li><a href="profile.php" class="nav__link">Profile</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="p-6 max-w-5xl mx-auto">
        <h2 class="text-2xl font-semibold mb-4 text-gray-800">Form Donasi</h2>

        <form method="post" class="bg-white p-6 rounded-lg shadow-md grid grid-cols-1 md:grid-cols-2 gap-4 mb-10">
            <input name="nama_lengkap" required placeholder="Nama Lengkap" class="border p-2 rounded" />
            <input name="email" type="email" required placeholder="Email" class="border p-2 rounded" />
            <input name="nomor_telepon" required placeholder="Nomor Telepon" class="border p-2 rounded" />
            <input name="nominal_donasi" type="number" required placeholder="Nominal Donasi (Rp)" class="border p-2 rounded" />
            <select name="metode_pembayaran" required class="border p-2 rounded col-span-1 md:col-span-2">
                <option value="">-- Pilih Metode Pembayaran --</option>
                <option value="Transfer Bank">Transfer Bank</option>
                <option value="QRIS">QRIS</option>
                <option value="E-Wallet">E-Wallet</option>
                <option value="Virtual Account">Virtual Account</option>
            </select>
            <button type="submit" class="bg-blue-700 hover:bg-blue-800 text-white px-4 py-2 rounded col-span-1 md:col-span-2">
                Kirim Donasi
            </button>
        </form>

        <h2 class="text-2xl font-semibold mb-4 text-gray-800">Data Donasi</h2>
        <?php if ($result->num_rows > 0): ?>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="bg-white rounded-lg p-4 shadow hover:shadow-lg cursor-pointer"
                        onclick='showDetail(<?= json_encode($row); ?>)'>
                        <h3 class="font-bold text-blue-900"><?= htmlspecialchars($row['nama_lengkap']); ?></h3>
                        <p class="text-gray-600 text-sm"><?= htmlspecialchars($row['email']); ?></p>
                        <p class="text-green-700 font-semibold text-sm">Rp<?= number_format($row['nominal_donasi'], 0, ',', '.'); ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else: ?>
            <div class="text-gray-600">Belum ada data donasi.</div>
        <?php endif; ?>
    </main>

    <div id="detailModal" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center z-50">
        <div class="bg-white rounded-lg p-6 w-full max-w-lg relative">
            <button onclick="closeModal()" class="absolute top-2 right-2 text-gray-600 hover:text-red-500 text-xl">&times;</button>
            <h3 class="text-xl font-bold mb-4">Detail Donasi</h3>
            <p><strong>Nama:</strong> <span id="modalNama"></span></p>
            <p><strong>Email:</strong> <span id="modalEmail"></span></p>
            <p><strong>Telepon:</strong> <span id="modalTelepon"></span></p>
            <p><strong>Nominal:</strong> Rp<span id="modalNominal"></span></p>
            <p><strong>Pembayaran:</strong> <span id="modalMetode"></span></p>
            <p><strong>Tanggal:</strong> <span id="modalTanggal"></span></p>
        </div>
    </div>

    <script>
        function showDetail(data) {
            document.getElementById("modalNama").innerText = data.nama_lengkap;
            document.getElementById("modalEmail").innerText = data.email;
            document.getElementById("modalTelepon").innerText = data.nomor_telepon;
            document.getElementById("modalNominal").innerText = parseFloat(data.nominal_donasi).toLocaleString('id-ID');
            document.getElementById("modalMetode").innerText = data.metode_pembayaran;
            document.getElementById("modalTanggal").innerText = new Date(data.tanggal_donasi).toLocaleString('id-ID');

            document.getElementById("detailModal").classList.remove("hidden");
            document.getElementById("detailModal").classList.add("flex");
        }

        function closeModal() {
            document.getElementById("detailModal").classList.add("hidden");
            document.getElementById("detailModal").classList.remove("flex");
        }
    </script>

</body>

<style>
    :root {
        --header-height: 3.5rem;
        --black-color: #141e43;
        --black-color-light: rgb(25, 38, 83);
        --black-color-lighten: #dde3f3;
        --white-color: rgb(235, 235, 235);
        --body-color: rgb(235, 235, 235);

        --body-font: "Poppins", sans-serif;
        --normal-font-size: 0.938rem;

        --font-regular: 400;
        --font-semi-bold: 600;

        --z-tooltip: 10;
        --z-fixed: 100;
    }

    @media screen and (min-width: 1024px) {
        :root {
            --normal-font-size: 1rem;
        }
    }

    * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }

    body {
        margin: 0;
        background: var(--body-color);
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        font-family: var(--body-font);
        font-size: var(--normal-font-size);
    }

    ul {
        list-style: none;
    }

    a {
        text-decoration: none;
    }

    .container {
        max-width: 1120px;
        margin-inline: 1.5rem;
    }

    .header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background-color: var(--black-color);
        box-shadow: 0 2px 16px hsla(220, 32%, 8%, 0.3);
        z-index: var(--z-fixed);
    }

    .nav {
        height: var(--header-height);
    }

    .nav__logo,
    .nav__burger,
    .nav__close {
        color: var(--white-color);
    }

    .nav__data {
        height: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .nav__logo {
        display: inline-flex;
        align-items: center;
        column-gap: 0.25rem;
        font-weight: var(--font-semi-bold);
    }

    .nav__logo i {
        font-weight: initial;
        font-size: 1.25rem;
    }

    .nav__toggle {
        position: relative;
        width: 32px;
        height: 32px;
    }

    .nav__burger,
    .nav__close {
        position: absolute;
        width: max-content;
        height: max-content;
        inset: 0;
        margin: auto;
        font-size: 1.25rem;
        cursor: pointer;
        transition: opacity 0.1s, transform 0.4s;
    }

    .nav__close {
        opacity: 0;
    }

    @media screen and (max-width: 1118px) {
        .nav__menu {
            position: absolute;
            left: 0;
            top: 2.5rem;
            width: 100%;
            height: calc(100vh - 3.5rem);
            overflow: auto;
            pointer-events: none;
            opacity: 0;
            transition: top 0.4s, opacity 0.3s;
        }

        .nav__menu::-webkit-scrollbar {
            width: 0;
        }

        .nav__list {
            background-color: var(--black-color);
            padding-top: 1rem;
        }
    }

    .nav__link {
        color: var(--white-color);
        background-color: var(--black-color);
        font-weight: var(--font-semi-bold);
        padding: 1.25rem 1.5rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: background-color 0.3s;
    }

    .nav__link:hover {
        background-color: var(--black-color-light);
    }

    .show-menu {
        opacity: 1;
        top: 3.5rem;
        pointer-events: initial;
    }

    .show-icon .nav__burger {
        opacity: 0;
        transform: rotate(90deg);
    }

    .show-icon .nav__close {
        opacity: 1;
        transform: rotate(90deg);
    }

    .dropdown__item {
        cursor: pointer;
    }

    .dropdown__arrow {
        font-size: 1.25rem;
        font-weight: initial;
        transition: transform 0.4s;
    }

    .dropdown__link,
    .dropdown__sublink {
        padding: 1.25rem 1.25rem 1.25rem 2.5rem;
        color: var(--white-color);
        background-color: var(--black-color-light);
        display: flex;
        align-items: center;
        column-gap: 0.5rem;
        font-weight: var(--font-semi-bold);
        transition: background-color 0.3s;
    }


    .dropdown__link i,
    .dropdown__sublink i {
        font-size: 1.25rem;
        font-weight: initial;
    }

    .dropdown__link:hover,
    .dropdown__sublink:hover {
        background-color: var(--black-color);
    }

    .dropdown__menu,
    .dropdown__submenu {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s ease-out;
    }

    .dropdown__item:hover .dropdown__menu,
    .dropdown__subitem:hover>.dropdown__submenu {
        max-height: 1000px;
        transition: max-height 0.4s ease-in;
    }

    .dropdown__item:hover .dropdown__arrow {
        transform: rotate(180deg);
    }

    .dropdown__add {
        margin-left: auto;
    }

    .dropdown__sublink {
        background-color: var(--black-color-lighten);
    }

    @media screen and (max-width: 340px) {
        .container {
            margin-inline: 1rem;
        }

        .nav__link {
            padding-inline: 1rem;
        }
    }

    @media screen and (min-width: 1118px) {
        .container {
            margin-inline: auto;
        }

        .nav {
            height: calc(var(--header-height) + 2rem);
            display: flex;
            justify-content: space-between;
        }

        .nav__toggle {
            display: none;
        }

        .nav__list {
            height: 100%;
            display: flex;
            column-gap: 3rem;
        }

        .nav__link {
            height: 100%;
            padding: 0;
            justify-content: initial;
            column-gap: 0.25rem;
        }

        .nav__link:hover {
            background-color: transparent;
        }

        .dropdown__item,
        .dropdown__subitem {
            position: relative;
        }

        .dropdown__menu,
        .dropdown__submenu {
            max-height: initial;
            overflow: initial;
            position: absolute;
            left: 0;
            top: 6rem;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s, top 0.3s;
        }

        .dropdown__link,
        .dropdown__sublink {
            padding-inline: 1rem 3.5rem;
        }

        .dropdown__subitem .dropdown__link {
            padding-inline: 1rem;
        }

        .dropdown__submenu {
            position: absolute;
            left: 100%;
            top: 0.5rem;
        }

        .dropdown__item:hover .dropdown__menu {
            opacity: 1;
            top: 5.5rem;
            pointer-events: initial;
            transition: top 0.3s;
        }
    }


    .mainpelatihan {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        margin-top: px;
        padding: 20px;
        justify-content: top;
    }

    @media (max-width: 1200px) {
        .mainpelatihan {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 900px) {
        .mainpelatihan {
            grid-template-columns: repeat(2, 1fr);
        }

    }

    @media (max-width: 600px) {
        .mainpelatihan {
            grid-template-columns: 1fr;
        }

        .menu {
            margin-top: 500px;
        }
    }
</style>

</html>