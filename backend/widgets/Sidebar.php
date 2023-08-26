<?php

namespace backend\widgets;

use yii\base\Widget;

class Sidebar extends Widget
{
    public function run()
    {
        return $this->render('sidebar');
    }
}