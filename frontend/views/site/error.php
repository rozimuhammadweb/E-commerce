<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception $exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error pt-5">
    <div class="error404 pt-5">
        <div class="info-404">
            <h2 class="title">404!</h2>
            <p class="lead error-text">Oops! That page can’t be found.</p>
            <p class="lead">Nothing was found at this location. Try searching, or check out the links below.</p>
            <div class="sub-form-row">
                <div class="widget woocommerce widget_product_search">
                    <form class="search-form">
                        <input type="text" placeholder="Search products...">
                        <button class="btn-primary border-5" type="button">Search</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- .sub-form-row -->
    </div>
    <!-- .error404 -->


</div>
