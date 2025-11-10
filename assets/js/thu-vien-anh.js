// Gallery Page JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Elements
    const filterBtns = document.querySelectorAll('.filter-btn');
    const grid = document.getElementById('galleryGrid');
    const paginationEl = document.getElementById('pagination');
    const galleryItems = Array.from(document.querySelectorAll('.gallery-item'));

    // State
    let currentFilter = 'all';
    let currentPage = 1;
    const pageSize = 5;

    // Shuffle DOM children of the grid
    function shuffleGrid() {
        if (!grid) return;
        const children = Array.from(grid.children);
        for (let i = children.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            const tmp = children[i];
            children[i] = children[j];
            children[j] = tmp;
        }
        // Re-append in new order
        grid.innerHTML = '';
        children.forEach(ch => grid.appendChild(ch));
    }

    function getFilteredItems() {
        return galleryItems.filter(item => {
            const category = item.getAttribute('data-category');
            return currentFilter === 'all' || category === currentFilter;
        });
    }

    function renderPagination(totalPages) {
        if (!paginationEl) return;
        paginationEl.innerHTML = '';

        if (totalPages <= 1) {
            return; // nothing to render
        }

        const btn = (text, disabled, handler, isActive = false) => {
            const b = document.createElement('button');
            b.className = `btn btn-outline ${isActive ? 'active' : ''}`;
            b.textContent = text;
            b.disabled = !!disabled;
            b.addEventListener('click', handler);
            return b;
        };

        const prev = btn('<', currentPage === 1, () => {
            currentPage = Math.max(1, currentPage - 1);
            renderPage();
        });
        paginationEl.appendChild(prev);

        for (let p = 1; p <= totalPages; p++) {
            const isActive = p === currentPage;
            const pageBtn = btn(String(p), false, () => {
                currentPage = p;
                renderPage();
            }, isActive);
            paginationEl.appendChild(pageBtn);
        }

        const next = btn('>', currentPage === totalPages, () => {
            currentPage = Math.min(totalPages, currentPage + 1);
            renderPage();
        });
        paginationEl.appendChild(next);
    }

    function renderPage() {
        const filtered = getFilteredItems();
        const totalPages = Math.max(1, Math.ceil(filtered.length / pageSize));
        currentPage = Math.min(currentPage, totalPages);

        // Hide all
        galleryItems.forEach(item => item.classList.add('hidden'));

        // Show current page items
        const startIdx = (currentPage - 1) * pageSize;
        const endIdx = startIdx + pageSize;
        filtered.slice(startIdx, endIdx).forEach(item => item.classList.remove('hidden'));

        renderPagination(totalPages);

        // Scroll lên đầu khu vực grid để người dùng thấy nội dung mới
        if (grid) {
            // scroll có bù trừ chiều cao thanh filter sticky để không bị che
            const headerOffset = 120; // cao khoảng filter + khoảng trống
            const y = grid.getBoundingClientRect().top + window.scrollY - headerOffset;
            window.scrollTo({ top: Math.max(0, y), behavior: 'smooth' });
        }

        // Điều chỉnh layout để đảm bảo masonry gom ảnh sau khi lọc/phân trang
        adjustMasonryLayout();
    }

    // Filter handlers
    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            currentFilter = btn.getAttribute('data-filter');
            currentPage = 1;
            shuffleGrid();
            renderPage();
        });
    });

    // Initial render
    shuffleGrid();
    renderPage();
    adjustMasonryLayout();
    
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
            
            // Get all visible images (current page after filter & pagination)
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