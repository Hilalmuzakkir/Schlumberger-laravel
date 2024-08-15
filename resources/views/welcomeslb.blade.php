<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>WelcomeSLBdatabase</title>
    <!-- Animasi up down -->
    <style>
        @keyframes slideIn {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
        @keyframes slideUpDown {
            0% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px); /* Naik 20px */
            }
            100% {
                transform: translateY(0);
            }
        }
    </style>
    <!-- Tutup animasi up down -->
</head>
<body>
    <!--animasi typing -->
    <div class="main-content" style="text-align: center; width: 50%; margin-top: -400px;">
        <div class="header" style="font-size: 90px; text-align: left; margin-left: 80px; font-weight: bold;">Organize your data with <span style="color:#3498DB; font-weight: bold;">SLB Data</span></div>
    <p id="typing-text" style="font-size: 20px; text-align: left; margin-left: 80px;"></p>
    <script>
        const text = "With SLB Data, you can manage your data more easily and efficiently. Not only that, you can also access your data anytime and anywhere.";
        let index = 0;

        function type() {
            if (index < text.length) {
                document.getElementById("typing-text").innerHTML += text.charAt(index);
                index++;
                setTimeout(type, 50); // Kecepatan mengetik
            }
        }

        type();
    </script>
    </div>

<a href="http://127.0.0.1:8000/halo" class="login-button" style="animation: fadeIn 1s ease forwards, moveImage 3s ease infinite; position: absolute; top: 53%; left: 9%; transform: translate(-50%, -50%);">Login</a>
<a href="#" onclick="openPopup()" style="animation: fadeIn 1s ease forwards; position: absolute; top: 53%; left: 17%; transform: translate(-50%, -50%); color: #eb380b; text-decoration: none;">Request Access</a> 

<!-- Tambahkan kode untuk pop-up -->
<div id="popup" style="display:none; position:fixed; top:50%; left:50%; transform:translate(-50%, -50%); background-color:white; border:1px solid #ccc; padding:80px; z-index:1000; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); backdrop-filter: blur(70px);">
    <h2 style="text-align: center; margin-bottom: 20px;">Request Access</h2>
    <form style="display: flex; flex-direction: column; align-items: center;">
        <label for="username" style="margin-bottom: 10px;">Username:</label>
        <input type="text" id="username" name="username" style="padding: 10px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 5px; width: 100%; max-width: 400px;">
        <button type="submit" style="padding: 10px 20px; background-color: #3498DB; color: white; border: none; border-radius: 5px; cursor: pointer;">Submit</button>
    </form>
    <button onclick="closePopup()" style="position: absolute; top: 10px; right: 10px; background-color: transparent; border: none; cursor: pointer;">Tutup</button>
</div>

<script>
    function openPopup() {
        document.getElementById("popup").style.display = "block";
    }

    function closePopup() {
        document.getElementById("popup").style.display = "none";
    }
</script>

<div class="image-container" style="float: right; margin-right: 80px; margin-top: -200px;">
    <img src="Homeback.png" alt="Kelola Data Anda" style="width: 1000px; height: 800px; animation: slideUpDown 3s ease infinite;">
</div>

</body>
</html>