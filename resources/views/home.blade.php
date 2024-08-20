<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
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
            <li><a href="/home">Home</a></li>
            <li><a href="#layanan.blade.php">Service</a></li>
            <li><a href="#layanan3">About</a></li>
            <li><a href="#layanan4">Contact</a></li>
            @if (Auth::check())
                <li><a href="/logout">Logout</a></li>
            @endif
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
    <!-- ... ini adalah css untuk latar belakang ... -->
    <style>
        .latar-belakang {
            background-image: url('slbarab.jpg');
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

        .jam-digital {
            font-size: 24px;
            margin-top: 20px;
            font-family: 'Digital-7', monospace;
        }

        @keyframes kedip {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
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
            <div class="jam-digital" id="jam-digital"></div>
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

            function updateJam() {
                const sekarang = new Date();
                const jam = String(sekarang.getHours()).padStart(2, '0');
                const menit = String(sekarang.getMinutes()).padStart(2, '0');
                const detik = String(sekarang.getSeconds()).padStart(2, '0');
                document.getElementById('jam-digital').innerHTML =
                    `${jam}<span class="kedip">:</span>${menit}<span class="kedip">:</span>${detik}`;
            }

            window.onload = function() {
                ketikTeks(document.getElementById("judul"), "Welcome SLB Teams", 100);
                setTimeout(function() {
                    ketikTeks(document.getElementById("subjudul"), "For Better Planet", 100);
                }, 2000);

                setInterval(updateJam, 1000);
                updateJam();
            };
        </script>
        <script>
            window.addEventListener('scroll', function() {
                var scrollPosition = window.pageYOffset;
                var judul = document.getElementById('judul');
                var subjudul = document.getElementById('subjudul');
                var jamDigital = document.getElementById('jam-digital');

                judul.style.transform = 'scale(' + (1 - scrollPosition * 0.001) + ')';
                subjudul.style.transform = 'scale(' + (1 - scrollPosition * 0.001) + ')';
                jamDigital.style.transform = 'scale(' + (1 - scrollPosition * 0.001) + ')';
            });
        </script>
    </div>

    <!-- ... ini adalah code untuk fitur ... -->

    <div class="w3-container w3-center w3-padding-64">
        <h2>Our Services</h2>
        <p>Explore the amazing features we offer</p>

        </head>
        <div class="feature-grid">
            <div class="feature-box animated" onclick="window.location.href=''"
                style="cursor: pointer; transition: transform 0.8s ease;">
                <i class="bi bi-upload" style="font-size: 24px;"></i>
                <div class="feature-title">Upload Document</div>
                <div class="feature-description">Start uploading your new CSV file easily and quickly.</div>
            </div>
            <div class="feature-box animated" onclick="window.location.href='/search'"
                style="cursor: pointer; transition: transform 0.8s ease;">
                <i class="bi bi-eye"></i>
                <div class="feature-title">Search Document</div>
                <div class="feature-description">Search and find documents quickly.</div>
            </div>
            <div class="feature-box animated">
                <i class="bi bi-search"></i>
                <div class="feature-title">Team support</div>
                <div class="feature-description">24/7 at your service</div>
            </div>
            <div class="feature-box animated">
                <i class="bi bi-bar-chart"></i>
                <div class="feature-title">Create Note</div>
                <div class="feature-description">Make personal notes</div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <!-- ... existing code ... -->
        </head>
        <!-- Additional content to enable scrolling -->
    </div>

    <div class="w3-container w3-center w3-padding-64">
        <h2><span style="color: #3498DB;">Latest Upload</span>Activity</h2>
        <p>Track documents you've recently uploaded</p>
        <div class="w3-row-padding" style="margin-top:64px">
            <canvas id="recentUploadChart" width="400" height="200"></canvas>
        </div>
    </div>

    <script>
        // Data untuk bagan aktivitas upload terakhir
        const recentUploadData = {
            labels: ['5 hari lalu', '4 hari lalu', '3 hari lalu', '2 hari lalu', 'Kemarin', 'Hari ini'],
            datasets: [{
                label: 'Jumlah Upload',
                data: [2, 1, 5, 2, 4, 6],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        };

        // Konfigurasi untuk bagan aktivitas upload terakhir
        const recentUploadConfig = {
            type: 'line',
            data: recentUploadData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Jumlah Dokumen'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Waktu'
                        }
                    }
                },
                plugins: {
                    title: {
                        display: true,
                        text: 'Aktivitas Upload 6 Hari Terakhir'
                    }
                },
                animation: {
                    duration: 1000,
                    easing: 'easeInOutQuad'
                }
            }
        };

        // Inisialisasi bagan aktivitas upload terakhir
        const recentUploadChart = new Chart(
            document.getElementById('recentUploadChart'),
            recentUploadConfig
        );
    </script>

</body>

</html>

<style>
    .feature-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(110px, 1fr));
        gap: 10px;
    }

    .feature-box {
        background-color: white;
        border-radius: 18px;
        padding: 40px;
        box-shadow: 0 4px 6px rgba(29, 28, 28, 0.1);
        transition: all 0.3s ease;
        opacity: 0;
        animation: fadeIn 1s ease forwards;
        animation-delay: 0.7s;
    }

    .feature-box:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 12px rgba(18, 20, 24, 0.15);
        background-color: #f5f5f7;
        /* Menambahkan warna latar belakang saat di hover */
    }

    .feature-title {
        font-size: 22px;
        font-weight: bold;
        margin-bottom: 15px;
        text-align: left;
    }

    .feature-description {
        color: #86868b;
        line-height: 1.5;
        text-align: left;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
</div>
<style>
    .latar-belakang-2 {
        background-image: url('about2.jpg');
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        min-height: 50vh;
        position: relative;
        overflow-y: auto;
    }

    .lapisan-2 {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .kontainer-teks-2 {
        position: relative;
        z-index: 1;
        padding-top: 150px;
        color: white;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
</style>

<div class="latar-belakang-2">
    <div class="lapisan-2"></div>
    <div class="kontainer-teks-2 w3-center">
        <h2 class="w3-xxlarge">We're committed to protecting the earth</h2>
        <p class="w3-large">Join and find out more about your company</p>
        <button class="w3-button w3-transparent w3-animate-bottom"
            style="animation: fadeInUp 1s ease-out; border: 2px solid rgb(255, 255, 255); color: rgb(255, 255, 255);">
            Join Us
        </button>
    </div>
</div>
<!-- ... existing code ... -->



<!-- ... existing code ... -->
