<?php

namespace frontend\widgets;

use yii\base\Widget;

class ProductSidebar extends Widget
{
    public function run()
    {
        return $this->render('product-sidebar');
    }
}