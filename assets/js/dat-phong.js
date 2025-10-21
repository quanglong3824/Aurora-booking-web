// Booking Page JavaScript - Aurora Hotel

document.addEventListener('DOMContentLoaded', function() {
    // Initialize booking form
    initBookingForm();
    initPriceCalculation();
    initFormValidation();
    initModalHandlers();
    initDateValidation();
});

// Date validation (existing functionality)
function initDateValidation() {
    const checkInDate = document.getElementById('checkin') || document.getElementById('checkInDate');
    const checkOutDate = document.getElementById('checkout') || document.getElementById('checkOutDate');

    // Đặt ngày tối thiểu cho ngày nhận phòng là ngày hiện tại
    const today = new Date();
    const todayString = today.toISOString().split('T')[0];
    if (checkInDate) {
        checkInDate.setAttribute('min', todayString);

        checkInDate.addEventListener('change', function() {
            // Đặt ngày tối thiểu cho ngày trả phòng là ngày sau ngày nhận phòng
            const checkInValue = new Date(this.value);
            checkInValue.setDate(checkInValue.getDate() + 1);
            const minCheckOutDate = checkInValue.toISOString().split('T')[0];
            if (checkOutDate) {
                checkOutDate.setAttribute('min', minCheckOutDate);
                // Nếu ngày trả phòng hiện tại nhỏ hơn ngày tối thiểu mới, cập nhật nó
                if (checkOutDate.value < minCheckOutDate) {
                    checkOutDate.value = minCheckOutDate;
                }
            }
        });
    }

    // Khởi tạo ngày trả phòng tối thiểu khi tải trang (nếu ngày nhận phòng đã có giá trị)
    if (checkInDate && checkInDate.value) {
        const checkInValue = new Date(checkInDate.value);
        checkInValue.setDate(checkInValue.getDate() + 1);
        const minCheckOutDate = checkInValue.toISOString().split('T')[0];
        if (checkOutDate) {
            checkOutDate.setAttribute('min', minCheckOutDate);
        }
    }
}

// Booking form step management
let currentStep = 1;
const totalSteps = 4;

function initBookingForm() {
    // Show first step
    showStep(1);
    
    // Handle next/previous buttons
    const nextButtons = document.querySelectorAll('.btn-next');
    const prevButtons = document.querySelectorAll('.btn-prev');
    const submitButton = document.querySelector('.btn-submit');
    
    nextButtons.forEach(button => {
        button.addEventListener('click', function() {
            if (validateCurrentStep()) {
                nextStep();
            }
        });
    });
    
    prevButtons.forEach(button => {
        button.addEventListener('click', function() {
            prevStep();
        });
    });
    
    if (submitButton) {
        submitButton.addEventListener('click', function(e) {
            e.preventDefault();
            if (validateCurrentStep()) {
                submitBooking();
            }
        });
    }
}

function showStep(step) {
    // Hide all steps
    const steps = document.querySelectorAll('.booking-step');
    steps.forEach(stepEl => {
        stepEl.classList.remove('active');
    });
    
    // Show current step
    const currentStepEl = document.querySelector(`#step-${step}`);
    if (currentStepEl) {
        currentStepEl.classList.add('active');
    }
    
    // Update step indicator if exists
    updateStepIndicator(step);
    
    // Update sidebar info
    updateSidebarInfo();
}

function nextStep() {
    if (currentStep < totalSteps) {
        currentStep++;
        showStep(currentStep);
    }
}

function prevStep() {
    if (currentStep > 1) {
        currentStep--;
        showStep(currentStep);
    }
}

function updateStepIndicator(step) {
    const indicators = document.querySelectorAll('.step-indicator');
    indicators.forEach((indicator, index) => {
        if (index + 1 <= step) {
            indicator.classList.add('completed');
        } else {
            indicator.classList.remove('completed');
        }
        
        if (index + 1 === step) {
            indicator.classList.add('active');
        } else {
            indicator.classList.remove('active');
        }
    });
}

// Price calculation
function initPriceCalculation() {
    // Base room price (this would normally come from database)
    const basePrice = 1500000; // 1,500,000 VND per night
    
    // Service prices
    const servicePrices = {
        'breakfast': 200000,
        'spa': 500000,
        'airport-transfer': 300000,
        'late-checkout': 150000,
        'room-service': 100000,
        'laundry': 80000
    };
    
    // Listen for changes in form inputs
    const checkInInput = document.getElementById('checkin');
    const checkOutInput = document.getElementById('checkout');
    const guestsInput = document.getElementById('guests');
    const serviceCheckboxes = document.querySelectorAll('input[name="services[]"]');
    
    if (checkInInput && checkOutInput) {
        checkInInput.addEventListener('change', calculatePrice);
        checkOutInput.addEventListener('change', calculatePrice);
    }
    
    if (guestsInput) {
        guestsInput.addEventListener('change', calculatePrice);
    }
    
    serviceCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', calculatePrice);
    });
    
    function calculatePrice() {
        let totalPrice = 0;
        let nights = 0;
        
        // Calculate nights
        if (checkInInput && checkOutInput && checkInInput.value && checkOutInput.value) {
            const checkIn = new Date(checkInInput.value);
            const checkOut = new Date(checkOutInput.value);
            const timeDiff = checkOut.getTime() - checkIn.getTime();
            nights = Math.ceil(timeDiff / (1000 * 3600 * 24));
            
            if (nights > 0) {
                totalPrice = basePrice * nights;
            }
        }
        
        // Add service prices
        let servicesTotal = 0;
        serviceCheckboxes.forEach(checkbox => {
            if (checkbox.checked && servicePrices[checkbox.value]) {
                servicesTotal += servicePrices[checkbox.value];
            }
        });
        
        totalPrice += servicesTotal;
        
        // Update price display
        updatePriceDisplay(basePrice, nights, servicesTotal, totalPrice);
    }
    
    function updatePriceDisplay(basePrice, nights, servicesTotal, totalPrice) {
        // Update sidebar price breakdown
        const roomPriceEl = document.querySelector('.price-item.room-price .price');
        const servicesPriceEl = document.querySelector('.price-item.services-price .price');
        const totalPriceEl = document.querySelector('.price-total .total-amount');
        
        if (roomPriceEl && nights > 0) {
            roomPriceEl.textContent = formatPrice(basePrice * nights);
        }
        
        if (servicesPriceEl) {
            servicesPriceEl.textContent = formatPrice(servicesTotal);
        }
        
        if (totalPriceEl) {
            totalPriceEl.textContent = formatPrice(totalPrice);
        }
        
        // Update booking summary in step 4
        updateBookingSummary(basePrice, nights, servicesTotal, totalPrice);
    }
    
    // Initial calculation
    calculatePrice();
}

function updateBookingSummary(basePrice, nights, servicesTotal, totalPrice) {
    const summaryItems = document.querySelectorAll('.booking-summary .summary-item');
    const summaryTotal = document.querySelector('.booking-summary .summary-total .total-amount');
    
    // Update individual items
    summaryItems.forEach(item => {
        const label = item.querySelector('.item-label');
        const price = item.querySelector('.item-price');
        
        if (label && price) {
            if (label.textContent.includes('Phòng')) {
                price.textContent = formatPrice(basePrice * nights);
            } else if (label.textContent.includes('Dịch vụ')) {
                price.textContent = formatPrice(servicesTotal);
            }
        }
    });
    
    // Update total
    if (summaryTotal) {
        summaryTotal.textContent = formatPrice(totalPrice);
    }
}

function updateSidebarInfo() {
    // Update sidebar with current form data
    const checkIn = document.getElementById('checkin')?.value;
    const checkOut = document.getElementById('checkout')?.value;
    const guests = document.getElementById('guests')?.value;
    const roomType = document.getElementById('room-type')?.value;
    
    // Update info items
    const infoItems = document.querySelectorAll('.info-item');
    infoItems.forEach(item => {
        const label = item.querySelector('.label');
        const value = item.querySelector('.value');
        
        if (label && value) {
            if (label.textContent.includes('Nhận phòng') && checkIn) {
                value.textContent = formatDate(checkIn);
            } else if (label.textContent.includes('Trả phòng') && checkOut) {
                value.textContent = formatDate(checkOut);
            } else if (label.textContent.includes('Số khách') && guests) {
                value.textContent = guests + ' khách';
            } else if (label.textContent.includes('Loại phòng') && roomType) {
                value.textContent = getRoomTypeName(roomType);
            }
        }
    });
}

function formatDate(dateString) {
    const date = new Date(dateString);
    return date.toLocaleDateString('vi-VN', {
        weekday: 'long',
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    });
}

function getRoomTypeName(roomType) {
    const roomTypes = {
        'standard': 'Phòng Tiêu Chuẩn',
        'deluxe': 'Phòng Deluxe',
        'suite': 'Phòng Suite',
        'presidential': 'Phòng Tổng Thống'
    };
    return roomTypes[roomType] || roomType;
}

// Form validation
function initFormValidation() {
    const form = document.getElementById('booking-form');
    if (!form) return;
    
    // Add real-time validation
    const inputs = form.querySelectorAll('input, select, textarea');
    inputs.forEach(input => {
        input.addEventListener('blur', function() {
            validateField(this);
        });
        
        input.addEventListener('input', function() {
            clearFieldError(this);
        });
    });
}

function validateCurrentStep() {
    const currentStepEl = document.querySelector(`#step-${currentStep}`);
    if (!currentStepEl) return true;
    
    const inputs = currentStepEl.querySelectorAll('input[required], select[required], textarea[required]');
    let isValid = true;
    
    inputs.forEach(input => {
        if (!validateField(input)) {
            isValid = false;
        }
    });
    
    // Additional validations for specific steps
    if (currentStep === 1) {
        isValid = validateBookingInfo() && isValid;
    } else if (currentStep === 2) {
        isValid = validateCustomerInfo() && isValid;
    } else if (currentStep === 4) {
        isValid = validatePaymentInfo() && isValid;
    }
    
    return isValid;
}

function validateField(field) {
    const value = field.value.trim();
    let isValid = true;
    let errorMessage = '';
    
    // Clear previous errors
    clearFieldError(field);
    
    // Required field validation
    if (field.hasAttribute('required') && !value) {
        errorMessage = 'Trường này là bắt buộc';
        isValid = false;
    }
    
    // Specific field validations
    if (value && field.type === 'email') {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(value)) {
            errorMessage = 'Email không hợp lệ';
            isValid = false;
        }
    }
    
    if (value && field.type === 'tel') {
        const phoneRegex = /^[0-9+\-\s()]+$/;
        if (!phoneRegex.test(value) || value.length < 10) {
            errorMessage = 'Số điện thoại không hợp lệ';
            isValid = false;
        }
    }
    
    if (value && field.name === 'id-number') {
        if (value.length < 9 || value.length > 12) {
            errorMessage = 'Số CMND/CCCD không hợp lệ';
            isValid = false;
        }
    }
    
    // Show error if invalid
    if (!isValid) {
        showFieldError(field, errorMessage);
    }
    
    return isValid;
}

function validateBookingInfo() {
    const checkIn = document.getElementById('checkin');
    const checkOut = document.getElementById('checkout');
    let isValid = true;
    
    if (checkIn && checkOut && checkIn.value && checkOut.value) {
        const checkInDate = new Date(checkIn.value);
        const checkOutDate = new Date(checkOut.value);
        const today = new Date();
        today.setHours(0, 0, 0, 0);
        
        if (checkInDate < today) {
            showFieldError(checkIn, 'Ngày nhận phòng không thể là ngày trong quá khứ');
            isValid = false;
        }
        
        if (checkOutDate <= checkInDate) {
            showFieldError(checkOut, 'Ngày trả phòng phải sau ngày nhận phòng');
            isValid = false;
        }
    }
    
    return isValid;
}

function validateCustomerInfo() {
    // Additional customer info validations can be added here
    return true;
}

function validatePaymentInfo() {
    const paymentMethod = document.querySelector('input[name="payment-method"]:checked');
    const termsCheckbox = document.getElementById('terms');
    let isValid = true;
    
    if (!paymentMethod) {
        showError('Vui lòng chọn phương thức thanh toán');
        isValid = false;
    }
    
    if (termsCheckbox && !termsCheckbox.checked) {
        showFieldError(termsCheckbox, 'Bạn phải đồng ý với điều khoản và điều kiện');
        isValid = false;
    }
    
    return isValid;
}

function showFieldError(field, message) {
    clearFieldError(field);
    
    field.classList.add('error');
    
    const errorEl = document.createElement('div');
    errorEl.className = 'field-error';
    errorEl.textContent = message;
    
    field.parentNode.appendChild(errorEl);
}

function clearFieldError(field) {
    field.classList.remove('error');
    
    const existingError = field.parentNode.querySelector('.field-error');
    if (existingError) {
        existingError.remove();
    }
}

function showError(message) {
    // Create or update error message display
    let errorContainer = document.querySelector('.error-container');
    if (!errorContainer) {
        errorContainer = document.createElement('div');
        errorContainer.className = 'error-container';
        const currentStepEl = document.querySelector(`#step-${currentStep}`);
        if (currentStepEl) {
            currentStepEl.insertBefore(errorContainer, currentStepEl.firstChild);
        }
    }
    
    errorContainer.innerHTML = `
        <div class="alert alert-danger">
            <i class="fas fa-exclamation-triangle"></i>
            ${message}
        </div>
    `;
    
    // Auto-hide after 5 seconds
    setTimeout(() => {
        if (errorContainer) {
            errorContainer.remove();
        }
    }, 5000);
}

// Modal handlers
function initModalHandlers() {
    const modal = document.getElementById('success-modal');
    const closeButtons = document.querySelectorAll('.modal .close, .modal .btn-secondary');
    
    closeButtons.forEach(button => {
        button.addEventListener('click', function() {
            closeModal();
        });
    });
    
    // Close modal when clicking outside
    window.addEventListener('click', function(event) {
        if (event.target === modal) {
            closeModal();
        }
    });
}

function showModal() {
    const modal = document.getElementById('success-modal');
    if (modal) {
        modal.style.display = 'block';
        document.body.style.overflow = 'hidden';
    }
}

function closeModal() {
    const modal = document.getElementById('success-modal');
    if (modal) {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto';
    }
}

// Submit booking
function submitBooking() {
    const form = document.getElementById('booking-form');
    if (!form) return;
    
    // Show loading state
    const submitButton = document.querySelector('.btn-submit');
    if (submitButton) {
        submitButton.disabled = true;
        submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Đang xử lý...';
    }
    
    // Collect form data
    const formData = new FormData(form);
    
    // Add selected services
    const selectedServices = [];
    const serviceCheckboxes = document.querySelectorAll('input[name="services[]"]:checked');
    serviceCheckboxes.forEach(checkbox => {
        selectedServices.push(checkbox.value);
    });
    formData.set('services', JSON.stringify(selectedServices));
    
    // Simulate API call (replace with actual booking submission)
    setTimeout(() => {
        // Generate booking code
        const bookingCode = 'AUR' + Date.now().toString().slice(-6);
        
        // Update modal with booking code
        const bookingCodeEl = document.querySelector('.booking-code strong');
        if (bookingCodeEl) {
            bookingCodeEl.textContent = bookingCode;
        }
        
        // Reset submit button
        if (submitButton) {
            submitButton.disabled = false;
            submitButton.innerHTML = 'Xác nhận đặt phòng';
        }
        
        // Show success modal
        showModal();
        
        // Optional: Send confirmation email, save to database, etc.
        console.log('Booking submitted:', Object.fromEntries(formData));
        
    }, 2000);
}

// Utility functions
function formatPrice(price) {
    return new Intl.NumberFormat('vi-VN', {
        style: 'currency',
        currency: 'VND'
    }).format(price);
}

// Add error styles
const errorStyles = `
    .form-group input.error,
    .form-group select.error,
    .form-group textarea.error {
        border-color: #dc3545;
        box-shadow: 0 0 0 3px rgba(220, 53, 69, 0.1);
    }
    
    .field-error {
        color: #dc3545;
        font-size: 0.875rem;
        margin-top: 5px;
        display: flex;
        align-items: center;
        gap: 5px;
    }
    
    .field-error::before {
        content: "⚠";
        font-size: 1rem;
    }
    
    .error-container {
        margin-bottom: 20px;
    }
    
    .alert {
        padding: 15px;
        border-radius: 10px;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .alert-danger {
        background-color: #f8d7da;
        border: 1px solid #f5c6cb;
        color: #721c24;
    }
`;

// Inject error styles
const styleSheet = document.createElement('style');
styleSheet.textContent = errorStyles;
document.head.appendChild(styleSheet);