<?php

//$image = \common\components\StaticFunctions::getImage($brands, 'brands', 'imageFile');
?>
<section class="brands-carousel">
    <h2 class="sr-only">Brands Carousel</h2>
    <div class="col-full" data-ride="tm-slick-carousel" data-wrap=".brands"

         data-slick="{&quot;autoplay&quot;:true,&quot;autoplaySpeed&quot;:1000,&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;responsive&quot;:[{&quot;breakpoint&quot;:400,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:800,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}"><div class="brands">
            <?php if (!empty($brands)): ?>

                <?php foreach ($brands as $brand): ?>
                    <?php
                    $image = \common\components\StaticFunctions::getImage($brand, 'Brands', 'logo')
                    ?>
                    <div class="item">
                        <a href="<?= \yii\helpers\Url::to(['/shop/brand', 'id' => $brand->id]) ?>">
                            <img width="100" height="50" class="img-responsive desaturate"
                                 alt="<?= \yii\helpers\Html::encode($brand->name) ?>" src="<?= $image ?>">
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
    <!-- .col-full -->
</section>
<!-- .brands-carousel -->