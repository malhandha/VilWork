<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "VillWork";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST['nama'];
  $nama_pelatihan = $_POST['nama_pelatihan'];
  $nomor_telepon = $_POST['nomor_telepon'];
  $email = $_POST['email'];
  $tanggal_pelatihan = $_POST['tanggal_pelatihan'];

  $sql = "INSERT INTO pelatihan (nama, nama_pelatihan, no_tlp, email, tanggal) 
            VALUES (?, ?, ?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sssss", $nama, $nama_pelatihan, $nomor_telepon, $email, $tanggal_pelatihan);

  if ($stmt->execute()) {
    echo "<script>alert('Pendaftaran berhasil!'); window.location.href='riwayat_pelatihan.php';</script>";
  } else {
    echo "Error: " . $stmt->error;
  }
  $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pendaftaran Pelatihan</title>
  <link rel="icon" type="image/png" href="foto/logo_baru.png">
  <link rel="stylesheet" href="css/produkkonten.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

</head>

<body>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const toggle = document.getElementById("nav-toggle");
      const menu = document.getElementById("nav-menu");

      toggle.addEventListener("click", () => {
        menu.classList.toggle("show-menu");
        toggle.classList.toggle("show-icon");
      });
    });
  </script>

  <header class="header">
    <nav class="nav container">
      <div class="nav__data">
        <a href="#" class="nav__logo">
          VillWork
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
                  <i class="ri-pie-chart-line"></i> Pekerjaan Terdekat
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
                <a href="publish_lowongan_baru.php" class="dropdown__link">
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

          <li class="dropdown__item">
            <div class="nav__link">
              Charity <i class="ri-arrow-down-s-line dropdown__arrow"></i>
            </div>

            <ul class="dropdown__menu">
              <li>
                <a href="#" class="dropdown__link">
                  <i class="ri-user-line"></i> Berbagi
                </a>
              </li>

              <li>
                <a href="#" class="dropdown__link">
                  <i class="ri-lock-line"></i> Riwayat
                </a>
              </li>

              <li>
                <a href="#" class="dropdown__link">
                  <i class="ri-message-3-line"></i> Messages
                </a>
              </li>
            </ul>
          </li>

          <li><a href="#" class="nav__link">Profile</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- <style>
    :root {
      --header-height: 3.5rem;

      --black-color: #1FC28B;
      --black-color-light: #1AB882;
      --black-color-lighten: hsl(220, 20%, 18%);
      --white-color: #242323;
      --body-color: hsl(220, 100%, 97%);

      --body-font: Poppins;
      --normal-font-size: .938rem;

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
      font-family: var(--body-font);
      font-size: var(--normal-font-size);
      background-color: var(--body-color);
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
      box-shadow: 0 2px 16px hsla(220, 32%, 8%, .3);
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
      column-gap: .25rem;
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
      transition: opacity .1s, transform .4s;
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
        transition: top .4s, opacity .3s;
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
      transition: background-color .3s;
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
      transition: transform .4s;
    }

    .dropdown__link,
    .dropdown__sublink {
      padding: 1.25rem 1.25rem 1.25rem 2.5rem;
      color: var(--white-color);
      background-color: var(--black-color-light);
      display: flex;
      align-items: center;
      column-gap: .5rem;
      font-weight: var(--font-semi-bold);
      transition: background-color .3s;
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
      transition: max-height .4s ease-out;
    }

    .dropdown__item:hover .dropdown__menu,
    .dropdown__subitem:hover>.dropdown__submenu {
      max-height: 1000px;
      transition: max-height .4s ease-in;
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
        column-gap: .25rem;
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
        transition: opacity .3s, top .3s;
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
        top: .5rem;
      }

      .dropdown__item:hover .dropdown__menu {
        opacity: 1;
        top: 5.5rem;
        pointer-events: initial;
        transition: top .3s;
      }
    }
  </style> -->

  <div class="form-container">
    <h2 class="form-title">Daftar Pelatihan</h2>
    <form action="" method="POST" class="form-content">
      <div class="form-group">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" class="form-input" required>
      </div>
      <div class="form-group">
        <label class="form-label">Nama Pelatihan</label>
        <select name="nama_pelatihan" class="form-input" required>
          <option value="">Pilih Pelatihan</option>
          <option value="Belajar Microsoft Office">Belajar Microsoft Office</option>
          <option value="Cara Bertani Modern">Cara Bertani Modern</option>
          <option value="Bertukang Modern">Bertukang Modern</option>
          <option value="Ternak Sapi Sukses">Ternak Sapi Sukses</option>
        </select>
      </div>
      <div class="form-group">
        <label class="form-label">Nomor Telepon</label>
        <input type="number" name="nomor_telepon" class="form-input" required>
      </div>
      <div class="form-group">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-input" required>
      </div>
      <div class="form-group">
        <label class="form-label">Tanggal Pelatihan</label>
        <input type="date" name="tanggal_pelatihan" class="form-input" required>
      </div>
      <button type="submit" class="submit-btn">
        Submit
      </button>
    </form>
  </div>
  <style>
.form-container {
  max-width: 500px;
  margin: 150px auto; 
  position: fixed;
  padding: 30px 60px;
  background-color: #ffffff;
  border-radius: 15px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
  font-family: 'poppins', sans-serif;
}

.form-title {
  text-align: center;
  margin-bottom: 25px;
  font-size: 24px;
  font-weight: 600;
  color: #333;
}

.form-content {
  display: flex;
  flex-direction: column;
}

.form-group {
  margin-bottom: 10px;
}

.form-label {
  display: block;
  margin-bottom: 6px;
  font-size: 14px;
  font-weight: 500;
  color: #555;
}


.form-input {
  width: 100%;
  padding: 10px 14px;
  font-size: 15px;
  border: 1px solid #ccc;
  border-radius: 10px;
  transition: all 0.3s ease;
}

.form-input:focus {
  border-color: #141E43;
  box-shadow: 0 0 5px rgba(20, 30, 67, 0.3);
  outline: none;
}

.submit-btn {
  margin-top: 15px;
  background-color: #141E43;
  color: white;
  padding: 12px;
  font-size: 16px;
  border: none;
  border-radius: 12px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.submit-btn:hover {
  background-color: #0f1732;
}

@media (max-width: 576px) {
  .form-container {
    padding: 20px 15px;
  }

  .form-title {
    font-size: 20px;
  }
}

  </style>
</body>

</html>