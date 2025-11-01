// Gallery Filter Functionality
document.addEventListener('DOMContentLoaded', function() {
    // Gallery filter buttons
    const filterButtons = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');
            
            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            // Filter gallery items
            galleryItems.forEach(item => {
                const category = item.getAttribute('data-category');
                
                if (filter === 'all' || category === filter) {
                    item.style.display = 'block';
                    item.classList.remove('hidden');
                    // Add animation
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'translateY(0)';
                    }, 100);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        item.style.display = 'none';
                        item.classList.add('hidden');
                    }, 300);
                }
            });
        });
    });
    
    // Gallery modal functionality
    const galleryModal = document.getElementById('galleryModal');
    const modalImage = document.getElementById('modalImage');
    
    if (galleryModal && modalImage) {
        galleryModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const imageSrc = button.getAttribute('data-image');
            modalImage.src = imageSrc;
        });
    }
    
    // Load more functionality
    const loadMoreBtn = document.getElementById('loadMoreBtn');
    let hiddenItems = [];
    
    if (loadMoreBtn) {
        // Initially hide some items for load more effect
        const allItems = Array.from(galleryItems);
        if (allItems.length > 9) {
            hiddenItems = allItems.slice(9);
            hiddenItems.forEach(item => {
                item.style.display = 'none';
                item.classList.add('hidden');
            });
        } else {
            loadMoreBtn.style.display = 'none';
        }
        
        loadMoreBtn.addEventListener('click', function() {
            const itemsToShow = hiddenItems.splice(0, 6);
            
            itemsToShow.forEach((item, index) => {
                setTimeout(() => {
                    item.style.display = 'block';
                    item.classList.remove('hidden');
                    item.style.opacity = '0';
                    item.style.transform = 'translateY(20px)';
                    
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'translateY(0)';
                    }, 100);
                }, index * 100);
            });
            
            if (hiddenItems.length === 0) {
                this.style.display = 'none';
            }
        });
    }
    
    // Gallery item hover effects
    galleryItems.forEach(item => {
        const card = item.querySelector('.gallery-card');
        
        if (card) {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        }
    });
    
    // Lazy loading for gallery images
    const galleryImages = document.querySelectorAll('.gallery-image img');
    
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.style.opacity = '0';
                img.style.transition = 'opacity 0.5s ease';
                
                img.onload = function() {
                    this.style.opacity = '1';
                };
                
                observer.unobserve(img);
            }
        });
    });
    
    galleryImages.forEach(img => {
        imageObserver.observe(img);
    });

});
});