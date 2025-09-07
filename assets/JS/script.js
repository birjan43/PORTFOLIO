/* =======================
   Portfolio Script File
   ======================= */

document.addEventListener("DOMContentLoaded", () => {
  // Navbar Active Link Highlight
  const currentLocation = location.href;
  const menuItem = document.querySelectorAll("nav ul li a");
  menuItem.forEach(link => {
    if (link.href === currentLocation) {
      link.classList.add("active");
    }
  });

  // Mobile Menu Toggle
  const navToggle = document.querySelector(".nav-toggle");
  if (navToggle) {
    const navMenu = document.querySelector(".nav ul");
    navToggle.addEventListener("click", () => {
      navMenu.classList.toggle("show");
    });
  }

  // Smooth Scroll (for anchor links)
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();
      document.querySelector(this.getAttribute("href")).scrollIntoView({
        behavior: "smooth"
      });
    });
  });

  // Gallery Continuous Scroll (for more.php gallery)
  const marqueeTrack = document.querySelector(".marquee-track");
  if (marqueeTrack) {
    let clone = marqueeTrack.cloneNode(true);
    marqueeTrack.parentNode.appendChild(clone);
  }

  // Typing Animation (Achievements list)
  const typingLists = document.querySelectorAll(".typing-list li");
  typingLists.forEach((item, index) => {
    item.style.animation = `typing 0.5s ease ${index * 0.2}s forwards`;
  });

  // Contact Form Handling
  const contactForm = document.querySelector(".contact-form");
  if (contactForm) {
    contactForm.addEventListener("submit", function (e) {
      e.preventDefault();
      // integrate with PHPMailer later
      showModal("✅ Message sent successfully!", true);
    });
  }
});

// Counter Animation with Suffix (always runs on page load/reload)
document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".counter");

  counters.forEach(counter => {
    const target = +counter.getAttribute("data-target");
    const suffix = counter.getAttribute("data-suffix") || "";
    let current = 0;
    const duration = 2000; // total animation time in ms
    const stepTime = 20;   // update every 20ms
    const steps = duration / stepTime;
    const increment = target / steps;

    const updateCount = () => {
      current += increment;
      if (current < target) {
        counter.innerText = Math.floor(current) + suffix;
        setTimeout(updateCount, stepTime);
      } else {
        counter.innerText = target + suffix;
      }
    };

    updateCount();
  });
});

