// Load header and footer and initialize navigation
function loadPartials() {
  Promise.all([
    fetch('/partials/header.html').then(res => res.text()),
    fetch('/partials/footer.html').then(res => res.text())
  ]).then(([headerHTML, footerHTML]) => {
    document.body.insertAdjacentHTML('afterbegin', headerHTML);
    document.body.insertAdjacentHTML('beforeend', footerHTML);
    initHeader();
  });
}

function initHeader() {
  const toggle = document.querySelector('.nav-toggle');
  const header = document.querySelector('.site-header');
  const links = document.querySelectorAll('.main-nav a');
  if (!toggle || !header) return;

  toggle.addEventListener('click', () => {
    document.body.classList.toggle('nav-open');
  });

  links.forEach(link =>
    link.addEventListener('click', () => {
      document.body.classList.remove('nav-open');
    })
  );

  window.addEventListener('scroll', () => {
    if (window.scrollY > 40) {
      header.classList.add('shrink');
    } else {
      header.classList.remove('shrink');
    }
  });
}

document.addEventListener('DOMContentLoaded', loadPartials);
