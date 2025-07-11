function insertHTMLWithScripts(position, html) {
  const temp = document.createElement('div');
  temp.innerHTML = html;
  const scripts = Array.from(temp.querySelectorAll('script'));
  scripts.forEach(s => s.remove());
  document.body.insertAdjacentHTML(position, temp.innerHTML);
  scripts.forEach(script => {
    const s = document.createElement('script');
    if (script.src) {
      s.src = script.src;
    } else {
      s.textContent = script.textContent;
    }
    document.body.appendChild(s);
  });
}

function loadPartials() {
  Promise.all([
    fetch('/partials/header.html').then(res => res.text()),
    fetch('/partials/footer.html').then(res => res.text())
  ]).then(([headerHTML, footerHTML]) => {
    insertHTMLWithScripts('afterbegin', headerHTML);
    insertHTMLWithScripts('beforeend', footerHTML);
    initMobileMenu();
  });
}

function initMobileMenu() {
  const drawer = document.getElementById('mobile-drawer');
  const overlay = document.getElementById('drawer-overlay');
  const icon = document.querySelector('.mobile-menu-icon');

  if (!drawer || !overlay || !icon) return;

  function toggle() {
    const isOpen = drawer.classList.contains('open');
    drawer.classList.toggle('open');
    overlay.style.display = isOpen ? 'none' : 'block';
    document.body.classList.toggle('menu-open', !isOpen);
  }

  icon.addEventListener('click', toggle);
  overlay.addEventListener('click', toggle);

  document.addEventListener('click', e => {
    if (!drawer.contains(e.target) && !icon.contains(e.target)) {
      drawer.classList.remove('open');
      overlay.style.display = 'none';
      document.body.classList.remove('menu-open');
    }
  });

  document.addEventListener('keydown', e => {
    if (e.key === 'Escape') {
      drawer.classList.remove('open');
      overlay.style.display = 'none';
      document.body.classList.remove('menu-open');
    }
  });
}

document.addEventListener('DOMContentLoaded', loadPartials);
