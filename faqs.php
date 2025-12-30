<?php include 'includes/header.php'; ?>

<!-- ======= FAQ Hero Section ======= -->
<section class="faq-hero text-center text-white py-5" style="background: linear-gradient(135deg, #001f3f, #007bff);">
  <div class="container py-5">
    <h1 class="fw-bold mb-3 display-5">Frequently Asked <span style="color:#00bfff;">Questions</span></h1>
    <p class="lead mb-4">Quick answers to common questions about our services, process, and support.</p>
    <a href="#faqs" class="btn btn-light btn-lg fw-bold px-5 py-3 rounded-pill shadow-lg">Browse FAQs</a>
  </div>
</section>

<!-- ======= FAQ Section ======= -->
<section id="faqs" class="faq-section py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold text-primary">How Can We Help?</h2>
      <p class="text-muted">Find answers to the most common questions about SkyTech Developers.</p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="accordion accordion-flush" id="faqAccordion">

          <?php
          $faqs = [
            [
              'q' => 'What services does SkyTech Developers offer?',
              'a' => 'We provide web and mobile application development, system automation, IT support services, cloud solutions, digital branding, and custom software tailored to your business needs.'
            ],
            [
              'q' => 'How can I request a quotation?',
              'a' => 'You can request a quotation through our Contact page, email us at info@skytechdevelopers.co.ke, or call our support team. We typically respond within 24 hours.'
            ],
            [
              'q' => 'Do you offer ongoing support after project completion?',
              'a' => 'Yes. We offer maintenance and support packages to ensure your system remains secure, updated, and fully functional after deployment.'
            ],
            [
              'q' => 'How long does it take to complete a project?',
              'a' => 'Project timelines depend on scope and complexity. Small websites may take 1–2 weeks, while larger systems can take several months. We always agree on timelines before starting.'
            ],
            [
              'q' => 'Can you customize a system based on our requirements?',
              'a' => 'Absolutely. All our solutions are fully customized to align with your business processes, goals, and future scalability needs.'
            ],
            [
              'q' => 'Which technologies do you use?',
              'a' => 'We work with modern technologies including PHP (Laravel), JavaScript (Angular, React), MySQL, PostgreSQL, cloud platforms, and secure REST APIs.'
            ],
            [
              'q' => 'Do you work with clients outside Kenya?',
              'a' => 'Yes. We work with both local and international clients through remote collaboration tools while maintaining high-quality service delivery.'
            ],
            [
              'q' => 'How do I get technical support?',
              'a' => 'You can reach our support team via email, phone, or through a dedicated support ticketing system depending on your service package.'
            ],
          ];

          foreach ($faqs as $index => $faq) {
            $headingId = 'faqHeading' . $index;
            $collapseId = 'faqCollapse' . $index;
            echo '
            <div class="accordion-item mb-3 border rounded-4 shadow-sm">
              <h2 class="accordion-header" id="'.$headingId.'">
                <button class="accordion-button collapsed fw-bold rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#'.$collapseId.'" aria-expanded="false" aria-controls="'.$collapseId.'">
                  '.$faq['q'].'
                </button>
              </h2>
              <div id="'.$collapseId.'" class="accordion-collapse collapse" aria-labelledby="'.$headingId.'" data-bs-parent="#faqAccordion">
                <div class="accordion-body text-muted">
                  '.$faq['a'].'
                </div>
              </div>
            </div>';
          }
          ?>

        </div>
      </div>
    </div>
  </div>
</section>

<!-- ======= Still Have Questions CTA ======= -->
<section class="faq-cta py-5 text-center text-white" style="background: linear-gradient(135deg, #0056b3, #001f3f);">
  <div class="container">
    <h2 class="fw-bold mb-3 display-6">Still Have Questions?</h2>
    <p class="lead mb-4">Our team is ready to help you with any additional information you need.</p>
    <a href="contact.php" class="btn btn-outline-light btn-lg rounded-pill fw-bold px-5 py-3">Contact Us</a>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

<!-- ======= Inline Styles ======= -->
<style>
  body {
    background-color: #f9fafc;
  }
  .accordion-button {
    background-color: #ffffff;
    box-shadow: none;
  }
  .accordion-button:not(.collapsed) {
    color: #0056b3;
    background-color: #eef5ff;
  }
  .accordion-item {
    transition: all 0.3s ease;
  }
  .accordion-item:hover {
    transform: translateY(-3px);
  }
</style>
