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

 <div class="container-fluid py-5" style="background: linear-gradient(to right, #0e0e0e, #1a1a1a); color: white;">
  <div class="container">
    <h2 class="text-center fw-bold mb-5">Diskusikan Kebutuhan Anda dengan Lawencon!</h2>
    <div class="row">
      <!-- Kolom Kiri -->
      <div class="col-lg-4 mb-4">
        <div class="mb-4">
          <i class="bi bi-lightning-charge-fill text-primary"></i>
          <h5 class="fw-bold">Respon Cepat</h5>
          <p>Lawencon mengutamakan membantu anda secepat mungkin</p>
        </div>
        <div class="mb-4">
          <i class="bi bi-chat-dots-fill text-primary"></i>
          <h5 class="fw-bold">Komunikatif</h5>
          <p>Tim kami mampu memahami dan memenuhi berbagai spesifikasi kebutuhan yang anda inginkan</p>
        </div>
        <div class="mb-4">
          <i class="bi bi-geo-alt-fill text-primary"></i>
          <h5 class="fw-bold">Fleksibilitas</h5>
          <p>Anda bebas memilih penempatan kerja di berbagai lokasi, baik secara on-site, hybrid, maupun remote</p>
        </div>
        <div class="mb-4">
          <i class="bi bi-patch-check-fill text-primary"></i>
          <h5 class="fw-bold">Jaminan Penggantian</h5>
          <p>Garansi pengganti tanpa biaya ekstra jika performa outsource kurang memuaskan</p>
        </div>
      </div>

      <!-- Form Tengah -->
      <div class="col-lg-4 mb-4">
        <form>
          <div class="row">
            <div class="col-md-12 mb-3">
              <label class="form-label">Full Name *</label>
              <input type="text" class="form-control bg-dark text-white" placeholder="John Doe">
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Email *</label>
              <input type="email" class="form-control bg-dark text-white" placeholder="example@gmail.com">
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Telephone *</label>
              <input type="text" class="form-control bg-dark text-white" placeholder="08123456XXX">
            </div>
            <div class="col-md-12 mb-3">
              <label class="form-label">Company Name *</label>
              <input type="text" class="form-control bg-dark text-white" placeholder="PT Berkah Jaya Selalu">
            </div>
            <div class="col-md-12 mb-3">
              <label class="form-label">Message</label>
              <textarea class="form-control bg-dark text-white" rows="4" placeholder="Sampaikan Kebutuhan Anda....."></textarea>
            </div>
            <div class="col-md-12">
              <button type="submit" class="btn btn-primary w-100">Send Message</button>
            </div>
          </div>
        </form>
      </div>

      <!-- Kolom Kanan -->
      <div class="col-lg-4 mb-4">
        <h5 class="fw-bold">Informasi Kontak</h5>
        <p><i class="bi bi-telephone-fill"></i> 021–2854–2549</p>
        <p><i class="bi bi-envelope-fill"></i> contact@lawencon.com</p>
        <p><i class="bi bi-envelope-fill"></i> salesps@lawencon.com</p>
        <hr class="border-secondary">
        <h5 class="fw-bold">Gabung dengan Lawencon</h5>
        <p><i class="bi bi-envelope-fill"></i> karir@lawencon.com</p>
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
