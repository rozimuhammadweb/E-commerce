<?php

?>
<div class="homev3-slider-with-banners ">
    <div class="slider">
        <div class="home-v3-slider home-slider">
            <?php foreach ($banner as $b): ?>
            <div class="slider-1">
                <?php
                $image = \common\components\StaticFunctions::getImage($b, 'Banners', 'image')
                ?>
                <img src="<?= $image;
                ?>" alt="">
                <div class="caption">
                    <div class="title">Siz xohlayotgan yangi texnologiya sovg'asi
                        <br>shu yerda</div>
                    <div class="sub-title">Qo'lingizda bo'lgan nihoyatda nozik dizayndagi katta ekranlar.</div>
                    <div class="button">Hozir koʻrib chiqing
                        <i class="tm tm-long-arrow-right"></i>
                    </div>

                    <div class="bottom-caption">O'zbekiston hududida bepul yetkazib berish</div>
                </div>
            </div>

            <?php endforeach; ?>
<!--            --><?php //foreach ($banner as $b): ?>
<!--            <div class="slider-1 slider-2">-->
<!--                <img src="--><?php //= $image; ?><!--" alt="yoq">-->
<!--                <div class="caption">-->
<!--                    <div class="title">Siz xohlayotgan yangi texnologiya sovg'asi-->
<!--                        <br>shu yerda</div>-->
<!--                    <div class="sub-title">Qo'lingizda bo'lgan nihoyatda nozik dizayndagi katta ekranlar.</div>-->
<!--                    <div class="button">Hozir koʻrib chiqing-->
<!--                        <i class="tm tm-long-arrow-right"></i>-->
<!--                    </div>-->
<!--                    <div class="bottom-caption">O'zbekiston hududida bepul yetkazib berish</div>-->
<!--                </div>-->
<!--            </div>-->
<!--            --><?php //endforeach; ?>

        </div>
    </div>
    <div class="features-list">
        <div class="features">
            <div class="feature">
                <div class="media">
                    <i class="feature-icon d-flex mr-3 tm tm-free-delivery"></i>
                    <div class="media-body feature-text">
                        <h5 class="mt-0">Bepul yetkazib berish</h5>
                        <span>100 ming so'mdan</span>
                    </div>
                </div>
            </div>
            <!-- .feature -->
            <div class="feature">
                <div class="media">
                    <i class="feature-icon d-flex mr-3 tm tm-feedback"></i>
                    <div class="media-body feature-text">
                        <h5 class="mt-0">99% mijoz</h5>
                        <span>Fikr-mulohazalar</span>
                    </div>
                </div>
                <!-- .media -->
            </div>
            <!-- .feature -->
            <div class="feature">
                <div class="media">
                    <i class="feature-icon d-flex mr-3 tm tm-free-return"></i>
                    <div class="media-body feature-text">
                        <h5 class="mt-0">365 kun</h5>
                        <span>bepul qaytarish uchun</span>
                    </div>
                </div>
                <!-- .media -->
            </div>
            <!-- .feature -->
            <div class="feature">
                <div class="media">
                    <i class="feature-icon d-flex mr-3 tm tm-safe-payments"></i>
                    <div class="media-body feature-text">
                        <h5 class="mt-0">To'lov</h5>
                        <span>Xavfsiz tizim</span>
                    </div>
                </div>
                <!-- .media -->
            </div>
            <!-- .feature -->
            <div class="feature">
                <div class="media">
                    <i class="feature-icon d-flex mr-3 tm tm-best-brands"></i>
                    <div class="media-body feature-text">
                        <h5 class="mt-0">Faqat eng yaxshi</h5>
                        <span>Brendlar</span>
                    </div>
                </div>
                <!-- .media -->
            </div>
            <!-- .feature -->
        </div>
        <!-- .features -->
    </div>
    <!-- /.features list -->
    <section class="section-categories-carousel" id="categories-carousel-2">
        <header class="section-header">
            <h2 class="section-title">Tanlangan toifalar</h2>
            <nav class="custom-slick-nav"></nav>
            <!-- .custom-slick-nav -->
        </header>
        <!-- .section-header -->
        <div class="product-categories product-categories-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:8,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#categories-carousel-2 .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:779,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:6}}]}">
            <div class="woocommerce columns-8">
                <div class="products">
                    <div class="product-category product">
                        <a href="product-category.html">
                            <img width="300" height="300" alt="All in One PC" src="images/category/16.png">
                            <h2 class="woocommerce-loop-category__title">All in One PC </h2>
                        </a>
                    </div>
                    <div class="product-category product">
                        <a href="product-category.html">
                            <img width="300" height="300" alt="Audio & Music" src="images/category/17.png">
                            <h2 class="woocommerce-loop-category__title">Audio & Music </h2>
                        </a>
                    </div>
                    <div class="product-category product">
                        <a href="product-category.html">
                            <img width="300" height="300" alt="Cells & Tablets" src="images/category/18.png">
                            <h2 class="woocommerce-loop-category__title">Cells & Tablets </h2>
                        </a>
                    </div>
                    <div class="product-category product">
                        <a href="product-category.html">
                            <img width="300" height="300" alt="Computers & Laptops" src="images/category/19.png">
                            <h2 class="woocommerce-loop-category__title">Computers & Laptops </h2>
                        </a>
                    </div>
                    <div class="product-category product">
                        <a href="product-category.html">
                            <img width="300" height="300" alt="Desktop PCs" src="images/category/20.png">
                            <h2 class="woocommerce-loop-category__title">Desktop PCs </h2>
                        </a>
                    </div>
                    <div class="product-category product">
                        <a href="product-category.html">
                            <img width="300" height="300" alt="Digital Cameras" src="images/category/21.png">
                            <h2 class="woocommerce-loop-category__title">Digital Cameras </h2>
                        </a>
                    </div>
                    <div class="product-category product">
                        <a href="product-category.html">
                            <img width="300" height="300" alt="Games & Consoles" src="images/category/22.png">
                            <h2 class="woocommerce-loop-category__title">Games & Consoles </h2>
                        </a>
                    </div>
                    <div class="product-category product">
                        <a href="product-category.html">
                            <img width="300" height="300" alt="Headphones" src="images/category/23.png">
                            <h2 class="woocommerce-loop-category__title">Headphones </h2>
                        </a>
                    </div>
                    <div class="product-category product">
                        <a href="product-category.html">
                            <img width="300" height="300" alt="Home Entertainment" src="images/category/24.png">
                            <h2 class="woocommerce-loop-category__title">Home Entertainment </h2>
                        </a>
                    </div>
                    <div class="product-category product">
                        <a href="product-category.html">
                            <img width="300" height="300" alt="Home Theater & Audio" src="images/category/20.png">
                            <h2 class="woocommerce-loop-category__title">Home Theater & Audio </h2>
                        </a>
                    </div>
                </div>
                <!-- .products-->
            </div>
            <!-- .woocommerce -->
        </div>
    </section>
    <!-- .section-top-categories -->
</div>

