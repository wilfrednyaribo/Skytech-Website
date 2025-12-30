<?php include 'includes/header.php'; ?>

<style>
/* ===== GENERAL STYLES ===== */
body {
  font-family: "Poppins", sans-serif;
  color: #333;
  background-color: #fff;
  line-height: 1.7;
}

h1, h2, h3, h4, h5 {
  font-weight: 700;
}

/* ===== HERO SECTION ===== */
.hero-section {
  background: url('assets/images/blue-bg.jpg') center/cover no-repeat, linear-gradient(135deg, #007bff, #004080);
  color: #ffffff;
  padding: 120px 0;
  position: relative;
  overflow: hidden;
}

.hero-section .container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
}

/* Hero Text Animation */
.hero-content {
  max-width: 600px;
  opacity: 0;
  animation: popFromLeft 1.5s ease-out forwards;
}

.hero-content h1 {
  font-size: 3.2rem;
  font-weight: 800;
  line-height: 1.2;
  color: #fff;
}

.hero-content p {
  color: #f0f0f0;
  font-size: 1.1rem;
  margin-top: 20px;
}

.btn-closed {
  margin-top: 30px;
  background-color: #f8d210;
  color: #004080;
  font-weight: 700;
  border: none;
  padding: 12px 35px;
  border-radius: 50px;
  transition: 0.3s;
}
.btn-closed:hover {
  background-color: #ffe666;
  transform: scale(1.05);
}

/* HERO IMAGE */
.hero-image {
  width: 480px;
  height: 480px;
  border-radius: 50%;
  overflow: hidden;
  display: flex;
  justify-content: center;
  align-items: center;
  box-shadow: 0 20px 40px rgba(0,0,0,0.25);
  animation: slideFromRight 1.5s ease forwards;
}
.hero-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

/* Decorative Divider */
.circuit-border {
  background: url('assets/images/circuit-border.png') center no-repeat;
  background-size: cover;
  height: 140px;
  margin-bottom: -10px;
}

/* ===== SECTIONS GENERAL ===== */
section {
  scroll-margin-top: 80px;
  opacity: 0;
  transform: translateY(60px);
  animation: slideUp 1.5s ease forwards;
}
section:nth-of-type(even) {
  animation-delay: 0.5s;
}

section h2 {
  color: #004080;
}

/* ===== ICONS SECTION ===== */
.icon-box img {
  transition: 0.3s;
}
.icon-box:hover img {
  transform: scale(1.1);
}

/* ===== LIST ITEMS ===== */
.list-group-item {
  border: none;
  font-size: 1rem;
  padding: 12px 0;
}
.list-group-item i {
  color: #007bff;
}

/* ===== ACHIEVEMENTS ===== */
.achievement-card {
  background: #fff;
  border-radius: 16px;
  padding: 30px;
  box-shadow: 0 8px 24px rgba(0,0,0,0.08);
  transition: 0.3s;
}
.achievement-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 12px 32px rgba(0,0,0,0.1);
}

/* ===== APPLICATION PROCESS ===== */
.process-section {
  background: #f8f9ff;
  padding: 80px 0;
}
.process-step {
  text-align: center;
  position: relative;
}
.process-step i {
  font-size: 2.5rem;
  color: #007bff;
  background: #eaf3ff;
  padding: 20px;
  border-radius: 50%;
  margin-bottom: 15px;
}
.process-step h5 {
  font-weight: 600;
  color: #333;
}
.process-step p {
  color: #666;
  font-size: 0.95rem;
}
.arrow {
  font-size: 2rem;
  color: #007bff;
  margin: 0 20px;
  align-self: center;
}

/* ===== ANIMATIONS ===== */
@keyframes popFromLeft {
  0% { opacity: 0; transform: translateX(-100px) scale(0.9); }
  70% { opacity: 1; transform: translateX(10px) scale(1.05); }
  100% { opacity: 1; transform: translateX(0) scale(1); }
}
@keyframes slideFromRight {
  0% { opacity: 0; transform: translateX(80px); }
  100% { opacity: 1; transform: translateX(0); }
}
@keyframes slideUp {
  0% { opacity: 0; transform: translateY(80px); }
  100% { opacity: 1; transform: translateY(0); }
}
</style>

<!-- ===== HERO SECTION ===== -->
<section class="hero-section">
  <div class="container">
    <div class="hero-content">
      <h1>Data Science<br>Fellowship</h1>
      <p>
        Are you a recent graduate eager to expand your skills in data analytics?  
        Join our Data Science Fellowship and become part of a community shaping the future of healthcare innovation.
      </p>
      <button class="btn btn-closed" disabled>Applications are Closed</button>
    </div>

    <div class="hero-image">
      <img src="assets/images/datav.jpg" alt="Data Science Illustration">
    </div>
  </div>
</section>

<div class="circuit-border"></div>

<!-- ===== OVERVIEW SECTION ===== -->
<section class="py-5">
  <div class="container">
    <div class="row align-items-center mb-5">
      <div class="col-md-6">
        <img src="assets/images/data.jpg" alt="Data Fellowship" class="img-fluid shadow-lg rounded-4">
      </div>
      <div class="col-md-6">
        <h2 class="fw-bold mb-3">Unlock the Potential of Your Data</h2>
        <p>
          Our <strong>Data Science Master Class in Healthcare</strong> unites professionals from diverse backgrounds — educators, health experts, and technologists — to harness data and AI for improved patient outcomes.
        </p>
      </div>
    </div>

    <div class="row text-center mt-4">
      <div class="col-md-3 col-6 mb-4 icon-box">
        <img src="assets/images/clock.png" width="70" alt="3 Months">
        <h5 class="mt-3 fw-semibold">3 Months</h5>
      </div>
      <div class="col-md-3 col-6 mb-4 icon-box">
        <img src="assets/images/meentor.png" width="70" alt="Training">
        <h5 class="mt-3 fw-semibold">Training & Mentorship</h5>
      </div>
      <div class="col-md-3 col-6 mb-4 icon-box">
        <img src="assets/images/health.png" width="70" alt="Healthcare Data">
        <h5 class="mt-3 fw-semibold">Data in Healthcare</h5>
      </div>
      <div class="col-md-3 col-6 mb-4 icon-box">
       <img src="assets/images/hiring.gif" width="70" alt="Potential Hire">

        <h5 class="mt-3 fw-semibold">Potential for Hire</h5>
      </div>
    </div>
  </div>
</section>

<!-- ===== APPLICATION PROCESS ===== -->
<section class="process-section text-center">
  <div class="container">
    <h2 class="fw-bold mb-5">Application Process</h2>
    <div class="d-flex flex-wrap justify-content-center align-items-center">
      <div class="process-step">
        <img src="assets/images/application.jpg" alt="Edit User" width="100" height="100" style="vertical-align: middle;">

        <h5>Step 1</h5>
        <p>Complete the online application form</p>
      </div>
      <div class="arrow"><i class="fas fa-arrow-right"></i></div>

      <div class="process-step">
        <img src="assets/images/cv.jpg" alt="Edit User" width="100" height="100" style="vertical-align: middle;">

        <h5>Step 2</h5>
        <p>Submit your CV and motivation statement</p>
      </div>
      <div class="arrow"><i class="fas fa-arrow-right"></i></div>

      <div class="process-step">
         <img src="assets/images/cv.jpg" alt="Edit User" width="100" height="100" style="vertical-align: middle;">

        <h5>Step 3</h5>
        <p>Attend an online interview session</p>
      </div>
      <div class="arrow"><i class="fas fa-arrow-right"></i></div>

      <div class="process-step">
        <img src="assets/images/cv.jpg" alt="Edit User" width="100" height="100" style="vertical-align: middle;">

        <h5>Step 4</h5>
        <p>Get selected and start your journey!</p>
      </div>
    </div>
  </div>
</section>

<!-- ===== ABOUT PROGRAM ===== -->
<section class="py-5 bg-light text-center">
  <div class="container">
    <h2 class="fw-bold mb-4">About the Fellowship Program</h2>
    <p class="text-muted mb-4" style="max-width:800px;margin:auto;">
      Calling all graduates passionate about data and innovation! Gain hands-on experience, mentorship, and real-world exposure in our 3-month data fellowship.
    </p>
    <button class="btn btn-danger px-4 py-2 rounded-pill" disabled>Applications are Closed</button>
  </div>
</section>

<!-- ===== LEARNING EXPERIENCE ===== -->
<section class="py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 mb-4">
        <h3 class="fw-bold mb-3">Learn to Analyse & Visualise Data</h3>
        <p>
          Experience a practical, hands-on learning journey through real-world projects, guided by experienced data professionals.
        </p>
        <p>
          At <strong>Willbay Systems</strong>, we nurture young talent ready to transform healthcare using data and AI.
        </p>
      </div>
      <div class="col-md-6">
        <img src="assets/images/datav.jpg" alt="Data Analysis" width="400" height="400" class="img-fluid rounded-4 shadow-sm">
      </div>
    </div>
  </div>
</section>

<!-- ===== WHO WE ARE LOOKING FOR ===== -->
<!-- ===== WHO WE ARE LOOKING FOR ===== -->
<section class="py-5 bg-light">
  <div class="container text-center">
    <h2 class="fw-bold mb-5 text-primary">Who We Are Looking For</h2>
    <div class="row justify-content-center">
      <div class="col-md-8">

        <ul class="list-group list-group-flush text-start" id="looking-list">
          <li class="list-group-item slide-up">
            <img src="assets/images/tick.jpg" alt="Tech Background" class="icon-img me-3">
            <span>Technical background in <strong>Computer Science, IT, Actuarial Science, Statistics, or Math.</strong></span>
          </li>
          <li class="list-group-item slide-up">
            <img src="assets/images/tick.jpg" alt="Coding Skills" class="icon-img me-3">
            <span>Proficiency in a data language (<strong>Python</strong> or <strong>R</strong>).</span>
          </li>
          <li class="list-group-item slide-up">
            <img src="assets/images/tick.jpg" alt="SQL" class="icon-img me-3">
            <span>Experience with <strong>SQL</strong> and relational data modeling.</span>
          </li>
          <li class="list-group-item slide-up">
            <img src="assets/images/tick.jpg" alt="Statistics" class="icon-img me-3">
            <span>Strong <strong>statistical</strong> and analytical skills.</span>
          </li>
          <li class="list-group-item slide-up">
            <img src="assets/images/tick.jpg" alt="Frameworks" class="icon-img me-3">
            <span>Knowledge of modern <strong>data frameworks</strong> and tools.</span>
          </li>
        </ul>

      </div>
    </div>
  </div>
</section>

<!-- ===== CUSTOM STYLES ===== -->
<style>
  .icon-img {
    width: 28px;
    height: 28px;
    vertical-align: middle;
    border-radius: 50%;
    transition: transform 0.3s ease;
  }

  .list-group-item {
    border: none;
    font-size: 1rem;
    display: flex;
    align-items: center;
    background: transparent;
    margin-bottom: 10px;
    color: #333;
  }

  .list-group-item:hover .icon-img {
    transform: scale(1.15);
  }

  /* Slide Up Animation */
  .slide-up {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.8s ease-out;
  }

  .slide-up.show {
    opacity: 1;
    transform: translateY(0);
  }
</style>

<!-- ===== ANIMATION SCRIPT ===== -->
<script>
  // Trigger slide animation when elements come into view
  document.addEventListener("DOMContentLoaded", () => {
    const items = document.querySelectorAll(".slide-up");

    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("show");
        }
      });
    }, { threshold: 0.2 });

    items.forEach(item => observer.observe(item));
  });
</script>


<!-- ===== WHAT YOU'LL ACHIEVE ===== -->
<section class="py-5 text-center">
  <div class="container">
    <h2 class="fw-bold mb-4">What You'll Achieve</h2>
    <p class="text-muted mb-5" style="max-width:800px;margin:auto;">
      Collaborate with industry experts full-time for 3 months on impactful healthcare data projects.
    </p>

    <div class="row">
      <div class="col-md-3 col-6 mb-4">
        <div class="achievement-card">
          <i class="fas fa-heartbeat fa-2x text-primary mb-3"></i>
          <h6>Healthcare Data Analytics & Visualisation</h6>
        </div>
      </div>
      <div class="col-md-3 col-6 mb-4">
        <div class="achievement-card">
          <i class="fas fa-chart-bar fa-2x text-primary mb-3"></i>
          <h6>Data Exploration Techniques</h6>
        </div>
      </div>
      <div class="col-md-3 col-6 mb-4">
        <div class="achievement-card">
          <i class="fas fa-code fa-2x text-primary mb-3"></i>
          <h6>Programming Mastery</h6>
        </div>
      </div>
      <div class="col-md-3 col-6 mb-4">
        <div class="achievement-card">
          <i class="fas fa-brain fa-2x text-primary mb-3"></i>
          <h6>Statistical Analysis & Modeling</h6>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
