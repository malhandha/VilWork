<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Pelatihan</title>
   <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
   <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="stylesheet" href="css/produkkonten.css">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body class="app-layout">
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
            <script src="https://cdn.tailwindcss.com"></script>

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
   <div class="menu">
      <h2>Pelatihan Terbaru</h2>
      <div class="mainpelatihan">
         <div class="konten">
            <div class="poster">
               <img src="foto/msoffice.jpg" alt="microsoft" class="poster-img">
               <div class="overlay">
                  <div class="badge badge-right">11 Juni 2025</div>
                  <a href="pendaftaran_pelatihan.php" class="beli">Daftar Sekarang</a>
                  <div class="bottom-overlay">
                     <h1 class="title-konten">Belajar Micosoft Ofice</h1>
                     <div class="formats">
                        <div class="tanggal">
                           <i class="ri-calendar-todo-line"></i>
                           <span>Rabu, 11 Juni 2025</span>
                        </div>
                     </div>
                     <div class="formats">
                        <div class="waktu">
                           <i class="ri-time-line"></i>
                           <span>17.00 - 19.00 WIB</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="konten">
            <div class="poster">
               <img src="foto/tanipelatihan.jpg" alt="microsoft" class="poster-img">
               <div class="overlay">
                  <div class="badge badge-right">24 Juni 2025</div>
                  <a href="pendaftaran_pelatihan.php" class="beli">Daftar Sekarang</a>
                  <div class="bottom-overlay">
                     <h1 class="title-konten">Belajar Bertani</h1>
                     <div class="formats">
                        <div class="tanggal">
                           <i class="ri-calendar-todo-line"></i>
                           <span>Selasa, 24 Juni 2025</span>
                        </div>
                     </div>
                     <div class="formats">
                        <div class="waktu">
                           <i class="ri-time-line"></i>
                           <span>11.00 - 13.00 WIB</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="konten">
            <div class="poster">
               <img src="foto/ternakpelatihan.jpg" alt="microsoft" class="poster-img">
               <div class="overlay">
                  <div class="badge badge-right">02 Juli 2025</div>
                  <a href="pendaftaran_pelatihan.php" class="beli">Daftar Sekarang</a>
                  <div class="bottom-overlay">
                     <h1 class="title-konten">Belajar Beternak</h1>
                     <div class="formats">
                        <div class="tanggal">
                           <i class="ri-calendar-todo-line"></i>
                           <span>Selasa, 02 Juli 2025</span>
                        </div>
                     </div>
                     <div class="formats">
                        <div class="waktu">
                           <i class="ri-time-line"></i>
                           <span>09.00 - 11.00 WIB</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="konten">
            <div class="poster">
               <img src="foto/konstruksipelatihan.jpg" alt="microsoft" class="poster-img">
               <div class="overlay">
                  <div class="badge badge-right">11 Juli 2025</div>
                  <a href="pendaftaran_pelatihan.php" class="beli">Daftar Sekarang</a>
                  <div class="bottom-overlay">
                     <h1 class="title-konten">Belajar Konstruksi Umum</h1>
                     <div class="formats">
                        <div class="tanggal">
                           <i class="ri-calendar-todo-line"></i>
                           <span>Jumat, 11 Juli 2025</span>
                        </div>
                     </div>
                     <div class="formats">
                        <div class="waktu">
                           <i class="ri-time-line"></i>
                           <span>10.00 - 12.00 WIB</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>
<style>

</style>

</html>