<?php include 'includes/header.php'; ?>

<!-- ======= Services Hero Section ======= -->
<section class="services-hero text-center text-white py-5"
  style="background: linear-gradient(135deg, #001f3f, #007bff);">
  <div class="container py-5">
    <h1 class="fw-bold mb-3 display-5">
      Our <span style="color:#00bfff;">Services</span>
    </h1>
    <p class="lead mb-4">
      Innovative digital solutions designed to transform and scale your business.
    </p>
    <a href="#services" class="btn btn-light btn-lg fw-bold px-5 py-3 rounded-pill shadow-lg">
      Explore Services
    </a>
  </div>
</section>

<!-- ======= Services Section ======= -->
<section id="services" class="services-section py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold text-primary mb-3">What We Offer</h2>
      <p class="text-muted">
        End-to-end digital services tailored to your business goals.
      </p>
    </div>

    <div class="row g-4">
      <?php
        $services = [
          [
            'name' => 'Web Design & Development',
            'desc' => 'Professional, responsive, and high-performance websites tailored to your brand.',
            'features' => [
              'Custom Website Design',
              'SEO-Friendly Development',
              'Secure & Scalable'
            ],
            'icon' => 'fa-globe'
          ],
          [
            'name' => 'Mobile & App Development',
            'desc' => 'Cross-platform and native mobile applications for Android and iOS.',
            'features' => [
              'Android & iOS Apps',
              'Flutter / React Native',
              'API Integration'
            ],
            'icon' => 'fa-mobile-screen-button'
          ],
          [
            'name' => 'System & Platform Development',
            'desc' => 'Custom enterprise systems that automate processes and improve efficiency.',
            'features' => [
              'ERP & MIS Systems',
              'Role-Based Access',
              'Scalable Architecture'
            ],
            'icon' => 'fa-gears'
          ],
          [
            'name' => 'UI/UX Design',
            'desc' => 'User-centered designs that enhance usability and engagement.',
            'features' => [
              'Wireframing & Prototyping',
              'User Experience Research',
              'Modern Interfaces'
            ],
            'icon' => 'fa-pen-nib'
          ],
          [
            'name' => 'Augmented Reality (AR) Websites',
            'desc' => 'Immersive AR experiences integrated directly into your website.',
            'features' => [
              'Product Visualization',
              'Interactive Experiences',
              'Web-Based AR'
            ],
            'icon' => 'fa-vr-cardboard'
          ],
          [
            'name' => 'API Development & Integration',
            'desc' => 'Seamless integration between systems, apps, and third-party services.',
            'features' => [
              'REST & JSON APIs',
              'Payment Gateway Integration',
              'System Interoperability'
            ],
            'icon' => 'fa-code'
          ],
          [
            'name' => 'Cloud & Hosting Solutions',
            'desc' => 'Reliable deployment, hosting, and cloud infrastructure management.',
            'features' => [
              'Cloud Deployment',
              'Server Configuration',
              'Performance Optimization'
            ],
            'icon' => 'fa-cloud'
          ],
          [
            'name' => 'Maintenance & Support',
            'desc' => 'Ongoing system support to keep your platforms secure and up-to-date.',
            'features' => [
              'Bug Fixes',
              'Security Updates',
              'Performance Monitoring'
            ],
            'icon' => 'fa-shield-halved'
          ],
          [
            'name' => 'Digital Consulting & Strategy',
            'desc' => 'Expert guidance to help you make the right technology decisions.',
            'features' => [
              'System Analysis',
              'Technology Roadmaps',
              'Business Automation'
            ],
            'icon' => 'fa-lightbulb'
          ]
        ];

        foreach ($services as $service) {
          echo '
          <div class="col-md-6 col-lg-4">
            <div class="service-card p-4 rounded-4 shadow-sm h-100 bg-white text-center">
              <div class="icon-circle bg-primary text-white mb-3 mx-auto">
                <i class="fas '.$service['icon'].' fa-lg"></i>
              </div>
              <h5 class="fw-bold mb-2">'.$service['name'].'</h5>
              <p class="text-muted small mb-3">'.$service['desc'].'</p>
              <ul class="list-unstyled small text-start mb-4">
                <li>✔ '.$service['features'][0].'</li>
                <li>✔ '.$service['features'][1].'</li>
                <li>✔ '.$service['features'][2].'</li>
              </ul>
              <a href="contact.php" class="btn btn-primary btn-sm rounded-pill px-4">
                Request Service
              </a>
            </div>
          </div>';
        }
      ?>
    </div>
  </div>
</section>

<!-- ======= CTA Section ======= -->
<section class="services-cta py-5 text-center text-white"
  style="background: linear-gradient(135deg, #0056b3, #001f3f);">
  <div class="container">
    <h2 class="fw-bold mb-3 display-6">Have a Project in Mind?</h2>
    <p class="lead mb-4">
      Let’s turn your idea into a powerful digital solution.
    </p>
    <a href="contact.php" class="btn btn-outline-light btn-lg rounded-pill fw-bold px-5 py-3">
      Get Started
    </a>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

<!-- ======= Inline Styles ======= -->
<style>
  body {
    background-color: #f9fafc;
  }
  .service-card {
    transition: all 0.3s ease;
  }
  .service-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
  }
  .icon-circle {
    width: 55px;
    height: 55px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
  }
  .btn-primary {
    background: linear-gradient(90deg, #007bff, #0056b3);
    border: none;
  }
  .btn-primary:hover {
    background: linear-gradient(90deg, #0056b3, #004080);
  }
</style>
