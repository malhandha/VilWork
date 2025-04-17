<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Registration Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background: url('foto/vilwork-banner.jpg') no-repeat center center/cover;
      height: 100vh;
      display: flex;
      flex-direction: column;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 50px;
      color: white;
      background: rgba(0, 0, 0, 0.4);
    }

    .logo {
      font-size: 24px;
      font-weight: bold;
    }

    nav a, .login-btn {
      color: white;
      text-decoration: none;
      margin: 0 15px;
      font-weight: 500;
    }

    .login-btn {
      border: 2px solid white;
      padding: 5px 15px;
      background: transparent;
      border-radius: 5px;
      cursor: pointer;
    }
    .login-box{
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-form{
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      padding: 30px;
      border-radius: 15px;
      width: 350px;
      position: relative;
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
    }

    .register-box {
      flex: 1;
      /* display: flex; */
      justify-content: center;
      align-items: center;
      display: none;
    }

    .register-form {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      padding: 30px;
      border-radius: 15px;
      width: 350px;
      position: relative;
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
    }

    .register-form h2 {
      text-align: center;
      margin-bottom: 20px;
      color: white;
    }

    .register-form h2 span {
      background: linear-gradient(to right, #00f2fe, #4facfe);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      font-weight: bold;
      font-size: 24px;
    }

    .input-group {
      position: relative;
      margin-bottom: 15px;
    }

    .input-group label {
      display: block;
      color: white;
      margin-bottom: 5px;
    }

    .input-group input {
      width: 100%;
      padding: 10px 35px 10px 10px;
      border: none;
      border-bottom: 2px solid white;
      background: transparent;
      color: white;
    }

    .input-group i {
      position: absolute;
      right: 10px;
      top: 35px;
      color: white;
    }

    .checkbox-group {
      display: flex;
      align-items: center;
      gap: 8px;
      color: white;
      margin: 12px 0;
    }

    .submit-btn {
      width: 100%;
      padding: 10px;
      background: #141e43;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .login-text {
      text-align: center;
      color: white;
      margin-top: 10px;
    }

    .login-text a {
      color: #00f2fe;
      text-decoration: none;
    }

    .close-btn {
      position: absolute;
      right: 15px;
      top: 15px;
      background: none;
      border: none;
      color: white;
      font-size: 18px;
      cursor: pointer;
    }

    .agree{
      display: flex;
    align-items: center;
    gap: 5px;
    }

  </style>
</head>
<body>
<!-- 
  <header>
    <div class="logo">Logo</div>
    <nav>
      <a href="#">Home</a>
      <a href="#">About</a>
      <a href="#">Services</a>
      <a href="#">Contact</a>
      <button class="login-btn">Login</button>
    </nav>
  </header> -->

  <section  id="login-box" class="login-box">
    <div class="register-form">
      <button class="close-btn" onclick="closeForm()"><i class="fas fa-times"></i></button>
      <h2><span>Login</span></h2>

      <form action="#">
        <div class="input-group">
          <label>Username</label>
          <input type="text" required>
          <i class="fas fa-user"></i>
        </div>

        <div class="input-group">
          <label>Email</label>
          <input type="email" required>
          <i class="fas fa-envelope"></i>
        </div>

        <div class="input-group">
          <label>Password</label>
          <input type="password" required>
          <i class="fas fa-lock"></i>
        </div>

        <div class="input-group">
            <label>Alamat</label>
            <input type="password" required>
            <i class="fas fa-home"></i>
          </div>

          <div class="input-group">
            <label>No HP</label>
            <input type="password" required>
            <i class="fas fa-phone"></i>
          </div>

        <div class="checkbox-group">
            <div class="checkbox"><label><input type="checkbox" required>
            </label></div>
                <div class:"acccept">
                    I agree to the terms & conditions
                </div>
        </div>
       

        <button type="submit" class="submit-btn">Register</button>
        <p class="login-text">Already have an account? <a href="#" onclick="showRegister() ">Register</a></p>
      </form>
    </div>
  </section>


  <section id="register-box"  class="register-box">
    <div class="register-form">
      <button class="close-btn" onclick="closeForm()"><i class="fas fa-times"></i></button>
      <h2><span>Registration</span></h2>

      <form action="#">
        <div class="input-group">
          <label>Username</label>
          <input type="text" required>
          <i class="fas fa-user"></i>
        </div>

        <div class="input-group">
          <label>Email</label>
          <input type="email" required>
          <i class="fas fa-envelope"></i>
        </div>

        <div class="input-group">
          <label>Password</label>
          <input type="password" required>
          <i class="fas fa-lock"></i>
        </div>

        <div class="input-group">
            <label>Alamat</label>
            <input type="password" required>
            <i class="fas fa-home"></i>
          </div>

          <div class="input-group">
            <label>No HP</label>
            <input type="password" required>
            <i class="fas fa-phone"></i>
          </div>

        <div class="checkbox-group">
            <div class="checkbox"><label><input type="checkbox" required>
            </label></div>
                <div class:"acccept">
                    I agree to the terms & conditions
                </div>
        </div>
       

        <button type="submit" class="submit-btn">Register</button>
        <p class="login-text">Already have an account? <a href="dashboard.php" onclick="showLogin() ">Login</a></p>
      </form>
    </div>
  </section>

</body>
</html>

<script>
  function showLogin() {
    document.getElementById("login-box").style.display = "flex";
    document.getElementById("register-box").style.display = "none";
  }

  function showRegister() {
    document.getElementById("register-box").style.display = "flex";
    document.getElementById("login-box").style.display = "none";
  }

  function closeForm() {
    document.getElementById("login-box").style.display = "none";
    document.getElementById("register-box").style.display = "none";
  }
</script>

<!-- <script>
    document.getElementById("regist").addEventListener("submit", function (event) {
        let nama = document.getElementById("nama").value;
        let email = document.getElementById("email").value;
        let alamat = document.getElementById("alamat").value;
        let tempatLahir = document.getElementById("tempatlahir").value;
        let tglLahir = document.getElementById("tgllahir").value;
        let password = document.getElementById("pw").value;
        let gender = document.querySelector('input[name="gender"]:checked');

        let regexNama = /^[a-zA-Z\s']+$/;
        let regexEmail = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        let regexAlamat = /^[a-zA-Z0-9\s.,'-]+$/;
        let regexTempatLahir = /^[a-zA-Z\s]+$/;
        let regexPassword = /^.{6,}$/;

        if (!regexNama.test(nama)) {
            alert("Nama hanya boleh berisi huruf dan tanda petik satu (')");
            event.preventDefault();
            return;
        }

        if (!regexEmail.test(email)) {
            alert("Masukkan email yang valid (contoh: user@example.com)");
            event.preventDefault();
            return;
        }

        if (!regexAlamat.test(alamat)) {
            alert("Alamat hanya boleh berisi huruf, angka, spasi, titik, koma, dan tanda petik");
            event.preventDefault();
            return;
        }

        if (!regexTempatLahir.test(tempatLahir)) {
            alert("Tempat lahir hanya boleh berisi huruf dan spasi");
            event.preventDefault();
            return;
        }

        if (tglLahir === "") {
            alert("Tanggal lahir tidak boleh kosong");
            event.preventDefault();
            return;
        }

        if (!regexPassword.test(password)) {
            alert("Password harus memiliki minimal 6 karakter");
            event.preventDefault();
            return;
        }

        if (!gender) {
            alert("Silakan pilih jenis kelamin");
            event.preventDefault();
            return;
        }

        alert("Pendaftaran berhasil!");
    });


</script> -->

</html>