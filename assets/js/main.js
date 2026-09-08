/**
 * Cheshire Joint Injections — front-end behaviour (vanilla).
 *  - nav shadow once the page has scrolled
 *  - card carousel (Columns block with the "Card carousel" style)
 * The drawer/menu toggling still lives in functions.js.
 */
(function () {
  'use strict';

  /* Nav shadow */
  var nav = document.querySelector('.site-header nav');
  function onScroll() {
    if (nav) nav.classList.toggle('scrolled', window.scrollY > 10);
  }
  onScroll();
  window.addEventListener('scroll', onScroll, { passive: true });

  /* Card carousel */
  var CHEV_L = '<svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12.5 15L7.5 10L12.5 5"/></svg>';
  var CHEV_R = '<svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7.5 5L12.5 10L7.5 15"/></svg>';

  function activeIndex(track, cards) {
    var x = track.scrollLeft, best = 0, bestDist = Infinity;
    cards.forEach(function (c, i) {
      var d = Math.abs(c.offsetLeft - track.offsetLeft - x);
      if (d < bestDist) { bestDist = d; best = i; }
    });
    return best;
  }

  function scrollToCard(track, cards, i) {
    i = Math.max(0, Math.min(cards.length - 1, i));
    track.scrollTo({ left: cards[i].offsetLeft - track.offsetLeft, behavior: 'smooth' });
  }

  document.querySelectorAll('.wp-block-columns.is-style-carousel').forEach(function (track) {
    var cards = Array.prototype.slice.call(track.children);
    if (cards.length < 2) return;
    track.classList.add('is-not-stacked-on-mobile');
    track.setAttribute('tabindex', '0');
    track.setAttribute('aria-roledescription', 'carousel');

    var footer = document.createElement('div');
    footer.className = 'carousel-footer';
    ['alignwide', 'alignfull'].forEach(function (c) {
      if (track.classList.contains(c)) footer.classList.add(c);
    });

    /* Dots by default; a proportional progress bar for the reviews gallery */
    var useBar = track.classList.contains('reviews-gallery');
    var dots, thumb;
    if (useBar) {
      dots = document.createElement('div');
      dots.className = 'carousel-progress';
      thumb = document.createElement('div');
      thumb.className = 'carousel-progress__thumb';
      dots.appendChild(thumb);
      dots.addEventListener('click', function (e) {
        var r = dots.getBoundingClientRect();
        var frac = (e.clientX - r.left) / r.width;
        track.scrollTo({ left: frac * track.scrollWidth - track.clientWidth / 2, behavior: 'smooth' });
      });
    } else {
      dots = document.createElement('div');
      dots.className = 'carousel-dots';
      cards.forEach(function (_, i) {
        var d = document.createElement('button');
        d.type = 'button';
        d.className = 'carousel-dot';
        d.setAttribute('aria-label', 'Go to card ' + (i + 1));
        d.addEventListener('click', function () { scrollToCard(track, cards, i); });
        dots.appendChild(d);
      });
    }

    var arrows = document.createElement('div');
    arrows.className = 'carousel-arrows';
    var prev = document.createElement('button');
    var next = document.createElement('button');
    prev.className = next.className = 'carousel-arrow';
    prev.type = next.type = 'button';
    prev.setAttribute('aria-label', 'Previous');
    next.setAttribute('aria-label', 'Next');
    prev.innerHTML = CHEV_L;
    next.innerHTML = CHEV_R;
    prev.addEventListener('click', function () { scrollToCard(track, cards, activeIndex(track, cards) - 1); });
    next.addEventListener('click', function () { scrollToCard(track, cards, activeIndex(track, cards) + 1); });
    arrows.appendChild(prev);
    arrows.appendChild(next);

    footer.appendChild(dots);
    footer.appendChild(arrows);
    track.parentNode.insertBefore(footer, track.nextSibling);

    function update() {
      var i = activeIndex(track, cards);
      var atEnd = track.scrollLeft + track.clientWidth >= track.scrollWidth - 2;
      track.classList.toggle('has-more', !atEnd);
      if (useBar) {
        footer.hidden = track.scrollWidth <= track.clientWidth + 2;
        thumb.style.width = (track.clientWidth / track.scrollWidth * 100) + '%';
        thumb.style.left = (track.scrollLeft / track.scrollWidth * 100) + '%';
      } else {
        dots.querySelectorAll('.carousel-dot').forEach(function (d, j) {
          d.classList.toggle('is-active', j === i);
        });
      }
      prev.disabled = i === 0;
      next.disabled = atEnd;
    }
    var raf;
    track.addEventListener('scroll', function () {
      cancelAnimationFrame(raf);
      raf = requestAnimationFrame(update);
    }, { passive: true });
    window.addEventListener('resize', update);
    track.addEventListener('keydown', function (e) {
      if (e.key === 'ArrowRight') { e.preventDefault(); scrollToCard(track, cards, activeIndex(track, cards) + 1); }
      if (e.key === 'ArrowLeft') { e.preventDefault(); scrollToCard(track, cards, activeIndex(track, cards) - 1); }
    });
    update();
  });
})();
