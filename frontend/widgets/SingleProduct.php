<?php

namespace frontend\widgets;

use yii\base\Widget;

class SingleProduct extends Widget
{
    public function run()
    {
        return $this->render('single-product');
  }
}