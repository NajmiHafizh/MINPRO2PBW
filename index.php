<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Portfolio Najmi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Najmi</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About Me</a></li>
                <li class="nav-item"><a class="nav-link" href="#certificates">Certificates</a></li>
            </ul>
        </div>
    </div>
</nav>

<section id="home" class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1>Halo, Saya Najmi</h1>
                <p>
                    Mahasiswa Sistem Informasi yang tertarik pada 
                    Data Science, Data Visualization, dan Pemrograman Python. 
                    Saya senang mengolah data menjadi insight yang mudah dipahami.
                </p>
                <a href="#about" class="btn btn-primary">Lihat Selengkapnya</a>
            </div>
            <div class="col-md-6 text-center">
                <img src="foto.jpg" class="img-fluid rounded shadow-sm" width="250">
            </div>
        </div>
    </div>
</section>

<section id="about" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">About Me</h2>
        <p class="text-center">
                Saya mendalami bidang Data Science, Data Visualization, 
                dan Data Analysis. Saya memiliki minat dalam mengolah 
                data mentah menjadi informasi yang berguna untuk 
                pengambilan keputusan.
        </p>
        <h4 class="mt-4">Skills</h4>

        <p>Pemrograman Python</p>
        <div class="progress mb-3">
            <div class="progress-bar bg-success" style="width: 80%;">80%</div>
        </div>

        <p>Data Visualization</p>
        <div class="progress mb-3">
            <div class="progress-bar bg-info" style="width: 75%;">75%</div>
        </div>

        <p>Data Science</p>
        <div class="progress mb-3">
            <div class="progress-bar bg-warning text-dark" style="width: 70%;">70%</div>
        </div>

        <h4 class="mt-4">Pengalaman</h4>
        <ul>
            <li>Mengolah data menggunakan spreadsheet dan Python dasar</li>
            <li>Membuat dashboard visualisasi data</li>
            <li>Pengenalan Konsep data science</li>
        </ul>
    </div>
</section>

<section id="certificates" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Certificates</h2>
        <div class="row">
        <?php
        $query = mysqli_query($conn, "SELECT * FROM certificates");
        while ($row = mysqli_fetch_assoc($query)) {
        ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    
                    <img src="<?= $row['image']; ?>" 
                        class="card-img-top certificate-img"
                        data-bs-toggle="modal"
                        data-bs-target="#imageModal"
                        onclick="showImage('<?= $row['image']; ?>')">
                    <div class="card-body">
                        <h5 class="card-title"><?= $row['title']; ?></h5>
                        <p class="card-text"><?= $row['description']; ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
</section>

<div class="modal fade" id="imageModal">
    <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-body text-center">
            <img id="modalImage" class="img-fluid">
        </div>
    </div>
    </div>
</div>

<footer class="bg-dark text-white text-center py-3">
    © 2026 Najmi Hafizh
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
function showImage(src) {
    document.getElementById("modalImage").src = src;
}
</script>
</body>
</html>