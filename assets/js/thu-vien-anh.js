// Gallery Page JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Filter functionality
    const filterBtns = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');
    const loadMoreBtn = document.getElementById('loadMoreBtn');
    
    let currentFilter = 'all';
    let visibleItems = 12;
    
    // Filter items
    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Update active button
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            
            currentFilter = btn.getAttribute('data-filter');
            visibleItems = 12;
            
            filterItems();
        });
    });
    
    function filterItems() {
        let visibleCount = 0;
        
        galleryItems.forEach((item, index) => {
            const category = item.getAttribute('data-category');
            const shouldShow = currentFilter === 'all' || category === currentFilter;
            
            if (shouldShow && visibleCount < visibleItems) {
                item.classList.remove('hidden');
                visibleCount++;
            } else {
                item.classList.add('hidden');
            }
        });
        
        // Show/hide load more button
        const totalFilteredItems = Array.from(galleryItems).filter(item => {
            const category = item.getAttribute('data-category');
            return currentFilter === 'all' || category === currentFilter;
        }).length;
        
        if (visibleCount >= totalFilteredItems) {
            loadMoreBtn.style.display = 'none';
        } else {
            loadMoreBtn.style.display = 'block';
        }
    }
    
    // Load more functionality
    loadMoreBtn.addEventListener('click', () => {
        visibleItems += 12;
        filterItems();
    });
    
    // Initialize filter
    filterItems();
    
    // Lightbox functionality
    const lightbox = document.getElementById('lightbox');
    const lightboxImage = document.getElementById('lightboxImage');
    const lightboxTitle = document.getElementById('lightboxTitle');
    const lightboxDescription = document.getElementById('lightboxDescription');
    const lightboxCounter = document.getElementById('lightboxCounter');
    const lightboxClose = document.getElementById('lightboxClose');
    const lightboxPrev = document.getElementById('lightboxPrev');
    const lightboxNext = document.getElementById('lightboxNext');
    
    let currentImageIndex = 0;
    let currentImages = [];
    
    // Open lightbox
    document.querySelectorAll('.gallery-zoom').forEach((btn, index) => {
        btn.addEventListener('click', (e) => {
            e.stopPropagation();
            
            // Get all visible images
            currentImages = Array.from(document.querySelectorAll('.gallery-item:not(.hidden) .gallery-zoom'));
            currentImageIndex = currentImages.indexOf(btn);
            
            showLightboxImage();
            lightbox.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
    });
    
    // Close lightbox
    lightboxClose.addEventListener('click', closeLightbox);
    lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox) {
            closeLightbox();
        }
    });
    
    function closeLightbox() {
        lightbox.classList.remove('active');
        document.body.style.overflow = '';
    }
    
    // Navigation
    lightboxPrev.addEventListener('click', () => {
        currentImageIndex = (currentImageIndex - 1 + currentImages.length) % currentImages.length;
        showLightboxImage();
    });
    
    lightboxNext.addEventListener('click', () => {
        currentImageIndex = (currentImageIndex + 1) % currentImages.length;
        showLightboxImage();
    });
    
    function showLightboxImage() {
        const currentBtn = currentImages[currentImageIndex];
        const galleryItem = currentBtn.closest('.gallery-item');
        const img = galleryItem.querySelector('img');
        const info = galleryItem.querySelector('.gallery-info');
        
        lightboxImage.src = currentBtn.getAttribute('data-src');
        lightboxTitle.textContent = info.querySelector('h4').textContent;
        lightboxDescription.textContent = info.querySelector('p').textContent;
        lightboxCounter.textContent = `${currentImageIndex + 1} / ${currentImages.length}`;
    }
    
    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (!lightbox.classList.contains('active')) return;
        
        switch(e.key) {
            case 'Escape':
                closeLightbox();
                break;
            case 'ArrowLeft':
                lightboxPrev.click();
                break;
            case 'ArrowRight':
                lightboxNext.click();
                break;
        }
    });
    
    // Stats counter animation
    const statNumbers = document.querySelectorAll('.stat-number');
    
    const animateCounter = (element) => {
        const target = parseInt(element.getAttribute('data-count'));
        const duration = 2000;
        const step = target / (duration / 16);
        let current = 0;
        
        const timer = setInterval(() => {
            current += step;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }
            element.textContent = Math.floor(current);
        }, 16);
    };
    
    // Intersection Observer for counter animation
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                counterObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });
    
    statNumbers.forEach(counter => {
        counterObserver.observe(counter);
    });
    
    // Masonry layout adjustment
    function adjustMasonryLayout() {
        const grid = document.querySelector('.masonry-grid');
        if (!grid) return;
        
        // Force reflow for masonry effect
        const items = grid.querySelectorAll('.gallery-item:not(.hidden)');
        items.forEach(item => {
            item.style.height = 'auto';
        });
    }
    
    // Adjust layout on window resize
    window.addEventListener('resize', adjustMasonryLayout);
    
    // Lazy loading for images
    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                if (img.dataset.src) {
                    img.src = img.dataset.src;
                    img.removeAttribute('data-src');
                    imageObserver.unobserve(img);
                }
            }
        });
    });
    
    document.querySelectorAll('img[data-src]').forEach(img => {
        imageObserver.observe(img);
    });
});