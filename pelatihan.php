<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VillWork - Pelatihan</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/navbar.css">
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

     <script src="js/scriptnavbar.js"></script>
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
