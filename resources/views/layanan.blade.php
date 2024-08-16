<!DOCTYPE html>
<html>
<head>
<title>Team Support</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
<head>
<body>
  <!-- ... Navbar ... -->
  <body>
  <!-- ... Navbar ... -->
  <nav class="navbar">
      <ul class="menu">
          <li><a href="#layanan1">Home</a></li>
          <li><a href="#layanan2">Service</a></li>
          <li><a href="#layanan3">About</a></li>
          <li><a href="#layanan4">Contact</a></li>
      </ul>
  </nav>
  <!-- ... existing code ... -->
  <style>
      .navbar {
          background-color: rgba(0, 0, 0, 0.0);
          padding: 10px;
          position: fixed;
          width: 100%;
          top: 0;
          z-index: 1000;
      }
      .menu {
          list-style: none;
          display: flex;
          justify-content: center;
          margin: 0;
          padding: 0;
      }
      .menu li {
          margin: 0 15px;
      }
      .menu a {
          color: white;
          text-decoration: none;
          font-size: 18px;
          transition: color 0.3s, transform 0.3s;
      }
      .menu a:hover {
          color: #ffcc00;
          transform: scale(1.1);
      }
  </style>
  <!-- ... existing code ... -->
</body>
</body>
  <!-- ... ini adalah css untuk latar belakang ... -->
  <style>
    .latar-belakang {
        background-image: url('layanan1.jpg');
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        min-height: 90vh;
        position: relative;
        overflow: hidden;
    }
    .lapisan {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }
    .kontainer-teks {
        position: relative;
        z-index: 1;
        color: white;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    @keyframes kedip {
        0% { opacity: 1; }
        50% { opacity: 0; }
        100% { opacity: 1; }
    }
    .kedip {
        animation: kedip 1s infinite;
    }
    
  </style>
  
  <div class="latar-belakang">
    <div class="lapisan"></div>
    <div class="kontainer-teks w3-center">
        <h1 class="w3-jumbo" id="judul"></h1>
        <p class="w3-xxlarge" id="subjudul"></p>
    </div>
    <script>
        function ketikTeks(elemen, teks, kecepatan) {
            let i = 0;
            function ketik() {
                if (i < teks.length) {
                    elemen.innerHTML += teks.charAt(i);
                    i++;
                    setTimeout(ketik, kecepatan);
                }
            }
            ketik();
        }

        window.onload = function() {
            ketikTeks(document.getElementById("judul"), "Customer Support", 100);
            setTimeout(function() {
                ketikTeks(document.getElementById("subjudul"), "SLB |For Better Planet", 100);
            }, 2000);
        };
    </script>
    <script>
        window.addEventListener('scroll', function() {
            var scrollPosition = window.pageYOffset;
            var judul = document.getElementById('judul');
            var subjudul = document.getElementById('subjudul');
            
            judul.style.transform = 'scale(' + (1 - scrollPosition * 0.001) + ')';
            subjudul.style.transform = 'scale(' + (1 - scrollPosition * 0.001) + ')';
        });
    </script>
  </div>
  <body>
  <div class="w3-container w3-left w3-padding-60" style="position: absolute; top: 130%; left: 20%; transform: translate(-50%, -50%);">
    <h2>Access Request</h2>
    <p>Request access to our 24/7 IT team.</p>
  <button class="w3-button w3-padding-16 w3-margin-top" style="animation: tombolRequestAccess 1s infinite; border-radius: 10px; : ; border: 2px solid #606676;">Request Access</button>
  </div>
  <div class="w3-right w3-margin-top" >
    <a href="#layanan2">
      <img src="layanan2.jpg" alt="Layanan 2" class="w3-image w3-margin-bottom" style="animation: turunKebawah 2s infinite; width: 900px; height: auto;">
    </a>
  </div>
  <style>
    @keyframes turunKebawah {
      0% { transform: translateY(0); }
      50% { transform: translateY(20px); }
      100% { transform: translateY(0); }
    }
  </style>

  <body>
    <div class="w3-container w3-right w3-padding-60" style="position: absolute; top: 200%; left: 80%; transform: translate(-50%, -50%);">
      <h2>Other Complaint</h2>
      <p>Temukan fitur-fitur yang kami tawarkan untuk meningkatkan pengalaman Anda.</p>
    <button class="w3-button w3-padding-16 w3-margin-top" style="animation: tombolRequestAccess 1s infinite; border-radius: 10px; : ; border: 2px solid #606676;">Contact Team</button>
    </div>
    <div class="w3-left w3-margin-top" style="position: absolute; top: 170%; left: 4%;">
        <a href="#layanan3">
            <img src="layanan3.jpg" alt="Layanan 3" class="w3-image w3-margin-bottom" style="animation: turunKebawah 2s infinite; width: 900px; height: auto;">
        </a>
    </div>


    