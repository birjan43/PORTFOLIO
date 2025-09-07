<?php 
$title = "Contact | Prem Neupane";
$activePage = 'contact';
include 'header.php'; 
?>

<section class="contact-page">
  <div class="container contact-container">
    <div class="contact-info-box">
      <h2>Contact Information</h2>
      <div class="contact-item"><i class="fas fa-envelope"></i><p>Email: <a href="mailto:techexplorer43@gmail.com">techexplorer43@gmail.com</a></p></div>
      <div class="contact-item"><i class="fas fa-phone"></i><p>Phone: +91-7743938157</p></div>
      <div class="contact-item"><i class="fas fa-map-marker-alt"></i><p>Bedi Rajkot, Gujarat, India</p></div>
    </div>

    <div class="contact-form-box">
      <h2>Send a Message</h2>
      <form class="contact-form" action="sendmail.php" method="POST">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" rows="5" placeholder="Message" required></textarea>
        <button type="submit">Send</button>
      </form>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>

<!-- ✅ Success/Error Modal -->
<div id="msgModal" class="modal-overlay" style="display:none;">
  <div class="modal-box">
    <span id="modal-close">&times;</span>
    <p id="modal-text"></p>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const modal = document.getElementById("msgModal");
    const modalText = document.getElementById("modal-text");
    const closeBtn = document.getElementById("modal-close");

    <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
      modalText.textContent = "✅ Message sent successfully!";
      modal.style.display = "flex";
    <?php elseif (isset($_GET['error']) && $_GET['error'] == 1): ?>
      modalText.textContent = "❌ Message could not be sent. Please try again.";
      modal.style.display = "flex";
    <?php endif; ?>

    closeBtn.addEventListener("click", () => {
      modal.style.display = "none";
      window.location.href = "contact.php"; // reset form
    });
  });
</script>

