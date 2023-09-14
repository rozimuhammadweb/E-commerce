<?php
$image = \common\components\StaticFunctions::getImage($model, 'product', 'image');
?>
<div class="yith-wcwl-add-to-wishlist">
    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
</div>
<a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="single-product-fullwidth.html">
    <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image"
         src="<?= $image?>">
    <span class="price"><span class="woocommerce-Price-amount amount"><?= $model->price ?></span><spanclass="woocommerce-Price-currencySymbol">so'm</span> </span>
    <h2 class="woocommerce-loop-product__title"><?=\common\components\StaticFunctions::getPartOfText($model->title , 30) ?></h2>
</a>
<div class="techmarket-product-rating">
    <div title="Rated 5.00 out of 5" class="star-rating"><span style="width:100%"><strong class="rating">5.00</strong> out of 5</span></div><span class="review-count">(1)</span>
</div>
<span class="sku_wrapper">SKU:span class="sku"><?= $model->SKU ?></span> </span>
<a class="button product_type_simple add_to_cart_button" href="cart.html">Savatga Qo'shish</a>
