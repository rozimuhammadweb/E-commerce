<section class="section-products-carousel new-arrival-carousel" id="section-products-carousel-7">
    <header class="section-header">
        <h2 class="section-title">Yangi kelganlar</h2>
        <nav class="custom-slick-nav"></nav>
    </header>
    <!-- .section-header -->
    <div class="products-carousel 7-column-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#section-products-carousel-7 .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:779,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1600,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
        <div class="container-fluid">
            <div class="woocommerce columns-7">
                <div class="products">
                    <?php if (!empty($models)): ?>
                        <?php foreach ($models as $model): ?>
                            <?php
                            $image = \common\components\StaticFunctions::getImage($model, 'product', 'image');
                            ?>
                            <div class="product">
                                <div class="yith-wcwl-add-to-wishlist">
                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                </div>
                                <a href="single-product-fullwidth.html" class="woocommerce-LoopProduct-link">
                                    <img src="<?= $image ?>" width="200" height="150" class="wp-post-image" alt="">
                                    <span class="price"> <ins><span class="amount"> </span></ins> <span class="amount"> <?= $model->price?> </span>so'm</span>
                                    <!-- /.price -->
                                    <h2 class="woocommerce-loop-product__title"><?= $model->description?></h2>
                                </a>
                                <div class="hover-area">
                                    <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Savatga Qo'shish</a>
                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <!-- .woocommerce -->
        </div>
        <!-- .row -->
    </div>
    <!-- .products-carousel -->
</section>
<!-- .section-products-carousel -->
<div class="fullwidth-notice stretch-full-width">
    <div class="col-full pt-4">
        <p class="message">Yangi dasturimizni yuklab oling! Faqat mobil qurilmalar uchun takliflarimizni o'tkazib yubormang va Android Play bilan yuklab qiling.</p>
    </div>
    <!-- .col-full -->
</div>