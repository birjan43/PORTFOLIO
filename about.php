<?php 
$title = "About | Prem Neupane";
$activePage = 'about';
include 'header.php'; 
?>

<section class="about-page">
  <div class="container about-container">
    <div class="about-image">
      <img src="assets/images/abt1.jpg" alt="Prem Neupane">
    </div>
    <div class="about-text">
      <h2>About Me</h2>
      <p>
        Hello! I’m <strong>Prem Neupane</strong>, a dedicated <strong>B.Sc. IT student</strong> 
        passionate about technology, innovation, and problem-solving. I enjoy building solutions 
        that combine <em>creativity, logic, and real-world impact</em>.
      </p>
      <p>
        My interests span across <strong>Web Development</strong>, <strong>Mobile Apps</strong>, 
        <strong>Artificial Intelligence</strong>, and <strong>Cloud Computing</strong>. 
      </p>
      <a href="more.php" class="btn outline">Explore More →</a>
    </div>
  </div>
</section>

<section class="education-skills container">
  <div class="edu-skill-box">
    <h3>Education</h3>
    <ul class="timeline">
      <li>
        <span class="year">2023 - Present</span>
        <span class="detail"><strong>B.Sc. IT</strong> – Marwadi University, Rajkot, Gujarat</span>
      </li>
      <li>
        <span class="year">2020 - 2022</span>
        <span class="detail"><strong>Diploma in Computer Hardware & Networking</strong></span>
      </li>
    </ul>
  </div>

  <div class="edu-skill-box">
    <h3>Languages</h3>
    <ul class="list-inline">
      <li>C/C++</li><li>Java</li><li>Python</li>
      <li>HTML</li><li>CSS</li><li>JavaScript</li>
      <li>PHP</li><li>MySQL</li>
    </ul>
  </div>

  <div class="edu-skill-box">
    <h3>Skills</h3>
    <ul class="list-inline">
      <li>Microsoft Suite</li><li>Networking</li><li>Software Installation</li><li>Data Handling</li><li>Troubleshooting</li>
    </ul>
  </div>

  <div class="edu-skill-box">
    <h3>Interests</h3>
    <ul class="list-inline">
      <li>Web Development</li>
      <li>AI & Machine Learning</li>
      <li>Tech Exploration</li>
      <li>Cloud Computing</li>
      <li>Problem Solving</li>
    </ul>
  </div>
</section>

<?php include 'footer.php'; ?>
