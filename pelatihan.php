<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VillWork - Pelatihan</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: poppins, sans-serif;
            background-color: #f4f4f4;
        }
        .pelatihan-container {
            display: flex;
            gap: 20px;
            padding: 20px;
            flex-wrap: wrap;
            margin-top: 0px;
        }
        .riwayat-container {
            display: flex;
            gap: 20px;
            padding: 20px;
            flex-wrap: wrap;
        }
        .pelatihan-card {
            background: white;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            cursor: pointer;
        }
        .pelatihan-card img {
            width: 274px;
            height: 395px;
            border-radius: 8px;
        }
        h2 {
            text-align: center;
            margin-top: 20px;
        }
        .history-card img {
            width: 394px;
            height: 210px;
            border-radius: 8px;
        }
    </style>
</head>
<body>
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

     <style>

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
.dropdown__subitem:hover > .dropdown__submenu {
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

     </style>
     <script>
       const showMenu = (toggleId, navId) =>{
  const toggle = document.getElementById(toggleId),
        nav = document.getElementById(navId)

  toggle.addEventListener('click', () =>{
      nav.classList.toggle('show-menu')

      toggle.classList.toggle('show-icon')
  })
}

showMenu('nav-toggle','nav-menu')
     </script>
     <style>
        main.konten{
            margin-top: 100px;
        }
     </style>
    <main class="konten">
        <div>
        <section class="pelatihan-terbaru"  >
            <h2  >Pelatihan Terbaru</h2>
            <div class="pelatihan-container">
                <div class="pelatihan-card" onclick="window.location.href='pendaftaran_pelatihan.php'">
                    <img src="pelatihan1.png" alt="Belajar Microsoft Office">
                    
                </div>
                <div class="pelatihan-card" onclick="window.location.href='pendaftaran_pelatihan.php'">
                    <img src="pelatihan2.png" alt="Cara Bertani Modern">
                    
                </div>
                <div class="pelatihan-card" onclick="window.location.href='pendaftaran_pelatihan.php'">
                    <img src="pelatihan3.png" alt="Bertukang Modern">
                    
                </div>
                <div class="pelatihan-card" onclick="window.location.href='pendaftaran_pelatihan.php'">
                    <img src="pelatihan4.png" alt="Ternak Sapi Sukses">
                    
                </div>
            </div>
        </section>

        <section class="riwayat-pelatihan">
            <h2>Riwayat Pelatihan</h2>
            <div class="riwayat-container">
                <div class="history-card" >
                    <img src="history1.png" alt="Mengolah Limbah Plastik">
                </div>
                <div class="history-card" >
                    <img src="history2.png" alt="Belajar Membuat Kue">
                </div>
                <div class="history-card" >
                    <img src="history3.png" alt="Membuat Kue Tradisional">
                </div>
            </div>
        </section>
    </div>
    </main>

    <script src="script.js"></script>
</body>
</html>
