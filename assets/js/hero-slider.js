document.addEventListener('DOMContentLoaded', function () {
  var hero = document.getElementById('home');
  if (!hero) return;

  var imagesData = hero.getAttribute('data-images');
  var intervalData = hero.getAttribute('data-interval');
  var images = [];
  try { images = JSON.parse(imagesData || '[]'); } catch (e) { images = []; }
  if (!Array.isArray(images) || images.length === 0) return;

  // Preload images
  images.forEach(function (src) {
    var img = new Image();
    img.src = src;
  });

  var idx = 0;
  var interval = parseInt(intervalData || '5000', 10);
  setInterval(function () {
    idx = (idx + 1) % images.length;
    hero.style.backgroundImage = "url('" + images[idx] + "')";
  }, interval);
});