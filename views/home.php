<main>
    <!-- hero slider area start -->
    <section class="slider-area">
        <div class="hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style">
            <!-- single slider item start -->
            <div class="hero-single-slide hero-overlay">
                <div class="hero-slider-item bg-img" data-bg="./views/assets/img/banner/banner-6.jpg">
                    <div class="container">
                        <div class="row mt-10">
                            <div class="col-md-12">
                                <div class="hero-slider-content slide-1">
                                    <h2 class="slide-title ">Iphone 15 Pro Max <span>Collection</span></h2>
                                    <h4 class="slide-desc ">Designer Jewelry Necklaces-Bracelets-Earings</h4>
                                    <a href="index.php?act=chitietsanpham&ma_san_pham=22" class="btn btn-hero">Xem Ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single slider item start -->

            <!-- single slider item start -->
            <div class="hero-single-slide hero-overlay">
                <div class="hero-slider-item bg-img" data-bg="./views/assets/img/banner/banner-8.jpg">
                </div>
            </div>
            <!-- single slider item start -->

            <!-- single slider item start -->
            <div class="hero-single-slide hero-overlay">
                <div class="hero-slider-item bg-img" data-bg="./views/assets/img/banner/banner-9.jpg">
                </div>
            </div>
            <!-- single slider item end -->
        </div>
    </section>
    <!-- hero slider area end -->
    <!-- service policy area start -->
    <div class="service-policy section-padding">
        <div class="container">
            <div class="row mtn-30">
                <div class="col-sm-6 col-lg-3">
                    <div class="policy-item">
                        <div class="policy-icon">
                            <i class="pe-7s-plane"></i>
                        </div>
                        <div class="policy-content">
                            <h6>Free Shipping</h6>
                            <p>Free shipping all order</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="policy-item">
                        <div class="policy-icon">
                            <i class="pe-7s-help2"></i>
                        </div>
                        <div class="policy-content">
                            <h6>Support 24/7</h6>
                            <p>Support 24 hours a day</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="policy-item">
                        <div class="policy-icon">
                            <i class="pe-7s-back"></i>
                        </div>
                        <div class="policy-content">
                            <h6>Money Return</h6>
                            <p>30 days for free return</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="policy-item">
                        <div class="policy-icon">
                            <i class="pe-7s-credit"></i>
                        </div>
                        <div class="policy-content">
                            <h6>100% Payment Secure</h6>
                            <p>We ensure secure payment</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service policy area end -->

    <!-- banner statistics area start -->
    <div class="banner-statistics-area">
        <div class="container">
            <div class="row row-20 mtn-20">
                <div class="col-sm-6">
                    <figure class="banner-statistics mt-20">
                        <a href="index.php?act=shopiphone">
                            <img src="./views/assets/img/banner/banner-12.png" alt="product banner">
                        </a>

                    </figure>
                </div>
                <div class="col-sm-6">
                    <figure class="banner-statistics mt-20">
                        <a href="index.php?act=shopiphone">
                            <img src="./views/assets/img/banner/banner-2.jpg" alt="product banner">
                        </a>

                    </figure>
                </div>
                <div class="col-sm-6">
                    <figure class="banner-statistics mt-20">
                        <a href="index.php?act=shopiphone">
                            <img src="./views/assets/img/banner/banner-3.jpg" alt="product banner">
                        </a>

                    </figure>
                </div>
                <div class="col-sm-6">
                    <figure class="banner-statistics mt-20">
                        <a href="index.php?act=shopsamsung">
                            <img src="./views/assets/img/banner/banner-14.jpg" alt="product banner">
                        </a>

                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!-- banner statistics area end -->

    <!-- product area start -->
    <section class="product-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- section title start -->
                    <div class="section-title text-center">
                        <h2 class="title">iphone </h2>
                    </div>
                    <!-- section title start -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-container">
                        <!-- product tab content start -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab1">
                                <div class="product-carousel-4 slick-row-10 slick-arrow-style">

                                    <?php


                                    foreach ($product_iphone as $product) {
                                        extract($product);
                                        $anh = "./uploads/" . $anh_san_pham;
                                        $linksp = "index.php?act=chitietsanpham&ma_san_pham=" . $ma_san_pham;
                                        // Chuyển đổi chuỗi màu sắc thành mảng
                                        $mau_sac_arr = explode(',', $mau_sac);

                                        echo '                      
                                                <div class="product-item">
                                                    <figure class="product-thumb">
                                                        <a href="'.$linksp.'">
                                                            <img class="pri-img" src="' . $anh . '" alt="product">
                                                            <img class="sec-img" src="' . $anh . '" alt="product">
                                                        </a>
                                                        <div class="product-badge">
                                                            <div class="product-label new">
                                                                <span>new</span>
                                                            </div>
                                                        </div>
                                                        <div class="cart-hover">
                                                            <button class="btn btn-cart">add to cart</button>
                                                        </div>
                                                    </figure>
                                                    <div class="product-caption text-center">
                                                        <div class="product-identity">
                                                            <p class="manufacturer-name"><a href="'.$linksp.'">' . $ten_san_pham . '</a></p>
                                                        </div>
                                                        <ul class="color-categories">';

                                                                                    // Đổ danh sách màu sắc
                                                                                    foreach ($mau_sac_arr as $mau) {
                                                                                        echo '<li class="d-inline-block mx-1">
                                                        <a class="color-circle" href="#" style="background-color: ' . trim($mau) . ';" title="' . ucfirst(trim($mau)) . '"></a>
                                                    </li>';
                                                                                    }

                                                                                    echo '</ul>
                                                    <h6 class="product-name">
                                                        <a href="'.$linksp.'">' . $ten_san_pham . '</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="price-regular">' . number_format($gia) . ' đ</span>
                                                    </div>
                                                    </div>
                                                </div>';
                                    }
                                    ?>

                                </div>
                            </div>


                        </div>
                        <!-- product tab content end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product area end -->

   <!-- product area start -->
   <section class="product-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- section title start -->
                    <div class="section-title text-center">
                        <h2 class="title">SamSung </h2>
                    </div>
                    <!-- section title start -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-container">
                        <!-- product tab content start -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab1">
                                <div class="product-carousel-4 slick-row-10 slick-arrow-style">

                                    <?php


                                    foreach ($product_samsung as $product) {
                                        extract($product);
                                        $anh = "./uploads/" . $anh_san_pham;
                                        $linksp = "index.php?act=chitietsanpham&ma_san_pham=" . $ma_san_pham;
                                        // Chuyển đổi chuỗi màu sắc thành mảng
                                        $mau_sac_arr = explode(',', $mau_sac);

                                        echo '                      
                                                <div class="product-item">
                                                    <figure class="product-thumb">
                                                        <a href="'.$linksp.'">
                                                            <img class="pri-img" src="' . $anh . '" alt="product">
                                                            <img class="sec-img" src="' . $anh . '" alt="product">
                                                        </a>
                                                        <div class="product-badge">
                                                            <div class="product-label new">
                                                                <span>new</span>
                                                            </div>
                                                        </div>
                                                        <div class="cart-hover">
                                                            <button class="btn btn-cart">add to cart</button>
                                                        </div>
                                                    </figure>
                                                    <div class="product-caption text-center">
                                                        <div class="product-identity">
                                                            <p class="manufacturer-name"><a href="'.$linksp.'">' . $ten_san_pham . '</a></p>
                                                        </div>
                                                        <ul class="color-categories">';

                                                                                    // Đổ danh sách màu sắc
                                                                                    foreach ($mau_sac_arr as $mau) {
                                                                                        echo '<li class="d-inline-block mx-1">
                                                        <a class="color-circle" href="#" style="background-color: ' . trim($mau) . ';" title="' . ucfirst(trim($mau)) . '"></a>
                                                    </li>';
                                                                                    }

                                                                                    echo '</ul>
                                                    <h6 class="product-name">
                                                        <a href="'.$linksp.'">' . $ten_san_pham . '</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="price-regular">' . number_format($gia) . ' đ</span>
                                                    </div>
                                                    </div>
                                                </div>';
                                    }
                                    ?>

                                </div>
                            </div>


                        </div>
                        <!-- product tab content end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product area end -->

    <!-- featured product area start -->
    <section class="feature-product section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- section title start -->
                    <div class="section-title text-center">
                        <h2 class="title">Sản Phẩm Mới</h2>
                        <p class="sub-title">Sản Phẩm Nổi Bật Mới Ra Mắt</p>
                    </div>
                    <!-- section title start -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-carousel-4_2 slick-row-10 slick-arrow-style">

                        <?php
                        // var_dump($loadall_product_home);
                        foreach ($product_new as $product_new) {
                            extract($product_new);
                            $anh = "./uploads/" . $anh_san_pham;
                            $linksp = "index.php?act=chitietsanpham&ma_san_pham=" . $ma_san_pham;

                            // Chuyển đổi chuỗi màu sắc thành mảng
                            $mau_sac_arr = explode(',', $mau_sac);

                            echo '                      
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="'.$linksp.'">
                                        <img class="pri-img" src="' . $anh . '" alt="product">
                                        <img class="sec-img" src="' . $anh . '" alt="product">
                                    </a>
                                    <div class="product-badge">
                                        <div class="product-label new">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="cart-hover">
                                        <button class="btn btn-cart">add to cart</button>
                                    </div>
                                </figure>
                                <div class="product-caption text-center">
                                    <div class="product-identity">
                                        <p class="manufacturer-name"><a href="'.$linksp.'">' . $ten_san_pham . '</a></p>
                                    </div>
                                    <ul class="color-categories">';

                            // Đổ danh sách màu sắc
                            foreach ($mau_sac_arr as $mau) {
                                echo '<li class="d-inline-block mx-1">
                                    <a class="color-circle" href="#" style="background-color: ' . trim($mau) . ';" title="' . ucfirst(trim($mau)) . '"></a>
                                </li>';
                            }

                            echo '</ul>
                                <h6 class="product-name">
                                    <a href="'.$linksp.'">' . $ten_san_pham . '</a>
                                </h6>
                                <div class="price-box">
                                    <span class="price-regular">' . number_format($gia) . ' đ</span>
                                </div>
                                </div>
                            </div>';
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- featured product area end -->

    <!-- group product start -->
    <section class="group-product-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="group-product-banner">
                        <figure class="banner-statistics">
                            <a href="#">
                                <img src="./views/assets/img/banner/bannerdoc1.jpg" alt="product banner">
                            </a>
                           
                        </figure>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories-group-wrapper">
                        <!-- section title start -->
                        <div class="section-title-append">
                            <h4>Sản Phẩm Hot</h4>
                            <div class="slick-append"></div>
                        </div>
                        <!-- section title start -->

                        <!-- group list carousel start -->
                        <div class="group-list-item-wrapper">
                            <div class="group-list-carousel">
                                <!-- group list item start -->
                                <div class="group-slide-item">
                                    <div class="group-item">
                                        <div class="group-item-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/img/product/product-1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="group-item-desc">
                                            <h5 class="group-product-name"><a href="product-details.html">
                                                    Diamond Exclusive ring</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$50.00</span>
                                                <span class="price-old"><del>$29.99</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- group list item end -->

                                <!-- group list item start -->
                                <div class="group-slide-item">
                                    <div class="group-item">
                                        <div class="group-item-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/img/product/product-3.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="group-item-desc">
                                            <h5 class="group-product-name"><a href="product-details.html">
                                                    Handmade Golden ring</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$55.00</span>
                                                <span class="price-old"><del>$30.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- group list item end -->

                                <!-- group list item start -->
                                <div class="group-slide-item">
                                    <div class="group-item">
                                        <div class="group-item-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/img/product/product-5.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="group-item-desc">
                                            <h5 class="group-product-name"><a href="product-details.html">
                                                    exclusive gold Jewelry</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$45.00</span>
                                                <span class="price-old"><del>$25.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- group list item end -->

                                <!-- group list item start -->
                                <div class="group-slide-item">
                                    <div class="group-item">
                                        <div class="group-item-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/img/product/product-7.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="group-item-desc">
                                            <h5 class="group-product-name"><a href="product-details.html">
                                                    Perfect Diamond earring</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$50.00</span>
                                                <span class="price-old"><del>$29.99</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- group list item end -->

                                <!-- group list item start -->
                                <div class="group-slide-item">
                                    <div class="group-item">
                                        <div class="group-item-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/img/product/product-9.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="group-item-desc">
                                            <h5 class="group-product-name"><a href="product-details.html">
                                                    Handmade Golden Necklace</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$90.00</span>
                                                <span class="price-old"><del>$100.</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- group list item end -->

                                <!-- group list item start -->
                                <div class="group-slide-item">
                                    <div class="group-item">
                                        <div class="group-item-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/img/product/product-11.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="group-item-desc">
                                            <h5 class="group-product-name"><a href="product-details.html">
                                                    Handmade Golden Necklace</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$20.00</span>
                                                <span class="price-old"><del>$30.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- group list item end -->

                                <!-- group list item start -->
                                <div class="group-slide-item">
                                    <div class="group-item">
                                        <div class="group-item-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/img/product/product-13.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="group-item-desc">
                                            <h5 class="group-product-name"><a href="product-details.html">
                                                    Handmade Golden ring</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$55.00</span>
                                                <span class="price-old"><del>$30.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- group list item end -->

                                <!-- group list item start -->
                                <div class="group-slide-item">
                                    <div class="group-item">
                                        <div class="group-item-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/img/product/product-15.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="group-item-desc">
                                            <h5 class="group-product-name"><a href="product-details.html">
                                                    exclusive gold Jewelry</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$45.00</span>
                                                <span class="price-old"><del>$25.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- group list item end -->
                            </div>
                        </div>
                        <!-- group list carousel start -->
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories-group-wrapper">
                        <!-- section title start -->
                        <div class="section-title-append">
                            <h4>Sản Phẩm Giảm Giá</h4>
                            <div class="slick-append"></div>
                        </div>
                        <!-- section title start -->

                        <!-- group list carousel start -->
                        <div class="group-list-item-wrapper">
                            <div class="group-list-carousel">
                                <!-- group list item start -->
                                <div class="group-slide-item">
                                    <div class="group-item">
                                        <div class="group-item-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/img/product/product-17.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="group-item-desc">
                                            <h5 class="group-product-name"><a href="product-details.html">
                                                    Handmade Golden Necklace</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$50.00</span>
                                                <span class="price-old"><del>$29.99</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- group list item end -->

                                <!-- group list item start -->
                                <div class="group-slide-item">
                                    <div class="group-item">
                                        <div class="group-item-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/img/product/product-16.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="group-item-desc">
                                            <h5 class="group-product-name"><a href="product-details.html">
                                                    Handmade Golden Necklaces</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$55.00</span>
                                                <span class="price-old"><del>$30.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- group list item end -->

                                <!-- group list item start -->
                                <div class="group-slide-item">
                                    <div class="group-item">
                                        <div class="group-item-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/img/product/product-12.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="group-item-desc">
                                            <h5 class="group-product-name"><a href="product-details.html">
                                                    exclusive silver top bracellet</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$45.00</span>
                                                <span class="price-old"><del>$25.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- group list item end -->

                                <!-- group list item start -->
                                <div class="group-slide-item">
                                    <div class="group-item">
                                        <div class="group-item-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/img/product/product-11.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="group-item-desc">
                                            <h5 class="group-product-name"><a href="product-details.html">
                                                    top Perfect Diamond necklace</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$50.00</span>
                                                <span class="price-old"><del>$29.99</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- group list item end -->

                                <!-- group list item start -->
                                <div class="group-slide-item">
                                    <div class="group-item">
                                        <div class="group-item-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/img/product/product-7.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="group-item-desc">
                                            <h5 class="group-product-name"><a href="product-details.html">
                                                    Diamond Exclusive earrings</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$90.00</span>
                                                <span class="price-old"><del>$100.</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- group list item end -->

                                <!-- group list item start -->
                                <div class="group-slide-item">
                                    <div class="group-item">
                                        <div class="group-item-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/img/product/product-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="group-item-desc">
                                            <h5 class="group-product-name"><a href="product-details.html">
                                                    corano top exclusive jewellry</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$20.00</span>
                                                <span class="price-old"><del>$30.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- group list item end -->

                                <!-- group list item start -->
                                <div class="group-slide-item">
                                    <div class="group-item">
                                        <div class="group-item-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/img/product/product-18.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="group-item-desc">
                                            <h5 class="group-product-name"><a href="product-details.html">
                                                    Handmade Golden ring</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$55.00</span>
                                                <span class="price-old"><del>$30.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- group list item end -->

                                <!-- group list item start -->
                                <div class="group-slide-item">
                                    <div class="group-item">
                                        <div class="group-item-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/img/product/product-14.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="group-item-desc">
                                            <h5 class="group-product-name"><a href="product-details.html">
                                                    exclusive gold Jewelry</a></h5>
                                            <div class="price-box">
                                                <span class="price-regular">$45.00</span>
                                                <span class="price-old"><del>$25.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- group list item end -->
                            </div>
                        </div>
                        <!-- group list carousel start -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- group product end -->


</main>