<?php

namespace frontend\widgets;

use yii\base\Widget;

class BrandsCarousel extends Widget
{
    public function run()
    {
        return $this->render('brands-carousel');
}
}