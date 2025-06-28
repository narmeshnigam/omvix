// Load header and footer for modularity
function loadPartials() {
  fetch('partials/header.html')
    .then(res => res.text())
    .then(html => {
      document.querySelector('body').insertAdjacentHTML('afterbegin', html);
    });

  fetch('partials/footer.html')
    .then(res => res.text())
    .then(html => {
      document.querySelector('body').insertAdjacentHTML('beforeend', html);
    });
}

document.addEventListener('DOMContentLoaded', loadPartials);
