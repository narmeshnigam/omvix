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

function getPartialUrl(file) {
  const depth = window.location.pathname
    .split('/')
    .filter(Boolean)
    .length - 1;
  return '../'.repeat(Math.max(0, depth)) + 'partials/' + file;
}

function loadPartials() {
  Promise.all([
    fetch(getPartialUrl('header.html')).then(res => res.text()),
    fetch(getPartialUrl('footer.html')).then(res => res.text())
  ]).then(([headerHTML, footerHTML]) => {
    insertHTMLWithScripts('afterbegin', headerHTML);
    insertHTMLWithScripts('beforeend', footerHTML);
    initHeader();
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

function initHeader() {
  const menuIcon = document.querySelector('.mobile-menu-icon');
  const drawer = document.getElementById('mobile-drawer');
  const overlay = document.getElementById('drawer-overlay');
  if (!menuIcon || !drawer || !overlay) return;

  menuIcon.addEventListener('click', toggleMobileMenu);
  overlay.addEventListener('click', toggleMobileMenu);

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      drawer.classList.remove('open');
      overlay.style.display = 'none';
      document.body.classList.remove('menu-open');
    }
  });

  document.addEventListener('click', (e) => {
    if (!drawer.contains(e.target) && !menuIcon.contains(e.target)) {
      drawer.classList.remove('open');
      overlay.style.display = 'none';
      document.body.classList.remove('menu-open');
    }
  });

  window.addEventListener('scroll', () => {
    const header = document.getElementById('site-header');
    const isMobile = window.innerWidth <= 768;

    header.classList.toggle('shrink', window.scrollY > 50);

    if (!isMobile) {
      header.classList.remove('hidden');
      return;
    }

    const currentScroll = window.scrollY || document.documentElement.scrollTop;
    window.lastScrollTop = window.lastScrollTop || 0;

    if (currentScroll > window.lastScrollTop) {
      header.classList.add('hidden');
    } else {
      header.classList.remove('hidden');
    }

    window.lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
  });

  window.addEventListener('load', manageOverflowMenu);
  window.addEventListener('resize', manageOverflowMenu);
}

function manageOverflowMenu() {
  const nav = document.querySelector('.desktop-nav');
  if (!nav) return;
  const navLinks = nav.querySelector('.nav-links');
  const links = Array.from(navLinks.children);
  const moreDropdown = nav.querySelector('.more-dropdown');
  const moreMenu = nav.querySelector('.more-menu');

  links.forEach(link => (link.style.display = 'inline-flex'));
  moreMenu.innerHTML = '';
  moreDropdown.style.display = 'none';

  const navWidth = nav.offsetWidth;
  let usedWidth = moreDropdown.offsetWidth;

  for (let i = 0; i < links.length; i++) {
    const link = links[i];
    usedWidth += link.offsetWidth + 32;

    if (usedWidth > navWidth - 50) {
      moreDropdown.style.display = 'block';
      moreMenu.appendChild(link.cloneNode(true));
      link.style.display = 'none';
    }
  }
}
