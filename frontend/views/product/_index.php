<?php
$image = \common\components\StaticFunctions::getImage($model, 'product', 'imageFile');
?>
<div class="yith-wcwl-add-to-wishlist">
    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
</div>
<!-- .yith-wcwl-add-to-wishlist -->
<a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="single-product-fullwidth.html">
    <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image"
         src="https://images.uzum.uz/cj6vr4t6sfhggrk1nvq0/t_product_540_high.jpg#1694086342066">
    <span class="price"><span class="woocommerce-Price-amount amount"><?= $model->price ?></span><span
            class="woocommerce-Price-currencySymbol">so'm</span> </span>
    <h2 class="woocommerce-loop-product__title"><?= $model->title ?></h2>
</a>
<div class="techmarket-product-rating">
    <div title="Rated 5.00 out of 5" class="star-rating"><span style="width:100%"><strong class="rating">5.00</strong> out of 5</span>
    </div>
    <span class="review-count">(1)</span>
</div>
<!-- .techmarket-product-rating -->
<span class="sku_wrapper">SKU:
                                                        <span class="sku"><?= $model->SKU ?></span>
                                                    </span>

<!-- .woocommerce-product-details__short-description -->
<a class="button product_type_simple add_to_cart_button" href="cart.html">Add to cart</a>
<a class="add-to-compare-link" href="compare.html">Add to compare</a>
