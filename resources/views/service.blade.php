<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <div class="container pt-5 mt-5">
    @yield('content')
  </div>

  <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://www.lawencon.com/wp-content/uploads/2024/09/Banner-Lawencon.png" class="d-block w-100" alt="Hero Image">
      </div>
    </div>
  </div>

  <div class="container my-5" id="tentang">
    <div class="text-center mb-4">
      <h6>Our Services</h6>
      <h4 class="fw-bold">Siap Melangkah Lebih Maju dengan Infrastruktur IT Terdepan?</h4>
      <p>Revolusikan bisnis Anda dan perkuat keunggulan kompetitif dengan berbagai IT service inovatif kami.</p>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
      <div class="col">
        <div class="card h-100 text-white">
          <img src="https://www.koombea.com/wp-content/uploads/2020/06/How-Your-HiTech-App-Idea-Can-Focus-on-Future-Trends@2x.webp" class="card-img-top" alt="Application Service">
          <div class="card-body">
            <h5 class="card-title">Application Service</h5>
            <p class="card-text">Solusi aplikasi serbaguna yang dirancang dengan bahasa pemrograman dan framework canggih untuk kinerja optimal dan fleksibilitas maksimal.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 text-white">
          <img src="https://bizwiz.ae/wp-content/uploads/2024/03/ERP-Implementation.webp" class="card-img-top" alt="ERP">
          <div class="card-body">
            <h5 class="card-title">ERP Implementation and Consultation</h5>
            <p class="card-text">Dapatkan solusi ERP yang dipersonalisasi dari konsultan ERP berpengalaman yang memahami kebutuhan unik perusahaan Anda.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 text-white">
          <img src="https://storage.googleapis.com/ekrutassets/blogs/images/000/003/828/original/big-data-analytics-adalah-EKRUT.jpg" class="card-img-top" alt="Big Data">
          <div class="card-body">
            <h5 class="card-title">Big Data & Analytics</h5>
            <p class="card-text">Ubah data Anda menjadi wawasan berharga dan tingkatkan pengambilan keputusan dengan layanan analisis data terbaik.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 text-white">
          <img src="https://www.lawencon.com/wp-content/uploads/2024/07/Human-Capital-Management-System-Services-1024x738.webp" class="card-img-top" alt="HCM">
          <div class="card-body">
            <h5 class="card-title">Human Capital Management System Service</h5>
            <p class="card-text">Bebaskan HR dari tugas repetitif dengan HCM all-in-one dan fokuslah pada strategi yang lebih penting.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 text-white">
          <img src="https://itgix.com/wp-content/uploads/2024/03/ITGix-Professional-Services.jpg" class="card-img-top" alt="Professional">
          <div class="card-body">
            <h5 class="card-title">Professional Services</h5>
            <p class="card-text">Dapatkan talenta IT terampil dan berpengalaman yang siap mendukung kebutuhan teknologi Anda.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="bg-dark text-white py-4 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-3">
          <h5>PT. Lawencon Internasional</h5>
          <p>Lawencon is established as IT Company in 2009 by a team of professionals who have exposure to and are comfortable with enterprise business management solution software.</p>
          <small>Disclaimer: All images are copyrighted to their respective owners. All content cited is derived from their respective sources.</small>
        </div>
        <div class="col-md-4 mb-3">
          <h5>Navigasi</h5>
<ul class="list-unstyled">
            <li><a href="/layout" class="text-white text-decoration-none">Home</a></li>
            <li><a href="/about" class="text-white text-decoration-none">Tentang</a></li>
            <li><a href="/service" class="text-white text-decoration-none">Layanan</a></li>
            <li><a href="/contact" class="text-white text-decoration-none">Kontak</a></li>
          </ul>
        </div>
        <div class="col-md-4 mb-3">
          <h5>Contact Us</h5>
          <p>Email: contact@lawencon.com</p>
          <p>Telp: ‪(021) 28542549‬</p>
          <p>Alamat: Pakuwon Tower, Jl Casablanca No.Kav 88 22nd floor, Menteng Dalam, Tebet, Jakarta Selatan 12870</p>
        </div>
      </div>
      <hr class="border-light">
      <div class="text-center">
        <small>&copy; {{ date('Y') }} Lawencon International - All Rights Reserved.</small>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
