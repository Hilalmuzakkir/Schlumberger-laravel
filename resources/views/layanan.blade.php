<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Support</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <style>
        body {
            font-family: 'Ubuntu', sans-serif;
        }
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
        .latar-belakang {
            background-image: url('layanan1.jpg');
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 100vh;
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
            text-align: center;
        }
        @keyframes kedip {
            0% { opacity: 1; }
            50% { opacity: 0; }
            100% { opacity: 1; }
        }
        .kedip {
            animation: kedip 1s infinite;
        }
        .content-section {
            padding: 50px 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: center;
        }
        .content-text {
            flex: 1;
            min-width: 300px;
            max-width: 500px;
            margin: 20px;
        }
        .content-image {
            flex: 1;
            min-width: 300px;
            max-width: 500px;
            margin: 20px;
        }
        .content-image img {
            width: 100%;
            height: auto;
            animation: turunKebawah 2s infinite;
        }
        @keyframes turunKebawah {
            0% { transform: translateY(0); }
            50% { transform: translateY(20px); }
            100% { transform: translateY(0); }
        }
        .action-button {
            padding: 10px 20px;
            margin-top: 20px;
            border: 2px solid #606676;
            border-radius: 10px;
            background-color: transparent;
            color: #606676;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .action-button:hover {
            background-color: #606676;
            color: white;
        }
        @media (max-width: 768px) {
            .menu {
                flex-direction: column;
                align-items: center;
            }
            .menu li {
                margin: 10px 0;
            }
            .content-section {
                flex-direction: column;
            }
            .content-text, .content-image {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <ul class="menu">
            <li><a href="/home">Home</a></li>
            <li><a href="#layanan2">Service</a></li>
            <li><a href="https://www.slb.com" target="_blank">About</a></li>
            <li><a href="#layanan4">Contact</a></li>
        </ul>
    </nav>

    <div class="latar-belakang">
        <div class="lapisan"></div>
        <div class="kontainer-teks">
            <h1 class="w3-jumbo" id="judul"></h1>
            <p class="w3-xxlarge" id="subjudul"></p>
        </div>
    </div>

    <section id="layanan2" class="content-section">
        <div class="content-text">
            <h2>Access Request</h2>
            <p>Request access to our 24/7 IT team.</p>
            <a href="https://outlook.office.com/mail/deeplink/compose?to=AMuzakkir@slb.com&subject=Access%20Request" class="action-button" target="_blank">Request Access</a>
        </div>
        <div class="content-image">
            <img src="layanan2.jpg" alt="Layanan 2">
        </div>
    </section>

    <section id="layanan3" class="content-section">
        <div class="content-image">
            <img src="layanan3.jpg" alt="Layanan 3">
        </div>
        <div class="content-text">
            <h2>Other Complaint</h2>
            <p>Temukan fitur-fitur yang kami tawarkan untuk meningkatkan pengalaman Anda.</p>
            <button class="action-button">Contact Team</button>
        </div>
    </section>

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

        window.addEventListener('scroll', function() {
            var scrollPosition = window.pageYOffset;
            var judul = document.getElementById('judul');
            var subjudul = document.getElementById('subjudul');
            
            judul.style.transform = 'scale(' + (1 - scrollPosition * 0.001) + ')';
            subjudul.style.transform = 'scale(' + (1 - scrollPosition * 0.001) + ')';
        });
    </script>
</body>
</html>