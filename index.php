<?php 
$title = "Prem Neupane | Portfolio";
$activePage = 'home';
include 'header.php'; 
?>

<section class="hero-section">
  <div class="container hero-container">
    <div class="hero-text">
      <h2>Hello<span class="dot">.</span></h2>
      <p>I’m Prem</p>
      <h1>B.Sc. IT Student</h1>
      <div class="hero-buttons">
        <a href="contact.php" class="btn primary">Got a project?</a>
        <a href="Resume/PremNeupaneResume.pdf" class="btn outline" download>My Resume</a>
      </div>
    </div>
    <div class="hero-image">
      <div class="glow-circle">
        <img src="assets/images/prem.jpg" alt="Prem Neupane">
      </div>
    </div>
  </div>
</section>

<section class="tech-bar">
  <ul>
    <li>C</li><li>C++</li><li>Java</li><li>Python</li>
    <li>HTML</li><li>PHP</li><li>MySQL</li>
  </ul>
</section>

<section class="services-about">
  <div class="container services-wrapper">
    <div class="services">
        <div class="service-item"><i class="fas fa-computer"></i><span>Networking</span></div>
        <div class="service-item"><i class="fas fa-server"></i><span>Website Hosting</span></div>
        <div class="service-item"><i class="fas fa-code"></i><span>Web Development</span></div>
    </div>
    <div class="about">
      <h3>About me</h3>
      <p>I started my software journey from curiosity. Through that, I learned to love the process of creating from scratch...</p>
        <div class="stats">
            <div><strong class="counter" data-target="40" data-suffix="+">0</strong><br>Completed Projects</div>
            <div><strong class="counter" data-target="95" data-suffix="%">0</strong><br>Client satisfaction</div>
            <div><strong class="counter" data-target="2" data-suffix="+">0</strong><br>Years of experience</div>
        </div>
    </div>
    <script src="assets/js/script.js?v=1.0" defer></script>

</section>

<?php include 'footer.php'; ?>
