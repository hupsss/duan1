var countItems = document.getElementById('cart');

var vao = document.querySelector('.cart');


countItems.addEventListener('mouseenter', () => {
    vao.style.display = "block";
});

countItems.addEventListener('mouseleave', () => {
    vao.style.display = "none"; // Sửa lại thành "none"
});