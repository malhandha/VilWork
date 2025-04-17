<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Chat Villwork</title>

  <!-- Bootstrap CSS -->
  <link
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <!-- Font Awesome -->
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    rel="stylesheet"
  />
  <!-- Google Font -->
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
    rel="stylesheet"
  />

  <style>
    /* Reset & Base */
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body, html {
      height: 100%;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #141e43, #1e2b5a);
    }
    .banner-slider {
      width: 25%;
      height: 100vh;
      overflow: hidden;
      position: relative;
      float: left;
    }
    .vilwork-banner {
      width: 100%;
      height: 100%;
      background-size: cover;
      background-position: center;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    #vilwork-banner {
      background-image: url('foto/vilwork-banner.jpg');
    }
    .banner-content {
      background: rgba(0,0,0,0.5);
      padding: 1.5rem;
      border-radius: 8px;
      color: #fff;
      text-align: center;
    }
    .banner-content h1 {
      font-size: 24px;
      margin-bottom: 10px;
    }
    .banner-content p {
      font-size: 14px;
    }

    .chat-container {
      width: 75%;
      height: 100vh;
      float: right;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem;
    }
    .card {
      width: 100%;
      max-width: 900px;
      height: 80vh;
      border-radius: 15px !important;
      background-color: rgba(255, 255, 255, 0.1) !important;
      backdrop-filter: blur(10px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.3);
      overflow: hidden;
    }
    .msg_head, .contacts_card {
      background-color: rgba(20,30,67,0.8) !important;
      color: #fff;
    }
    .contacts_body {
      padding: .75rem 0 !important;
      overflow-y: auto;
      height: calc(100% - 56px);
    }
    .contacts {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    .contacts li {
      padding: 10px 15px;
      margin-bottom: 10px;
      cursor: pointer;
      display: flex;
      align-items: center;
      border-radius: 8px;
      transition: background .2s;
    }
    .contacts li:hover, .contacts li.active {
      background-color: rgba(20,30,67,0.6);
    }
    .user_img {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      margin-right: 12px;
      border: 2px solid #fff;
    }
    .user_info span {
      font-size: 16px;
      font-weight: 500;
      color: #fff;
    }
    .user_info p {
      font-size: 12px;
      color: rgba(255,255,255,0.7);
      margin: 0;
    }
    .msg_card_body {
      height: calc(100% - 112px);
      overflow-y: auto;
      padding: 1rem;
      background: rgba(255,255,255,0.05);
    }
    .msg_cotainer {
      margin: 10px 0;
      padding: 10px 15px;
      border-radius: 20px;
      background-color: #82ccdd;
      position: relative;
      max-width: 70%;
    }
    .msg_cotainer_send {
      margin: 10px 0;
      padding: 10px 15px;
      border-radius: 20px;
      background-color: #78e08f;
      position: relative;
      max-width: 70%;
      margin-left: auto;
    }
    .msg_time, .msg_time_send {
      font-size: 10px;
      color: rgba(255,255,255,0.7);
      position: absolute;
      bottom: -15px;
    }
    .msg_time { left: 10px; }
    .msg_time_send { right: 10px; }

    /* Footer (input) */
    .card-footer {
      background-color: rgba(20,30,67,0.8) !important;
      padding: 10px 20px;
    }
    .type_msg {
      width: 80%;
      resize: none;
      background-color: rgba(255,255,255,0.1) !important;
      border: none !important;
      color: #fff;
      border-radius: 20px;
      padding: 10px 15px;
      height: 50px;
    }
    .type_msg:focus {
      outline: none;
      box-shadow: none;
    }
    .send_btn, .attach_btn {
      background-color: rgba(255,255,255,0.1) !important;
      border: none !important;
      color: #fff;
      border-radius: 50%;
      width: 45px;
      height: 45px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      margin-left: 5px;
    }
    .send_btn:hover, .attach_btn:hover {
      background-color: rgba(255,255,255,0.2) !important;
    }

    /* Action Menu */
    #action_menu_btn {
      position: absolute;
      right: 15px;
      top: 15px;
      color: #fff;
      cursor: pointer;
      font-size: 20px;
    }
    .action_menu {
      position: absolute;
      top: 45px;
      right: 15px;
      background: rgba(255,255,255,0.1);
      border-radius: 8px;
      display: none;
      min-width: 150px;
      z-index: 100;
    }
    .action_menu ul {
      list-style: none;
      margin: 0;
      padding: 0;
    }
    .action_menu ul li {
      padding: 10px;
      cursor: pointer;
      color: #fff;
    }
    .action_menu ul li:hover {
      background: rgba(255,255,255,0.2);
    }

    /* Scrollbar */
    ::-webkit-scrollbar {
      width: 8px;
    }
    ::-webkit-scrollbar-track {
      background: rgba(255,255,255,0.1);
    }
    ::-webkit-scrollbar-thumb {
      background: rgba(255,255,255,0.3);
      border-radius: 4px;
    }

    @media (max-width: 768px) {
      .banner-slider, .chat-container { width: 100%; float: none; height: auto; }
      .card { height: auto; margin: 1rem 0; }
    }
  </style>
</head>
<body>

  <!-- === Left: Banner Slider === -->
  <div class="banner-slider">
    <div class="vilwork-banner" id="vilwork-banner">
      <div class="banner-content">
        <h1>Chat Villwork</h1>
        <p>Kolaborasi & diskusi real-time bersama timmu.</p>
      </div>
    </div>
  </div>

  <div class="chat-container">
    <div class="card">
      <div class="row no-gutters h-100">
        <!-- Contacts -->
        <div class="col-md-4 contacts_card p-0">
          <div class="card-header msg_head">
            <div class="d-flex align-items-center">
              <div class="img_cont">
                <img src="foto/profile.png" class="user_img">
              </div>
              <div class="user_info">
                <span>Daftar Kontak</span>
              </div>
            </div>
          </div>
          <div class="card-body contacts_body">
            <ul class="contacts">
              <li class="active">
                <div class="d-flex align-items-center">
                  <div class="img_cont">
                    <img src="foto/profile.png" class="user_img">
                  </div>
                  <div class="user_info">
                    <span>Alice</span>
                    <p>Online</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="d-flex align-items-center">
                  <div class="img_cont">
                    <img src="foto/profile.png" class="user_img offline">
                  </div>
                  <div class="user_info">
                    <span>Bob</span>
                    <p>Offline</p>
                  </div>
                </div>
              </li>
              <!-- Tambah kontak lain di sini -->
            </ul>
          </div>
        </div>

        <!-- Messages -->
        <div class="col-md-8 msg_card_body p-0 d-flex flex-column">
          <div class="card-header msg_head position-relative">
            <div class="d-flex align-items-center">
              <div class="img_cont">
                <img src="foto/profile.jpg" class="user_img_msg">
              </div>
              <div class="user_info">
                <span>Alice</span>
                <p>Online</p>
              </div>
              <div id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></div>
              <div class="action_menu">
                <ul>
                  <li><i class="fas fa-user-circle"></i> Lihat Profil</li>
                  <li><i class="fas fa-bell"></i> Notifikasi</li>
                  <li><i class="fas fa-sign-out-alt"></i> Keluar</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="card-body msg_card_body flex-grow-1">
            <!-- Contoh pesan masuk -->
            <div class="d-flex mb-4">
              <div class="img_cont_msg">
                <img src="foto/profile.jpg" class="user_img_msg">
              </div>
              <div class="msg_cotainer">
                Halo, ada yang bisa saya bantu?
                <span class="msg_time">10:00 AM</span>
              </div>
            </div>
            <!-- Contoh pesan terkirim -->
            <div class="d-flex justify-content-end mb-4">
              <div class="msg_cotainer_send">
                Saya ada pertanyaan tentang proyek.
                <span class="msg_time_send">10:02 AM</span>
              </div>
            </div>
            <!-- Tambah pesan lain di sini -->
          </div>

          <div class="card-footer">
            <div class="input-group">
              <div class="input-group-prepend">
                <button class="attach_btn"><i class="fas fa-paperclip"></i></button>
              </div>
              <textarea class="form-control type_msg" placeholder="Tulis pesan..."></textarea>
              <div class="input-group-append">
                <button class="send_btn"><i class="fas fa-location-arrow"></i></button>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script
    src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
  ></script>
  <script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
  ></script>

  <script>
    $('#action_menu_btn').click(function(){
      $('.action_menu').toggle();
    });
  </script>

</body>
</html>
