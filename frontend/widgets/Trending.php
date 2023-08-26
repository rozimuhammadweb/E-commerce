<?php

namespace frontend\widgets;

use yii\base\Widget;

class Trending extends Widget
{
    public function run()
    {
        return $this->render('trending');
 }
}