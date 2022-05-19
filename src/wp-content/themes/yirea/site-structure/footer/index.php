<footer id="footer" class="footer-section">
    <div class="container">
        <div class="footer-content  py-2 py-md-4">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 mb-50">
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
                        <div class="single-cta pb-lg-0 pb-2 ">

                            <div class="cta-text max-w-[300px]">
                                <span class="font-regular"><i class="fas fa-map-marker-alt"></i> <a
                                        href="https://goo.gl/maps/TM41WRWrdPKHaVKD8" target="_blank"> 20, Đường 20, KDC
                                        Him
                                        Lam, P.Tân Hưng, Quận 7, Thành phố Hồ Chí
                                        Minh</a></span>
                            </div>
                        </div>
                        <div class="single-cta pb-lg-0 pb-2">
                            <div class="cta-text">
                                <span class="font-regular"> <i class="fas fa-phone"></i> <a href="tel: 0911779333">091
                                        177 933</a></span>
                            </div>
                        </div>
                        <div class="single-cta pb-lg-0 pb-2">

                            <div class="cta-text">
                                <span class="font-regular"> <i class="far fa-envelope-open"></i>
                                    email@truyenthongdoson.com</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12  mb-30">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Liên Kết Nhanh</h3>
                        </div>
                        <?php if( have_rows('menu_main' ,'option') ): ?>
                        <ul>
                            <?php while( have_rows('menu_main' ,'option') ): the_row(); 
                                        $menu_name = get_sub_field('menu_name');
                                        $menu_link = get_sub_field('menu_link');
                                ?>
                            <li>
                                <a href="<?php echo $menu_link; ?>"><?php echo $menu_name; ?></a>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12  mb-2">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Đăng Ký</h3>
                        </div>
                        <div class="footer-text pb-2">
                            <p class="text-yellow sub-heading">Đừng bỏ lỡ đăng ký nguồn cấp dữ liệu mới của chúng tôi,
                                vui
                                lòng điền vào biểu mẫu bên dưới.</p>
                        </div>
                        <div class="subscribe-form">
                            <form action="#">
                                <input type="text" placeholder="Email Address">
                                <button><i class="fab fa-telegram-plane"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="footer-social-icon mt-[20px] flex items-center">
                        <span>Theo dõi chúng tôi</span>
                        <div class="ml-[20px]">
                            <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                            <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                            <a href="#"><i class="fab fa-brands fa-tiktok bg-gray-700"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram bg-red-500 "></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="copyright-text">
                        <p>Copyright &copy; 2022, All Right Reserved <a href="https:truyenthongdoson.vn">Doson</a></p>
                    </div>
                </div>
                <!-- <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                    <div class="footer-menu">
                        <ul>
                            <li><a href="#">Trang chủ</a></li>
                            <li><a href="#">Giới thiệu</a></li>
                            <li><a href="#">Liên hệ</a></li>
                            <li><a href="#">Dịch vụ</a></li>
                            <li><a href="#">Tin tức</a></li>
                        </ul>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</footer>