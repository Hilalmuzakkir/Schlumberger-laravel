<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>
</style>
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
  <!-- ... ini adalah css untuk latar belakang ... -->
  <style>
    .latar-belakang {
        background-image: url('documentimg.jpg');
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
        <a href="#tickets" class="w3-button w3-small w3-round-small w3-transparent w3-hover-opacity-off" style="font-weight:900; border: 2px solid white; color: white; transition: all 0.3s ease;">Back</a>
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
            ketikTeks(document.getElementById("judul"), "Search Your Document", 100);
            setTimeout(function() {
                ketikTeks(document.getElementById("subjudul"), "SLB | For Better Planet", 100);
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

  <!-- ... ini adalah code untuk fitur ... -->

  <style>
        body {
            background-color: #f8f9fa;
        }
        .search-container {
            margin-top: 100px;
            text-align: center;
        }
        .search-input {
            width: 50%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ced4da;
        }
        .search-button {
            margin-left: 10px;
            padding: 10px 20px;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            border: none;
        }
        .search-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="container search-container" >
    <h1>Cari Dokumen</h1>
    <input type="text" class="search-input" placeholder="Masukkan kata kunci...">
    <button class="search-button"><i class="fas fa-search"></i> Cari</button>
    
    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Dokumen</th>
                <th>Tanggal</th>
                <th>Aksi</th>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Dokumen A</td>
                <td>2023-01-01</td>
                <td><button class="btn btn-primary" onclick="showDocumentDetails(1)">Lihat</button> <button class="btn btn-danger" onclick="showConfirmDeleteModal()">Hapus</button></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Dokumen B</td>
                <td>2023-01-02</td>
                <td><button class="btn btn-primary" onclick="showDocumentDetails(2)">Lihat</button> <button class="btn btn-danger" onclick="showConfirmDeleteModal()">Hapus</button></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Dokumen B</td>
                <td>2023-01-02</td>
                <td><button class="btn btn-primary" onclick="showDocumentDetails(3)">Lihat</button> <button class="btn btn-danger" onclick="showConfirmDeleteModal()">Hapus</button></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Dokumen B</td>
                <td>2023-01-02</td>
                <td><button class="btn btn-primary" onclick="showDocumentDetails(4)">Lihat</button> <button class="btn btn-danger" onclick="showConfirmDeleteModal()">Hapus</button></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Dokumen B</td>
                <td>2023-01-02</td>
                <td><button class="btn btn-primary" onclick="showDocumentDetails(4)">Lihat</button> <button class="btn btn-danger" onclick="showConfirmDeleteModal()">Hapus</button></td>
            </tr>
            <!-- Tambahkan lebih banyak baris sesuai kebutuhan -->
        </tbody>
    </table>
</div>

<!-- Modal Konfirmasi Hapus -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteModalLabel">Konfirmasi Hapus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus dokumen ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteButton">Hapus</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Detail Dokumen -->
<div class="modal fade" id="documentDetailsModal" tabindex="-1" role="dialog" aria-labelledby="documentDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="documentDetailsModalLabel">Detail Dokumen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><strong>ID:</strong> <span id="docId"></span></p>
                <p><strong>Nama Dokumen:</strong> <span id="docName"></span></p>
                <p><strong>Tanggal:</strong> <span id="docDate"></span></p>
                <p><strong>Deskripsi:</strong> <span id="docDescription"></span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    function showConfirmDeleteModal() {
        $('#confirmDeleteModal').modal('show');
    }

    document.getElementById('confirmDeleteButton').onclick = function() {
        // Logika untuk menghapus dokume
        alert("Dokumen dihapus."); // Ganti dengan logika penghapusan
        $('#confirmDeleteModal').modal('hide');
    };

    function showDocumentDetails(id) {
        // Ganti dengan logika untuk mendapatkan detail dokumen
        document.getElementById('docId').innerText = id;
        document.getElementById('docName').innerText = "Dokumen " + id;
        document.getElementById('docDate').innerText = "2023-01-0" + id;
        document.getElementById('docDescription').innerText = "Deskripsi untuk dokumen " + id;
        
        $('#documentDetailsModal').modal('show');
    }
</script>
</body>
</html>

