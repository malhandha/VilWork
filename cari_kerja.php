<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VilWork - Job Finder</title>
  <link rel="icon" type="image/png" href="logowhite.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #f5f7fa;
      color: #333;
      overflow-x: hidden;
    }

    .banner {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 90vh;
      background: url("vilwork-banner.jpg") no-repeat center center;
      background-size: 120%;
      text-align: center;
      color: white;
      transition: background-size 0.5s ease, transform 0.5s ease;
      padding: 20px;
    }

    .banner button {
      padding: 12px 36px;
      border-radius: 25px;
      border: none;
      background-color: #1FC28B;
      color: white;
      font-size: 1rem;
      cursor: pointer;
      transition: background-color 0.3s ease, transform 0.5s ease, opacity 0.5s ease;
    }

    .banner button:hover {
      background-color: #10835c;
    }

    .container {
      background: #fff;
      padding: 40px 10%;
      margin: -50px auto 40px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      max-width: 800px;
      margin-bottom: 90px;
    }

    h2 {
      text-align: center;
      color: #1FC28B;
      margin-bottom: 20px;
    }

    .input {
      margin-bottom: 20px;
    }

    .input label {
      display: block;
      font-weight: 500;
      margin-bottom: 5px;
    }

    .input input,
    .input select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 1rem;
    }

    button[type="submit"] {
      width: 100%;
      padding: 12px;
      background-color: #1FC28B;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 1rem;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover {
      background-color: #128555;
    }

    .job-list {
      margin-top: 20px;
      transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .job_item {
      padding: 15px;
      border-bottom: 1px solid #ddd;
    }

    .job_item:last-child {
      border-bottom: none;
    }

    .job_item h3 {
      margin: 0 0 5px;
    }

    .job_item p {
      margin: 5px 0;
    }

    .action {
      margin-top: 10px;
    }

    .action button {
      padding: 8px 16px;
      border: none;
      border-radius: 5px;
      font-size: 0.875rem;
      cursor: pointer;
      margin-right: 10px;
    }

    .action .green {
      background-color: #28a745;
      color: #fff;
    }

    .action .red {
      background-color: #dc3545;
      color: #fff;
    }

    #notification {
      position: fixed;
      top: 20px;
      right: 20px;
      background-color: #a72828;
      color: #fff;
      padding: 15px 20px;
      border-radius: 5px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.5s ease, visibility 0.5s;
      z-index: 1000;
    }

    #notification.show {
      opacity: 1;
      visibility: visible;
    }
  </style>
</head>

<body>

  <div id="notification"></div>

  <header id="banner" class="banner">
    <h1 id="h1">Temukan Pekerjaan Impian Anda dengan VilWork</h1>
    <button type="button" id="button">Cari Pekerjaan</button>
  </header>

  <section class="container">
    <h2>Tambah Lowongan Pekerjaan</h2>
    <form id="jobForm">
      <div class="input">
        <label for="namaKerjaan">Nama Pekerjaan</label>
        <input type="text" id="namaKerjaan" required>
      </div>
      <div class="input">
        <label for="namaPerusahaan">Perusahaan</label>
        <input type="text" id="namaPerusahaan" required>
      </div>
      <div class="input">
        <label for="lokasiKerjaan">Lokasi</label>
        <input type="text" id="lokasiKerjaan" required>
      </div>
      <div class="input">
        <label for="kategoriKerjaan">Kategori</label>
<<<<<<< HEAD
        <select id="daftarKategori">
          <option>-- Pilih Kategori --</option>
          <option value="Pertanian">Pertanian</option>
          <option value="Perikanan">Perikanan</option>
          <option value="Peternakan">Peternakan</option>
        </select>
=======
             <select id="daftarKategori">
                <option>-- Pilih Kategori --</option>
                <option value="Pertanian">Pertanian</option>
                <option value="Perikanan">Perikanan</option>
                <option value="Peternakan">Peternakan</option>
             </select>
>>>>>>> ecb59ef (blablabla)
      </div>

      <button type="submit">Tambahkan Lowongan</button>
    </form>
  </section>

  <section id="searchSection" class="container">
    <h2>Cari Lowongan</h2>
    <form id="searchJobForm">
      <div class="input">
        <label for="cariLokasiKerjaan">Cari berdasarkan Lokasi</label>
        <input type="text" id="cariLokasiKerjaan">
      </div>
      <button type="submit">Cari</button>
    </form>
  </section>

  <section class="container">
    <h2>Daftar Pekerjaan</h2>
    <div id="lisKerjaanPas">
      <h3>Lowongan Pada Kota Yang Kamu Cari</h3>
    </div>
    <div id="lisKerjaanGaPas">
      <h3>Semua Lowongan Yang Tersedia</h3>
    </div>
    <div id="kerjaanFavorite">
      <h3>Lowongan Favorite</h3>
    </div>
  </section>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const jobForm = document.getElementById("jobForm");
      const searchJobForm = document.getElementById("searchJobForm");
      const lisKerjaanPas = document.getElementById("lisKerjaanPas");
      const lisKerjaanGaPas = document.getElementById("lisKerjaanGaPas");
      const kerjaanFavorite = document.getElementById("kerjaanFavorite");
      const notification = document.getElementById("notification");
      const banner = document.getElementById("banner");
      const h1 = document.getElementById("h1");
      const button = document.getElementById("button");
      const searchSection = document.getElementById("searchSection");

      let jobs = JSON.parse(localStorage.getItem("jobs") || "[]");
      tampilkanKerja();

      function tampilkanNotifikasi(pesan, durasi = 3000) {
        notification.textContent = pesan;
        notification.classList.add("show");
        setTimeout(() => {
          notification.classList.remove("show");
        }, durasi);
      }

      function perbaruiLocalStorage() {
        localStorage.setItem("jobs", JSON.stringify(jobs));
      }

      const regexPenulisan = /^[a-zA-Z\s]+$/;

      jobForm.addEventListener("submit", function (event) {
        event.preventDefault();
        const jobID = Date.now().toString();
        const nama = document.getElementById("namaKerjaan").value;
        const perusahaan = document.getElementById("namaPerusahaan").value;
        const lokasi = document.getElementById("lokasiKerjaan").value;
        const kategori = document.getElementById("kategoriKerjaan").value;

        if (!regexPenulisan.test(nama)) {
          tampilkanNotifikasi("Nama Pekerjaan hanya boleh berisi huruf dan spasi!");
          return;
        }
        if (!regexPenulisan.test(perusahaan)) {
          tampilkanNotifikasi("Nama Perusahaan hanya boleh berisi huruf dan spasi!");
          return;
        }
        if (!regexPenulisan.test(lokasi)) {
          tampilkanNotifikasi("Lokasi hanya boleh berisi huruf dan spasi!");
          return;
        }
        if (!regexPenulisan.test(kategori)) {
          tampilkanNotifikasi("Kategori hanya boleh berisi huruf dan spasi!");
          return;
        }

        const job = { id: jobID, nama, perusahaan, lokasi, kategori, favorite: false };
        jobs.push(job);
        perbaruiLocalStorage();
        tampilkanKerja();
        jobForm.reset();
        tampilkanNotifikasi("Lowongan pekerjaan berhasil ditambahkan!");
      });

      searchJobForm.addEventListener("submit", function (event) {
        event.preventDefault();

        const cariLokasi = document.getElementById("cariLokasiKerjaan").value.toLowerCase().trim();
        if (!regexPenulisan.test(cariLokasi)) {
          tampilkanNotifikasi("Isikan nama kota aja yaw, jangan aneh2!");
          return;
        }
        tampilkanKerja(cariLokasi);
        tampilkanNotifikasi("Pencarian lowongan selesai.");
      });

      function ubahStatusFavorit(jobID) {
        const indeksJob = jobs.findIndex(job => job.id === jobID);
        if (indeksJob !== -1) {
          jobs[indeksJob].favorite = !jobs[indeksJob].favorite;
          perbaruiLocalStorage();
          tampilkanKerja();
          tampilkanNotifikasi("Status favorite lowongan berhasil diubah!");
        }
      }

      function hapusKerjaan(jobID) {
        jobs = jobs.filter(job => job.id !== jobID);
        perbaruiLocalStorage();
        tampilkanKerja();
        tampilkanNotifikasi("Lowongan pekerjaan berhasil dihapus!");
      }

      function buatElemenKerjaan(job) {
        const jobItem = document.createElement("article");
        jobItem.classList.add("job_item");
        jobItem.setAttribute("data-id", job.id);
        jobItem.innerHTML = `
          <h3>${job.nama}</h3>
          <p><strong>Perusahaan:</strong> ${job.perusahaan}</p>
          <p><strong>Lokasi:</strong> ${job.lokasi}</p>
          <p><strong>Kategori:</strong> ${job.kategori}</p>
          <div class="action">
            <button class="green">${job.favorite ? "Unfavorite" : "Favorite"}</button>
            <button class="red">Hapus</button>
          </div>
        `;
        const tombol = jobItem.querySelectorAll("button");
        tombol[0].addEventListener("click", () => ubahStatusFavorit(job.id));
        tombol[1].addEventListener("click", () => hapusKerjaan(job.id));
        return jobItem;
      }

      function tampilkanKerja(kataCari = "") {
        lisKerjaanPas.innerHTML = "<h3>Lowongan Sesuai</h3>";
        lisKerjaanGaPas.innerHTML = "<h3>Lowongan Lain Yang tersedia</h3>";
        kerjaanFavorite.innerHTML = "<h3>Lowongan Favorite</h3>";

        const fragmenCocok = document.createDocumentFragment();
        const fragmenTidakCocok = document.createDocumentFragment();
        const fragmenFavorit = document.createDocumentFragment();
        let hitungCocok = 0;

        jobs.forEach(job => {
          const elemenJob = buatElemenKerjaan(job);
          if (kataCari && job.lokasi.toLowerCase().includes(kataCari)) {
            fragmenCocok.appendChild(elemenJob);
            hitungCocok++;
          } else if (kataCari) {
            fragmenTidakCocok.appendChild(elemenJob);
          } else {
            fragmenTidakCocok.appendChild(elemenJob);
          }

          if (job.favorite) {
            fragmenFavorit.appendChild(elemenJob.cloneNode(true));
          }
        });

        if (kataCari && hitungCocok === 0) {
          const pesanTidakAda = document.createElement("p");
          pesanTidakAda.textContent = "Maaf, kerjaan di kota itu belum ada yaw.";
          fragmenCocok.appendChild(pesanTidakAda);
        }

        lisKerjaanPas.appendChild(fragmenCocok);
        lisKerjaanGaPas.appendChild(fragmenTidakCocok);
        kerjaanFavorite.appendChild(fragmenFavorit);
      }

      button.addEventListener("click", function () {
        searchSection.scrollIntoView({ behavior: "smooth" });
      });

      window.addEventListener("scroll", function () {
        const posisiScroll = window.scrollY;
        if (posisiScroll > 150) {
          banner.style.backgroundSize = "100%";
          h1.style.opacity = "0";
          h1.style.transform = "translateY(-50px) scale(0.8)";
          button.style.opacity = "0";
          button.style.transform = "translateY(-50px) scale(0.8)";
        } else {
          banner.style.backgroundSize = "120%";
          h1.style.opacity = "1";
          h1.style.transform = "translateY(0) scale(1)";
          button.style.opacity = "1";
          button.style.transform = "translateY(0) scale(1)";
        }
      });
    });
  </script>
</body>

</html>