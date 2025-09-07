<?php 
$title = "Projects | Prem Neupane";
$activePage = 'projects';
include 'header.php'; 
?>

<!-- Projects Section -->
<section class="projects-page">
  <div class="container">
    <h2>My Projects</h2>
    <div class="projects-grid">

      <!-- Project 1 -->
      <div class="project-card">
        <img src="assets/images/chatapp.png" alt="Real-Time Chat App">
        <div class="project-content">
          <h3>Real-Time Chat Application</h3>
          <p>Built using Java sockets, this app enables instant messaging between multiple users with real-time updates.</p>
          <p><strong>Tech Used:</strong> Java, Sockets, MySQL</p>
          <a href="https://github.com/birjan43/Chat_Application_JAVA" class="btn outline"><i class="fab fa-github"></i> View Code</a>
        </div>
      </div>

      <!-- Project 2 -->
      <div class="project-card">
        <img src="assets/images/sms.jpg" alt="Student Management System">
        <div class="project-content">
          <h3>Student Management System</h3>
          <p>A C++ application for managing student records, GPA calculation, and generating reports.</p>
          <p><strong>Tech Used:</strong> C++, File Handling</p>
          <a href="https://github.com/birjan43/StudentManagementSystem" class="btn outline"><i class="fab fa-github"></i> View Code</a>
        </div>
      </div>

      <!-- Project 3 - Hackathon -->
      <div class="project-card">
        <img src="assets/images/demo.jpg" alt="Hackathon 2025">
        <div class="project-content">
          <h3>Hackathon 2025 – AI Diagnosis System</h3>
          <p>During a 24-hour hackathon, our team developed an AI-powered health diagnosis system that provides symptom-based analysis and recommendations in real-time.</p>
          <p><strong>Tech Used:</strong> MERN Stack (MongoDB, Express.js, React.js, Node.js), AI APIs</p>
          <a href="project-details.php" class="btn outline"><i class="fas fa-external-link-alt"></i> Learn More</a>
        </div>
      </div>

    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
