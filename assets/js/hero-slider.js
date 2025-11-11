document.addEventListener('DOMContentLoaded', function () {
  var hero = document.getElementById('home');
  if (!hero) return;

  var imagesData = hero.getAttribute('data-images');
  var intervalData = hero.getAttribute('data-interval');
  var images = [];
  try { images = JSON.parse(imagesData || '[]'); } catch (e) { images = []; }
  if (!Array.isArray(images) || images.length === 0) return;

  // Controls
  var dotsWrap = hero.querySelector('.hero-dots');
  var prevBtn = hero.querySelector('.hero-prev');
  var nextBtn = hero.querySelector('.hero-next');

  // Preload images
  images.forEach(function (src) {
    var img = new Image();
    img.src = src;
  });

  var idx = 0;
  var interval = parseInt(intervalData || '5000', 10);
  var timerId = null;

  function render() {
    hero.style.backgroundImage = "url('" + images[idx] + "')";
    if (dotsWrap) {
      var dots = dotsWrap.querySelectorAll('.hero-dot');
      dots.forEach(function (d) { d.classList.remove('active'); });
      var active = dotsWrap.querySelector('[data-index="' + idx + '"]');
      if (active) active.classList.add('active');
    }
  }

  function startAuto() {
    stopAuto();
    timerId = setInterval(function () {
      idx = (idx + 1) % images.length;
      render();
    }, interval);
  }
  function stopAuto() { if (timerId) { clearInterval(timerId); timerId = null; } }

  // Build dots
  if (dotsWrap) {
    dotsWrap.innerHTML = '';
    images.forEach(function (_, i) {
      var b = document.createElement('button');
      b.type = 'button';
      b.className = 'hero-dot' + (i === 0 ? ' active' : '');
      b.setAttribute('aria-label', 'Chọn ảnh ' + (i + 1));
      b.dataset.index = String(i);
      b.addEventListener('click', function () {
        idx = i;
        render();
        startAuto();
      });
      dotsWrap.appendChild(b);
    });
  }

  // Arrow handlers
  function goPrev() {
    idx = (idx - 1 + images.length) % images.length;
    render();
    startAuto();
  }
  function goNext() {
    idx = (idx + 1) % images.length;
    render();
    startAuto();
  }
  if (prevBtn) prevBtn.addEventListener('click', goPrev);
  if (nextBtn) nextBtn.addEventListener('click', goNext);

  // Init
  render();
  startAuto();
});