<footer id="footer" class="footer-section">
    <div class="container">
        <div class="footer-cta py-2 py-md-4 ">
            <div class="row">
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta pb-lg-0 pb-2">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="cta-text">
                            <h4>Địa chỉ</h4>
                            <span class="font-regular"><a href="https://goo.gl/maps/TM41WRWrdPKHaVKD8"
                                    target="_blank">20, Đường 20, KDC Him Lam, P.Tân Hưng, Quận 7, Thành phố Hồ Chí
                                    Minh</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta pb-lg-0 pb-2">
                        <i class="fas fa-phone"></i>
                        <div class="cta-text">
                            <h4>Gọi ngay</h4>
                            <span class="font-regular"><a href="tel: 0911779333">091 177 933</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta pb-lg-0 pb-2">
                        <i class="far fa-envelope-open"></i>
                        <div class="cta-text">
                            <h4>Gửi ngay</h4>
                            <span class="font-regular">email@truyenthongdoson.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-content  py-2 py-md-4">
            <div class="row">
                <div class="col-xl-4 col-lg-4 mb-50">
                    <div class="footer-widget custom pb-lg-0 pb-4">
                        <div class="footer-logo">
                            <a href="index.html"> <?php
                                $image = get_field('footer_logo', 'option');
                                $size = 'full';
                                if ($image) {
                                    echo wp_get_attachment_image($image, $size, "", array("class" => "img-fluid"));
                                } else {
                            } ?>
                            </a>
                            <div class="footer-text">
                                <p class="text-yellow">Do The Right Thing</p>
                            </div>
                        </div>
                        <div class="footer-social-icon">
                            <span>Theo dõi chúng tôi</span>
                            <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                            <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Liên Kết Nhanh</h3>
                        </div>
                        <ul>
                            <li><a href="#">Trang chủ</a></li>
                            <li><a href="#">Giới thiệu</a></li>
                            <li><a href="#">Dịch vụ</a></li>
                            <li><a href="#">Liên hệ</a></li>
                            <li><a href="#">Trang chủ</a></li>
                            <li><a href="#">Giới thiệu</a></li>
                            <li><a href="#">Dịch vụ</a></li>
                            <li><a href="#">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-2">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Đăng Ký</h3>
                        </div>
                        <div class="footer-text pb-2">
                            <p class="text-yellow caption">Đừng bỏ lỡ đăng ký nguồn cấp dữ liệu mới của chúng tôi, vui
                                lòng điền vào biểu mẫu bên dưới.</p>
                        </div>
                        <div class="subscribe-form">
                            <form action="#">
                                <input type="text" placeholder="Email Address">
                                <button><i class="fab fa-telegram-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                    <div class="copyright-text">
                        <p>Copyright &copy; 2022, All Right Reserved <a href="https:truyenthongdoson.vn">Doson</a></p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                    <div class="footer-menu">
                        <ul>
                            <li><a href="#">Trang chủ</a></li>
                            <li><a href="#">Giới thiệu</a></li>
                            <li><a href="#">Liên hệ</a></li>
                            <li><a href="#">Dịch vụ</a></li>
                            <li><a href="#">Tin tức</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>