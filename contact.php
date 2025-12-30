<?php include 'includes/header.php'; ?>

<!-- ======= Contact Hero Section ======= -->
<section class="contact-hero text-center text-white py-5" style="background: linear-gradient(135deg, #001f3f, #007bff);">
  <div class="container py-5">
    <h1 class="fw-bold mb-3 display-5">Get in Touch with <span style="color:#00bfff;">SkyTech Developers</span></h1>
    <p class="lead mb-4">We’d love to hear from you. Let’s discuss how we can help your business grow.</p>
    <a href="#contact-form" class="btn btn-light btn-lg fw-bold px-5 py-3 rounded-pill shadow-lg">Contact Us</a>
  </div>
</section>

<!-- ======= Contact Info Section ======= -->
<section class="contact-info py-5 bg-light">
  <div class="container">
    <div class="row g-4 text-center">
      <div class="col-md-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100 hover-scale">
          <i class="fas fa-map-marker-alt fa-2x text-primary mb-3"></i>
          <h5 class="fw-bold">Our Location</h5>
          <p class="text-muted small mb-0">Nairobi, Kenya</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100 hover-scale">
          <i class="fas fa-phone fa-2x text-primary mb-3"></i>
          <h5 class="fw-bold">Call Us</h5>
          <p class="text-muted small mb-0">+254 741473024</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100 hover-scale">
          <i class="fas fa-envelope fa-2x text-primary mb-3"></i>
          <h5 class="fw-bold">Email Address</h5>
          <p class="text-muted small mb-0">info@skytechdevelopers.co.ke</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ======= Contact Form Section ======= -->
<section id="contact-form" class="contact-form-section py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold text-primary">Send Us a Message</h2>
      <p class="text-muted">Fill in the form below and our team will get back to you shortly.</p>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6">
        <form action="submit_contact.php" method="POST" class="p-4 bg-white shadow rounded-4 border-top border-primary border-3">

          <div class="mb-3">
            <label class="form-label fw-bold">Full Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Email Address</label>
            <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Phone Number</label>
            <input type="tel" name="phone" class="form-control" placeholder="+254 700 000000">
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Subject</label>
            <input type="text" name="subject" class="form-control" placeholder="How can we help you?" required>
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Message</label>
            <textarea name="message" rows="5" class="form-control" placeholder="Write your message here..." required></textarea>
          </div>

          <button type="submit" class="btn btn-primary w-100 py-3 fw-bold rounded-pill shadow">
            Send Message
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- ======= Map Section ======= -->
<section class="map-section py-5 bg-light">
  <div class="container">
    <div class="text-center mb-4">
      <h2 class="fw-bold text-primary">Visit Our Office</h2>
      <p class="text-muted">We are always happy to welcome you.</p>
    </div>
    <div class="ratio ratio-16x9 rounded-4 overflow-hidden shadow">
      <iframe
        src="https://www.google.com/maps?q=Nairobi%20Kenya&output=embed"
        style="border:0; width:100%; height:450px;"
        allowfullscreen=""
        loading="lazy">
      </iframe>

    </div>
</section>

<?php include 'includes/footer.php'; ?>

<!-- ======= Inline Styles ======= -->
<style>
  body {
    background-color: #f9fafc;
  }

  .hover-scale {
    transition: transform 0.3s ease;
  }

  .hover-scale:hover {
    transform: scale(1.05);
  }

  form .form-control {
    border-radius: 12px;
    padding: 10px 14px;
  }

  .btn-primary {
    background: linear-gradient(90deg, #007bff, #0056b3);
    border: none;
  }

  .btn-primary:hover {
    background: linear-gradient(90deg, #0056b3, #004080);
  }
</style>