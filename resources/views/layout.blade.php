<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - Lawencon</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
     <style>
    .carousel-caption {
      background: rgba(0, 0, 0, 0.4);
      padding: 20px;
      border-radius: 10px;
    }
    body {
      background-color: #0e0e0e;
      color: white;
    }
    .card {
      background-color: #1c1c1c;
      border: 1px solid #2c2c2c;
    }
    .card:hover {
      border-color: #007bff;
    }
  </style>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-secondary bg-white shadow-sm fixed-top">
        <div class="container-fluid">
            <!-- Logo di sebelah kiri -->
    <a class="navbar-brand d-flex align-items-center" href="/">
        <img src="{{ ('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS26_ShBgD-n1CiF0xvtHjVn8oYPqdVXktuvg&s') }}"
             alt="Company Logo"
            class="img-fluid"
            style="height: 60px;"
            onerror="this.src='https://alfadigitalsolution.com/wp-content/uploads/2023/01/alfadigitalsolution-logo.webp'">
    </a>



            <!-- Menu di sebelah kanan -->
            <ul class="navbar-nav ms-auto me-3">
                <li class="nav-item"><a class="nav-link" href="/layout">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="/service">Service</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
            </ul>
        </div>
    </nav>



<div class="container pt-5 mt-4">
    @yield('content')
</div>





<!-- Carousel Header -->
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.lawencon.com/wp-content/uploads/2024/09/Banner-Lawencon.png" class="d-block w-100" alt="Hero Image">
    </div>
  </div>
</div>

<!-- Tentang Kami -->
<div class="container my-5" id="tentang">
  <div class="text-center mb-4">
    <h2 class="fw-bold">Tentang Lawencon</h2>
    <h4 class="text-muted">Mulai Transformasi Digital Bersama Kami</h4>
  </div>
  <div class="row align-items-center">
    <div class="col-md-6">
      <img src="https://www.lawencon.com/wp-content/uploads/2024/08/Tentang-Lawencon-Desktop.webp" alt="Team" class="img-fluid rounded shadow">
    </div>
    <div class="col-md-6">
      <p><strong>ALawencon</strong> adalah vendor konsultan IT di Indonesia yang sudah berpengalaman, berdedikasi, dan siap membantu Anda mengatasi berbagai tantangan bisnis yang semakin kompetitif. Lawencon menawarkan solusi IT yang dirancang khusus untuk memenuhi kebutuhan bisnis Anda, dengan menggabungkan pengetahuan industri yang luas dan keahlian teknologi yang mutakhir.</p>
    </div>
  </div>
</div>

</body>
<footer class="bg-dark text-white py-4 mt-5">
    <div class="container">
        <div class="row">
            <!-- Kolom 1: Tentang -->
            <div class="col-md-4 mb-3">
                <h5>PT. Lawencon Internasional</h5>
                <p>Lawencon is established as IT Company in 2009 by a team of professionals who have exposure to and are comfortable with enterprise business management solution software.
Disclaimer: All images are copyrighted to their respective owners. All content cited is derived from their respective sources.</p>
            </div>

            <!-- Kolom 2: Navigasi -->
            <div class="col-md-4 mb-3">
                <h5>Navigasi</h5>
               <ul class="list-unstyled">
            <li><a href="/layout" class="text-white text-decoration-none">Home</a></li>
            <li><a href="/about" class="text-white text-decoration-none">Tentang</a></li>
            <li><a href="/service" class="text-white text-decoration-none">Layanan</a></li>
            <li><a href="/contact" class="text-white text-decoration-none">Kontak</a></li>
          </ul>
            </div>

            <!-- Kolom 3: Kontak -->
            <div class="col-md-4 mb-3">
                <h5>Contact Us</h5>
                <p>Email: contact@lawencon.com</p>
                <p>Telp: ‪(021) 28542549‬</p>
                <p>Alamat: Pakuwon Tower, Jl Casablanca No.Kav 88 22nd floor, Menteng Dalam, Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12870</p>
            </div>
        </div>

        <hr class="border-light">

        <div class="text-center">
            <small>&copy; {{ date('Y') }} Lawencon International - All Rights Reserved.</small>
        </div>
    </div>
</footer>
</html>
