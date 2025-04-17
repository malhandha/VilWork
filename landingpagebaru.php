<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VillWork - Home</title>
  <link rel="icon" type="image/png" href="foto/logo_baru.png">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
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
  <!-- Navigation -->
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
            <li class="nav__item nav__auth">
                <div class="nav__btns login">
                    <button class="btn signup">Sign Up</button>
                    <button class="btn signin">Login</button>
                    <div class="animation-btn start-signup"></div>
                </div>
            </li>
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

  <!-- Banner Slider -->
  <section class="banner-slider">
    <div class="vilwork-banner" id="vilwork-banner">
      <div class="banner-content">
        <h2>Welcome to VillWork</h2>
        <p>Your gateway to job opportunities and professional growth.</p>
      </div>
    </div>
    <div class="vilwork-banner" id="vilwork-banner1">
      <div class="banner-content">
        <h2>Discover Local Jobs</h2>
        <p>Find the best jobs near you with ease and confidence.</p>
      </div>
    </div>
    <div class="vilwork-banner" id="vilwork-banner2">
      <div class="banner-content">
        <h2>Post Your Vacancies</h2>
        <p>Connect with talented professionals ready to work for you.</p>
      </div>
    </div>
    <div class="vilwork-banner" id="vilwork-banner3">
      <div class="banner-content">
        <h2>Join Training Programs</h2>
        <p>Upgrade your skills with our curated training sessions.</p>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section class="features">
    <h2>Our Features</h2>
    <div class="feature-grid">
      <div class="feature-item">
        <i class="ri-wallet-alt-fill"></i>
        <h5>Secure Payments</h5>
        <p>Fast and secure payment processing for all transactions.</p>
      </div>
      <div class="feature-item">
        <i class="ri-briefcase-4-line"></i>
        <h5>Professional Profiles</h5>
        <p>Detailed profiles to showcase your skills and experience.</p>
      </div>
      <div class="feature-item">
        <i class="ri-community-line"></i>
        <h5>Community Support</h5>
        <p>Join our community of professionals and grow together.</p>
      </div>
    </div>
  </section>
  <section class="training">
    <h2>Pelatihan Terbaru</h2>
    <div class="training-grid">
      <!-- Card 1 -->
      <div class="training-card bgsatu">
        <img src="foto/msoffice.jpg" alt="Pelatihan MS Office">
        <div class="overlay">
          <div class="text"><h2>8/10</h2></div>
          <div class="info">
            <h3>Belajar Microsoft Office</h3>
            <p>Pelajari Word, Excel, dan PowerPoint untuk produktivitas maksimal.</p>
          </div>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="training-card bgdua">
        <img src="foto/tanipelatihan.jpg" alt="Pelatihan Bertani">
        <div class="overlay">
          <div class="text"><h2>8/10</h2></div>
          <div class="info">
            <h3>Belajar Bertani Modern</h3>
            <p>Teknik pertanian berkelanjutan untuk petani masa kini.</p>
          </div>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="training-card bgdua">
        <img src="foto/ternakpelatihan.jpg" alt="Pelatihan Beternak">
        <div class="overlay">
          <div class="text"><h2>8/10</h2></div>
          <div class="info">
            <h3>Belajar Beternak</h3>
            <p>Manajemen peternakan dan kesejahteraan hewan untuk hasil optimal.</p>
          </div>
        </div>
      </div>
      <!-- Card 4 -->
      <div class="training-card bgdua">
        <img src="foto/konstruksi.jpg" alt="Pelatihan Konstruksi">
        <div class="overlay">
          <div class="text"><h2>8/10</h2></div>
          <div class="info">
            <h3>Belajar Konstruksi Umum</h3>
            <p>Dasar-dasar teknik sipil dan konstruksi untuk profesional baru.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="sellers">
    <h2>Top Instructors</h2>
    <div class="sellers-grid">
      <div class="seller-item">
        <img src="foto/profile.png" alt="Instruktur A">
        <div class="info">
          <h4>Instruktur A</h4>
          <p>15K+ Students</p>
        </div>
      </div>
      <div class="seller-item">
        <img src="foto/profile.png" alt="Instruktur B">
        <div class="info">
          <h4>Instruktur B</h4>
          <p>12K+ Students</p>
        </div>
      </div>
      <div class="seller-item">
        <img src="foto/profile.png" alt="Instruktur C">
        <div class="info">
          <h4>Instruktur C</h4>
          <p>9K+ Students</p>
        </div>
      </div>
      <div class="seller-item">
        <img src="foto/profile.png" alt="Instruktur D">
        <div class="info">
          <h4>Instruktur D</h4>
          <p>4K+ Students</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <h3>Empower Your Career With VillWork</h3>
    <div class="footer-right">
      <div class="links">
        <a href="#">Privacy Policy</a>
        <a href="#">Cooperation</a>
        <a href="#">Sponsorship</a>
        <a href="#">Contact Us</a>
      </div>
      <div class="social">
        <i class="ri-instagram-line"></i>
        <i class="ri-facebook-fill"></i>
        <i class="ri-github-fill"></i>
      </div>
      <p>© 2025 VillWork. All Rights Reserved.</p>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="js/main.js"></script>
  <script>
    // Nav Toggle
    const toggle = document.getElementById('nav-toggle');
    const menu = document.getElementById('nav-menu');
    const burger = document.querySelector('.nav__burger');
    const closeIcon = document.querySelector('.nav__close');
    toggle.addEventListener('click', () => {
      menu.classList.toggle('show-menu');
      burger.classList.toggle('ri-close-line');
      closeIcon.classList.toggle('ri-menu-line');
    });

    // Banner Slider
    const banners = document.querySelectorAll('.banner-slider .vilwork-banner');
    let idx = 0;
    banners.forEach((b, i) => { if(i!==0) b.style.display='none'; });
    setInterval(() => {
      banners[idx].style.display='none';
      idx = (idx+1)%banners.length;
      banners[idx].style.display='flex';
    }, 5000);
  </script>
</body>
<style>
  /* Core Styles */
  *{margin:0;padding:0;box-sizing:border-box;font-family:'Poppins', sans-serif;}
  a{text-decoration:none;color:inherit;}
  img{display:block;width:100%;height:auto;object-fit:cover;}
  h2,h3,h4,h5{margin-bottom:1rem;}
  p{margin-bottom:1.5rem;color:#555;}
  /* Navigation */
  /*============================
=         Root Vars         =
============================*/
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

/*reset dan layout*/
* {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
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

/*header*/
.header {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  background-color: var(--black-color);
  box-shadow: 0 2px 16px hsla(220, 32%, 8%, 0.3);
  z-index: var(--z-fixed);
}

/*navbar*/
.nav {
  height: var(--header-height);
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
  color: var(--white-color);
  font-weight: var(--font-semi-bold);
}

.nav__logo i {
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
  inset: 0;
  margin: auto;
  font-size: 1.25rem;
  color: var(--white-color);
  cursor: pointer;
  transition: opacity 0.1s, transform 0.4s;
}

.nav__close {
  opacity: 0;
}

/* Menu - Mobile */
@media screen and (max-width: 1118px) {
  .nav__menu {
    position: absolute;
    top: 2.5rem;
    left: 0;
    width: 100%;
    height: calc(100vh - 3.5rem);
    opacity: 0;
    pointer-events: none;
    transition: top 0.4s, opacity 0.3s;
    overflow: auto;
  }

  .nav__menu::-webkit-scrollbar {
    width: 0;
  }

  .nav__list {
    background-color: var(--black-color);
    padding-top: 1rem;
  }
}

/* Menu Item */
.nav__link {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 1.25rem 1.5rem;
  font-weight: var(--font-semi-bold);
  color: var(--white-color);
  background-color: var(--black-color);
  transition: background-color 0.3s;
}

.nav__link:hover {
  background-color: var(--black-color-light);
}

/* Show state */
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

/*dropdown*/
.dropdown__item {
  cursor: pointer;
}

.dropdown__arrow {
  font-size: 1.25rem;
  transition: transform 0.4s;
}

.dropdown__link,
.dropdown__sublink {
  display: flex;
  align-items: center;
  column-gap: 0.5rem;
  padding: 1.25rem 1.25rem 1.25rem 2.5rem;
  font-weight: var(--font-semi-bold);
  color: var(--white-color);
  background-color: var(--black-color-light);
  transition: background-color 0.3s;
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
.dropdown__subitem:hover > .dropdown__submenu {
  max-height: 1000px;
  transition: max-height 0.4s ease-in;
}

.dropdown__item:hover .dropdown__arrow {
  transform: rotate(180deg);
}

.dropdown__sublink {
  background-color: var(--black-color-lighten);
}

/*dekstop navigasi*/
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
    display: flex;
    height: 100%;
    column-gap: 3rem;
  }

  .nav__link {
    padding: 0;
    height: 100%;
    justify-content: flex-start;
    column-gap: 0.25rem;
    background-color: transparent;
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
    position: absolute;
    top: 6rem;
    left: 0;
    opacity: 0;
    pointer-events: none;
    transition: opacity 0.3s, top 0.3s;
  }

  .dropdown__submenu {
    left: 100%;
    top: 0.5rem;
  }

  .dropdown__item:hover .dropdown__menu {
    opacity: 1;
    top: 5.5rem;
    pointer-events: initial;
  }

  .dropdown__link,
  .dropdown__sublink {
    padding-inline: 1rem 3.5rem;
  }

  .dropdown__subitem .dropdown__link {
    padding-inline: 1rem;
  }
}

/*login/signin*/
.nav__btns.login {
  position: relative;
  display: flex;
  gap: 0rem;
  align-items: center; 
  top: 25%;
  transform: translateY(10%);
}
.nav__btns .btn {
  position: relative;
  z-index: 2;
  padding: 0.6rem 1.2rem;
  border: none;
  font-weight: bold;
  color: white;
  border-radius: 8px;
  background-color: transparent;
  cursor: pointer;
  transition: color 0.3s ease;
}
.nav__btns .btn:hover {
  color: #dde3f3;
}
.animation-btn {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  background: rgba(15, 34, 130, 0.8);
  border-radius: 10px;
  transition: all 0.4s ease;
  z-index: 1;
}

/* Button Hover Animations */
.start-signup,
.signup:hover ~ .animation-btn {
  width: 90px;
  left: 0;
}
.signin {
  margin-left: 1rem;
}
.signin:hover ~ .animation-btn {
  width: 80px;
  left: 105px;
}

/*responsive*/
@media screen and (max-width: 340px) {
  .container {
    margin-inline: 1rem;
  }

  .nav__link {
    padding-inline: 1rem;
  }
}
  /* Banner Slider */
.banner-slider {
  position: relative;
  width: 100%;
  height: 90vh;
  overflow: hidden;
}

/*banner per slide*/
.vilwork-banner {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  background-size: cover;
  background-position: center;
}

/*bg image banner*/
#vilwork-banner {
  background-image: url('foto/vilwork-banner.jpg');
}

#vilwork-banner1 {
  background-image: url('foto/vilwork-banner2.jpg');
}

#vilwork-banner2 {
  background-image: url('foto/vilwork-banner3.jpg');
}

#vilwork-banner3 {
  background-image: url('foto/vilwork-banner.jpg');
}

/*banner content*/
.banner-content {
  background: rgba(0, 0, 0, 0.5);
  padding: 2rem;
  border-radius: 10px;
  color: #fff;
  text-align: center;
}
  /* Features */
  .features{padding:4rem 1rem;text-align:center;}
  .feature-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:2rem;max-width:1200px;margin:auto;}
  .feature-item{background:#fff;padding:2rem;border-radius:10px;box-shadow:0 2px 10px rgba(0,0,0,0.1);transition:transform .3s;}
  .feature-item:hover{transform:translateY(-10px);}  
  .feature-item i{font-size:2rem;color:#0f2182;margin-bottom:1rem;}
  /* Training Section */
  .training{padding:4rem 1rem;background:#f9f9f9;text-align:center;}
  .training-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:2rem;max-width:1200px;margin:auto;}
  .training-card{position:relative;overflow:hidden;border-radius:10px;}
  .training-card img{width:100%;height:100%;object-fit:cover;transition:transform .7s;}
  .training-card:hover img{transform:scale(1.05);}  
  .training-card::before,.training-card::after{content:"";position:absolute;inset:0;background:rgba(20,20,20,.7);transform:scaleX(0);transform-origin:bottom right;transition:all .5s cubic-bezier(.66,.08,.19,.97);z-index:1;}
  .training-card:hover::before,.training-card:hover::after{transform:scale(1);}  
  .training-card .overlay{position:absolute;top:0;left:0;width:100%;height:100%;display:flex;flex-direction:column;align-items:center;justify-content:center;color:#fff;z-index:2;opacity:0;transition:opacity .3s .3s;}
  .training-card:hover .overlay{opacity:1;}  
  .training-card .text h2{margin:0;font-size:3rem;transform:translateY(30px);opacity:0;transition:all .3s .3s;}
  .training-card:hover .text h2{transform:translateY(0);opacity:1;}  
  .training-card .info{padding:1rem;text-align:left;max-width:90%;}
  .training-card .info h3{margin-bottom:.5rem;font-size:1.25rem;}
  .training-card .info p{font-size:.9rem;color:#ddd;}
  /* Sellers */
  .sellers{padding:4rem 1rem;text-align:center;}
  .sellers-grid{display:flex;flex-wrap:wrap;gap:2rem;justify-content:center;max-width:1200px;margin:auto;}
  .seller-item{background:#fff;padding:1.5rem;border-radius:10px;display:flex;align-items:center;gap:1rem;box-shadow:0 2px 10px rgba(0,0,0,0.1);transition:transform .3s;}
  .seller-item:hover{transform:translateY(-10px);}  
  .seller-item img{width:60px;height:60px;border-radius:50%;}
  /* Footer */
  footer {
  background-color: #000;
  color: #fff;
  padding: 60px 40px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

footer h3 {
  font-size: 32px;
  margin-bottom: 40px;
}

footer .right {
  width: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 26px;
  text-align: center;
}

footer .right .links {
  display: flex;
  gap: 30px;
  flex-wrap: wrap;
  justify-content: center;
}

footer .right .links a {
  color: #989898;
  transition: color 0.3s ease;
  text-decoration: none;
}

footer .right .links a:hover {
  color: #fff;
}

footer .right .social {
  display: flex;
  align-items: center;
  gap: 10px;
  justify-content: center;
}

footer .right .social i {
  font-size: 30px;
  cursor: pointer;
  transition: color 0.3s ease;
}

footer .right .social i:hover {
  color: #304ffe;
}

footer .right p {
  font-size: 13px;
  color: #777;
}
 
  /* Responsive */
  @media(max-width:768px){.feature-grid, .training-grid{grid-template-columns:1fr;} .nav__list{display:none;}.nav__menu.show-menu .nav__list{display:flex;flex-direction:column;}.nav__btns{margin-top:1rem;}}
</style>

  <script>
    // FAQ Toggle
    document.querySelectorAll('.faq-item h3').forEach(item => {
      item.addEventListener('click', () => {
        item.nextElementSibling.classList.toggle('open');
      });
    });

    // Contact Form Submission
    document.querySelector('.contact-form').addEventListener('submit', e => {
      e.preventDefault();
      alert('Pesan Anda telah dikirim. Terima kasih!');
      e.target.reset();
    });

    // Back to Top Button
    const backToTop = document.getElementById('back-to-top');
    window.addEventListener('scroll', () => {
      if (window.pageYOffset > 300) backToTop.style.display = 'block';
      else backToTop.style.display = 'none';
    });
    backToTop.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  </script>
