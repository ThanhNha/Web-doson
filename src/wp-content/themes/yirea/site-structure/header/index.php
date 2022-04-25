<header id="header">
    <div class="navigation-wrap bg-blur start-header start-style border border-gradient">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="/">
                            <?php
								$image_logo = get_field('header_logo', 'option'); 
								$size = 'full'; 
								if ($image_logo) {
									echo wp_get_attachment_image($image_logo, $size , "", array( "class" => "img-logo" ));
								} 
							?>
                        </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto py-4 py-md-0">
                                <li class="nav-item pl-4 pl-md-2 pl-lg-4 py-md-0 py-2 ml-0 ml-md-4 active">
                                    <a class="nav-link sub-heading body-text">Trang Chủ</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-2 pl-lg-4 py-md-0 py-2 ml-0 ml-md-4">
                                    <a class="nav-link sub-heading body-text " href="#">Giới Thiệu</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-2 pl-lg-4 py-md-0 py-2 ml-0 ml-md-4">
                                    <a class="nav-link sub-heading body-text dropdown-toggle" data-toggle="dropdown"
                                        href="#" role="button" aria-haspopup="true" aria-expanded="false" href="#">Dịch
                                        Vụ</a>
                                    <div class="icon-down ml-2"><svg width="10" height="6" viewBox="0 0 10 6"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.84016 0.540538L9.5126 0.210698C9.40951 0.107689 9.27235 0.0509402 9.12577 0.0509402C8.97926 0.0509402 8.84194 0.107689 8.73885 0.210698L5.00224 3.94748L1.26131 0.206551C1.15838 0.103542 1.02107 0.046875 0.87456 0.046875C0.728055 0.046875 0.590655 0.103542 0.487646 0.206551L0.160001 0.534359C-0.0533338 0.747531 -0.0533338 1.09477 0.160001 1.30794L4.61402 5.77798C4.71695 5.88091 4.8541 5.95343 5.00191 5.95343H5.00362C5.1502 5.95343 5.28736 5.88082 5.39029 5.77798L9.84016 1.32006C9.94325 1.21713 9.99984 1.07583 10 0.929321C10 0.782735 9.94325 0.643384 9.84016 0.540538Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </div>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                    </div>
                                </li>
                                <li class="nav-item pl-4 pl-md-2 pl-lg-4 py-md-0 py-2 ml-0 ml-md-4">
                                    <a class="nav-link sub-heading body-text ">Tin Tức</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-2 pl-lg-4 py-md-0 py-2 ml-0 ml-md-4">
                                    <a class="nav-link sub-heading body-text " href="#">Liên Hệ</a>
                                </li>
                            </ul>
                        </div>

                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>