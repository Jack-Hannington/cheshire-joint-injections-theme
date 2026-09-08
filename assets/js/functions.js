// Menu: glass drawer below 1000px, hover/click dropdowns above.
// style.css hooks: .show on .menu-container, html.menu-open, li.is-open.

//Check is admin bar is shown - if it then add additional class so the fixed nav sits below it
document.addEventListener("DOMContentLoaded", function () {
  if (document.querySelector("#wpadminbar")) {
    document.querySelector('nav').classList.add('admin-margin');
  }
});

(function () {
  var menu = document.querySelector('.menu-container');
  var openBtn = document.getElementById('showMenu');
  var closeBtn = document.getElementById('closeMenu');
  if (!menu || !openBtn) return;

  var desktop = window.matchMedia('(min-width: 1000px)');
  var CHEVRON = '<svg class="menu-chevron" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 7.5l5 5 5-5"/></svg>';

  function openMenu() {
    menu.classList.add('show');
    document.documentElement.classList.add('menu-open');
    openBtn.setAttribute('aria-expanded', 'true');
    if (closeBtn) closeBtn.focus();
  }

  function closeMenu() {
    if (!menu.classList.contains('show')) return;
    menu.classList.remove('show');
    document.documentElement.classList.remove('menu-open');
    openBtn.setAttribute('aria-expanded', 'false');
    openBtn.focus();
  }

  openBtn.addEventListener('click', openMenu);
  if (closeBtn) closeBtn.addEventListener('click', closeMenu);

  /* Sub-menus: parent links (placeholder hrefs) toggle their panel */
  var parents = Array.prototype.slice.call(menu.querySelectorAll('.menu-item-has-children'));

  function closeAllSub(except) {
    parents.forEach(function (li) {
      if (li === except) return;
      li.classList.remove('is-open');
      var a = li.querySelector(':scope > a');
      if (a) a.setAttribute('aria-expanded', 'false');
    });
  }

  parents.forEach(function (li) {
    var link = li.querySelector(':scope > a');
    if (!link) return;
    link.insertAdjacentHTML('beforeend', CHEVRON);
    link.setAttribute('aria-haspopup', 'true');
    link.setAttribute('aria-expanded', 'false');
    link.addEventListener('click', function (e) {
      e.preventDefault();
      var willOpen = !li.classList.contains('is-open');
      closeAllSub(li);
      li.classList.toggle('is-open', willOpen);
      link.setAttribute('aria-expanded', willOpen ? 'true' : 'false');
    });
  });

  /* Leaf links close the drawer; clicking elsewhere closes desktop dropdowns */
  menu.querySelectorAll('.menu a').forEach(function (a) {
    if (a.parentElement.classList.contains('menu-item-has-children')) return;
    a.addEventListener('click', function () { if (!desktop.matches) closeMenu(); });
  });
  document.addEventListener('click', function (e) {
    if (!e.target.closest('.menu-item-has-children')) closeAllSub();
  });
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') { closeMenu(); closeAllSub(); }
  });
  desktop.addEventListener('change', function (mq) {
    if (mq.matches) closeMenu();
    closeAllSub();
  });
})();


// Convert classes to data-aos animations 
window.addEventListener('DOMContentLoaded', (event) => {
  const blocks = document.querySelectorAll('.wp-block-group');
   
  blocks.forEach((block) => {
    
      block.classList.forEach((className) => {
          if (className.startsWith('aos-')) {
            console.log(block)
              const animationName = className.split('aos-')[1];
              block.dataset.aos = animationName;
              block.classList.remove(className);
          }
      });
  });

  AOS.init({
      once: false,
      delay: 100, 
      duration: 1000,
  });
});



// Lightbox
document.addEventListener('DOMContentLoaded', function() {
  const galleries = document.querySelectorAll('.wp-block-gallery');
  const lightbox = document.createElement('div');
  lightbox.className = 'lightbox';
  document.body.appendChild(lightbox);

  // Create navigation and dismiss buttons
  const nextBtn = document.createElement('button');
  nextBtn.innerHTML = '&rsaquo;';
  nextBtn.className = 'btn next';
  const prevBtn = document.createElement('button');
  prevBtn.innerHTML = '&lsaquo;';
  prevBtn.className = 'btn prev';
  const dismissBtn = document.createElement('button');
  dismissBtn.innerHTML = '&times;';
  dismissBtn.className = 'btn dismiss';

  // Indicator
  const indicator = document.createElement('div');
  indicator.className = 'indicator';

  lightbox.appendChild(prevBtn);
  lightbox.appendChild(nextBtn);
  lightbox.appendChild(dismissBtn);
  lightbox.appendChild(indicator);

  let currentGallery = [];
  let currentIndex = 0;

  galleries.forEach(gallery => {
    const images = gallery.querySelectorAll('img');
    images.forEach((image, index) => {
      image.addEventListener('click', () => {
        currentGallery = Array.from(images);
        openLightbox(image, index);
      });
    });
  });

  function openLightbox(image, index) {
    lightbox.style.display = 'flex';
    const img = document.createElement('img');
    img.src = image.src;
    while (lightbox.firstChild !== prevBtn) {
      lightbox.removeChild(lightbox.firstChild);
    }
    lightbox.insertBefore(img, lightbox.firstChild);
    currentIndex = index;
    updateIndicator();
  }

  nextBtn.addEventListener('click', () => navigate(1));
  prevBtn.addEventListener('click', () => navigate(-1));
  dismissBtn.addEventListener('click', closeLightbox);
  
  lightbox.addEventListener('click', (e) => {
    if (e.target === lightbox) closeLightbox();
  });

  document.addEventListener('keydown', (e) => {
    if (lightbox.style.display === 'flex') {
      if (e.key === 'ArrowRight') navigate(1);
      else if (e.key === 'ArrowLeft') navigate(-1);
      else if (e.key === 'Escape') closeLightbox();
    }
  });

  function navigate(direction) {
    currentIndex = (currentIndex + direction + currentGallery.length) % currentGallery.length;
    lightbox.querySelector('img').src = currentGallery[currentIndex].src;
    updateIndicator();
  }

  function updateIndicator() {
    indicator.innerText = `${currentIndex + 1} of ${currentGallery.length}`;
  }

  function closeLightbox() {
    lightbox.style.display = 'none';
  }
});