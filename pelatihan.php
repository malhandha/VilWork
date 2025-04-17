<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Pelatihan</title>
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
            <a href="dashboard.php" class="nav__logo">
               VillWork
            </a>

            <div class="nav__toggle" id="nav-toggle">
               <i class="ri-menu-line nav__burger"></i>
               <i class="ri-close-line nav__close"></i>
            </div>
         </div>

         <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
               <li><a href="dashboard.php" class="nav__link">Home</a></li>

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

               <li><a href="publish_lowongan_baru.php" class="nav__link">Publish Lowongan</a></li>

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

               <li><a href="profile.php" class="nav__link">Profile</a></li>
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
               <img src="foto/konstruksi.jpg" alt="microsoft" class="poster-img">
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
      margin-top: 10px;
      padding: 20px;
      justify-content: top;
   }


   @media screen and (min-width: 1400px) {
      .menu {
         margin-top: -50px;
      }
   }

   @media screen and (max-width: 1200px) {
      .menu {
         margin-top: 400px;
      }
   }

   @media screen and (max-width: 1100px) {
      .menu {
         margin-top: 500px;
      }
   }

   @media screen and (max-width: 600px) {
      .menu {
         margin-top: 1200px;
      }
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

   }


   .poster {
      position: relative;
      width: 276px;
      height: 397px;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 0 15px rgba(7, 7, 7, 0.9);
   }

   .poster-img {
      width: 100%;
      display: block;
   }

   .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      color: white;
   }

   .badge {
      position: absolute;
      top: 10px;
      padding: 4px 10px;
      font-size: 14px;
      font-weight: bold;
      border-radius: 99px;
      color: white;
   }

   .badge-right {
      right: 10px;
      background: rgba(255, 255, 255, 0.9);
      color: #000;
   }

   .bottom-overlay {
      position: absolute;
      bottom: 0;
      width: 100%;
      font-style: poppins;
      padding: 18px 0px 10px 10px;
      background: rgb(0, 0, 0);
      opacity: 85%;
      display: flex;
      flex-direction: column;
      align-items: left;
      justify-content: left;
      text-align: left;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
      margin-right: 10px;
   }

   .judul {
      margin-top: 40px;
      margin-bottom: 20px;
      display: block;
      width: 100%;
   }

   .title-konten {
      margin: -5px 0px 3px 0px;
      font-size: 20px;
      font-style: poppins;
      font-weight: 500;
   }

   .formats {
      font-size: 13px;
      font-weight: 400;
      color: #ccc;
      display: flex;
      justify-content: left;
      gap: 10px;
      margin-top: 3px;
   }

   .tanggal,
   .waktu {
      display: flex;
      align-items: center;
      gap: 5px;
   }

   .beli {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      opacity: 0;
      padding: 10px 30px;
      color: #fffffe;
      justify-content: center;
      text-decoration: none;
      background: var(--black-color);
      border-radius: 30px;
      text-transform: uppercase;
      white-space: nowrap;
      letter-spacing: 1px;
      transition: 0.5s;
      z-index: 3;
   }

   .poster:hover .beli {
      opacity: 1;
   }

   .poster::before {
      content: "";
      position: absolute;
      inset: 0;
      background-color: rgba(255, 255, 255, 0);
      transition: background-color 0.3s ease;
      z-index: 1;
   }

   .poster:hover::before {
      background-color: rgba(255, 254, 254, 0.4);
   }

   h2 {
      text-align: center;
      margin-bottom: 10px;
      font-size: 25px;
   }

   .garis {}

   .app-layout {
      font-family: var(--body-font);
      background-color: var(--body-color);
      color: var(--black-color);
   }

   .app-layout .header,
   .app-layout .nav,
   .app-layout .mainpelatihan {
      max-width: 1200px;
      margin: 0 auto;
   }
</style>

</html>