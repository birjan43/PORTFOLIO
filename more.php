<?php 
$title = "More About Me | Prem Neupane";
$activePage = 'about'; 
include 'header.php'; 
?>

<section class="more-about container">
  <h2 class="section-title">More About Me</h2>
  <p class="intro-text">Here you can explore my achievements, gallery, and biodata details.</p>

  <!-- Achievements -->
  <div class="block">
    <h3>Achievements</h3>
    <ul class="achievements typing-list">
      <li><i class="fas fa-trophy"></i> Best Batsman Award (Cricket)</li>
      <li><i class="fas fa-medal"></i> Represented Karnali Pradesh in U16 & U19 state level</li>
      <li><i class="fas fa-medal"></i> Represented Marwadi University in AIU Zonal Tournament</li>
      <li><i class="fas fa-laptop-code"></i> Hackathon 2025 – Built AI Diagnosis System (MERN Stack)</li>
    </ul>
  </div>

  <!-- Gallery (Scrolling) -->
  <div class="block">
    <h3>Gallery</h3>
    <div class="gallery-marquee">
      <div class="marquee-track">
        <img src="assets/images/best_batsman.jpeg" alt="Achievement 1">
        <img src="assets/images/ntnn.jpeg" alt="Achievement 2">
        <img src="assets/images/mu.jpg" alt="Achievement 3">
        <img src="assets/images/ofc.jpeg" alt="Achievement 4">
        <img src="assets/images/runner_up.jpg" alt="Achievement 5">
        <img src="assets/images/moth.jpeg" alt="Achievement 6">
        <img src="assets/images/emerging.jpg" alt="Achievement 7">
        <img src="assets/images/mu2.jpg" alt="Achievement 8">

        <!-- duplicate for infinite loop -->
        <img src="assets/images/mm.jpg" alt="Achievement 1">
        <img src="assets/images/state.jpeg" alt="Achievement 2">
        <img src="assets/images/n2.jpeg" alt="Achievement 3">
        <img src="assets/images/n3.jpeg" alt="Achievement 4">
        <img src="assets/images/runner_up.jpg" alt="Achievement 5">
        <img src="assets/images/mm1.jpeg" alt="Achievement 6">
        <img src="assets/images/n1.jpeg" alt="Achievement 7">
        <img src="assets/images/hc.jpg" alt="Achievement 8">
      </div>
    </div>
  </div>

  <!-- Biodata -->
  <div class="block">
    <h3>Biodata</h3>
    <table class="biodata">
      <tr><td>Name</td><td>Prem Neupane</td></tr>
      <tr><td>DOB</td><td>16-11-2005</td></tr>
      <tr><td>Education</td><td>B.Sc. IT</td></tr>
      <tr><td>Temporary Address</td><td>Bedi Rajkot, Gujarat</td></tr>
      <tr><td>Permanent Address</td><td>LCM-1 Kailali, Nepal</td></tr>
      <tr><td>Languages known</td><td>English, Nepali, Hindi</td></tr>
      <tr><td>E-mail Address</td><td>techexplorer43@gmail.com</td></tr>
    </table>
  </div>

  <div class="back-btn">
    <a href="about.php" class="btn outline"><i class="fas fa-arrow-left"></i> Back to About</a>
  </div>
</section>

<?php include 'footer.php'; ?>
