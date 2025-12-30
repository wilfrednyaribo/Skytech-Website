<?php include 'includes/header.php'; ?>

<style>
    /* ===== GENERAL STYLES ===== */
    body {
        font-family: "Poppins", sans-serif;
        color: #333;
        background-color: #fff;
        line-height: 1.7;
    }

    h1,
    h2,
    h3,
    h4,
    h5 {
        font-weight: 700;
    }

    /* ===== HERO SECTION ===== */
    .hero-section {
        background: url('assets/images/bootcamp-bg.jpg') center/cover no-repeat, linear-gradient(135deg, #007bff, #002b80);
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

    .btn-apply {
        margin-top: 30px;
        background-color: #f8d210;
        color: #004080;
        font-weight: 700;
        border: none;
        padding: 12px 35px;
        border-radius: 50px;
        transition: 0.3s;
    }

    .btn-apply:hover {
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
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
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

    /* ===== ICONS & SECTIONS ===== */
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

    .icon-box img {
        transition: 0.3s;
    }

    .icon-box:hover img {
        transform: scale(1.1);
    }

    .achievement-card {
        background: #fff;
        border-radius: 16px;
        padding: 30px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
        transition: 0.3s;
    }

    .achievement-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 32px rgba(0, 0, 0, 0.1);
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

    .arrow {
        font-size: 2rem;
        color: #007bff;
        margin: 0 20px;
        align-self: center;
    }

    /* ===== ANIMATIONS ===== */
    @keyframes popFromLeft {
        0% {
            opacity: 0;
            transform: translateX(-100px) scale(0.9);
        }

        70% {
            opacity: 1;
            transform: translateX(10px) scale(1.05);
        }

        100% {
            opacity: 1;
            transform: translateX(0) scale(1);
        }
    }

    @keyframes slideFromRight {
        0% {
            opacity: 0;
            transform: translateX(80px);
        }

        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slideUp {
        0% {
            opacity: 0;
            transform: translateY(80px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Announcement Badge */
    .announcement-badge {
        display: inline-block;
        background: #f8d210;
        color: #004080;
        font-weight: 600;
        padding: 8px 18px;
        border-radius: 30px;
        font-size: 0.95rem;
        margin-bottom: 20px;
        animation: fadeIn 1.5s ease-in-out;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translateY(-10px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* ===== COURSE DETAILS SECTION ===== */
    .course-details {
        background: #f9fbff;
        color: #333;
    }

    .course-details h4,
    .course-details h5 {
        color: #004080;
    }

    .course-details ul {
        padding-left: 0;
    }

    .course-details ul li {
        margin-bottom: 15px;
        line-height: 1.6;
    }

    .curriculum-box {
        border-left: 5px solid #007bff;
        transition: all 0.3s ease;
    }

    .curriculum-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    }

    /* ===== ACCORDION STYLES ===== */
    .accordion-button {
        background-color: #eaf3ff;
        color: #004080;
        font-weight: 600;
        border: none;
        box-shadow: none;
        transition: all 0.3s ease;
    }

    .accordion-button:not(.collapsed) {
        background-color: #007bff;
        color: #fff;
    }

    .accordion-button:hover {
        background-color: #dbe9ff;
    }

    .accordion-body {
        background: #fff;
        border-left: 3px solid #007bff;
        padding: 15px 20px;
        font-size: 0.95rem;
    }
</style>

<!-- ===== HERO SECTION ===== -->
<!-- ===== HERO SECTION ===== -->
<section class="hero-section">
    <div class="container">
        <div class="hero-content">
            <div class="announcement-badge">
                Applications for Cohort 5 are open till <strong>November 30, 2025</strong>
            </div>
            <h1>CodeSprint<br>Program</h1>
            <p>
                Transform your coding skills into a professional career!
                Join our intensive CodeSprint Program and master full-stack web development from industry experts.
            </p>
            <a href="applybootcamp.php" class="btn btn-apply">Apply Now</a>

        </div>
        <div class="hero-image">
            <img src="assets/images/datav.jpg" alt="Software Development Bootcamp">
        </div>
    </div>
</section>

<div class="circuit-border"></div>

<!-- ===== OVERVIEW ===== -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <img src="assets/images/left.jpg" alt="Bootcamp Overview" class="img-fluid shadow-lg rounded-4">
            </div>
            <div class="col-md-6">
                <h2 class="fw-bold mb-3">Kickstart Your Software Career</h2>
                <p>
                    The <strong>Willbay Systems Software Bootcamp</strong> offers hands-on coding experience, collaborative projects, and personalized mentorship to help you become a job-ready developer.
                </p>
            </div>
        </div>

        <div class="row text-center mt-4">
            <div class="col-md-3 col-6 mb-4 icon-box">
                <img src="assets/images/clock.png" width="70" alt="Duration">
                <h5 class="mt-3 fw-semibold">6 Weeks</h5>
            </div>
            <div class="col-md-3 col-6 mb-4 icon-box">
                <img src="assets/images/mentor.png" width="70" alt="Mentorship">
                <h5 class="mt-3 fw-semibold">Expert Mentorship</h5>
            </div>
            <div class="col-md-3 col-6 mb-4 icon-box">
                <img src="assets/images/project.png" width="70" alt="Projects">
                <h5 class="mt-3 fw-semibold">Real Projects</h5>
            </div>
            <div class="col-md-3 col-6 mb-4 icon-box">
                <img src="assets/images/hiring.gif" width="70" alt="Hire">
                <h5 class="mt-3 fw-semibold">Job Placement</h5>
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
                <i class="fas fa-file-alt"></i>
                <h5>Step 1</h5>
                <p>Complete the online registration form</p>
            </div>
            <div class="arrow"><i class="fas fa-arrow-right"></i></div>

            <div class="process-step">
                <i class="fas fa-graduation-cap"></i>
                <h5>Step 4</h5>
                <p>Join the bootcamp and start learning!</p>
            </div>
            <div class="arrow"><i class="fas fa-arrow-right"></i></div>


        </div>
    </div>
</section>


<!-- ===== COURSE DETAILS / ASSESSMENT SECTION ===== -->
<section class="course-details py-5">
    <div class="container">
        <h2 class="fw-bold text-center mb-4 text-primary">Assessment to Ensure You’re Ready to Excel</h2>
        <h5 class="fw-bold text-center mb-4 text-primary">Welcome to CodeSprint Program</h5>
        

        <div class="row">
            <!-- Left: Accordion Course Details -->
            <div class="col-md-6 mb-4">
                <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap">
                    <h4 class="fw-semibold text-primary mb-0">Course Details</h4>

                    <div class="text-end">
                        <p class="mb-1 fw-semibold text-dark">
                            <i class="bi bi-clock text-primary me-1"></i>
                            <span>Course Duration:</span> <span class="text-muted"> 6 Weeks</span>
                             <span>Course Subscription:</span> <span class="text-muted">Ksh 1,000</span>
                        </p>
                        <!-- <p class="mb-0 fw-semibold text-dark">
                            <i class="bi bi-cash-stack text-success me-1"></i>
                            <span>Course Subscription:</span> <span class="text-muted">Ksh 1,000</span>
                        </p> -->
                    </div>
                </div>


                <div class="accordion" id="courseAccordion">
                    <!-- Q1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                What is Software Engineering?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#courseAccordion">
                            <div class="accordion-body">
                                Software Engineering involves designing, developing, and maintaining software systems that solve real-world problems efficiently and reliably.
                            </div>
                        </div>
                    </div>

                    <!-- Q2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                Who is this course for?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#courseAccordion">
                            <div class="accordion-body">
                                Anyone passionate about technology and looking to build a rewarding career in software development — no prior experience required!
                            </div>
                        </div>
                    </div>

                    <!-- Q3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                What are the Course Prerequisites?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#courseAccordion">
                            <div class="accordion-body">
                                You only need a computer, reliable internet access, and a willingness to learn and collaborate with others.
                            </div>
                        </div>
                    </div>

                    <!-- Q4 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                Why learn Software Engineering?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#courseAccordion">
                            <div class="accordion-body">
                                The tech industry is booming worldwide — software skills give you access to countless high-paying, remote, and creative opportunities.
                            </div>
                        </div>
                    </div>

                    <!-- Q5 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                                Why take up the CodesPrint Program?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#courseAccordion">
                            <div class="accordion-body">
                                We combine hands-on learning, project-based assignments, and mentorship from active developers in Kenya’s tech scene.
                            </div>
                        </div>
                    </div>
                </div>

                <p class="fw-semibold mt-4">Gain a valuable skill set and position yourself for a rewarding career in tech!</p>
                <a href="applybootcamp.php" class="btn btn-apply mt-3">Get Started Now - Apply Here</a>
            </div>

            <!-- Right: Curriculum Overview -->
            <div class="col-md-6">
  <div class="curriculum-box bg-light p-4 rounded-4 shadow-sm">
    <h4 class="fw-bold text-primary mb-3">Curriculum Developed By:</h4>
    <p class="text-muted">
      Our curriculum is designed based on global software development best practices and is tailored to empower learners with practical skills in web and software engineering.
    </p>

    <h5 class="fw-semibold mt-4 text-primary">Comprehensive 6-Week Bootcamp Overview</h5>
    <p class="text-muted">
      This 6-week intensive training will equip you with full-stack web development skills using modern technologies. You’ll build and deploy real-world applications while preparing for a successful tech career.
    </p>

    <div class="accordion mt-3" id="curriculumAccordion">

      <!-- Module 1 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="weekOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWeekOne">
            Module 1: Frontend Fundamentals (HTML, CSS & Bootstrap)
          </button>
        </h2>
        <div id="collapseWeekOne" class="accordion-collapse collapse show" data-bs-parent="#curriculumAccordion">
          <div class="accordion-body">
            <ul>
              <li>Introduction to Software Development & Tools Setup</li>
              <li>Understanding HTML Structure, Elements & Forms</li>
              <li>CSS for Styling and Layouts</li>
              <li>Responsive Web Design with Bootstrap Framework</li>
              <li>Version Control with Git & GitHub</li>
              
            </ul>
          </div>
        </div>
      </div>

      <!-- Module 2 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="weekTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWeekTwo">
           Module 2: Programming with Python & Databases
          </button>
        </h2>
        <div id="collapseWeekTwo" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
          <div class="accordion-body">
            <ul>
              <li>Python Programming Fundamentals</li>
              <li>Data Types, Loops, Functions & Modules</li>
              <li>File Handling and Error Management</li>
              <li>Working with Databases (MySQL / PostgreSQL)</li>
              <li>CRUD Operations using Python</li>
              
            </ul>
          </div>
        </div>
      </div>

      <!-- Module 3 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="weekThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWeekThree">
           Module 3: Backend Development with Django
          </button>
        </h2>
        <div id="collapseWeekThree" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
          <div class="accordion-body">
            <ul>
              <li>Introduction to Django Framework</li>
              <li>Setting up Django Projects and Apps</li>
              <li>Models, Views, and Templates (MVT Pattern)</li>
              <li>Connecting Django to Databases</li>
              <li>CRUD Operations in Django</li>
              <li>Authentication & User Management</li>
              <li>Testing APIs with Postman</li>
              
            </ul>
          </div>
        </div>
      </div>

      <!--Module 4 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="weekFour">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWeekFour">
            Module 4: Integration, Deployment & Capstone Project
          </button>
        </h2>
        <div id="collapseWeekFour" class="accordion-collapse collapse" data-bs-parent="#curriculumAccordion">
          <div class="accordion-body">
            <ul>
              <li>M-Pesa API Integration using Django</li>
              <li>Advanced RESTful APIs</li>
              <li>Application Testing with Postman</li>
              <li>Hosting & Deployment on Render / PythonAnywhere</li>
              
            </ul>
          </div>
        </div>
      </div>
    </div> <!-- end accordion -->

    <h5 class="fw-bold text-primary mt-5">Capstone Project</h5>
    <p class="text-muted">
      Learners will collaborate to build a fully functional web application integrating frontend, backend, and payment solutions using Django and M-Pesa APIs. The final projects are presented during Demo Day for evaluation and certification.
    </p>
  </div>
</div>

    </div>
</section>


<!-- ===== LEARNING EXPERIENCE ===== -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4">
                <h3 class="fw-bold mb-3">Master Full-Stack Development</h3>
                <p>
                    You’ll gain in-depth skills in frontend and backend development — mastering HTML, CSS, Boostrap, Python, Django, MySQL, and APIs.
                </p>
                <p>
                    At <strong>Willbay Solutions</strong>, we help aspiring developers build real-world projects and become ready for tech industry opportunities.
                </p>
            </div>
            <div class="col-md-6">
                <img src="assets/images/right.jpg" alt="Learning" class="img-fluid rounded-4 shadow-sm">
            </div>
        </div>
    </div>
</section>

<!-- ===== WHO WE ARE LOOKING FOR ===== -->
<section class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="fw-bold mb-5 text-primary">Who We Are Looking For</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <ul class="list-group list-group-flush text-start" id="looking-list">
                    <li class="list-group-item slide-up"><i class="fas fa-check-circle text-primary me-2"></i> Passionate about coding and technology</li>
                    <li class="list-group-item slide-up"><i class="fas fa-check-circle text-primary me-2"></i> Basic understanding of computer operation skills</li>
                    <li class="list-group-item slide-up"><i class="fas fa-check-circle text-primary me-2"></i> Team player with a growth mindset</li>
                    <li class="list-group-item slide-up"><i class="fas fa-check-circle text-primary me-2"></i> Eager to learn and build real-world projects</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ===== WHAT YOU'LL ACHIEVE ===== -->
<section class="py-5 text-center">
    <div class="container">
        <h2 class="fw-bold mb-4">What You’ll Achieve</h2>
        <p class="text-muted mb-5" style="max-width:800px;margin:auto;">
            Gain hands-on development experience, build your portfolio, and get career-ready for tech opportunities worldwide.
        </p>
        <div class="row">
            <div class="col-md-3 col-6 mb-4">
                <div class="achievement-card">
                    <i class="fas fa-laptop-code fa-2x text-primary mb-3"></i>
                    <h6>Full-Stack Development Skills</h6>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="achievement-card">
                    <i class="fas fa-network-wired fa-2x text-primary mb-3"></i>
                    <h6>API Integration & Databases</h6>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="achievement-card">
                    <i class="fas fa-users fa-2x text-primary mb-3"></i>
                    <h6>Team Collaboration</h6>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="achievement-card">
                    <i class="fas fa-briefcase fa-2x text-primary mb-3"></i>
                    <h6>Career Readiness</h6>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>