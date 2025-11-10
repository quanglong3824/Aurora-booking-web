// Dịch vụ - JS cho pages/dich-vu.php
(function(){
  // Swap main image when clicking thumbnails
  document.querySelectorAll('.service-detail-gallery').forEach(function(gal){
    var mainImg = gal.querySelector('.gallery-main img');
    var thumbs = gal.querySelectorAll('.gallery-thumbs img');
    thumbs.forEach(function(thumb){
      thumb.addEventListener('click', function(){
        if(!mainImg) return;
        mainImg.src = thumb.src;
        mainImg.alt = thumb.alt || mainImg.alt;
      });
    });
  });

  // Smooth scroll for intra-page service links
  document.querySelectorAll('.service-link[href^="#"]').forEach(function(link){
    link.addEventListener('click', function(e){
      var targetId = this.getAttribute('href').substring(1);
      var target = document.getElementById(targetId);
      if(target){
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });
})();