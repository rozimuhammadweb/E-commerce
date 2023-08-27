<?php

namespace frontend\widgets;

use yii\base\Widget;

class TrackYourOrder extends Widget
{
    public function run()
    {
        return $this->render('track-your-order');
}
}