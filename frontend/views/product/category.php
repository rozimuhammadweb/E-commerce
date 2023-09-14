<nav class="woocommerce-breadcrumb">
    <a href="home-v1.html">Home</a>
    <span class="delimiter">
                                        <i class="tm tm-breadcrumbs-arrow-right"></i>
                                    </span>Shop
</nav>
<div class="shop-archive-header">
    <div class="jumbotron">
        <div class="jumbotron-img">
            <img width="416" height="283" alt="" src="/images/products/jumbo.jpg" class="jumbo-image alignright">
        </div>
        <div class="jumbotron-caption">
            <h3 class="jumbo-title">Virtual Reality Headsets</h3>
            <p class="jumbo-subtitle">Nullam dignissim elit ut urna rutrum, a fermentum mi auctor. Mauris efficitur
                magna orci, et dignissim lacus scelerisque sit amet. Proin malesuada tincidunt nisl ac commodo. Vivamus
                eleifend porttitor ex sit amet suscipit. Vestibulum at ullamcorper lacus, vel facilisis arcu. Aliquam
                erat volutpat.
                <br>
                <br>Maecenas in sodales nisl. Pellentesque ac nibh mi. Ut lobortis odio nulla, congue rhoncus risus
                facilisis eget. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                <a href="#">read more <i class="tm tm-long-arrow-right"></i></a>
            </p>
        </div>
        <!-- .jumbotron-caption -->
    </div>
    <!-- .jumbotron -->
</div>
<!-- .shop-archive-header -->
<div class="shop-control-bar">
    <div class="handheld-sidebar-toggle">
        <button type="button" class="btn sidebar-toggler">
            <i class="fa fa-sliders"></i>
            <span>Filters</span>
        </button>
    </div>
    <!-- .handheld-sidebar-toggle -->
    <h1 class="woocommerce-products-header__title page-title">Shop</h1>
    <ul role="tablist" class="shop-view-switcher nav nav-tabs">

        <li class="nav-item">
            <a href="#grid-extended" title="Grid Extended View" data-toggle="tab" class="nav-link active">
                <i class="tm tm-grid"></i>
            </a>
        </li>
        <li class="nav-item">
            <a href="#list-view-large" title="List View Large" data-toggle="tab" class="nav-link ">
                <i class="tm tm-listing-large"></i>
            </a>
        </li>

    </ul>
    <!-- .shop-view-switcher -->
    <form class="form-techmarket-wc-ppp" method="POST">
        <select class="techmarket-wc-wppp-select c-select" onchange="this.form.submit()" name="ppp">
            <option value="20">Show 20</option>
            <option value="40">Show 40</option>
            <option value="-1">Show All</option>
        </select>
        <input type="hidden" value="5" name="shop_columns">
        <input type="hidden" value="15" name="shop_per_page">
        <input type="hidden" value="right-sidebar" name="shop_layout">
    </form>
    <!-- .form-techmarket-wc-ppp -->
    <form method="get" class="woocommerce-ordering">
        <select class="orderby" name="orderby">
            <option value="popularity">Sort by popularity</option>
            <option value="rating">Sort by average rating</option>
            <option selected="selected" value="date">Sort by newness</option>
            <option value="price">Sort by price: low to high</option>
            <option value="price-desc">Sort by price: high to low</option>
        </select>
        <input type="hidden" value="5" name="shop_columns">
        <input type="hidden" value="15" name="shop_per_page">
        <input type="hidden" value="right-sidebar" name="shop_layout">
    </form>
    <!-- .woocommerce-ordering -->
    <nav class="techmarket-advanced-pagination">
        <form class="form-adv-pagination" method="post">
            <input type="number" value="1" class="form-control" step="1" max="5" min="1" size="2" id="goto-page">
        </form>
        of 5<a href="#" class="next page-numbers">→</a>
    </nav>
    <!-- .techmarket-advanced-pagination -->
</div>
<!-- .shop-control-bar -->
<div class="tab-content">

    <!-- .tab-pane -->
    <div id="grid-extended" class="tab-pane active" role="tabpanel">
        <div class="woocommerce columns-5">
            <?= \yii\widgets\ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_index',
                'options' => ['class' => 'products', 'id' => 'prducts_block'], // Удаляем класс list-view
                'layout' => "{items}\n{summary}\n{pager}",
                'itemOptions' => function ($model, $key, $index, $widget) {
                    return ['class' => 'product first']; // Указываем класс элемента и убираем атрибут data-key
                },
                'summaryOptions' => ['class' => 'summary mt-4'],
                'pager' => [
                    'options' => ['class' => 'page-numbers mt-4'], // Добавьте класс к пагинации
                    'linkOptions' => ['class' => 'page-numbers current'],
                ],
            ])
            ?>
            <!-- .products -->
        </div>
        <!-- .woocommerce -->
    </div>
    <!-- .tab-pane -->
    <div id="list-view-large" class="tab-pane" role="tabpanel">
        <div class="woocommerce columns-1">
            <div class="products">
                <div class="product list-view-large first ">
                    <div class="media">
                        <img width="224" height="197" alt=""
                             class="attachment-shop_catalog size-shop_catalog wp-post-image"
                             src="/images/products/1.jpg">
                        <div class="media-body">
                            <div class="product-info">
                                <div class="yith-wcwl-add-to-wishlist">
                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                </div>
                                <!-- .yith-wcwl-add-to-wishlist -->
                                <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                   href="single-product-fullwidth.html">
                                    <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED
                                        TV</h2>
                                    <div class="techmarket-product-rating">
                                        <div title="Rated 5.00 out of 5" class="star-rating">
                                                                            <span style="width:100%">
                                                                                <strong class="rating">5.00</strong> out of 5</span>
                                        </div>
                                        <span class="review-count">(1)</span>
                                    </div>
                                </a>
                                <!-- .woocommerce-LoopProduct-link -->
                                <div class="brand">
                                    <a href="#">
                                        <img alt="galaxy" src="/images/brands/5.png">
                                    </a>
                                </div>
                                <!-- .brand -->
                                <div class="woocommerce-product-details__short-description">
                                    <ul>
                                        <li>CUJO smart firewall brings business-level Internet security to protect all
                                            of your home devices
                                        </li>
                                        <li>Internet Security: Guard your network and smart devices against hacks,
                                            malware, and cyber threats
                                        </li>
                                        <li>Mobile App: Monitor your wired and wireless network activity with a sleek
                                            iPhone or Android app
                                        </li>
                                        <li>CUJO connects to your wireless router with an ethernet cable. CUJO is not
                                            compatible with Luma and does not support Google Wifi Mesh. CUJO works with
                                            Eero in Bridge mode.
                                        </li>
                                    </ul>
                                </div>
                                <!-- .woocommerce-product-details__short-description -->
                                <span class="sku_wrapper">SKU:
                                                                    <span class="sku">5487FB8/13</span>
                                                                </span>
                            </div>
                            <!-- .product-info -->
                            <div class="product-actions">
                                <div class="availability">
                                    Availability:
                                    <p class="stock in-stock">1000 in stock</p>
                                </div>
                                <span class="price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span
                                                                            class="woocommerce-Price-currencySymbol">$</span>730.00</span>
                                                                </span>
                                <!-- .price -->
                                <a class="button add_to_cart_button" href="cart.html">Add to Cart</a>
                                <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                            </div>
                            <!-- .product-actions -->
                        </div>
                        <!-- .media-body -->
                    </div>
                    <!-- .media -->
                </div>
                <!-- .product -->
                <div class="product list-view-large ">
                    <div class="media">
                        <img width="224" height="197" alt=""
                             class="attachment-shop_catalog size-shop_catalog wp-post-image"
                             src="/images/products/2.jpg">
                        <div class="media-body">
                            <div class="product-info">
                                <div class="yith-wcwl-add-to-wishlist">
                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                </div>
                                <!-- .yith-wcwl-add-to-wishlist -->
                                <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                   href="single-product-fullwidth.html">
                                    <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED
                                        TV</h2>
                                    <div class="techmarket-product-rating">
                                        <div title="Rated 5.00 out of 5" class="star-rating">
                                                                            <span style="width:100%">
                                                                                <strong class="rating">5.00</strong> out of 5</span>
                                        </div>
                                        <span class="review-count">(1)</span>
                                    </div>
                                </a>
                                <!-- .woocommerce-LoopProduct-link -->
                                <div class="brand">
                                    <a href="#">
                                        <img alt="galaxy" src="/images/brands/5.png">
                                    </a>
                                </div>
                                <!-- .brand -->
                                <div class="woocommerce-product-details__short-description">
                                    <ul>
                                        <li>CUJO smart firewall brings business-level Internet security to protect all
                                            of your home devices
                                        </li>
                                        <li>Internet Security: Guard your network and smart devices against hacks,
                                            malware, and cyber threats
                                        </li>
                                        <li>Mobile App: Monitor your wired and wireless network activity with a sleek
                                            iPhone or Android app
                                        </li>
                                        <li>CUJO connects to your wireless router with an ethernet cable. CUJO is not
                                            compatible with Luma and does not support Google Wifi Mesh. CUJO works with
                                            Eero in Bridge mode.
                                        </li>
                                    </ul>
                                </div>
                                <!-- .woocommerce-product-details__short-description -->
                                <span class="sku_wrapper">SKU:
                                                                    <span class="sku">5487FB8/13</span>
                                                                </span>
                            </div>
                            <!-- .product-info -->
                            <div class="product-actions">
                                <div class="availability">
                                    Availability:
                                    <p class="stock in-stock">1000 in stock</p>
                                </div>
                                <span class="price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span
                                                                            class="woocommerce-Price-currencySymbol">$</span>730.00</span>
                                                                </span>
                                <!-- .price -->
                                <a class="button add_to_cart_button" href="cart.html">Add to Cart</a>
                                <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                            </div>
                            <!-- .product-actions -->
                        </div>
                        <!-- .media-body -->
                    </div>
                    <!-- .media -->
                </div>
                <!-- .product -->
                <div class="product list-view-large ">
                    <div class="media">
                        <img width="224" height="197" alt=""
                             class="attachment-shop_catalog size-shop_catalog wp-post-image"
                             src="/images/products/3.jpg">
                        <div class="media-body">
                            <div class="product-info">
                                <div class="yith-wcwl-add-to-wishlist">
                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                </div>
                                <!-- .yith-wcwl-add-to-wishlist -->
                                <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                   href="single-product-fullwidth.html">
                                    <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED
                                        TV</h2>
                                    <div class="techmarket-product-rating">
                                        <div title="Rated 5.00 out of 5" class="star-rating">
                                                                            <span style="width:100%">
                                                                                <strong class="rating">5.00</strong> out of 5</span>
                                        </div>
                                        <span class="review-count">(1)</span>
                                    </div>
                                </a>
                                <!-- .woocommerce-LoopProduct-link -->
                                <div class="brand">
                                    <a href="#">
                                        <img alt="galaxy" src="/images/brands/5.png">
                                    </a>
                                </div>
                                <!-- .brand -->
                                <div class="woocommerce-product-details__short-description">
                                    <ul>
                                        <li>CUJO smart firewall brings business-level Internet security to protect all
                                            of your home devices
                                        </li>
                                        <li>Internet Security: Guard your network and smart devices against hacks,
                                            malware, and cyber threats
                                        </li>
                                        <li>Mobile App: Monitor your wired and wireless network activity with a sleek
                                            iPhone or Android app
                                        </li>
                                        <li>CUJO connects to your wireless router with an ethernet cable. CUJO is not
                                            compatible with Luma and does not support Google Wifi Mesh. CUJO works with
                                            Eero in Bridge mode.
                                        </li>
                                    </ul>
                                </div>
                                <!-- .woocommerce-product-details__short-description -->
                                <span class="sku_wrapper">SKU:
                                                                    <span class="sku">5487FB8/13</span>
                                                                </span>
                            </div>
                            <!-- .product-info -->
                            <div class="product-actions">
                                <div class="availability">
                                    Availability:
                                    <p class="stock in-stock">1000 in stock</p>
                                </div>
                                <span class="price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span
                                                                            class="woocommerce-Price-currencySymbol">$</span>730.00</span>
                                                                </span>
                                <!-- .price -->
                                <a class="button add_to_cart_button" href="cart.html">Add to Cart</a>
                                <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                            </div>
                            <!-- .product-actions -->
                        </div>
                        <!-- .media-body -->
                    </div>
                    <!-- .media -->
                </div>
                <!-- .product -->
                <div class="product list-view-large ">
                    <div class="media">
                        <img width="224" height="197" alt=""
                             class="attachment-shop_catalog size-shop_catalog wp-post-image"
                             src="/images/products/4.jpg">
                        <div class="media-body">
                            <div class="product-info">
                                <div class="yith-wcwl-add-to-wishlist">
                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                </div>
                                <!-- .yith-wcwl-add-to-wishlist -->
                                <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                   href="single-product-fullwidth.html">
                                    <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED
                                        TV</h2>
                                    <div class="techmarket-product-rating">
                                        <div title="Rated 5.00 out of 5" class="star-rating">
                                                                            <span style="width:100%">
                                                                                <strong class="rating">5.00</strong> out of 5</span>
                                        </div>
                                        <span class="review-count">(1)</span>
                                    </div>
                                </a>
                                <!-- .woocommerce-LoopProduct-link -->
                                <div class="brand">
                                    <a href="#">
                                        <img alt="galaxy" src="/images/brands/5.png">
                                    </a>
                                </div>
                                <!-- .brand -->
                                <div class="woocommerce-product-details__short-description">
                                    <ul>
                                        <li>CUJO smart firewall brings business-level Internet security to protect all
                                            of your home devices
                                        </li>
                                        <li>Internet Security: Guard your network and smart devices against hacks,
                                            malware, and cyber threats
                                        </li>
                                        <li>Mobile App: Monitor your wired and wireless network activity with a sleek
                                            iPhone or Android app
                                        </li>
                                        <li>CUJO connects to your wireless router with an ethernet cable. CUJO is not
                                            compatible with Luma and does not support Google Wifi Mesh. CUJO works with
                                            Eero in Bridge mode.
                                        </li>
                                    </ul>
                                </div>
                                <!-- .woocommerce-product-details__short-description -->
                                <span class="sku_wrapper">SKU:
                                                                    <span class="sku">5487FB8/13</span>
                                                                </span>
                            </div>
                            <!-- .product-info -->
                            <div class="product-actions">
                                <div class="availability">
                                    Availability:
                                    <p class="stock in-stock">1000 in stock</p>
                                </div>
                                <span class="price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span
                                                                            class="woocommerce-Price-currencySymbol">$</span>730.00</span>
                                                                </span>
                                <!-- .price -->
                                <a class="button add_to_cart_button" href="cart.html">Add to Cart</a>
                                <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                            </div>
                            <!-- .product-actions -->
                        </div>
                        <!-- .media-body -->
                    </div>
                    <!-- .media -->
                </div>
                <!-- .product -->
                <div class="product list-view-large last">
                    <div class="media">
                        <img width="224" height="197" alt=""
                             class="attachment-shop_catalog size-shop_catalog wp-post-image"
                             src="/images/products/5.jpg">
                        <div class="media-body">
                            <div class="product-info">
                                <div class="yith-wcwl-add-to-wishlist">
                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                </div>
                                <!-- .yith-wcwl-add-to-wishlist -->
                                <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                   href="single-product-fullwidth.html">
                                    <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED
                                        TV</h2>
                                    <div class="techmarket-product-rating">
                                        <div title="Rated 5.00 out of 5" class="star-rating">
                                                                            <span style="width:100%">
                                                                                <strong class="rating">5.00</strong> out of 5</span>
                                        </div>
                                        <span class="review-count">(1)</span>
                                    </div>
                                </a>
                                <!-- .woocommerce-LoopProduct-link -->
                                <div class="brand">
                                    <a href="#">
                                        <img alt="galaxy" src="/images/brands/5.png">
                                    </a>
                                </div>
                                <!-- .brand -->
                                <div class="woocommerce-product-details__short-description">
                                    <ul>
                                        <li>CUJO smart firewall brings business-level Internet security to protect all
                                            of your home devices
                                        </li>
                                        <li>Internet Security: Guard your network and smart devices against hacks,
                                            malware, and cyber threats
                                        </li>
                                        <li>Mobile App: Monitor your wired and wireless network activity with a sleek
                                            iPhone or Android app
                                        </li>
                                        <li>CUJO connects to your wireless router with an ethernet cable. CUJO is not
                                            compatible with Luma and does not support Google Wifi Mesh. CUJO works with
                                            Eero in Bridge mode.
                                        </li>
                                    </ul>
                                </div>
                                <!-- .woocommerce-product-details__short-description -->
                                <span class="sku_wrapper">SKU:
                                                                    <span class="sku">5487FB8/13</span>
                                                                </span>
                            </div>
                            <!-- .product-info -->
                            <div class="product-actions">
                                <div class="availability">
                                    Availability:
                                    <p class="stock in-stock">1000 in stock</p>
                                </div>
                                <span class="price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span
                                                                            class="woocommerce-Price-currencySymbol">$</span>730.00</span>
                                                                </span>
                                <!-- .price -->
                                <a class="button add_to_cart_button" href="cart.html">Add to Cart</a>
                                <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                            </div>
                            <!-- .product-actions -->
                        </div>
                        <!-- .media-body -->
                    </div>
                    <!-- .media -->
                </div>
                <!-- .product -->
                <div class="product list-view-large first ">
                    <div class="media">
                        <img width="224" height="197" alt=""
                             class="attachment-shop_catalog size-shop_catalog wp-post-image"
                             src="/images/products/6.jpg">
                        <div class="media-body">
                            <div class="product-info">
                                <div class="yith-wcwl-add-to-wishlist">
                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                </div>
                                <!-- .yith-wcwl-add-to-wishlist -->
                                <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                   href="single-product-fullwidth.html">
                                    <h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED
                                        TV</h2>
                                    <div class="techmarket-product-rating">
                                        <div title="Rated 5.00 out of 5" class="star-rating">
                                                                            <span style="width:100%">
                                                                                <strong class="rating">5.00</strong> out of 5</span>
                                        </div>
                                        <span class="review-count">(1)</span>
                                    </div>
                                </a>
                                <!-- .woocommerce-LoopProduct-link -->
                                <div class="brand">
                                    <a href="#">
                                        <img alt="galaxy" src="/images/brands/5.png">
                                    </a>
                                </div>
                                <!-- .brand -->
                                <div class="woocommerce-product-details__short-description">
                                    <ul>
                                        <li>CUJO smart firewall brings business-level Internet security to protect all
                                            of your home devices
                                        </li>
                                        <li>Internet Security: Guard your network and smart devices against hacks,
                                            malware, and cyber threats
                                        </li>
                                        <li>Mobile App: Monitor your wired and wireless network activity with a sleek
                                            iPhone or Android app
                                        </li>
                                        <li>CUJO connects to your wireless router with an ethernet cable. CUJO is not
                                            compatible with Luma and does not support Google Wifi Mesh. CUJO works with
                                            Eero in Bridge mode.
                                        </li>
                                    </ul>
                                </div>
                                <!-- .woocommerce-product-details__short-description -->
                                <span class="sku_wrapper">SKU:
                                                                    <span class="sku">5487FB8/13</span>
                                                                </span>
                            </div>
                            <!-- .product-info -->
                            <div class="product-actions">
                                <div class="availability">
                                    Availability:
                                    <p class="stock in-stock">1000 in stock</p>
                                </div>
                                <span class="price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span
                                                                            class="woocommerce-Price-currencySymbol">$</span>730.00</span>
                                                                </span>
                                <!-- .price -->
                                <a class="button add_to_cart_button" href="cart.html">Add to Cart</a>
                                <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                            </div>
                            <!-- .product-actions -->
                        </div>
                        <!-- .media-body -->
                    </div>
                    <!-- .media -->
                </div>
                <!-- .product -->
            </div>
            <!-- .products -->
        </div>
        <!-- .woocommerce -->
    </div>
    <!-- .tab-pane -->

</div>
<!-- .tab-content -->
<div class="shop-control-bar-bottom">
    <form class="form-techmarket-wc-ppp" method="POST">
        <select class="techmarket-wc-wppp-select c-select" onchange="this.form.submit()" name="ppp">
            <option value="20">Show 20</option>
            <option value="40">Show 40</option>
            <option value="-1">Show All</option>
        </select>
        <input type="hidden" value="5" name="shop_columns">
        <input type="hidden" value="15" name="shop_per_page">
        <input type="hidden" value="right-sidebar" name="shop_layout">
    </form>
    <!-- .form-techmarket-wc-ppp -->
    <p class="woocommerce-result-count">
        Showing 1&ndash;15 of 73 results
    </p>
    <!-- .woocommerce-result-count -->
    <nav class="woocommerce-pagination">
        <ul class="page-numbers">
            <li>
                <span class="page-numbers current">1</span>
            </li>
            <li><a href="#" class="page-numbers">2</a></li>
            <li><a href="#" class="page-numbers">3</a></li>
            <li><a href="#" class="page-numbers">4</a></li>
            <li><a href="#" class="page-numbers">5</a></li>
            <li><a href="#" class="next page-numbers">→</a></li>
        </ul>
        <!-- .page-numbers -->
    </nav>
    <!-- .woocommerce-pagination -->
</div>
<!-- .shop-control-bar-bottom -->