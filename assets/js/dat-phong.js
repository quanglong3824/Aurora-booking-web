// assets/js/dat-phong.js

document.addEventListener('DOMContentLoaded', function() {
    const checkInDate = document.getElementById('checkInDate');
    const checkOutDate = document.getElementById('checkOutDate');

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
});