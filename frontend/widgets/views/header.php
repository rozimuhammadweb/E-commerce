<?php


?>


<div class="top-bar top-bar-v2">

    <div class="col-full">
        <ul id="menu-top-bar-left" class="nav menu-top-bar-left">
            <li class="menu-item animate-dropdown">
                <a title="TechMarket eCommerce - Always free delivery" href="">TechMarket elektron tijorat
                    &#8211; Bepul yetkazib berish</a>
            </li>
            <li class="menu-item animate-dropdown">
                <a title="Quality Guarantee of products" href="">Mahsulotlar sifati kafolati</a>
            </li>
            <li class="menu-item animate-dropdown">
                <a title="Fast returnings program" href="<?= \yii\helpers\Url::to('/product') ?>">Tez qaytarish
                    dasturi</a>
            </li>
            <li class="menu-item animate-dropdown">
                <a title="No additional fees" href="">Qo'shimcha to'lovlar yo'q</a>
            </li>
        </ul>
        <!-- .nav -->
        <ul id="menu-top-bar-right" class="nav menu-top-bar-right">
            <li class="hidden-sm-down menu-item animate-dropdown">
                <a title="Track Your Order" href="">
                    <i class="tm tm-order-tracking"></i>Track Your Order</a>
            </li>
            <?php
            use yii\bootstrap5\Html;
            if (Yii::$app->user->isGuest){ ?>
            <li class="menu-item">
                <a title="Register" href="/site/signup">
                    <i class="tm tm-login-register"></i>Register</a>
            </li>
            <li class="menu-item">
                <a title="My Account" href="/site/login">
                    <i class="tm tm-login-register"></i>Login</a>
            </li>
            <li class="menu-item">
                <?php } else {
                    echo Html::beginForm(['/site/logout'], 'post',)
                        . Html::submitButton(
                            'Log Out (' . Yii::$app->user->identity->username . ')',
                            ['class' => ' btn btn-light hover-none border-none']
                        )
                        . Html::endForm(); ?>

                <?php } ?>
            </li>
        </ul>
        <!-- .nav -->
    </div>
    <!-- .col-full -->
</div>
<!-- .top-bar-v2 -->
<header id="masthead" class="site-header header-v2" style="background-image: none; ">
    <div class="col-full desktop-only">
        <div class="row">
            <div class="site-branding">
                <a href="home-v1.html" class="custom-logo-link" rel="home">
                    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 176 28">
                        <defs>
                            <style>
                                .cls-1,
                                .cls-2 {
                                    fill: #333e48;
                                }

                                .cls-1 {
                                    fill-rule: evenodd;
                                }

                                .cls-3 {
                                    fill: #3265b0;
                                }
                            </style>
                        </defs>
                        <polygon class="cls-1"
                                 points="171.63 0.91 171.63 11 170.63 11 170.63 0.91 170.63 0.84 170.63 0.06 176 0.06 176 0.91 171.63 0.91"/>
                        <rect class="cls-2" x="166.19" y="0.06" width="3.47" height="0.84"/>
                        <rect class="cls-2" x="159.65" y="4.81" width="3.51" height="0.84"/>
                        <polygon class="cls-1"
                                 points="158.29 11 157.4 11 157.4 0.06 158.26 0.06 158.36 0.06 164.89 0.06 164.89 0.87 158.36 0.87 158.36 10.19 164.99 10.19 164.99 11 158.36 11 158.29 11"/>
                        <polygon class="cls-1" points="149.54 6.61 150.25 5.95 155.72 10.98 154.34 10.98 149.54 6.61"/>
                        <polygon class="cls-1"
                                 points="147.62 10.98 146.65 10.98 146.65 0.05 147.62 0.05 147.62 5.77 153.6 0.33 154.91 0.33 147.62 7.05 147.62 10.98"/>
                        <path class="cls-1"
                              d="M156.39,24h-1.25s-0.49-.39-0.71-0.59l-1.35-1.25c-0.25-.23-0.68-0.66-0.68-0.66s0-.46,0-0.72a3.56,3.56,0,0,0,3.54-2.87,3.36,3.36,0,0,0-3.22-4H148.8V24h-1V13.06h5c2.34,0.28,4,1.72,4.12,4a4.26,4.26,0,0,1-3.38,4.34C154.48,22.24,156.39,24,156.39,24Z"
                              transform="translate(-12 -13)"/>
                        <polygon class="cls-1"
                                 points="132.04 2.09 127.09 7.88 130.78 7.88 130.78 8.69 126.4 8.69 124.42 11 123.29 11 132.65 0 133.04 0 133.04 11 132.04 11 132.04 2.09"/>
                        <polygon class="cls-1"
                                 points="120.97 2.04 116.98 6.15 116.98 6.19 116.97 6.17 116.95 6.19 116.95 6.15 112.97 2.04 112.97 11 112 11 112 0 112.32 0 116.97 4.8 121.62 0 121.94 0 121.94 11 120.97 11 120.97 2.04"/>
                        <ellipse class="cls-3" cx="116.3" cy="22.81" rx="5.15" ry="5.18"/>
                        <rect class="cls-2" x="99.13" y="0.44" width="5.87" height="27.12"/>
                        <polygon class="cls-1"
                                 points="85.94 27.56 79.92 27.56 79.92 0.44 85.94 0.44 85.94 16.86 96.35 16.86 96.35 21.84 85.94 21.84 85.94 27.56"/>
                        <path class="cls-1"
                              d="M77.74,36.07a9,9,0,0,0,6.41-2.68L88,37c-2.6,2.74-6.71,4-10.89,4A13.94,13.94,0,0,1,62.89,27.15,14.19,14.19,0,0,1,77.11,13c4.38,0,8.28,1.17,10.89,4,0,0-3.89,3.82-3.91,3.8A9,9,0,1,0,77.74,36.07Z"
                              transform="translate(-12 -13)"/>
                        <rect class="cls-2" x="37.4" y="11.14" width="7.63" height="4.98"/>
                        <polygon class="cls-1"
                                 points="32.85 27.56 28.6 27.56 28.6 5.42 28.6 3.96 28.6 0.44 47.95 0.44 47.95 5.42 34.46 5.42 34.46 22.72 48.25 22.72 48.25 27.56 34.46 27.56 32.85 27.56"/>
                        <polygon class="cls-1"
                                 points="15.4 27.56 9.53 27.56 9.53 5.57 9.53 0.59 9.53 0.44 24.93 0.44 24.93 5.57 15.4 5.57 15.4 27.56"/>
                        <rect class="cls-2" y="0.44" width="7.19" height="5.13"/>
                    </svg>
                </a>
                <!-- /.custom-logo-link -->
            </div>
            <!-- /.site-branding -->
            <!-- ============================================================= End Header Logo ============================================================= -->
            <div id="departments-menu" class="dropdown departments-menu">
                <button class="btn dropdown-toggle btn-block" type="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                    <i class="tm tm-departments-thin"></i>
                    <span>All Departments</span>
                </button>
                <ul id="menu-departments-menu" class="dropdown-menu yamm departments-menu-dropdown">
                    <li class="highlight menu-item animate-dropdown">
                        <a title="Value of the Day" href="home-v2.html">Value of the Day</a>
                    </li>
                    <li class="highlight menu-item animate-dropdown">
                        <a title="Top 100 Offers" href="home-v3.html">Top 100 Offers</a>
                    </li>
                    <li class="highlight menu-item animate-dropdown">
                        <a title="New Arrivals" href="home-v4.html">New Arrivals</a>
                    </li>
                    <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                        <a title="Computers &amp; Laptops" data-toggle="dropdown" class="dropdown-toggle"
                           aria-haspopup="true" href="#">Computers &#038; Laptops <span class="caret"></span></a>
                        <ul role="menu" class=" dropdown-menu">
                            <li class="menu-item menu-item-object-static_block animate-dropdown">
                                <div class="yamm-content">
                                    <div class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                        <div class="kc-col-container">
                                            <div class="kc_single_image">
                                                <img src="assets/images/megamenu.jpg" class="" alt=""/>
                                            </div>
                                            <!-- .kc_single_image -->
                                        </div>
                                        <!-- .kc-col-container -->
                                    </div>
                                    <!-- .bg-yamm-content -->
                                    <div class="row yamm-content-row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="kc-col-container">
                                                <div class="kc_text_block">
                                                    <ul>
                                                        <li class="nav-title">Computers &amp; Accessories</li>
                                                        <li><a href="shop.html">All Computers &amp; Accessories</a></li>
                                                        <li><a href="shop.html">Laptops, Desktops &amp; Monitors</a>
                                                        </li>
                                                        <li><a href="shop.html">Pen Drives, Hard Drives &amp; Memory
                                                                Cards</a></li>
                                                        <li><a href="shop.html">Printers &amp; Ink</a></li>
                                                        <li><a href="shop.html">Networking &amp; Internet Devices</a>
                                                        </li>
                                                        <li><a href="shop.html">Computer Accessories</a></li>
                                                        <li><a href="shop.html">Software</a></li>
                                                        <li class="nav-divider"></li>
                                                        <li>
                                                            <a href="#">
                                                                <span class="nav-text">All Electronics</span>
                                                                <span class="nav-subtext">Discover more products</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- .kc_text_block -->
                                            </div>
                                            <!-- .kc-col-container -->
                                        </div>
                                        <!-- .kc_column -->
                                        <div class="col-md-6 col-sm-12">
                                            <div class="kc-col-container">
                                                <div class="kc_text_block">
                                                    <ul>
                                                        <li class="nav-title">Office &amp; Stationery</li>
                                                        <li><a href="shop.html">All Office &amp; Stationery</a></li>
                                                        <li><a href="shop.html">Pens &amp; Writing</a></li>
                                                    </ul>
                                                </div>
                                                <!-- .kc_text_block -->
                                            </div>
                                            <!-- .kc-col-container -->
                                        </div>
                                        <!-- .kc_column -->
                                    </div>
                                    <!-- .kc_row -->
                                </div>
                                <!-- .yamm-content -->
                            </li>
                        </ul>
                    </li>
                    <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                        <a title="Cameras &amp; Photo" data-toggle="dropdown" class="dropdown-toggle"
                           aria-haspopup="true" href="#">Cameras &#038; Photo <span class="caret"></span></a>
                        <ul role="menu" class=" dropdown-menu">
                            <li class="menu-item menu-item-object-static_block animate-dropdown">
                                <div class="yamm-content">
                                    <div class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                        <div class="kc-col-container">
                                            <div class="kc_single_image">
                                                <img src="assets/images/megamenu-1.jpg" class="" alt=""/>
                                            </div>
                                            <!-- .kc_single_image -->
                                        </div>
                                        <!-- .kc-col-container -->
                                    </div>
                                    <!-- .bg-yamm-content -->
                                    <div class="row yamm-content-row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="kc-col-container">
                                                <div class="kc_text_block">
                                                    <ul>
                                                        <li class="nav-title">Cameras & Photography</li>
                                                        <li><a href="shop.html">All Cameras & Photography</a></li>
                                                        <li><a href="shop.html">Point & Shoot Cameras</a></li>
                                                        <li><a href="shop.html">Lenses</a></li>
                                                        <li><a href="shop.html">Camera Accessories</a></li>
                                                        <li><a href="shop.html">Security & Surveillance</a></li>
                                                        <li><a href="shop.html">Binoculars & Telescopes</a></li>
                                                        <li><a href="shop.html">Camcorders</a></li>
                                                        <li class="nav-divider"></li>
                                                        <li>
                                                            <a href="#">
                                                                <span class="nav-text">All Electronics</span>
                                                                <span class="nav-subtext">Discover more products</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- .kc_text_block -->
                                            </div>
                                            <!-- .kc-col-container -->
                                        </div>
                                        <!-- .kc_column -->
                                        <div class="col-md-6 col-sm-12">
                                            <div class="kc-col-container">
                                                <div class="kc_text_block">
                                                    <ul>
                                                        <li class="nav-title">Audio & Video</li>
                                                        <li><a href="shop.html">All Audio & Video</a></li>
                                                        <li><a href="shop.html">Headphones & Speakers</a></li>
                                                        <li><a href="shop.html">Home Entertainment Systems</a></li>
                                                        <li><a href="shop.html">MP3 & Media Players</a></li>
                                                    </ul>
                                                </div>
                                                <!-- .kc_text_block -->
                                            </div>
                                            <!-- .kc-col-container -->
                                        </div>
                                        <!-- .kc_column -->
                                    </div>
                                    <!-- .kc_row -->
                                </div>
                                <!-- .yamm-content -->
                            </li>
                        </ul>
                    </li>
                    <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                        <a title="Smart Phones &amp; Tablets" data-toggle="dropdown" class="dropdown-toggle"
                           aria-haspopup="true" href="#">Smart Phones &#038; Tablets <span class="caret"></span></a>
                        <ul role="menu" class=" dropdown-menu">
                            <li class="menu-item menu-item-object-static_block animate-dropdown">
                                <div class="yamm-content">
                                    <div class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                        <div class="kc-col-container">
                                            <div class="kc_single_image">
                                                <img src="assets/images/megamenu.jpg" class="" alt=""/>
                                            </div>
                                            <!-- .kc_single_image -->
                                        </div>
                                        <!-- .kc-col-container -->
                                    </div>
                                    <!-- .bg-yamm-content -->
                                    <div class="row yamm-content-row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="kc-col-container">
                                                <div class="kc_text_block">
                                                    <ul>
                                                        <li class="nav-title">Computers &amp; Accessories</li>
                                                        <li><a href="shop.html">All Computers &amp; Accessories</a></li>
                                                        <li><a href="shop.html">Laptops, Desktops &amp; Monitors</a>
                                                        </li>
                                                        <li><a href="shop.html">Pen Drives, Hard Drives &amp; Memory
                                                                Cards</a></li>
                                                        <li><a href="shop.html">Printers &amp; Ink</a></li>
                                                        <li><a href="shop.html">Networking &amp; Internet Devices</a>
                                                        </li>
                                                        <li><a href="shop.html">Computer Accessories</a></li>
                                                        <li><a href="shop.html">Software</a></li>
                                                        <li class="nav-divider"></li>
                                                        <li>
                                                            <a href="#">
                                                                <span class="nav-text">All Electronics</span>
                                                                <span class="nav-subtext">Discover more products</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- .kc_text_block -->
                                            </div>
                                            <!-- .kc-col-container -->
                                        </div>
                                        <!-- .kc_column -->
                                        <div class="col-md-6 col-sm-12">
                                            <div class="kc-col-container">
                                                <div class="kc_text_block">
                                                    <ul>
                                                        <li class="nav-title">Office &amp; Stationery</li>
                                                        <li><a href="shop.html">All Office &amp; Stationery</a></li>
                                                        <li><a href="shop.html">Pens &amp; Writing</a></li>
                                                    </ul>
                                                </div>
                                                <!-- .kc_text_block -->
                                            </div>
                                            <!-- .kc-col-container -->
                                        </div>
                                        <!-- .kc_column -->
                                    </div>
                                    <!-- .kc_row -->
                                </div>
                                <!-- .yamm-content -->
                            </li>
                        </ul>
                    </li>
                    <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                        <a title="Video Games &amp; Consoles" data-toggle="dropdown" class="dropdown-toggle"
                           aria-haspopup="true" href="#">Video Games &#038; Consoles <span class="caret"></span></a>
                        <ul role="menu" class=" dropdown-menu">
                            <li class="menu-item menu-item-object-static_block animate-dropdown">
                                <div class="yamm-content">
                                    <div class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                        <div class="kc-col-container">
                                            <div class="kc_single_image">
                                                <img src="assets/images/megamenu-1.jpg" class="" alt=""/>
                                            </div>
                                            <!-- .kc_single_image -->
                                        </div>
                                        <!-- .kc-col-container -->
                                    </div>
                                    <!-- .bg-yamm-content -->
                                    <div class="row yamm-content-row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="kc-col-container">
                                                <div class="kc_text_block">
                                                    <ul>
                                                        <li class="nav-title">Cameras & Photography</li>
                                                        <li><a href="shop.html">All Cameras & Photography</a></li>
                                                        <li><a href="shop.html">Point & Shoot Cameras</a></li>
                                                        <li><a href="shop.html">Lenses</a></li>
                                                        <li><a href="shop.html">Camera Accessories</a></li>
                                                        <li><a href="shop.html">Security & Surveillance</a></li>
                                                        <li><a href="shop.html">Binoculars & Telescopes</a></li>
                                                        <li><a href="shop.html">Camcorders</a></li>
                                                        <li class="nav-divider"></li>
                                                        <li>
                                                            <a href="#">
                                                                <span class="nav-text">All Electronics</span>
                                                                <span class="nav-subtext">Discover more products</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- .kc_text_block -->
                                            </div>
                                            <!-- .kc-col-container -->
                                        </div>
                                        <!-- .kc_column -->
                                        <div class="col-md-6 col-sm-12">
                                            <div class="kc-col-container">
                                                <div class="kc_text_block">
                                                    <ul>
                                                        <li class="nav-title">Audio & Video</li>
                                                        <li><a href="shop.html">All Audio & Video</a></li>
                                                        <li><a href="shop.html">Headphones & Speakers</a></li>
                                                        <li><a href="shop.html">Home Entertainment Systems</a></li>
                                                        <li><a href="shop.html">MP3 & Media Players</a></li>
                                                    </ul>
                                                </div>
                                                <!-- .kc_text_block -->
                                            </div>
                                            <!-- .kc-col-container -->
                                        </div>
                                        <!-- .kc_column -->
                                    </div>
                                    <!-- .kc_row -->
                                </div>
                                <!-- .yamm-content -->
                            </li>
                        </ul>
                    </li>
                    <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                        <a title="TV &amp; Audio" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true"
                           href="#">TV &#038; Audio <span class="caret"></span></a>
                        <ul role="menu" class=" dropdown-menu">
                            <li class="menu-item menu-item-object-static_block animate-dropdown">
                                <div class="yamm-content">
                                    <div class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                        <div class="kc-col-container">
                                            <div class="kc_single_image">
                                                <img src="assets/images/megamenu.jpg" class="" alt=""/>
                                            </div>
                                            <!-- .kc_single_image -->
                                        </div>
                                        <!-- .kc-col-container -->
                                    </div>
                                    <!-- .bg-yamm-content -->
                                    <div class="row yamm-content-row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="kc-col-container">
                                                <div class="kc_text_block">
                                                    <ul>
                                                        <li class="nav-title">Computers &amp; Accessories</li>
                                                        <li><a href="shop.html">All Computers &amp; Accessories</a></li>
                                                        <li><a href="shop.html">Laptops, Desktops &amp; Monitors</a>
                                                        </li>
                                                        <li><a href="shop.html">Pen Drives, Hard Drives &amp; Memory
                                                                Cards</a></li>
                                                        <li><a href="shop.html">Printers &amp; Ink</a></li>
                                                        <li><a href="shop.html">Networking &amp; Internet Devices</a>
                                                        </li>
                                                        <li><a href="shop.html">Computer Accessories</a></li>
                                                        <li><a href="shop.html">Software</a></li>
                                                        <li class="nav-divider"></li>
                                                        <li>
                                                            <a href="#">
                                                                <span class="nav-text">All Electronics</span>
                                                                <span class="nav-subtext">Discover more products</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- .kc_text_block -->
                                            </div>
                                            <!-- .kc-col-container -->
                                        </div>
                                        <!-- .kc_column -->
                                        <div class="col-md-6 col-sm-12">
                                            <div class="kc-col-container">
                                                <div class="kc_text_block">
                                                    <ul>
                                                        <li class="nav-title">Office &amp; Stationery</li>
                                                        <li><a href="shop.html">All Office &amp; Stationery</a></li>
                                                        <li><a href="shop.html">Pens &amp; Writing</a></li>
                                                    </ul>
                                                </div>
                                                <!-- .kc_text_block -->
                                            </div>
                                            <!-- .kc-col-container -->
                                        </div>
                                        <!-- .kc_column -->
                                    </div>
                                    <!-- .kc_row -->
                                </div>
                                <!-- .yamm-content -->
                            </li>
                        </ul>
                    </li>
                    <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                        <a title="Car Electronic &amp; GPS" data-toggle="dropdown" class="dropdown-toggle"
                           aria-haspopup="true" href="#">Car Electronic &#038; GPS <span class="caret"></span></a>
                        <ul role="menu" class=" dropdown-menu">
                            <li class="menu-item menu-item-object-static_block animate-dropdown">
                                <div class="yamm-content">
                                    <div class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                        <div class="kc-col-container">
                                            <div class="kc_single_image">
                                                <img src="assets/images/megamenu-1.jpg" class="" alt=""/>
                                            </div>
                                            <!-- .kc_single_image -->
                                        </div>
                                        <!-- .kc-col-container -->
                                    </div>
                                    <!-- .bg-yamm-content -->
                                    <div class="row yamm-content-row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="kc-col-container">
                                                <div class="kc_text_block">
                                                    <ul>
                                                        <li class="nav-title">Cameras & Photography</li>
                                                        <li><a href="shop.html">All Cameras & Photography</a></li>
                                                        <li><a href="shop.html">Point & Shoot Cameras</a></li>
                                                        <li><a href="shop.html">Lenses</a></li>
                                                        <li><a href="shop.html">Camera Accessories</a></li>
                                                        <li><a href="shop.html">Security & Surveillance</a></li>
                                                        <li><a href="shop.html">Binoculars & Telescopes</a></li>
                                                        <li><a href="shop.html">Camcorders</a></li>
                                                        <li class="nav-divider"></li>
                                                        <li>
                                                            <a href="#">
                                                                <span class="nav-text">All Electronics</span>
                                                                <span class="nav-subtext">Discover more products</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- .kc_text_block -->
                                            </div>
                                            <!-- .kc-col-container -->
                                        </div>
                                        <!-- .kc_column -->
                                        <div class="col-md-6 col-sm-12">
                                            <div class="kc-col-container">
                                                <div class="kc_text_block">
                                                    <ul>
                                                        <li class="nav-title">Audio & Video</li>
                                                        <li><a href="shop.html">All Audio & Video</a></li>
                                                        <li><a href="shop.html">Headphones & Speakers</a></li>
                                                        <li><a href="shop.html">Home Entertainment Systems</a></li>
                                                        <li><a href="shop.html">MP3 & Media Players</a></li>
                                                    </ul>
                                                </div>
                                                <!-- .kc_text_block -->
                                            </div>
                                            <!-- .kc-col-container -->
                                        </div>
                                        <!-- .kc_column -->
                                    </div>
                                    <!-- .kc_row -->
                                </div>
                                <!-- .yamm-content -->
                            </li>
                        </ul>
                    </li>
                    <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                        <a title="Accesories" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true"
                           href="#">Accesories <span class="caret"></span></a>
                        <ul role="menu" class=" dropdown-menu">
                            <li class="menu-item menu-item-object-static_block animate-dropdown">
                                <div class="yamm-content">
                                    <div class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                        <div class="kc-col-container">
                                            <div class="kc_single_image">
                                                <img src="assets/images/megamenu.jpg" class="" alt=""/>
                                            </div>
                                            <!-- .kc_single_image -->
                                        </div>
                                        <!-- .kc-col-container -->
                                    </div>
                                    <!-- .bg-yamm-content -->
                                    <div class="row yamm-content-row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="kc-col-container">
                                                <div class="kc_text_block">
                                                    <ul>
                                                        <li class="nav-title">Computers &amp; Accessories</li>
                                                        <li><a href="shop.html">All Computers &amp; Accessories</a></li>
                                                        <li><a href="shop.html">Laptops, Desktops &amp; Monitors</a>
                                                        </li>
                                                        <li><a href="shop.html">Pen Drives, Hard Drives &amp; Memory
                                                                Cards</a></li>
                                                        <li><a href="shop.html">Printers &amp; Ink</a></li>
                                                        <li><a href="shop.html">Networking &amp; Internet Devices</a>
                                                        </li>
                                                        <li><a href="shop.html">Computer Accessories</a></li>
                                                        <li><a href="shop.html">Software</a></li>
                                                        <li class="nav-divider"></li>
                                                        <li>
                                                            <a href="#">
                                                                <span class="nav-text">All Electronics</span>
                                                                <span class="nav-subtext">Discover more products</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- .kc_text_block -->
                                            </div>
                                            <!-- .kc-col-container -->
                                        </div>
                                        <!-- .kc_column -->
                                        <div class="col-md-6 col-sm-12">
                                            <div class="kc-col-container">
                                                <div class="kc_text_block">
                                                    <ul>
                                                        <li class="nav-title">Office &amp; Stationery</li>
                                                        <li><a href="shop.html">All Office &amp; Stationery</a></li>
                                                        <li><a href="shop.html">Pens &amp; Writing</a></li>
                                                    </ul>
                                                </div>
                                                <!-- .kc_text_block -->
                                            </div>
                                            <!-- .kc-col-container -->
                                        </div>
                                        <!-- .kc_column -->
                                    </div>
                                    <!-- .kc_row -->
                                </div>
                                <!-- .yamm-content -->
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-type-custom animate-dropdown">
                        <a title="Gadgets" href="landing-page-v1.html">Gadgets</a>
                    </li>
                    <li class="menu-item menu-item-type-custom animate-dropdown">
                        <a title="Virtual Reality" href="landing-page-v2.html">Virtual Reality</a>
                    </li>
                </ul>
            </div>
            <!-- .departments-menu -->
            <form class="navbar-search" method="get" action="home-v1.html">
                <label class="sr-only screen-reader-text" for="search">Search for:</label>
                <div class="input-group">
                    <input type="text" id="search" class="form-control search-field product-search-field" dir="ltr"
                           value="" name="s" placeholder="Search for products"/>
                    <div class="input-group-addon search-categories popover-header">
                        <select name='product_cat' id='product_cat' class='postform resizeselect'>
                            <option value='0' selected='selected'>All Categories</option>
                            <option class="level-0" value="television">Televisions</option>
                            <option class="level-0" value="home-theater-audio">Home Theater &amp; Audio</option>
                            <option class="level-0" value="headphones">Headphones</option>
                            <option class="level-0" value="digital-cameras">Digital Cameras</option>
                            <option class="level-0" value="cells-tablets">Cells &amp; Tablets</option>
                            <option class="level-0" value="smartwatches">Smartwatches</option>
                            <option class="level-0" value="games-consoles">Games &amp; Consoles</option>
                            <option class="level-0" value="printer">Printer</option>
                            <option class="level-0" value="tv-video">TV &amp; Video</option>
                            <option class="level-0" value="home-entertainment">Home Entertainment</option>
                            <option class="level-0" value="tvs">TVs</option>
                            <option class="level-0" value="speakers">Speakers</option>
                            <option class="level-0" value="computers-laptops">Computers &amp; Laptops</option>
                            <option class="level-0" value="laptops">Laptops</option>
                            <option class="level-0" value="ultrabooks">Ultrabooks</option>
                            <option class="level-0" value="notebooks">Notebooks</option>
                            <option class="level-0" value="desktop-pcs">Desktop PCs</option>
                            <option class="level-0" value="mac-computers">Mac Computers</option>
                            <option class="level-0" value="all-in-one-pc">All in One PC</option>
                            <option class="level-0" value="audio-music">Audio &amp; Music</option>
                            <option class="level-0" value="pc-components">PC Components</option>
                        </select>
                    </div>
                    <!-- .input-group-addon -->
                    <div class="input-group-btn input-group-append">
                        <input type="hidden" id="search-param" name="post_type" value="product"/>
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-search"></i>
                            <span class="search-btn">Search</span>
                        </button>
                    </div>
                    <!-- .input-group-btn -->
                </div>
                <!-- .input-group -->
            </form>
            <!-- .navbar-search -->
            <ul class="header-compare nav navbar-nav">
                <li class="nav-item">
                    <a href="compare.html" class="nav-link">
                        <i class="tm tm-compare"></i>
                        <span id="top-cart-compare-count" class="value">3</span>
                    </a>
                </li>
            </ul>
            <!-- .header-compare -->
            <ul class="header-wishlist nav navbar-nav">
                <li class="nav-item">
                    <a href="wishlist.html" class="nav-link">
                        <i class="tm tm-favorites"></i>
                        <span id="top-cart-wishlist-count" class="value">3</span>
                    </a>
                </li>
            </ul>
            <!-- .header-wishlist -->
            <ul id="site-header-cart" class="site-header-cart menu">
                <li class="animate-dropdown dropdown ">
                    <a class="cart-contents" href="cart.html" data-toggle="dropdown" title="View your shopping cart">
                        <i class="tm tm-shopping-bag"></i>
                        <span class="count">2</span>
                        <span class="amount">
                                        <span class="price-label">Your Cart</span>&#036;136.99</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-mini-cart">
                        <li>
                            <div class="widget woocommerce widget_shopping_cart">
                                <div class="widget_shopping_cart_content">
                                    <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                        <li class="woocommerce-mini-cart-item mini_cart_item">
                                            <a href="#" class="remove" aria-label="Remove this item"
                                               data-product_id="65" data-product_sku="">×</a>
                                            <a href="single-product-sidebar.html">
                                                <img src="assets/images/products/mini-cart1.jpg"
                                                     class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                                     alt="">XONE Wireless Controller&nbsp;
                                            </a>
                                            <span class="quantity">1 ×
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>64.99</span>
                                                        </span>
                                        </li>
                                        <li class="woocommerce-mini-cart-item mini_cart_item">
                                            <a href="#" class="remove" aria-label="Remove this item"
                                               data-product_id="27" data-product_sku="">×</a>
                                            <a href="single-product-sidebar.html">
                                                <img src="assets/images/products/mini-cart2.jpg"
                                                     class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                                     alt="">Gear Virtual Reality 3D with Bluetooth Glasses&nbsp;
                                            </a>
                                            <span class="quantity">1 ×
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>72.00</span>
                                                        </span>
                                        </li>
                                    </ul>
                                    <!-- .cart_list -->
                                    <p class="woocommerce-mini-cart__total total">
                                        <strong>Subtotal:</strong>
                                        <span class="woocommerce-Price-amount amount">
                                                        <span
                                                            class="woocommerce-Price-currencySymbol">$</span>136.99</span>
                                    </p>
                                    <p class="woocommerce-mini-cart__buttons buttons">
                                        <a href="cart.html" class="button wc-forward">View cart</a>
                                        <a href="checkout.html" class="button checkout wc-forward">Checkout</a>
                                    </p>
                                </div>
                                <!-- .widget_shopping_cart_content -->
                            </div>
                            <!-- .widget_shopping_cart -->
                        </li>
                    </ul>
                    <!-- .dropdown-menu-mini-cart -->
                </li>
            </ul>
            <!-- .site-header-cart -->
        </div>
        <!-- /.row -->
        <div class="techmarket-sticky-wrap">
            <div class="row">
                <nav id="navbar-primary" class="navbar-primary" aria-label="Navbar Primary" data-nav="flex-menu">
                    <ul id="menu-navbar-primary" class="nav yamm">
                        <li class="menu-item animate-dropdown">
                            <a title="ALL CATEGORIES" href="product-category.html">ALL CATEGORIES</a>
                        </li>
                        <li class="menu-item animate-dropdown">
                            <a title="COMPUTERS &amp; LAPTOPS" href="product-category.html">COMPUTERS &#038; LAPTOPS</a>
                        </li>
                        <li class="yamm-fw menu-item menu-item-has-children animate-dropdown dropdown">
                            <a title="Pages" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true"
                               href="#">Pages <span class="caret"></span></a>
                            <ul role="menu" class=" dropdown-menu">
                                <li class="menu-item menu-item-object-static_block animate-dropdown">
                                    <div class="yamm-content">
                                        <div class="tm-mega-menu">
                                            <div class="widget widget_nav_menu">
                                                <ul class="menu">
                                                    <li class="nav-title menu-item">
                                                         <a href="#">Home Pages</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="home-v1.html">Home v1</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="home-v2.html">Home v2</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="home-v3.html">Home v3</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="home-v4.html">Home v4</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="home-v5.html">Home v5</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="home-v6.html">Home v6</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="home-v7.html">Home v7</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="home-v8.html">Home v8</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="home-v9.html">Home v9</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="home-v10.html">Home v10</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="home-v11.html">Home v11</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="home-v12.html">Home v12</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="home-v13.html">Home v13</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="home-v14.html">Home v14</a>
                                                    </li>
                                                </ul>
                                                <!-- .menu -->
                                            </div>
                                            <!-- .widget_nav_menu -->
                                            <div class="widget widget_nav_menu">
                                                <ul class="menu">
                                                    <li class="nav-title menu-item">
                                                        <a href="#">Landing Pages</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="landing-page-v1.html">Landing v1</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="landing-page-v2.html">Landing v2</a>
                                                    </li>
                                                    <li class="nav-title menu-item">
                                                        <a href="#">Shop Pages</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="shop.html">Shop</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="shop-extended.html">Shop Extended</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="shop-listing.html">Shop Listing</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="shop-listing-large.html">Shop Listing Large</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="shop-listing-with-product-sidebar.html">Shop Listing
                                                            with Product Sidebar</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="product-category.html">Categories</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="shop-right-sidebar.html">Shop Right Sidebar</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="shop-fullwidth.html">Shop Full Width</a>
                                                    </li>
                                                </ul>
                                                <!-- .menu -->
                                            </div>
                                            <!-- .widget_nav_menu -->
                                            <div class="widget widget_nav_menu">
                                                <ul class="menu">
                                                    <li class="nav-title menu-item">
                                                        <a href="#">Single Product Pages</a>
                                                    </li>
                                                    <li class="menu-item menu-item-object-product">
                                                        <a href="single-product-sidebar.html">Single Product Sidebar</a>
                                                    </li>
                                                    <li class="menu-item menu-item-object-product">
                                                        <a href="single-product-fullwidth.html">Single Product
                                                            Fullwidth</a>
                                                    </li>
                                                    <li class="menu-item menu-item-object-product">
                                                        <a href="single-product-extended.html">Single Product
                                                            Extended</a>
                                                    </li>
                                                    <li class="nav-title menu-item">
                                                        <a href="#">Ecommerce Pages</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="cart.html">Cart</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="checkout.html">Checkout</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="login-and-register.html">My Account</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="compare.html">Compare</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="wishlist.html">Wishlist</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="track-your-order.html">Track Order</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="terms-and-conditions.html">Terms and Conditions</a>
                                                    </li>
                                                </ul>
                                                <!-- .menu -->
                                            </div>
                                            <!-- .widget_nav_menu -->
                                            <div class="widget widget_nav_menu">
                                                <ul class="menu">
                                                    <li class="nav-title menu-item">
                                                        <a href="#">Blog Pages</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="blog-v1.html">Blog v1</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="blog-v2.html">Blog v2</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="blog-v3.html">Blog v3</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="blog-fullwidth.html">Blog Full Width</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="blog-single.html">Single Blog Post</a>
                                                    </li>
                                                    <li class="nav-title menu-item">
                                                        <a href="#">Other Pages</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="about.html">About Us</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="contact-v1.html">Contact v1</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="contact-v2.html">Contact v2</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="faq.html">FAQ</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="404.html">404</a>
                                                    </li>
                                                </ul>
                                                <!-- .menu -->
                                            </div>
                                            <!-- .widget_nav_menu -->
                                        </div>
                                        <!-- .tm-mega-menu -->
                                    </div>
                                    <!-- .yamm-content -->
                                </li>
                                <!-- .menu-item -->
                            </ul>
                            <!-- .dropdown-menu -->
                        </li>
                        <li class="menu-item animate-dropdown">
                            <a title="CAMERAS &amp; PHOTO" href="product-category.html">CAMERAS &#038; PHOTO</a>
                        </li>
                        <li class="menu-item animate-dropdown">
                            <a title="PHONES &amp; TABLETS" href="product-category.html">PHONES &#038; TABLETS</a>
                        </li>
                        <li class="menu-item animate-dropdown">
                            <a title="GAMES &amp; CONSOLES" href="product-category.html">GAMES &#038; CONSOLES</a>
                        </li>
                        <li class="menu-item animate-dropdown">
                            <a title="TV &amp; AUDIO" href="product-category.html">TV &#038; AUDIO</a>
                        </li>
                        <li class="menu-item animate-dropdown">
                            <a title="CAR ELECTRONIC &amp; GPS" href="product-category.html">CAR ELECTRONIC &#038;
                                GPS</a>
                        </li>
                        <li class="menu-item animate-dropdown">
                            <a title="ACCESORIES" href="product-category.html">ACCESORIES</a>
                        </li>
                        <li class="techmarket-flex-more-menu-item dropdown">
                            <a title="..." href="#" data-toggle="dropdown" class="dropdown-toggle">...</a>
                            <ul class="overflow-items dropdown-menu"></ul>
                        </li>
                    </ul>
                    <!-- .nav -->
                </nav>
                <!-- .navbar-primary -->
            </div>
            <!-- /.row -->
        </div>
        <!-- .techmarket-sticky-wrap -->
    </div>
    <!-- .col-full -->
    <div class="col-full handheld-only">
        <div class="handheld-header">
            <div class="row">
                <div class="site-branding">
                    <a href="home-v1.html" class="custom-logo-link" rel="home">
                        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 176 28">
                            <defs>
                                <style>
                                    .cls-1,
                                    .cls-2 {
                                        fill: #333e48;
                                    }

                                    .cls-1 {
                                        fill-rule: evenodd;
                                    }

                                    .cls-3 {
                                        fill: #3265b0;
                                    }
                                </style>
                            </defs>
                            <polygon class="cls-1"
                                     points="171.63 0.91 171.63 11 170.63 11 170.63 0.91 170.63 0.84 170.63 0.06 176 0.06 176 0.91 171.63 0.91"/>
                            <rect class="cls-2" x="166.19" y="0.06" width="3.47" height="0.84"/>
                            <rect class="cls-2" x="159.65" y="4.81" width="3.51" height="0.84"/>
                            <polygon class="cls-1"
                                     points="158.29 11 157.4 11 157.4 0.06 158.26 0.06 158.36 0.06 164.89 0.06 164.89 0.87 158.36 0.87 158.36 10.19 164.99 10.19 164.99 11 158.36 11 158.29 11"/>
                            <polygon class="cls-1"
                                     points="149.54 6.61 150.25 5.95 155.72 10.98 154.34 10.98 149.54 6.61"/>
                            <polygon class="cls-1"
                                     points="147.62 10.98 146.65 10.98 146.65 0.05 147.62 0.05 147.62 5.77 153.6 0.33 154.91 0.33 147.62 7.05 147.62 10.98"/>
                            <path class="cls-1"
                                  d="M156.39,24h-1.25s-0.49-.39-0.71-0.59l-1.35-1.25c-0.25-.23-0.68-0.66-0.68-0.66s0-.46,0-0.72a3.56,3.56,0,0,0,3.54-2.87,3.36,3.36,0,0,0-3.22-4H148.8V24h-1V13.06h5c2.34,0.28,4,1.72,4.12,4a4.26,4.26,0,0,1-3.38,4.34C154.48,22.24,156.39,24,156.39,24Z"
                                  transform="translate(-12 -13)"/>
                            <polygon class="cls-1"
                                     points="132.04 2.09 127.09 7.88 130.78 7.88 130.78 8.69 126.4 8.69 124.42 11 123.29 11 132.65 0 133.04 0 133.04 11 132.04 11 132.04 2.09"/>
                            <polygon class="cls-1"
                                     points="120.97 2.04 116.98 6.15 116.98 6.19 116.97 6.17 116.95 6.19 116.95 6.15 112.97 2.04 112.97 11 112 11 112 0 112.32 0 116.97 4.8 121.62 0 121.94 0 121.94 11 120.97 11 120.97 2.04"/>
                            <ellipse class="cls-3" cx="116.3" cy="22.81" rx="5.15" ry="5.18"/>
                            <rect class="cls-2" x="99.13" y="0.44" width="5.87" height="27.12"/>
                            <polygon class="cls-1"
                                     points="85.94 27.56 79.92 27.56 79.92 0.44 85.94 0.44 85.94 16.86 96.35 16.86 96.35 21.84 85.94 21.84 85.94 27.56"/>
                            <path class="cls-1"
                                  d="M77.74,36.07a9,9,0,0,0,6.41-2.68L88,37c-2.6,2.74-6.71,4-10.89,4A13.94,13.94,0,0,1,62.89,27.15,14.19,14.19,0,0,1,77.11,13c4.38,0,8.28,1.17,10.89,4,0,0-3.89,3.82-3.91,3.8A9,9,0,1,0,77.74,36.07Z"
                                  transform="translate(-12 -13)"/>
                            <rect class="cls-2" x="37.4" y="11.14" width="7.63" height="4.98"/>
                            <polygon class="cls-1"
                                     points="32.85 27.56 28.6 27.56 28.6 5.42 28.6 3.96 28.6 0.44 47.95 0.44 47.95 5.42 34.46 5.42 34.46 22.72 48.25 22.72 48.25 27.56 34.46 27.56 32.85 27.56"/>
                            <polygon class="cls-1"
                                     points="15.4 27.56 9.53 27.56 9.53 5.57 9.53 0.59 9.53 0.44 24.93 0.44 24.93 5.57 15.4 5.57 15.4 27.56"/>
                            <rect class="cls-2" y="0.44" width="7.19" height="5.13"/>
                        </svg>
                    </a>
                    <!-- /.custom-logo-link -->
                </div>
                <!-- /.site-branding -->
                <!-- ============================================================= End Header Logo ============================================================= -->
                <div class="handheld-header-links">
                    <ul class="columns-3">
                        <li class="my-account">
                            <a href="login-and-register.html" class="has-icon">
                                <i class="tm tm-login-register"></i>
                            </a>
                        </li>
                        <li class="wishlist">
                            <a href="wishlist.html" class="has-icon">
                                <i class="tm tm-favorites"></i>
                                <span class="count">3</span>
                            </a>
                        </li>
                        <li class="compare">
                            <a href="compare.html" class="has-icon">
                                <i class="tm tm-compare"></i>
                                <span class="count">3</span>
                            </a>
                        </li>
                    </ul>
                    <!-- .columns-3 -->
                </div>
                <!-- .handheld-header-links -->
            </div>
            <!-- /.row -->
            <div class="techmarket-sticky-wrap">
                <div class="row">
                    <nav id="handheld-navigation" class="handheld-navigation" aria-label="Handheld Navigation">
                        <button class="btn navbar-toggler" type="button">
                            <i class="tm tm-departments-thin"></i>
                            <span>Menu</span>
                        </button>
                        <div class="handheld-navigation-menu">
                            <span class="tmhm-close">Close</span>
                            <ul id="menu-departments-menu-1" class="nav">
                                <li class="highlight menu-item animate-dropdown">
                                    <a title="Value of the Day" href="shop.html">Value of the Day</a>
                                </li>
                                <li class="highlight menu-item animate-dropdown">
                                    <a title="Top 100 Offers" href="shop.html">Top 100 Offers</a>
                                </li>
                                <li class="highlight menu-item animate-dropdown">
                                    <a title="New Arrivals" href="shop.html">New Arrivals</a>
                                </li>
                                <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                                    <a title="Computers &amp; Laptops" data-toggle="dropdown" class="dropdown-toggle"
                                       aria-haspopup="true" href="#">Computers &#038; Laptops <span
                                            class="caret"></span></a>
                                    <ul role="menu" class=" dropdown-menu">
                                        <li class="menu-item menu-item-object-static_block animate-dropdown">
                                            <div class="yamm-content">
                                                <div
                                                    class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                    <div class="kc-col-container">
                                                        <div class="kc_single_image">
                                                            <img src="assets/images/megamenu.jpg" class="" alt=""/>
                                                        </div>
                                                        <!-- .kc_single_image -->
                                                    </div>
                                                    <!-- .kc-col-container -->
                                                </div>
                                                <!-- .bg-yamm-content -->
                                                <div class="row yamm-content-row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="kc-col-container">
                                                            <div class="kc_text_block">
                                                                <ul>
                                                                    <li class="nav-title">Computers &amp; Accessories
                                                                    </li>
                                                                    <li><a href="shop.html">All Computers &amp;
                                                                            Accessories</a></li>
                                                                    <li><a href="shop.html">Laptops, Desktops &amp;
                                                                            Monitors</a></li>
                                                                    <li><a href="shop.html">Pen Drives, Hard Drives
                                                                            &amp; Memory Cards</a></li>
                                                                    <li><a href="shop.html">Printers &amp; Ink</a></li>
                                                                    <li><a href="shop.html">Networking &amp; Internet
                                                                            Devices</a></li>
                                                                    <li><a href="shop.html">Computer Accessories</a>
                                                                    </li>
                                                                    <li><a href="shop.html">Software</a></li>
                                                                    <li class="nav-divider"></li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <span
                                                                                class="nav-text">All Electronics</span>
                                                                            <span class="nav-subtext">Discover more products</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <!-- .kc_text_block -->
                                                        </div>
                                                        <!-- .kc-col-container -->
                                                    </div>
                                                    <!-- .kc_column -->
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="kc-col-container">
                                                            <div class="kc_text_block">
                                                                <ul>
                                                                    <li class="nav-title">Office &amp; Stationery</li>
                                                                    <li><a href="shop.html">All Office &amp;
                                                                            Stationery</a></li>
                                                                    <li><a href="shop.html">Pens &amp; Writing</a></li>
                                                                </ul>
                                                            </div>
                                                            <!-- .kc_text_block -->
                                                        </div>
                                                        <!-- .kc-col-container -->
                                                    </div>
                                                    <!-- .kc_column -->
                                                </div>
                                                <!-- .kc_row -->
                                            </div>
                                            <!-- .yamm-content -->
                                        </li>
                                    </ul>
                                </li>
                                <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                                    <a title="Cameras &amp; Photo" data-toggle="dropdown" class="dropdown-toggle"
                                       aria-haspopup="true" href="#">Cameras &#038; Photo <span
                                            class="caret"></span></a>
                                    <ul role="menu" class=" dropdown-menu">
                                        <li class="menu-item menu-item-object-static_block animate-dropdown">
                                            <div class="yamm-content">
                                                <div
                                                    class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                    <div class="kc-col-container">
                                                        <div class="kc_single_image">
                                                            <img src="assets/images/megamenu-1.jpg" class="" alt=""/>
                                                        </div>
                                                        <!-- .kc_single_image -->
                                                    </div>
                                                    <!-- .kc-col-container -->
                                                </div>
                                                <!-- .bg-yamm-content -->
                                                <div class="row yamm-content-row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="kc-col-container">
                                                            <div class="kc_text_block">
                                                                <ul>
                                                                    <li class="nav-title">Cameras & Photography</li>
                                                                    <li><a href="shop.html">All Cameras &
                                                                            Photography</a></li>
                                                                    <li><a href="shop.html">Point & Shoot Cameras</a>
                                                                    </li>
                                                                    <li><a href="shop.html">Lenses</a></li>
                                                                    <li><a href="shop.html">Camera Accessories</a></li>
                                                                    <li><a href="shop.html">Security & Surveillance</a>
                                                                    </li>
                                                                    <li><a href="shop.html">Binoculars & Telescopes</a>
                                                                    </li>
                                                                    <li><a href="shop.html">Camcorders</a></li>
                                                                    <li class="nav-divider"></li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <span
                                                                                class="nav-text">All Electronics</span>
                                                                            <span class="nav-subtext">Discover more products</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <!-- .kc_text_block -->
                                                        </div>
                                                        <!-- .kc-col-container -->
                                                    </div>
                                                    <!-- .kc_column -->
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="kc-col-container">
                                                            <div class="kc_text_block">
                                                                <ul>
                                                                    <li class="nav-title">Audio & Video</li>
                                                                    <li><a href="shop.html">All Audio & Video</a></li>
                                                                    <li><a href="shop.html">Headphones & Speakers</a>
                                                                    </li>
                                                                    <li><a href="shop.html">Home Entertainment
                                                                            Systems</a></li>
                                                                    <li><a href="shop.html">MP3 & Media Players</a></li>
                                                                </ul>
                                                            </div>
                                                            <!-- .kc_text_block -->
                                                        </div>
                                                        <!-- .kc-col-container -->
                                                    </div>
                                                    <!-- .kc_column -->
                                                </div>
                                                <!-- .kc_row -->
                                            </div>
                                            <!-- .yamm-content -->
                                        </li>
                                    </ul>
                                </li>
                                <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                                    <a title="Smart Phones &amp; Tablets" data-toggle="dropdown" class="dropdown-toggle"
                                       aria-haspopup="true" href="#">Smart Phones &#038; Tablets <span
                                            class="caret"></span></a>
                                    <ul role="menu" class=" dropdown-menu">
                                        <li class="menu-item menu-item-object-static_block animate-dropdown">
                                            <div class="yamm-content">
                                                <div
                                                    class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                    <div class="kc-col-container">
                                                        <div class="kc_single_image">
                                                            <img src="assets/images/megamenu.jpg" class="" alt=""/>
                                                        </div>
                                                        <!-- .kc_single_image -->
                                                    </div>
                                                    <!-- .kc-col-container -->
                                                </div>
                                                <!-- .bg-yamm-content -->
                                                <div class="row yamm-content-row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="kc-col-container">
                                                            <div class="kc_text_block">
                                                                <ul>
                                                                    <li class="nav-title">Computers &amp; Accessories
                                                                    </li>
                                                                    <li><a href="shop.html">All Computers &amp;
                                                                            Accessories</a></li>
                                                                    <li><a href="shop.html">Laptops, Desktops &amp;
                                                                            Monitors</a></li>
                                                                    <li><a href="shop.html">Pen Drives, Hard Drives
                                                                            &amp; Memory Cards</a></li>
                                                                    <li><a href="shop.html">Printers &amp; Ink</a></li>
                                                                    <li><a href="shop.html">Networking &amp; Internet
                                                                            Devices</a></li>
                                                                    <li><a href="shop.html">Computer Accessories</a>
                                                                    </li>
                                                                    <li><a href="shop.html">Software</a></li>
                                                                    <li class="nav-divider"></li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <span
                                                                                class="nav-text">All Electronics</span>
                                                                            <span class="nav-subtext">Discover more products</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <!-- .kc_text_block -->
                                                        </div>
                                                        <!-- .kc-col-container -->
                                                    </div>
                                                    <!-- .kc_column -->
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="kc-col-container">
                                                            <div class="kc_text_block">
                                                                <ul>
                                                                    <li class="nav-title">Office &amp; Stationery</li>
                                                                    <li><a href="shop.html">All Office &amp;
                                                                            Stationery</a></li>
                                                                    <li><a href="shop.html">Pens &amp; Writing</a></li>
                                                                </ul>
                                                            </div>
                                                            <!-- .kc_text_block -->
                                                        </div>
                                                        <!-- .kc-col-container -->
                                                    </div>
                                                    <!-- .kc_column -->
                                                </div>
                                                <!-- .kc_row -->
                                            </div>
                                            <!-- .yamm-content -->
                                        </li>
                                    </ul>
                                </li>
                                <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                                    <a title="Video Games &amp; Consoles" data-toggle="dropdown" class="dropdown-toggle"
                                       aria-haspopup="true" href="#">Video Games &#038; Consoles <span
                                            class="caret"></span></a>
                                    <ul role="menu" class=" dropdown-menu">
                                        <li class="menu-item menu-item-object-static_block animate-dropdown">
                                            <div class="yamm-content">
                                                <div
                                                    class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                    <div class="kc-col-container">
                                                        <div class="kc_single_image">
                                                            <img src="assets/images/megamenu-1.jpg" class="" alt=""/>
                                                        </div>
                                                        <!-- .kc_single_image -->
                                                    </div>
                                                    <!-- .kc-col-container -->
                                                </div>
                                                <!-- .bg-yamm-content -->
                                                <div class="row yamm-content-row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="kc-col-container">
                                                            <div class="kc_text_block">
                                                                <ul>
                                                                    <li class="nav-title">Cameras & Photography</li>
                                                                    <li><a href="shop.html">All Cameras &
                                                                            Photography</a></li>
                                                                    <li><a href="shop.html">Point & Shoot Cameras</a>
                                                                    </li>
                                                                    <li><a href="shop.html">Lenses</a></li>
                                                                    <li><a href="shop.html">Camera Accessories</a></li>
                                                                    <li><a href="shop.html">Security & Surveillance</a>
                                                                    </li>
                                                                    <li><a href="shop.html">Binoculars & Telescopes</a>
                                                                    </li>
                                                                    <li><a href="shop.html">Camcorders</a></li>
                                                                    <li class="nav-divider"></li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <span
                                                                                class="nav-text">All Electronics</span>
                                                                            <span class="nav-subtext">Discover more products</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <!-- .kc_text_block -->
                                                        </div>
                                                        <!-- .kc-col-container -->
                                                    </div>
                                                    <!-- .kc_column -->
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="kc-col-container">
                                                            <div class="kc_text_block">
                                                                <ul>
                                                                    <li class="nav-title">Audio & Video</li>
                                                                    <li><a href="shop.html">All Audio & Video</a></li>
                                                                    <li><a href="shop.html">Headphones & Speakers</a>
                                                                    </li>
                                                                    <li><a href="shop.html">Home Entertainment
                                                                            Systems</a></li>
                                                                    <li><a href="shop.html">MP3 & Media Players</a></li>
                                                                </ul>
                                                            </div>
                                                            <!-- .kc_text_block -->
                                                        </div>
                                                        <!-- .kc-col-container -->
                                                    </div>
                                                    <!-- .kc_column -->
                                                </div>
                                                <!-- .kc_row -->
                                            </div>
                                            <!-- .yamm-content -->
                                        </li>
                                    </ul>
                                </li>
                                <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                                    <a title="TV &amp; Audio" data-toggle="dropdown" class="dropdown-toggle"
                                       aria-haspopup="true" href="#">TV &#038; Audio <span class="caret"></span></a>
                                    <ul role="menu" class=" dropdown-menu">
                                        <li class="menu-item menu-item-object-static_block animate-dropdown">
                                            <div class="yamm-content">
                                                <div
                                                    class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                    <div class="kc-col-container">
                                                        <div class="kc_single_image">
                                                            <img src="assets/images/megamenu.jpg" class="" alt=""/>
                                                        </div>
                                                        <!-- .kc_single_image -->
                                                    </div>
                                                    <!-- .kc-col-container -->
                                                </div>
                                                <!-- .bg-yamm-content -->
                                                <div class="row yamm-content-row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="kc-col-container">
                                                            <div class="kc_text_block">
                                                                <ul>
                                                                    <li class="nav-title">Computers &amp; Accessories
                                                                    </li>
                                                                    <li><a href="shop.html">All Computers &amp;
                                                                            Accessories</a></li>
                                                                    <li><a href="shop.html">Laptops, Desktops &amp;
                                                                            Monitors</a></li>
                                                                    <li><a href="shop.html">Pen Drives, Hard Drives
                                                                            &amp; Memory Cards</a></li>
                                                                    <li><a href="shop.html">Printers &amp; Ink</a></li>
                                                                    <li><a href="shop.html">Networking &amp; Internet
                                                                            Devices</a></li>
                                                                    <li><a href="shop.html">Computer Accessories</a>
                                                                    </li>
                                                                    <li><a href="shop.html">Software</a></li>
                                                                    <li class="nav-divider"></li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <span
                                                                                class="nav-text">All Electronics</span>
                                                                            <span class="nav-subtext">Discover more products</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <!-- .kc_text_block -->
                                                        </div>
                                                        <!-- .kc-col-container -->
                                                    </div>
                                                    <!-- .kc_column -->
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="kc-col-container">
                                                            <div class="kc_text_block">
                                                                <ul>
                                                                    <li class="nav-title">Office &amp; Stationery</li>
                                                                    <li><a href="shop.html">All Office &amp;
                                                                            Stationery</a></li>
                                                                    <li><a href="shop.html">Pens &amp; Writing</a></li>
                                                                </ul>
                                                            </div>
                                                            <!-- .kc_text_block -->
                                                        </div>
                                                        <!-- .kc-col-container -->
                                                    </div>
                                                    <!-- .kc_column -->
                                                </div>
                                                <!-- .kc_row -->
                                            </div>
                                            <!-- .yamm-content -->
                                        </li>
                                    </ul>
                                </li>
                                <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                                    <a title="Car Electronic &amp; GPS" data-toggle="dropdown" class="dropdown-toggle"
                                       aria-haspopup="true" href="#">Car Electronic &#038; GPS <span
                                            class="caret"></span></a>
                                    <ul role="menu" class=" dropdown-menu">
                                        <li class="menu-item menu-item-object-static_block animate-dropdown">
                                            <div class="yamm-content">
                                                <div
                                                    class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                    <div class="kc-col-container">
                                                        <div class="kc_single_image">
                                                            <img src="assets/images/megamenu-1.jpg" class="" alt=""/>
                                                        </div>
                                                        <!-- .kc_single_image -->
                                                    </div>
                                                    <!-- .kc-col-container -->
                                                </div>
                                                <!-- .bg-yamm-content -->
                                                <div class="row yamm-content-row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="kc-col-container">
                                                            <div class="kc_text_block">
                                                                <ul>
                                                                    <li class="nav-title">Cameras & Photography</li>
                                                                    <li><a href="shop.html">All Cameras &
                                                                            Photography</a></li>
                                                                    <li><a href="shop.html">Point & Shoot Cameras</a>
                                                                    </li>
                                                                    <li><a href="shop.html">Lenses</a></li>
                                                                    <li><a href="shop.html">Camera Accessories</a></li>
                                                                    <li><a href="shop.html">Security & Surveillance</a>
                                                                    </li>
                                                                    <li><a href="shop.html">Binoculars & Telescopes</a>
                                                                    </li>
                                                                    <li><a href="shop.html">Camcorders</a></li>
                                                                    <li class="nav-divider"></li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <span
                                                                                class="nav-text">All Electronics</span>
                                                                            <span class="nav-subtext">Discover more products</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <!-- .kc_text_block -->
                                                        </div>
                                                        <!-- .kc-col-container -->
                                                    </div>
                                                    <!-- .kc_column -->
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="kc-col-container">
                                                            <div class="kc_text_block">
                                                                <ul>
                                                                    <li class="nav-title">Audio & Video</li>
                                                                    <li><a href="shop.html">All Audio & Video</a></li>
                                                                    <li><a href="shop.html">Headphones & Speakers</a>
                                                                    </li>
                                                                    <li><a href="shop.html">Home Entertainment
                                                                            Systems</a></li>
                                                                    <li><a href="shop.html">MP3 & Media Players</a></li>
                                                                </ul>
                                                            </div>
                                                            <!-- .kc_text_block -->
                                                        </div>
                                                        <!-- .kc-col-container -->
                                                    </div>
                                                    <!-- .kc_column -->
                                                </div>
                                                <!-- .kc_row -->
                                            </div>
                                            <!-- .yamm-content -->
                                        </li>
                                    </ul>
                                </li>
                                <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                                    <a title="Accesories" data-toggle="dropdown" class="dropdown-toggle"
                                       aria-haspopup="true" href="#">Accesories <span class="caret"></span></a>
                                    <ul role="menu" class=" dropdown-menu">
                                        <li class="menu-item menu-item-object-static_block animate-dropdown">
                                            <div class="yamm-content">
                                                <div
                                                    class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                    <div class="kc-col-container">
                                                        <div class="kc_single_image">
                                                            <img src="assets/images/megamenu.jpg" class="" alt=""/>
                                                        </div>
                                                        <!-- .kc_single_image -->
                                                    </div>
                                                    <!-- .kc-col-container -->
                                                </div>
                                                <!-- .bg-yamm-content -->
                                                <div class="row yamm-content-row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="kc-col-container">
                                                            <div class="kc_text_block">
                                                                <ul>
                                                                    <li class="nav-title">Computers &amp; Accessories
                                                                    </li>
                                                                    <li><a href="shop.html">All Computers &amp;
                                                                            Accessories</a></li>
                                                                    <li><a href="shop.html">Laptops, Desktops &amp;
                                                                            Monitors</a></li>
                                                                    <li><a href="shop.html">Pen Drives, Hard Drives
                                                                            &amp; Memory Cards</a></li>
                                                                    <li><a href="shop.html">Printers &amp; Ink</a></li>
                                                                    <li><a href="shop.html">Networking &amp; Internet
                                                                            Devices</a></li>
                                                                    <li><a href="shop.html">Computer Accessories</a>
                                                                    </li>
                                                                    <li><a href="shop.html">Software</a></li>
                                                                    <li class="nav-divider"></li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <span
                                                                                class="nav-text">All Electronics</span>
                                                                            <span class="nav-subtext">Discover more products</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <!-- .kc_text_block -->
                                                        </div>
                                                        <!-- .kc-col-container -->
                                                    </div>
                                                    <!-- .kc_column -->
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="kc-col-container">
                                                            <div class="kc_text_block">
                                                                <ul>
                                                                    <li class="nav-title">Office &amp; Stationery</li>
                                                                    <li><a href="shop.html">All Office &amp;
                                                                            Stationery</a></li>
                                                                    <li><a href="shop.html">Pens &amp; Writing</a></li>
                                                                </ul>
                                                            </div>
                                                            <!-- .kc_text_block -->
                                                        </div>
                                                        <!-- .kc-col-container -->
                                                    </div>
                                                    <!-- .kc_column -->
                                                </div>
                                                <!-- .kc_row -->
                                            </div>
                                            <!-- .yamm-content -->
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item animate-dropdown">
                                    <a title="Gadgets" href="shop.html">Gadgets</a>
                                </li>
                                <li class="menu-item animate-dropdown">
                                    <a title="Virtual Reality" href="shop.html">Virtual Reality</a>
                                </li>
                            </ul>
                        </div>
                        <!-- .handheld-navigation-menu -->
                    </nav>
                    <!-- .handheld-navigation -->
                    <div class="site-search">
                        <div class="widget woocommerce widget_product_search">
                            <form role="search" method="get" class="woocommerce-product-search" action="home-v1.html">
                                <label class="screen-reader-text" for="woocommerce-product-search-field-0">Search
                                    for:</label>
                                <input type="search" id="woocommerce-product-search-field-0" class="search-field"
                                       placeholder="Search products&hellip;" value="" name="s"/>
                                <input type="submit" value="Search"/>
                                <input type="hidden" name="post_type" value="product"/>
                            </form>
                        </div>
                        <!-- .widget -->
                    </div>
                    <!-- .site-search -->
                    <a class="handheld-header-cart-link has-icon" href="cart.html" title="View your shopping cart">
                        <i class="tm tm-shopping-bag"></i>
                        <span class="count">2</span>
                    </a>
                </div>
                <!-- /.row -->
            </div>
            <!-- .techmarket-sticky-wrap -->
        </div>
        <!-- .handheld-header -->
    </div>
    <!-- .handheld-only -->
</header>
<!-- .header-v2 -->
<!-- ============================================================= Header End ============================================================= -->
