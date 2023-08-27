<?php

namespace frontend\widgets;

use yii\base\Widget;

class RecentlyViewed extends Widget
{
    public function run()
    {
        return $this->render('recentlyViewed');
}
}