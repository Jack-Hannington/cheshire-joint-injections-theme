/**
 * Cheshire Joint Injections — front-end behaviour (vanilla).
 *  - nav shadow once the page has scrolled
 *  - card carousel (Columns block with the "Card carousel" style)
 *  - "Read more" toggle for clamped Groups (Group style "Read more")
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

    /* Proportional progress bar: the thumb is the visible share of the track,
       so it stays honest however many cards fit. (Per-card dots could never
       reach the last dots once more than one card was visible.) */
    var bar = document.createElement('div');
    bar.className = 'carousel-progress';
    var thumb = document.createElement('div');
    thumb.className = 'carousel-progress__thumb';
    bar.appendChild(thumb);
    bar.addEventListener('click', function (e) {
      var r = bar.getBoundingClientRect();
      var frac = (e.clientX - r.left) / r.width;
      track.scrollTo({ left: frac * track.scrollWidth - track.clientWidth / 2, behavior: 'smooth' });
    });

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

    footer.appendChild(bar);
    footer.appendChild(arrows);
    track.parentNode.insertBefore(footer, track.nextSibling);

    function update() {
      var i = activeIndex(track, cards);
      var atEnd = track.scrollLeft + track.clientWidth >= track.scrollWidth - 2;
      track.classList.toggle('has-more', !atEnd);
      footer.hidden = track.scrollWidth <= track.clientWidth + 2;
      thumb.style.width = (track.clientWidth / track.scrollWidth * 100) + '%';
      thumb.style.left = (track.scrollLeft / track.scrollWidth * 100) + '%';
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

  /* Read more (Group block style "Read more"): clamp is CSS; add the toggle
     only when the text really overflows, so short copy is left alone. */
  document.querySelectorAll('.is-style-read-more').forEach(function (box, n) {
    if (box.scrollHeight <= box.clientHeight + 4) return;
    box.classList.add('is-clamped');
    if (!box.id) box.id = 'read-more-' + (n + 1);
    var btn = document.createElement('button');
    btn.type = 'button';
    btn.className = 'read-more-toggle';
    btn.textContent = 'Read more';
    btn.setAttribute('aria-expanded', 'false');
    btn.setAttribute('aria-controls', box.id);
    btn.addEventListener('click', function () {
      var open = box.classList.toggle('is-open');
      btn.setAttribute('aria-expanded', open ? 'true' : 'false');
      btn.textContent = open ? 'Read less' : 'Read more';
    });
    box.insertAdjacentElement('afterend', btn);
  });
})();
