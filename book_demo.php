<?php include 'includes/header.php'; ?>

<!-- ======= Book Demo Hero Section ======= -->
<section class="demo-hero text-center text-white py-5" style="background: linear-gradient(135deg, #001f3f, #007bff);">
  <div class="container py-5">
    <h1 class="fw-bold mb-3 display-5">Book a <span style="color:#00bfff;">Free Demo</span></h1>
    <p class="lead mb-4">
      See how Wilbay Solutions can transform your business with smart, scalable digital solutions.
    </p>
    <a href="#demo-form" class="btn btn-light btn-lg fw-bold px-5 py-3 rounded-pill shadow-lg">
      Schedule Demo
    </a>
  </div>
</section>

<!-- ======= Why Book a Demo ======= -->
<section class="demo-benefits py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold text-primary">Why Book a Demo?</h2>
      <p class="text-muted">Discover the value before you decide.</p>
    </div>

    <div class="row g-4 text-center">
      <div class="col-md-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100 hover-scale">
          <i class="fas fa-eye fa-2x text-primary mb-3"></i>
          <h5 class="fw-bold">Live Walkthrough</h5>
          <p class="text-muted small">
            Experience our systems in action with a guided demonstration.
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100 hover-scale">
          <i class="fas fa-lightbulb fa-2x text-primary mb-3"></i>
          <h5 class="fw-bold">Tailored Solutions</h5>
          <p class="text-muted small">
            We align the demo to your business needs and challenges.
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-4 bg-white rounded-4 shadow-sm h-100 hover-scale">
          <i class="fas fa-handshake fa-2x text-primary mb-3"></i>
          <h5 class="fw-bold">No Obligation</h5>
          <p class="text-muted small">
            Completely free with no pressure to commit.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ======= Demo Booking Form ======= -->
<section id="demo-form" class="demo-form-section py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold text-primary">Schedule Your Demo</h2>
      <p class="text-muted">
        Fill in the form below and our team will contact you to confirm your demo session.
      </p>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6">
        <form action="submit_demo.php" method="POST"
              class="p-4 bg-white shadow rounded-4 border-top border-primary border-3">

          <div class="mb-3">
            <label class="form-label fw-bold">Full Name</label>
            <input type="text" name="name" class="form-control" placeholder="Your full name" required>
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Email Address</label>
            <input type="email" name="email" class="form-control" placeholder="you@example.com" required>
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Phone Number</label>
            <input type="tel" name="phone" class="form-control" placeholder="+254 700 000000">
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Company / Organization</label>
            <input type="text" name="company" class="form-control" placeholder="Company name">
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Service of Interest</label>
            <select name="service" class="form-select" required>
              <option value="">Select a service</option>
              <option>Web Application Development</option>
              <option>Mobile App Development</option>
              <option>ERP / Management Systems</option>
              <option>IT Support & Automation</option>
              <option>Custom Software Solutions</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Preferred Demo Date</label>
            <input type="date" name="preferred_date" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Additional Notes</label>
            <textarea name="message" rows="4" class="form-control"
                      placeholder="Briefly describe what you'd like to see in the demo"></textarea>
          </div>

          <button type="submit"
                  class="btn btn-primary w-100 py-3 fw-bold rounded-pill shadow">
            Book Demo
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- ======= Demo CTA ======= -->
<section class="demo-cta py-5 text-center text-white"
         style="background: linear-gradient(135deg, #0056b3, #001f3f);">
  <div class="container">
    <h2 class="fw-bold mb-3 display-6">Ready to See It in Action?</h2>
    <p class="lead mb-4">
      Let us show you how Wilbay Solutions can streamline your operations and accelerate growth.
    </p>
    <a href="#demo-form" class="btn btn-outline-light btn-lg rounded-pill fw-bold px-5 py-3">
      Book Your Demo Today
    </a>
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
  form .form-control,
  form .form-select {
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
