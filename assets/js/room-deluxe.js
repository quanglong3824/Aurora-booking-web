// Deluxe Room Slider & Lightbox
document.addEventListener('DOMContentLoaded', function () {
  const slider = document.getElementById('deluxeSlider');
  if (!slider) return;

  const mainImg = document.getElementById('sliderMainImage');
  const thumbs = Array.from(document.querySelectorAll('#sliderThumbs .thumb'));
  const prevBtn = slider.querySelector('.slider-btn.prev');
  const nextBtn = slider.querySelector('.slider-btn.next');

  let currentIndex = 0;
  let autoplayTimer = null;
  const AUTOPLAY_MS = 5000; // 5s between slides

  function setActive(index) {
    if (index < 0) index = thumbs.length - 1;
    if (index >= thumbs.length) index = 0;
    currentIndex = index;

    thumbs.forEach((t, i) => t.classList.toggle('active', i === currentIndex));
    const full = thumbs[currentIndex].dataset.full || thumbs[currentIndex].src;
    // trigger a smooth fade-in when image changes
    mainImg.classList.remove('fade-in');
    // force reflow to restart animation
    void mainImg.offsetWidth;
    mainImg.src = full;
    mainImg.alt = thumbs[currentIndex].alt || 'Ảnh phòng Deluxe';
    mainImg.classList.add('fade-in');
  }

  function restartAutoplay() {
    if (!autoplayTimer) return;
    clearInterval(autoplayTimer);
    autoplayTimer = setInterval(() => setActive(currentIndex + 1), AUTOPLAY_MS);
  }

  prevBtn.addEventListener('click', () => { setActive(currentIndex - 1); restartAutoplay(); });
  nextBtn.addEventListener('click', () => { setActive(currentIndex + 1); restartAutoplay(); });

  thumbs.forEach((thumb, i) => {
    thumb.addEventListener('click', () => { setActive(i); restartAutoplay(); });
  });

  // Lightbox
  const lightbox = document.getElementById('imageLightbox');
  const lightboxImg = document.getElementById('lightboxImage');
  const lightboxClose = document.getElementById('lightboxClose');
  const lightboxPrev = document.getElementById('lightboxPrev');
  const lightboxNext = document.getElementById('lightboxNext');
  const lightboxOverlay = document.getElementById('lightboxOverlay');

  function openLightbox() {
    lightbox.classList.add('open');
    lightbox.setAttribute('aria-hidden', 'false');
    lightboxImg.src = mainImg.src;
    lightboxImg.alt = mainImg.alt || 'Xem ảnh lớn';
    document.body.style.overflow = 'hidden';
    // pause autoplay while lightbox is open
    if (autoplayTimer) { clearInterval(autoplayTimer); autoplayTimer = null; }
  }

  function closeLightbox() {
    lightbox.classList.remove('open');
    lightbox.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
    // resume autoplay when lightbox closes
    if (!autoplayTimer) autoplayTimer = setInterval(() => setActive(currentIndex + 1), AUTOPLAY_MS);
  }

  mainImg.addEventListener('click', openLightbox);
  lightboxClose.addEventListener('click', closeLightbox);
  lightboxOverlay.addEventListener('click', closeLightbox);

  lightboxPrev.addEventListener('click', () => {
    setActive(currentIndex - 1);
    lightboxImg.src = thumbs[currentIndex].dataset.full || thumbs[currentIndex].src;
  });
  lightboxNext.addEventListener('click', () => {
    setActive(currentIndex + 1);
    lightboxImg.src = thumbs[currentIndex].dataset.full || thumbs[currentIndex].src;
  });

  // Keyboard support
  document.addEventListener('keydown', (e) => {
    if (!lightbox.classList.contains('open')) return;
    if (e.key === 'Escape') closeLightbox();
    if (e.key === 'ArrowLeft') lightboxPrev.click();
    if (e.key === 'ArrowRight') lightboxNext.click();
  });

  // Init
  setActive(0);

  // Autoplay with pause on hover
  autoplayTimer = setInterval(() => setActive(currentIndex + 1), AUTOPLAY_MS);
  slider.addEventListener('mouseenter', () => { if (autoplayTimer) { clearInterval(autoplayTimer); autoplayTimer = null; } });
  slider.addEventListener('mouseleave', () => { if (!autoplayTimer) autoplayTimer = setInterval(() => setActive(currentIndex + 1), AUTOPLAY_MS); });
});