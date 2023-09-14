<?php

namespace frontend\widgets;

use common\models\Brand;
use yii\base\Widget;

class BrandsCarousel extends Widget
{
    public function run()
    {
        $brands = Brand::find()->all();
        return $this->render('brands-carousel', ['brands' => $brands]);
    }
}