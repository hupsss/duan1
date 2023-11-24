function toggleProductIntro() {
    var introContent = document.querySelector('.pview-intro-content');

    // Kiểm tra xem lớp 'hide' đã được thêm vào hay chưa
    var isHidden = introContent.classList.contains('hide');

    // Nếu đã ẩn, hiển thị; nếu đã hiển thị, ẩn đi
    if (isHidden) {
        introContent.style.display = 'block';
        introContent.classList.remove('hide');
    } else {
        introContent.style.display = 'none';
        introContent.classList.add('hide');
    }
}
