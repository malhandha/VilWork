<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <title>Responsive NFT Website</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-100 text-gray-900">

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

    <main class="pt-24">
        <div class="container mx-auto flex flex-col lg:flex-row items-center px-6 py-20 space-y-12 lg:space-y-0 lg:space-x-12">
            <div class="lg:w-1/2">
                <h1 class="text-5xl font-bold text-[#141e43]">
                    Halo,
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#141e43] to-[#141e43]">VillWorkers</span>
                </h1>
                <p class="mt-6 text-gray-600">
                    Mencari kerja didaerah anda lebih gampang dengan menggunakan Villwork
                </p>
                <a href="#" class="mt-6 inline-block bg-[#141e43] text-white py-3 px-6 rounded-lg hover:bg-opacity-90 transition">
                    Get Started
                </a>
            </div>
            <div class="lg:w-1/2">
                <img src="foto/dashboardfoto.png" alt="header" class="w-full rounded-lg shadow-xl" style="width: 300px; height: 100%; ">
            </div>
        </div>

        <h2 class="text-3xl font-semibold text-center text-[#141e43] mt-20">OUR FEATURES</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mt-12 px-6">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <i class="ri-search-2-line text-[#141e43] text-4xl mb-4"></i>
                <h4 class="font-semibold text-xl mb-2">Cari Kerja</h4>
                <p class="text-gray-600 mb-4">
                    Anda Dapat mencari kerja di sekitar daerah anda </p>
                <a href="cari_kerja.php" class="text-[#141e43] hover:text-opacity-80 flex items-center">
                    Join Now <i class="ri-arrow-right-line ml-2"></i>
                </a>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <i class="ri-add-circle-line text-[#141e43] text-4xl mb-4"></i>
                <h4 class="font-semibold text-xl mb-2">Unggah Pekerjaan</h4>
                <p class="text-gray-600 mb-4">
                    Anda ingin membuka lowongan pekerjaan untuk sekitar daerah anda? Ini solusinya </p>
                <a href="publish_lowongan_baru.php" class="text-[#141e43] hover:text-opacity-80 flex items-center">
                    Join Now <i class="ri-arrow-right-line ml-2"></i>
                </a>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <i class="ri-presentation-line text-[#141e43] text-4xl mb-4"></i>

                <h4 class="font-semibold text-xl mb-2">Pelatihan</h4>
                <p class="text-gray-600 mb-4">
                    Anda ingin meningkatkan skill anda tetapi tidak memiliki budget? ini solusinya</p>
                <a href="pelatihan.php" class="text-[#141e43] hover:text-opacity-80 flex items-center">
                    Join Now <i class="ri-arrow-right-line ml-2"></i>
                </a>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <i class="ri-gift-line text-[#141e43] text-4xl mb-4"></i>
                <h4 class="font-semibold text-xl mb-2">Cooperation</h4>
                <p class="text-gray-600 mb-4">
                    Anda dapat menyumbangkan sebagian dari uang anda di fitur ini </p>
                </p>
                <a href="charity.php" class="text-[#141e43] hover:text-opacity-80 flex items-center">
                    Join Now <i class="ri-arrow-right-line ml-2"></i>
                </a>
            </div>
        </div>
    </main>
    <footer class="bg-[#141e43] text-white py-16" style="margin-top: 60px;">
        <div class="container mx-auto px-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="space-y-4">
                <div class="text-xl font-semibold">VillWork</div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <div class="flex space-x-4">
                    <a href="#"><i class="ri-youtube-line text-2xl"></i></a>
                    <a href="#"><i class="ri-instagram-line text-2xl"></i></a>
                    <a href="#"><i class="ri-twitter-line text-2xl"></i></a>
                </div>
            </div>
            <div class="space-y-4">
                <h4 class="font-semibold text-lg">Company</h4>
                <a href="#" class="block">Business</a>
                <a href="#" class="block">Partnership</a>
                <a href="#" class="block">Network</a>
            </div>
            <div class="space-y-4">
                <h4 class="font-semibold text-lg">About Us</h4>
                <a href="#" class="block">Blogs</a>
                <a href="#" class="block">Channels</a>
                <a href="#" class="block">Sponsors</a>
            </div>
            <div class="space-y-4">
                <h4 class="font-semibold text-lg">Contact</h4>
                <a href="#" class="block">Contact Us</a>
                <a href="#" class="block">Privacy Policy</a>
                <a href="#" class="block">Terms & Conditions</a>
            </div>
        </div>
    </footer>

    <div class="bg-[#141e43] text-center py-4 text-white">
        Copyright © 2023 AsmrProg Channel. All Rights Reserved.
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
</style>

</html>