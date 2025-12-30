// ================================
// WILBAY SOLUTIONS - PRELOADER JS
// ================================

// Show preloader and animate the percentage before navigating
function showPreloaderAndNavigate(url) {
  const preloader = document.getElementById('preloader');
  const percentageEl = document.getElementById('preloader-percentage');
  const progressEl = document.querySelector('.preloader-progress');

  if (!preloader || !percentageEl || !progressEl) {
    // If preloader elements are missing, just redirect
    window.location.href = url;
    return;
  }

  preloader.style.display = 'flex';
  document.body.classList.add('loading');

  let counter = 0;
  const interval = setInterval(() => {
    if (counter >= 100) {
      clearInterval(interval);
      sessionStorage.setItem('skipPreloader', 'true'); // ✅ Set flag before redirect
      window.location.href = url;
    } else {
      counter++;
      percentageEl.innerText = counter + "%";
      progressEl.style.width = counter + "%";
    }
  }, 15);
}

// Initialize preloader functionality on page load
document.addEventListener('DOMContentLoaded', () => {
  // ✅ If skipPreloader flag is set, hide preloader immediately
  if (sessionStorage.getItem('skipPreloader') === 'true') {
    const preloader = document.getElementById('preloader');
    if (preloader) {
      preloader.style.display = 'none';
      document.body.classList.remove('loading');
    }
    sessionStorage.removeItem('skipPreloader');
  }

  const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

  navLinks.forEach(link => {
    const url = link.getAttribute('href');
    link.addEventListener('click', (e) => {
      // Skip preloader if already on this page
      if (window.location.pathname.endsWith(url)) return;

      e.preventDefault();
      showPreloaderAndNavigate(url);
    });
  });

  // Also handle the "Book Now" button
  const bookBtn = document.querySelector('.btn-book');
  if (bookBtn) {
    const url = bookBtn.getAttribute('href');
    bookBtn.addEventListener('click', (e) => {
      if (window.location.pathname.endsWith(url)) return;

      e.preventDefault();
      showPreloaderAndNavigate(url);
    });
  }
});

// Hide preloader after page fully loads (for initial load)
window.addEventListener('load', () => {
  const preloader = document.getElementById('preloader');
  if (preloader) {
    preloader.style.display = 'none';
    document.body.classList.remove('loading');
  }
});




