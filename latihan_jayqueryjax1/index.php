<?php
include "koneksi.php"; 
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>My Daily Journal</title>
  <link rel="icon" href="img/logo.jpg" />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="index.css" />
</head>

<body>
  <!-- nav begin -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">My Daily Journal</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
          <li class="nav-item">
            <a class="nav-link" href="#profile">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#schedule">Jadwal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#hero">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#article">Article</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#gallery">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item d-flex align-items-center">
            <span
              id="dark-mode-toggle"
              class="p-2 rounded me-1 bg-dark d-flex align-items-center justify-content-center"
              style="width: 40px; height: 40px; cursor: pointer">
              <i class="bi bi-moon-stars-fill text-white fs-5"></i>
            </span>
            <span
              id="light-mode-toggle"
              class="p-2 rounded bg-danger d-flex align-items-center justify-content-center"
              style="width: 40px; height: 40px; cursor: pointer">
              <i class="bi bi-sun-fill text-white fs-5"></i>
            </span>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- nav end -->


  <!-- Profile Start -->
  <section id="profile" class="py-5 bg-red">
    <div class="container">
      <h1 class="text-center mb-4 fw-bold">Profil Mahasiswa</h1>

      <!-- Kotak Profil -->
      <div
        class="d-flex flex-column flex-md-row align-items-center justify-content-center bg-body-tertiary p-4 rounded-4 shadow-lg mx-auto"
        style="max-width: 800px">
        <!-- Foto Profil -->
        <img
          class="img-fluid rounded-circle me-md-5 mb-3 mb-md-0 border border-3 border-dark shadow"
          src="img/foto.jpg"
          alt="Foto Profil"
          style="width: 180px; height: 180px; object-fit: cover" />

        <!-- Data Diri -->
        <div class="card mb-1 shadow">
          <div class="card-body">
            <h5 class="card-title text-center fw-bold mb-1 fs-6">
              M Nabil Karamuhu Zaki
            </h5>
            <p
              class="card-text text-center text-muted"
              style="font-size: 0.7rem">
              Mahasiswa Teknik Informatika
            </p>
            <table class="card-text table table-borderless mb-0">
              <tbody>
                <tr>
                  <th scope="row">Program Studi</th>
                  <td>:</td>
                  <td>Teknik Informatika</td>
                </tr>
                <tr>
                  <th scope="row">Email</th>
                  <td>:</td>
                  <td>1112416013@mhs.ac.id</td>
                </tr>
                <tr>
                  <th scope="row">Telepon</th>
                  <td>:</td>
                  <td>+62 895-1933-4448</td>
                </tr>
                <tr>
                  <th scope="row">Alamat</th>
                  <td>:</td>
                  <td>Jl. Gajah Raya</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Profile End -->

  <!-- Schedule Start -->
  <section id="schedule" class="text-center p-5">
    <div class="container">
      <h1 class="fw-bold display-4 pb-3">Jadwal Kuliah</h1>

      <div
        class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
        <!-- Senin  -->
        <div class="col">
          <div class="card h-100 shadow border-0">
            <div
              class="card-header bg-danger text-white fw-bold fs-5 rounded-top">
              Senin
            </div>
            <div class="card-body">
              <div class="rounded shadow-sm py-2">
                <h6 class="fw-semibold">Rekayasa Perangkat Lunak</h6>
                <div class="d-flex justify-content-evenly">
                  <p class="mb-1 text-secondary">07.00 - 09.30</p>
                  <p class="mb-0 text-secondary">H.3.11</p>
                </div>
              </div>
              <div class="rounded shadow-sm py-2">
                <h6 class="fw-semibold">Pendidikan Kewarganegaraan</h6>
                <div class="d-flex justify-content-evenly">
                  <p class="mb-1 text-secondary">12.30 - 14.10</p>
                  <p class="mb-0 text-secondary">Kulino</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Selasa -->
        <div class="col">
          <div class="card h-100 shadow border-0">
            <div
              class="card-header bg-danger text-white fw-bold fs-5 rounded-top">
              Selasa
            </div>
            <div class="card-body">
              <div class="rounded shadow-sm py-2">
                <h6 class="fw-semibold">Basis Data</h6>
                <div class="d-flex justify-content-evenly">
                  <p class="mb-1 text-secondary">07.00 - 08.40</p>
                  <p class="mb-0 text-secondary">H.5.6</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Rabu -->
        <div class="col">
          <div class="card h-100 shadow border-0">
            <div
              class="card-header bg-danger text-white fw-bold fs-5 rounded-top">
              Rabu
            </div>
            <div class="card-body">
              <div class="rounded shadow-sm py-2">
                <h6 class="fw-semibold">Probabilitas dan Statistika</h6>
                <div class="d-flex justify-content-evenly">
                  <p class="mb-1 text-secondary">07.00 - 09.30</p>
                  <p class="mb-0 text-secondary">H.5.11</p>
                </div>
              </div>
              <div class="rounded shadow-sm py-2">
                <h6 class="fw-semibold">Pemrograman Berbasis Web</h6>
                <div class="d-flex justify-content-evenly">
                  <p class="mb-1 text-secondary">10.20 - 12.00</p>
                  <p class="mb-0 text-secondary">D.2.J</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Kamis  -->
        <div class="col">
          <div class="card h-100 shadow border-0">
            <div
              class="card-header bg-danger text-white fw-bold fs-5 rounded-top">
              Kamis
            </div>
            <div class="card-body">
              <div class="rounded shadow-sm py-2">
                <h6 class="fw-semibold">Sistem Operasi</h6>
                <div class="d-flex justify-content-evenly">
                  <p class="mb-1 text-secondary">07.00 - 09.30</p>
                  <p class="mb-0 text-secondary">H.4.12</p>
                </div>
              </div>
              <div class="rounded shadow-sm py-2">
                <h6 class="fw-semibold">Logika Informatika</h6>
                <div class="d-flex justify-content-evenly">
                  <p class="mb-1 text-secondary">12.30 - 15.00</p>
                  <p class="mb-0 text-secondary">H.3.8</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Jumat  -->
        <div class="col">
          <div class="card h-100 shadow border-0">
            <div
              class="card-header bg-danger text-white fw-bold fs-5 rounded-top">
              Jumat
            </div>
            <div class="card-body">
              <div class="rounded shadow-sm py-2">
                <h6 class="fw-semibold">Basis Data</h6>
                <div class="d-flex justify-content-evenly">
                  <p class="mb-1 text-secondary">07.00 - 08.40</p>
                  <p class="mb-0 text-secondary">D.2.K</p>
                </div>
              </div>
              <div class="rounded shadow-sm py-2">
                <h6 class="fw-semibold">Sistem Informasi</h6>
                <div class="d-flex justify-content-evenly">
                  <p class="mb-1 text-secondary">12.30 - 15.00</p>
                  <p class="mb-0 text-secondary">H.5.8</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Sabtu  -->
        <div class="col">
          <div class="card h-100 shadow border-0">
            <div
              class="card-header bg-danger text-white fw-bold fs-5 rounded-top">
              Sabtu
            </div>
            <div class="card-body">
              <div class="rounded shadow-sm py-2">
                <h6 class="fw-semibold">Belajar Mandiri</h6>
                <div class="d-flex justify-content-evenly">
                  <p class="mb-1 text-secondary">09.00 - 12.00</p>
                </div>
              </div>
              <div class="rounded shadow-sm py-2">
                <h6 class="fw-semibold">Billard</h6>
                <div class="d-flex justify-content-evenly">
                  <p class="mb-1 text-secondary">13.00 - 16.00</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Minggu -->
        <div class="col">
          <div class="card h-100 shadow border-0">
            <div
              class="card-header bg-danger text-white fw-bold fs-5 rounded-top">
              Minggu
            </div>
            <div class="card-body">
              <div class="rounded shadow-sm py-2">
                <h6 class="fw-semibold">Random Kegiatan</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Schedule End -->

  <!-- hero begin -->
  <section id="hero" class="bg-black text-white text-center">
    <div class="container-fluid p-0">
      <div
        class="bg-image d-flex justify-content-center align-items-center"
        style="
            background-image: url('img/img2.jpg');
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            height: 450px;
          ">
        <h1 class="fw-bold display-1 text-shadow">Welcome In Indonesia</h1>
      </div>
    </div>
  </section>

  <!-- hero end -->

  <!-- article begin -->
  <section id="article" class="text-center p-5">
    <div class="container">
      <h1 class="fw-bold display-4 pb-3">article</h1>
      <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
        <?php
        $sql = "SELECT * FROM article ORDER BY tanggal DESC";
        $hasil = $conn->query($sql);

        while ($row = $hasil->fetch_assoc()) {
        ?>
          <div class="col">
            <div class="card h-100">
              <img src="img/<?= $row["gambar"] ?>" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title"><?= $row["judul"] ?></h5>
                <p class="card-text">
                  <?= $row["isi"] ?>
                </p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary">
                  <?= $row["tanggal"] ?>
                </small>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </section>
  <!-- article end -->

  <!-- gallery begin -->
  <section id="gallery" class="text-center py-5">
    <div class="container">
      <h1 class="fw-bold display-5 pb-3">Gallery</h1>

      <div
        id="carouselExample"
        class="carousel slide shadow-lg rounded-4 overflow-hidden"
        data-bs-ride="carousel">
        <div class="carousel-inner">
          
         <?php
        $sql = "SELECT * FROM gallery ORDER BY tanggal DESC";
        $hasil = $conn->query($sql);
        $active = true;

        while ($row = $hasil->fetch_assoc()) {
        ?>
          <div class="carousel-item <?= $active ? 'active' : '' ?>">
            <img
              src="img/<?= $row['gambar']; ?>"
              class="d-block w-100"
              alt="Gallery Image">
          </div>
        <?php
          $active = false;
        }
        ?>

        </div>

        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExample"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>

        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExample"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>
  <!-- gallery end -->

  <!-- footer begin -->
  <footer class="text-center p-5">
    <div>
      <a href="https://instagram.com/udinusofficial"><i class="bi bi-instagram h2 p-2 text-dark"></i></a>
      <a href="https://twitter.com/udinusofficial"><i class="bi bi-twitter h2 p-2 text-dark"></i></a>
      <a href="https://wa.me/+62812685577"><i class="bi bi-whatsapp h2 p-2 text-dark dark:"></i></a>
    </div>
    <div>Muhammad Nabil Karamuhu Zaki &copy; 2025</div>
  </footer>
  <!-- footer end -->

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
  <script>
    //Toggle Mode
    var htmlElement = document.documentElement;

    document.getElementById("dark-mode-toggle").onclick = function() {
      htmlElement.setAttribute("data-bs-theme", "dark");
    };

    document.getElementById("light-mode-toggle").onclick = function() {
      htmlElement.setAttribute("data-bs-theme", "light");
    };
  </script>
</body>

</html>