// Aurora Hotel - Main JavaScript File

document.addEventListener('DOMContentLoaded', function() {
    // Header Scroll Effect
    const header = document.querySelector('.header');
    let lastScrollTop = 0;
    
    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        // Add scrolled class for styling
        if (scrollTop > 100) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
        
        // Hide/show header on scroll
        if (scrollTop > lastScrollTop && scrollTop > 200) {
            // Scrolling down
            header.style.transform = 'translateY(-100%)';
        } else {
            // Scrolling up
            header.style.transform = 'translateY(0)';
        }
        
        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
    });

    // Mobile Navigation Toggle
    const navToggle = document.getElementById('navToggle');
    const navMenu = document.getElementById('navMenu');
    const body = document.body;

    if (navToggle && navMenu) {
        navToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
            navToggle.classList.toggle('active');
            body.classList.toggle('nav-open');
            
            // Prevent body scroll when menu is open
            if (navMenu.classList.contains('active')) {
                body.style.overflow = 'hidden';
            } else {
                body.style.overflow = '';
            }
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!navMenu.contains(e.target) && !navToggle.contains(e.target)) {
                navMenu.classList.remove('active');
                navToggle.classList.remove('active');
                body.classList.remove('nav-open');
                body.style.overflow = '';
            }
        });

        // Close mobile menu when clicking on menu links
        const navLinks = navMenu.querySelectorAll('a');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                navMenu.classList.remove('active');
                navToggle.classList.remove('active');
                body.classList.remove('nav-open');
                body.style.overflow = '';
            });
        });
    }

    // Close mobile menu when clicking outside
    document.addEventListener('click', function(e) {
        if (navMenu && navMenu.classList.contains('active')) {
            if (!navMenu.contains(e.target) && !navToggle.contains(e.target)) {
                navMenu.classList.remove('active');
                navToggle.classList.remove('active');
                body.classList.remove('nav-open');
                body.style.overflow = '';
            }
        }
    });

    // Close mobile menu when clicking on a link
    const navLinks = document.querySelectorAll('.nav-menu a');
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (navMenu && navMenu.classList.contains('active')) {
                navMenu.classList.remove('active');
                navToggle.classList.remove('active');
                body.classList.remove('nav-open');
                body.style.overflow = '';
            }
        });
    });

    // Enhanced Dropdown Menu Interactions
    const dropdowns = document.querySelectorAll('.dropdown');
    dropdowns.forEach(dropdown => {
        const dropdownMenu = dropdown.querySelector('.dropdown-menu');
        let timeoutId;

        dropdown.addEventListener('mouseenter', function() {
            clearTimeout(timeoutId);
            dropdownMenu.style.display = 'block';
            setTimeout(() => {
                dropdownMenu.classList.add('show');
            }, 10);
        });

        dropdown.addEventListener('mouseleave', function() {
            dropdownMenu.classList.remove('show');
            timeoutId = setTimeout(() => {
                dropdownMenu.style.display = 'none';
            }, 300);
        });
    });

    // Active Navigation Link Highlighting
    function updateActiveNavLink() {
        const currentPage = window.location.pathname.split('/').pop() || 'index.php';
        const navLinks = document.querySelectorAll('.nav-menu a');
        
        navLinks.forEach(link => {
            link.classList.remove('active');
            const linkHref = link.getAttribute('href');
            
            if (linkHref === currentPage || 
                (currentPage === '' && linkHref === 'index.php') ||
                (currentPage === 'index.php' && linkHref === 'index.php')) {
                link.classList.add('active');
            }
        });
    }
    
    updateActiveNavLink();

    // Smooth scrolling for navigation links
    const smoothScrollLinks = document.querySelectorAll('a[href^="#"]');
    smoothScrollLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            
            if (targetSection) {
                const headerHeight = header.offsetHeight;
                const targetPosition = targetSection.offsetTop - headerHeight - 20;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Search Functionality (if search exists)
    const searchToggle = document.querySelector('.search-toggle');
    const searchForm = document.querySelector('.search-form');
    
    if (searchToggle && searchForm) {
        searchToggle.addEventListener('click', function(e) {
            e.preventDefault();
            searchForm.classList.toggle('active');
            const searchInput = searchForm.querySelector('input');
            if (searchInput && searchForm.classList.contains('active')) {
                searchInput.focus();
            }
        });
    }

    // Keyboard Navigation Support
    document.addEventListener('keydown', function(e) {
        // Close mobile menu with Escape key
        if (e.key === 'Escape' && navMenu && navMenu.classList.contains('active')) {
            navMenu.classList.remove('active');
            navToggle.classList.remove('active');
            body.classList.remove('nav-open');
            body.style.overflow = '';
        }
    });

    // Intersection Observer for Animation on Scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
            }
        });
    }, observerOptions);

    // Observe elements for animation
    const animateElements = document.querySelectorAll('.room-card, .service-card, .stat-item');
    animateElements.forEach(el => observer.observe(el));

    // Header background change on scroll
    const headerElement = document.querySelector('.header');
    window.addEventListener('scroll', function() {
        if (window.scrollY > 100) {
            headerElement.style.background = 'rgba(255, 255, 255, 0.98)';
            headerElement.style.boxShadow = '0 2px 20px rgba(0,0,0,0.1)';
        } else {
            headerElement.style.background = 'rgba(255, 255, 255, 0.95)';
            headerElement.style.boxShadow = 'none';
        }
    });

    // Booking form functionality
    const bookingForm = document.querySelector('.booking-form-grid');
    if (bookingForm) {
        bookingForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const checkin = document.getElementById('checkin').value;
            const checkout = document.getElementById('checkout').value;
            const guests = document.getElementById('guests').value;
            const roomType = document.getElementById('room-type').value;
            
            // Basic validation
            if (!checkin || !checkout) {
                alert('Vui lòng chọn ngày nhận phòng và trả phòng!');
                return;
            }
            
            const checkinDate = new Date(checkin);
            const checkoutDate = new Date(checkout);
            const today = new Date();
            today.setHours(0, 0, 0, 0);
            
            if (checkinDate < today) {
                alert('Ngày nhận phòng không thể là ngày trong quá khứ!');
                return;
            }
            
            if (checkoutDate <= checkinDate) {
                alert('Ngày trả phòng phải sau ngày nhận phòng!');
                return;
            }
            
            // Calculate nights
            const timeDiff = checkoutDate.getTime() - checkinDate.getTime();
            const nights = Math.ceil(timeDiff / (1000 * 3600 * 24));
            
            // Show booking summary
            const summary = `
                Thông tin đặt phòng:
                - Loại phòng: ${roomType}
                - Số khách: ${guests}
                - Nhận phòng: ${checkin}
                - Trả phòng: ${checkout}
                - Số đêm: ${nights}
                
                Bạn có muốn tiếp tục đặt phòng?
            `;
            
            if (confirm(summary)) {
                alert('Cảm ơn bạn! Chúng tôi sẽ liên hệ với bạn sớm nhất có thể.');
                bookingForm.reset();
            }
        });
    }

    // Contact form functionality
    const contactForm = document.querySelector('.contact-form form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const name = this.querySelector('input[type="text"]').value;
            const email = this.querySelector('input[type="email"]').value;
            const subject = this.querySelectorAll('input[type="text"]')[1].value;
            const message = this.querySelector('textarea').value;
            
            // Basic validation
            if (!name || !email || !subject || !message) {
                alert('Vui lòng điền đầy đủ thông tin!');
                return;
            }
            
            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert('Vui lòng nhập email hợp lệ!');
                return;
            }
            
            // Simulate form submission
            alert('Cảm ơn bạn đã liên hệ! Chúng tôi sẽ phản hồi trong vòng 24 giờ.');
            this.reset();
        });
    }

    // Animate elements on scroll
    const scrollObserverOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const scrollObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('loading');
            }
        });
    }, scrollObserverOptions);

    // Observe elements for animation
    const scrollAnimateElements = document.querySelectorAll('.room-card, .service-card, .about-text, .contact-item');
    scrollAnimateElements.forEach(el => {
        scrollObserver.observe(el);
    });

    // Set minimum date for booking form
    const checkinInput = document.getElementById('checkin');
    const checkoutInput = document.getElementById('checkout');
    
    if (checkinInput && checkoutInput) {
        const today = new Date().toISOString().split('T')[0];
        checkinInput.setAttribute('min', today);
        
        checkinInput.addEventListener('change', function() {
            const checkinDate = new Date(this.value);
            const nextDay = new Date(checkinDate);
            nextDay.setDate(nextDay.getDate() + 1);
            checkoutInput.setAttribute('min', nextDay.toISOString().split('T')[0]);
            
            if (checkoutInput.value && new Date(checkoutInput.value) <= checkinDate) {
                checkoutInput.value = '';
            }
        });
    }

    // Room card hover effects
    const roomCards = document.querySelectorAll('.room-card');
    roomCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px) scale(1.02)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });

    // Service card animations
    const serviceCards = document.querySelectorAll('.service-card');
    serviceCards.forEach((card, index) => {
        card.style.animationDelay = `${index * 0.1}s`;
    });

    // Parallax effect for hero section
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const hero = document.querySelector('.hero');
        if (hero) {
            const rate = scrolled * -0.5;
            hero.style.transform = `translateY(${rate}px)`;
        }
    });

    // Loading animation for page elements
    const loadingElements = document.querySelectorAll('.room-card, .service-card');
    loadingElements.forEach((element, index) => {
        setTimeout(() => {
            element.classList.add('loading');
        }, index * 100);
    });

    // Stats counter animation
    const stats = document.querySelectorAll('.stat h3');
    const statsObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = entry.target;
                const finalNumber = parseInt(target.textContent.replace(/\D/g, ''));
                const suffix = target.textContent.replace(/[0-9]/g, '');
                
                let current = 0;
                const increment = finalNumber / 50;
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= finalNumber) {
                        current = finalNumber;
                        clearInterval(timer);
                    }
                    target.textContent = Math.floor(current) + suffix;
                }, 30);
                
                statsObserver.unobserve(target);
            }
        });
    }, { threshold: 0.5 });

    stats.forEach(stat => {
        statsObserver.observe(stat);
    });

    // Image lazy loading fallback
    const images = document.querySelectorAll('img');
    images.forEach(img => {
        img.addEventListener('error', function() {
            if (!this.src.includes('placeholder')) {
                const onerrorAttr = this.getAttribute('onerror');
                if (onerrorAttr && onerrorAttr.includes("'")) {
                    this.src = onerrorAttr.match(/'([^']+)'/)[1];
                }
            }
        });
    });

    // Keyboard navigation support
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && navMenu.classList.contains('active')) {
            navMenu.classList.remove('active');
            const spans = navToggle.querySelectorAll('span');
            spans.forEach(span => {
                span.style.transform = 'none';
                span.style.opacity = '1';
            });
        }
    });

    // Print styles
    window.addEventListener('beforeprint', function() {
        document.body.classList.add('printing');
    });

    window.addEventListener('afterprint', function() {
        document.body.classList.remove('printing');
    });

    // Floating Action Button
    const floatingBtn = document.getElementById('floatingBtn');
    const floatingMenu = document.getElementById('floatingMenu');

    if (floatingBtn && floatingMenu) {
        floatingBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            floatingBtn.classList.toggle('active');
            floatingMenu.classList.toggle('active');
        });

        // Close floating menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!floatingBtn.contains(e.target) && !floatingMenu.contains(e.target)) {
                floatingBtn.classList.remove('active');
                floatingMenu.classList.remove('active');
            }
        });

        // Close floating menu when clicking on a link
        const floatingLinks = floatingMenu.querySelectorAll('.floating-link');
        floatingLinks.forEach(link => {
            link.addEventListener('click', function() {
                floatingBtn.classList.remove('active');
                floatingMenu.classList.remove('active');
            });
        });

        // Close floating menu on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && floatingMenu.classList.contains('active')) {
                floatingBtn.classList.remove('active');
                floatingMenu.classList.remove('active');
            }
        });
    }

    console.log('Aurora Hotel website loaded successfully! 🏨✨');
});