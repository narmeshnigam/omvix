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
  });
}

document.addEventListener('DOMContentLoaded', loadPartials);

// Toggle the mobile navigation drawer
function toggleMobileMenu() {
  const drawer = document.getElementById('mobile-drawer');
  const overlay = document.getElementById('drawer-overlay');
  if (!drawer || !overlay) return;

  const isOpen = drawer.classList.contains('open');
  if (isOpen) {
    drawer.classList.remove('open');
    overlay.style.display = 'none';
    document.body.classList.remove('menu-open');
  } else {
    drawer.classList.add('open');
    overlay.style.display = 'block';
    document.body.classList.add('menu-open');
  }
}
