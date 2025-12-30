<?php include 'includes/header.php'; ?>

<style>
body {
  font-family: "Poppins", sans-serif;
  background-color: #f8f9fa;
}

/* Header Section */
.application-steps {
  background: linear-gradient(135deg, #004080, #007bff);
  color: #fff;
  padding: 50px 0;
  text-align: center;
  border-radius: 0 0 30px 30px;
}
.application-steps h2 {
  font-weight: 700;
  margin-bottom: 25px;
  
}
.steps-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 20px;
}
.step-box {
  background: rgba(255, 255, 255, 0.15);
  border-radius: 12px;
  padding: 20px;
  width: 220px;
  transition: 0.3s;
}
.step-box:hover {
  background: rgba(255, 255, 255, 0.3);
  transform: translateY(-4px);
}

/* Form Section */
.application-form {
  background: #ffffff;
  padding: 40px;
  border-radius: 15px;
  box-shadow: 0 8px 24px rgba(0,0,0,0.08);
  max-width: 850px;
  margin: 60px auto;
}
h3.section-title {
  color: #004080;
  font-weight: 700;
  margin-bottom: 25px;
  border-bottom: 3px solid #004080;
  padding-bottom: 5px;
}
label {
  font-weight: 600;
}
.form-control {
  border-radius: 8px;
  padding: 10px 15px;
}
.btn-submit {
  background-color: #004080;
  color: #fff;
  border: none;
  border-radius: 50px;
  padding: 12px 30px;
  font-weight: 600;
  transition: 0.3s;
}
.btn-submit:hover {
  background-color: #002b80;
  transform: scale(1.05);
}
</style>

<!-- ===== TOP STEPS ===== -->
<section class="application-steps">
  <div class="container">
    <h2>Bootcamp Application Process</h2>
    <div class="steps-container">
      <div class="step-box"><h4>Step 1</h4><p>Complete Online Registration</p></div>
      <div class="step-box"><h4>Step 2</h4><p>Join the Bootcamp</p></div>
      
      <div class="step-box"><h4>Step 3</h4><p>Be Certified</p></div>
    </div>
  </div>
</section>

<!-- ===== FORM ===== -->
<section class="py-5">
  <div class="container">
    <div class="application-form">
      <form action="submit_application.php" method="POST" enctype="multipart/form-data">

        <!-- 🧾 Personal Information -->
        <h3 class="section-title"> Personal Information</h3>
        <div class="row">
          <div class="col-md-6 mb-3"><label>Full Name</label><input type="text" name="name" class="form-control" required></div>
          <div class="col-md-6 mb-3"><label>Email Address</label><input type="email" name="email" class="form-control" required></div>
          <div class="col-md-6 mb-3"><label>Phone Number</label><input type="text" name="phone" class="form-control" required></div>
          <div class="col-md-6 mb-3"><label>Gender</label>
            <select name="gender" class="form-control" required>
              <option value="">-- Select Gender --</option><option>Male</option><option>Female</option>
            </select>
          </div>
          <div class="col-md-6 mb-3"><label>County / Residence</label><input type="text" name="county" class="form-control" required></div>
          <div class="col-md-6 mb-3"><label>National ID / Passport Number</label><input type="text" name="id_number" class="form-control" required></div>
        </div>

        <!-- 🎓 Education Background -->
        <h3 class="section-title"> Education Background</h3>
        <div class="mb-3">
          <label>Highest Level of Education</label>
          <input type="text" name="education_level" class="form-control" required>
        </div>
        <div class="mb-3">
          <label>Course(s) Studied</label>
          <input type="text" name="course" class="form-control">
        </div>
        <div class="mb-3">
          <label>Institution Attended</label>
          <input type="text" name="institution" class="form-control">
        </div>

        <!-- 💻 Technical Background -->
        <h3 class="section-title">Technical Background</h3>
        <div class="mb-3">
          <label>Have you done any programming before?</label>
          <select name="programming_experience" class="form-control" required>
            <option value="">-- Select --</option><option>Yes</option><option>No</option>
          </select>
        </div>
        <div class="mb-3">
          <label>If yes, which programming languages or technologies?</label>
          <input type="text" name="languages" class="form-control">
        </div>

        <!-- 🎯 Motivation -->
        <h3 class="section-title">Motivation</h3>
        <div class="mb-3">
          <label>Why do you want to join the Bootcamp?</label>
          <textarea name="motivation" class="form-control" rows="4" required></textarea>
        </div>
        <div class="mb-3">
          <label>What are your career goals after completing the bootcamp?</label>
          <textarea name="goals" class="form-control" rows="3"></textarea>
        </div>
        <div class="mb-3">
          <label>How did you hear about us?</label>
          <input type="text" name="referral" class="form-control">
        </div>

        <!-- ⏰ Availability -->
        <h3 class="section-title">Availability</h3>
        <div class="mb-3">
          <label>Are you available full-time (Mon–Fri, 8 AM – 5 PM)?</label>
          <select name="availability" class="form-control" required>
            <option value="">-- Select --</option><option>Yes</option><option>No</option>
          </select>
        </div>
        <div class="mb-3">
          <label>Do you have access to a computer/laptop?</label>
          <select name="computer_access" class="form-control" required>
            <option value="">-- Select --</option><option>Yes</option><option>No</option>
          </select>
        </div>

        <!-- 💳 Financial Aid -->
        
        <h3 class="section-title">Subscription Fee</h3>
        <div class="mb-3">
          <label>Are you willing to pay the subscription fee of Ksh.1,000?</label>
          <select name="availability" class="form-control" required>
            <option value="">-- Select --</option><option>Yes</option><option>No</option>
          </select>
        </div>

        <!-- Submit -->
        <div class="text-center mt-4">
          <button type="submit" class="btn btn-submit">Submit Application</button>
        </div>
      </form>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
