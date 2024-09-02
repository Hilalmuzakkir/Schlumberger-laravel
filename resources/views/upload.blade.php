<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Halaman Beranda</title>
    <!--Navbar Section-->
     <nav class="navbar">
      <ul class="menu">
          <li><a href="/home">Home</a></li>
          <li><a href="/layanan.slb">Service</a></li>
          <li><a href="https://www.slb.com" target="_blank">About</a></li>
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
          color: black;
          text-decoration: none;
          font-size: 18px;
          transition: color 0.3s, transform 0.3s;
      }
      .menu a:hover {
          color: #ffcc00;
          transform: scale(1.1);
      }
  </style>
</head>

<div class="main-content" style="margin-top: -80px;"> <!-- Menambahkan jarak antara navbar dan content -->
    <div class="content-wrapper">
        <div class="activity-grid">
            <div class="activity-box animated">
                <div class="activity-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="activity-content">
                    <h3 class="activity-title">Upload File</h3>

                </div>
            </div>
        </div>
        <div class="recent-activity">
            <h3 class="recent-activity-title">Aktivitas Terbaru</h3>
            <ul class="recent-activity-list">
                <li class="recent-activity-item">
                    <span class="activity-time">10:30</span>
                    <span class="activity-text">Permintaan #2468 dibuat oleh Tim Pemasaran</span>
                </li>
                <li class="recent-activity-item">
                    <span class="activity-time">09:45</span>
                    <span class="activity-text">Komentar baru pada permintaan #1357</span>
                </li>
                <li class="recent-activity-item">
                    <span class="activity-time">08:15</span>
                    <span class="activity-text">Permintaan #8642 disetujui oleh Manajer</span>
                </li>
                <li class="recent-activity-item">
                    <span class="activity-time">Kemarin</span>
                    <span class="activity-text">5 permintaan baru diterima</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="login-button" style="margin-top: 230px; position: absolute; top: 50%; left: 10%; transform: translate(-50%, -50%);"
    data-bs-toggle="modal" data-bs-target="#formUpload">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="currentColor"
        class="bi bi-clipboard2-plus" viewBox="0 0 16 16">
        <path
            d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5z" />
        <path
            d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5z" />
        <path d="M8.5 6.5a.5.5 0 0 0-1 0V8H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V9H10a.5.5 0 0 0 0-1H8.5z" />
    </svg>Create new
</div>

<div class="modal fade" id="formUpload" tabindex="-1" aria-labelledby="formUploadLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-light">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="formUploadLabel">Upload File</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="/upload" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-4 animate__animated animate__fadeInUp">
                        <label for="filename" class="form-label">File Name</label>
                        <input type="text" class="form-control border-0 border-bottom" id="filename" name="filename" required>
                    </div>
                    <div class="mb-4 animate__animated animate__fadeInUp" style="animation-delay: 0.2s;">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" class="form-control border-0 border-bottom" id="date" name="date" required>
                    </div>
                    <div class="mb-4 animate__animated animate__fadeInUp" style="animation-delay: 0.4s;">
                        <label for="file" class="form-label">File</label>
                        <input type="file" class="form-control border-0 border-bottom" id="file" name="file" accept=".csv" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary animate__animated animate__pulse animate__infinite">Save File</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"></script>

<script>
    document.getElementById('file').addEventListener('change', function() {
        const file = this.files[0];
        const fileType = file.type;
        if (fileType !== 'text/csv') {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Only CSV files are allowed!',
            });
            this.value = '';
        }
    });

    @if (session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('success') }}',
        });
    @endif

    @if (session('error'))
        Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: '{{ session('error') }}',
        });
    @endif
</script>
