<footer>
    <section class="section-footer tp_footer">
        <div class="container">
            <div class="row">
                <div class="footer-left col-12 col-lg-6">
                    <div class="footer-left-logo">
                        <a href="/">
                            <img class="lazyload" data-sizes="auto" src="../assets/image/png.png" alt="logo">
                        </a>
                    </div>
                    <div class="footer-left-info">Nỗ lực nghiên cứu những tập quán, thói quen sinh hoạt của người
                        dân Việt Nam trong cuộc sống tại các đô thị, Libra Furniture đã cho ra đời một phương pháp
                        tiếp cận chuẩn mực, khoa học để giải quyết hết những mối lo ngại của bạn khi về nhà mới.
                        Luôn sẵn sàng giúp đỡ bạn với đội ngũ kiến trúc sư uy tín và tận tâm phục vụ.</div>
                    <div class="footer-left-contact">
                        <div class="footer-left-address">
                            <a href="javascript:" class="footer-left-icon">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </a>
                            <a href="javasript:" class="footer-left-content">Tầng 2, cao đẳng fpoly, trịnh văn bô, bắc từ liêm, Hà Nội</a>
                        </div>
                        <div class="footer-left-hotline">
                            <a href="javascript:" class="footer-left-icon">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </a>
                            <a href="tel:1900.2812" class="footer-left-content"> 0922222004 </a>
                        </div>
                        <div class="footer-left-mail">
                            <a href="javascript:" class="footer-left-icon">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </a><a href="mailto:contact@nhanh.vn" class="footer-left-content">
                                phamsyhuan0@gmail.com </a>
                        </div>
                    </div>
                </div>
                <div class="footer-middle col-12 col-lg-3">
                    <h5 class="footer-middle-label tp_title">Thông tin</h5>
                    <div class="footer-middle-nav">
                        <ul class="nav nav-ul-footer">
                            <li class="nav-item nav-item-footer"><a href="/" class="nav-link nav-link-footer">Trang
                                    chủ</a></li>
                            <li class="nav-item nav-item-footer"><a href="#" class="nav-link nav-link-footer">Giới
                                    thiệu</a></li>
                            <li class="nav-item nav-item-footer"><a href="/product" class="nav-link nav-link-footer">Sản phẩm</a></li>
                            <li class="nav-item nav-item-footer"><a href="/news" class="nav-link nav-link-footer">Tin tức</a></li>
                            <li class="nav-item nav-item-footer"><a href="/lien-he" class="nav-link nav-link-footer">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-right col-12 col-lg-3">
                    <div class="footer-right-social">
                        <a href="https://www.facebook.com/phamsyhuan2004" class="footer-right-icon icon-facebook" target="_blank" rel="nofollow">
                            <span><i class="fa fa-facebook" aria-hidden="true"></i></span>
                        </a>
                        <a href="https://twitter.com/" class="footer-right-icon icon-twitter" target="_blank" rel="nofollow">
                            <span><i class="fa fa-twitter" aria-hidden="true"></i></span>
                        </a>
                        <a href="https://www.google.com/" class="footer-right-icon icon-google-p" target="_blank" rel="nofollow">
                            <span><i class="fa fa-google-plus" aria-hidden="true"></i></span>
                        </a>
                        <a href="https://www.youtube.com/@phamsyhuan" class="footer-right-icon icon-youtube" target="_blank" rel="nofollow">
                            <span><i class="fa fa-youtube" aria-hidden="true"></i></span>
                        </a>
                        <a href="https://www.instagram.com/_phamsyhuan/" class="footer-right-icon icon-instagram" target="_blank" rel="nofollow">
                            <span><i class="fa fa-instagram" aria-hidden="true"></i></span>
                        </a>
                    </div>
                    <div class="footer-right-fanpage">
                        <div class="fb-page" data-href="https://www.facebook.com/phamsyhuan2004" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false">
                            <div class="fb-xfbml-parse-ignore">
                                <blockquote cite="https://www.facebook.com/phamsyhuan2004">
                                    <a href="https://www.facebook.com/phamsyhuan2004" target="_blank" rel="nofollow">Facebook</a>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</footer>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
    const ctx = document.getElementById("myChart");

    new Chart(ctx, {
        type: "bar",
        data: {
            labels: ["Sản phẩm","Khách hàng","Bình luận","Đơn hàng"],
            datasets: [{
                label: "Thống kê chung cửa hàng",
                data: data1,
                borderWidth: 1,
                backgroundColor: [
                    "rgb(255, 99, 132)",
                    "rgb(75, 192, 192)",
                    "rgb(255, 205, 86)",
                    "rgb(201, 203, 207)",
                ],
            }, ],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                },
            },
        },
    });

    const ctx2 = document.getElementById("myChart2");

    new Chart(ctx2, {
        type: "line",
        data: {
            labels: ["Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8"],
            datasets: [{
                label: "Doanh số cửa hàng 5 tháng gần nhất",
                data: [
                    12,
                    12,
                    13,
                    5,
                    17
                ],
                borderWidth: 2,
                borderColor: "rgb(75, 192, 192)",
                tension: 0.1,
                backgroundColor: [
                    "rgb(255, 99, 132)",
                    "rgb(75, 192, 192)",
                    "rgb(255, 205, 86)",
                    "rgb(201, 203, 207)",
                ],
            }, ],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                },
            },
        },
    });
</script>