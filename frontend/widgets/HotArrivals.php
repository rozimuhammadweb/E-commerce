<?php

namespace frontend\widgets;

use yii\base\Widget;

class HotArrivals extends Widget
{
    public function run()
    {
        return $this->render('hot-arrivals');
}
}