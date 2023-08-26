<?php

namespace backend\widgets;

use yii\base\Widget;

class Dashboard extends Widget
{
    public function run()
    {
        return $this->render('dashboard');
    }
}