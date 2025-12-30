<?php include 'includes/header.php'; ?>

<!-- ======= Solutions Hero Section ======= -->
<section class="solutions-hero py-5 text-center text-white"
  style="background: linear-gradient(135deg, #001f3f, #007bff);">
  <div class="container py-5">
    <h1 class="fw-bold mb-3">Our <span style="color: #00bfff;">Solutions</span></h1>
    <p class="lead mb-0">Empowering Businesses Through Smart, Scalable, and Secure Technology</p>
  </div>
</section>

<!-- ======= Solutions Overview Section ======= -->
<section class="solutions-overview py-5">
  <div class="container text-center">
    <h2 class="fw-bold text-primary mb-4">We Offer Innovative Technology Solutions</h2>
    <p class="text-muted mb-5">
      At <strong>Willbay Solutions</strong>, we deliver reliable, custom-built digital solutions designed to help your organization stay efficient, connected, and competitive.
    </p>

    <div class="row g-4">

      <?php
      $solutions = [
  ['title'=>'Library Management System','desc'=>'A smart system to manage book records, track borrowing, automate returns, and support reporting for libraries.','key'=>'library'],

  ['title'=>'Property Management System','desc'=>'Manage real estate and rental properties efficiently — from tenants to payments and maintenance.','key'=>'property'],

  ['title'=>'Sacco Management System','desc'=>'Streamline your Sacco operations including member records, contributions, loans, shares, and reports.','key'=>'sacco'],

  ['title'=>'HR & Payroll System','desc'=>'Automate employee management, attendance, payroll processing, statutory deductions, and performance tracking.','key'=>'hr'],

  ['title'=>'School Management System','desc'=>'Manage students, staff, classes, exams, fees, communication, and reporting — all in one platform.','key'=>'school'],

  ['title'=>'Hospital Management System','desc'=>'Simplify hospital workflows — patient records, appointments, billing, labs, pharmacy, and reporting.','key'=>'hospital'],

  ['title'=>'Hotel Management System','desc'=>'An all-in-one platform for bookings, reservations, billing, inventory, and guest management.','key'=>'hotel'],

  ['title'=>'Advanced POS System','desc'=>'A robust point-of-sale system for retail and hospitality — fast, secure, and inventory-enabled.','key'=>'pos'],

  ['title'=>'ICT Support Ticketing System','desc'=>'Manage IT support requests, issue tracking, staff assignments, SLAs, and resolution reporting.','key'=>'ticketing'],

  ['title'=>'Asset Management System','desc'=>'Track organizational assets, assignments, depreciation, maintenance, and lifecycle history.','key'=>'asset'],

  ['title'=>'E-Learning & Online Course Platform','desc'=>'Deliver online courses with subscriptions, student dashboards, quizzes, certificates, and analytics.','key'=>'elearning'],

  ['title'=>'Loan Management System','desc'=>'Automate loan applications, approvals, repayments, penalties, and reporting for financial institutions.','key'=>'loan'],

  ['title'=>'Inventory & Stock Management System','desc'=>'Real-time inventory tracking, supplier management, stock alerts, and sales reporting.','key'=>'inventory'],

  ['title'=>'CRM – Customer Relationship Management','desc'=>'Manage leads, customers, sales pipelines, communications, and customer insights effectively.','key'=>'crm'],

  ['title'=>'Booking & Reservation System','desc'=>'Online booking for services, appointments, events, and facilities with automated notifications.','key'=>'booking'],

  ['title'=>'E-Commerce Platform','desc'=>'Sell products online with secure payments, order management, delivery tracking, and analytics.','key'=>'ecommerce'],

  ['title'=>'Custom ERP Solutions','desc'=>'Enterprise-grade systems integrating finance, HR, operations, inventory, and reporting.','key'=>'erp'],

  ['title'=>'Government & NGO Management Systems','desc'=>'Digitized solutions for records, workflows, reporting, compliance, and transparency.','key'=>'ngo'],

  ['title'=>'Data Management & Reporting Systems','desc'=>'Centralized data collection, dashboards, analytics, and automated reporting tools.','key'=>'data'],

  ['title'=>'Mobile & Web Applications','desc'=>'Custom-built mobile and web applications tailored to your business needs and users.','key'=>'apps'],
];


      foreach ($solutions as $solution) {
        echo '
        <div class="col-lg-4 col-md-6">
          <div class="solution-card shadow-sm bg-white rounded-4 h-100 p-4 d-flex flex-column">
            <h5 class="fw-bold mb-2">'.$solution['title'].'</h5>
            <p class="text-muted flex-grow-1">'.$solution['desc'].'</p>

            <div class="d-flex gap-2 mt-3">
              <a href="solution-details.php?service='.$solution['key'].'"
                 class="btn btn-outline-primary flex-fill rounded-pill">
                Read More
              </a>
              <a href="book_demo.php"
                 class="btn btn-primary flex-fill rounded-pill">
                Book Demo
              </a>
            </div>
          </div>
        </div>';
      }
      ?>

    </div>
  </div>
</section>

<!-- ======= Why Choose Us Section ======= -->
<section class="why-choose-us py-5 bg-light">
  <div class="container text-center">
    <h2 class="fw-bold text-primary mb-4">Why Choose SkyTech Developers?</h2>
    <div class="row g-4">
      <div class="col-md-3">
        <div class="choose-card p-4 rounded-4 shadow-sm bg-white h-100">
          <i class="bi bi-shield-lock fs-1 text-primary mb-3"></i>
          <h6 class="fw-bold">Reliable & Secure</h6>
          <p class="text-muted">We prioritize system security and data protection across all solutions.</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="choose-card p-4 rounded-4 shadow-sm bg-white h-100">
          <i class="bi bi-people fs-1 text-primary mb-3"></i>
          <h6 class="fw-bold">Client-Centered Approach</h6>
          <p class="text-muted">Your goals come first. We build around your vision and needs.</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="choose-card p-4 rounded-4 shadow-sm bg-white h-100">
          <i class="bi bi-lightbulb fs-1 text-primary mb-3"></i>
          <h6 class="fw-bold">Innovative Solutions</h6>
          <p class="text-muted">We bring fresh ideas, creativity, and technical excellence.</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="choose-card p-4 rounded-4 shadow-sm bg-white h-100">
          <i class="bi bi-headset fs-1 text-primary mb-3"></i>
          <h6 class="fw-bold">24/7 Support</h6>
          <p class="text-muted">We’re always available to ensure smooth system performance.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ======= CTA ======= -->
<section class="cta-section py-5 text-center text-white"
  style="background: linear-gradient(135deg, #007bff, #001f3f);">
  <div class="container py-4">
    <h2 class="fw-bold mb-3">Ready to Transform Your Business?</h2>
    <p class="mb-4">Let’s build smart and sustainable technology solutions that work for you.</p>
    <a href="contact.php" class="btn btn-light px-4 rounded-pill fw-bold">Get in Touch</a>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
