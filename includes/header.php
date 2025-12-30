<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SkyTech Developers | Empowering Businesses Through Smart Software</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1B4a+0S2bE8z4H3MDeC+XK5b9b06v0JJpKtR+5da0g5vJ+9mZ3TjR1aQ8D+M+P4Ykg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />

  <!-- Custom Styles -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- 🌐 Mini Top Navbar -->
<div class="top-navbar py-2 px-3">
  <div class="container d-flex justify-content-between align-items-center flex-wrap">

    <!-- Contact Info -->
    <div class="contact-info d-flex align-items-center flex-wrap mb-2 mb-md-0">
      <span class="me-4">
        <i class="fas fa-phone-alt me-1"></i> +254 741 473 024
      </span>
      <span>
        <i class="fas fa-envelope me-1"></i> info@skytechdevelopers.co.ke
      </span>
    </div>

    <!-- Social Icons -->
    <div class="social-icons d-flex align-items-center text-white">
      <a href="#" class="text-white me-3"><i class="fa-brands fa-facebook-f"></i></a>
      <a href="#" class="text-white me-3"><i class="fa-brands fa-twitter"></i></a>
      <a href="#" class="text-white me-3"><i class="fa-brands fa-linkedin-in"></i></a>
      <a href="#" class="text-white"><i class="fa-brands fa-instagram"></i></a>
    </div>

  </div>
</div>

<!-- 🧭 Main Navbar -->
<nav class="navbar navbar-expand-lg navbar-light shadow-sm sticky-top bg-white">
  <div class="container">

    <!-- Brand -->
    <a class="navbar-brand fw-bold d-flex align-items-center" href="index.php">
      <img src="assets/images/logo.png" alt="SkyTech Developers Logo" width="100" height="100" class="me-2">
      <span class="brand-gradient">SkyTech Developers</span>
    </a>

    <!-- Mobile Toggle -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Nav Links -->
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav align-items-lg-center">

        <li class="nav-item">
          <a class="nav-link active" href="index.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="services.php">Our Services</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="solutions.php">Our Solutions</a>
        </li>

        <!-- Careers Dropdown -->
        
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="faqs.php">FAQs</a>
        </li>

        <li class="nav-item ms-lg-2">
          <a href="book_demo.php" class="btn btn-book">Book Now</a>
        </li>

      </ul>
    </div>
  </div>
</nav>

<!-- Preloader Script -->
<script src="assets/js/preloader.js"></script>

<!-- ✅ Preloader -->
<div id="preloader">
  <div class="preloader-content text-center">
    <img src="assets/images/logo.png"
         alt="SkyTech Developers Logo"
         class="preloader-logo mb-3"
         style="width: 200px; height: 200px;">

    <div id="preloader-percentage" class="preloader-text">0%</div>

    <div class="preloader-bar">
      <div class="preloader-progress"></div>
    </div>
  </div>
</div>

</body>
</html>
