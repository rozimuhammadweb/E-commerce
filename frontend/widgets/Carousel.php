<?php

namespace frontend\widgets;

use yii\base\Widget;

class Carousel extends Widget
{
    public function run()
    {
        return $this->render('carousel');
 }
}