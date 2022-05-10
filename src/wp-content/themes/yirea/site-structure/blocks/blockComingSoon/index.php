<section class="comingsoon">
    <div class="mobile-container">
        <div>
            <section class="hero-banner">
                <div class="logo-wrapper">
                    <?php
                        $image_logo = get_field('header_logo', 'option'); 
                        $size = 'full'; 
                        if ($image_logo) {
                            echo wp_get_attachment_image($image_logo, $size , "", array( "class" => "img-logo" ));
                        } 
                    ?>
                </div>
                <div class="hero-image"></div>
            </section>
        </div>
        <div class="wrapper__main">
            <article class="text-info">
                <h2>We're</h2>
                <h2>Coming<br>Soon</h2>
                <p>Xin chào các bạn. Chúng tôi đang trong quá trình xây dựng website cho mình. Chúng tôi sẽ sớm quay trở
                    lại với diện mạo mới. Hãy để lại đây email của bạn chúng tôi sẽ liên hệ sau vài phút.</p>
                <section class="email-signup">
                    <?php echo do_shortcode('[formidable id=2]'); ?>
                </section>
            </article>
        </div>
    </div>
    <div class="hero-image-desktop">
        <?php 
            $image = get_field('logo');
            $size = 'full'; // (thumbnail, medium, large, full or custom size)
            if( $image ) {
                echo wp_get_attachment_image( $image, $size );
            }
        ?>
    </div>
</section>