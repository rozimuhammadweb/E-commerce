<?php

namespace frontend\widgets;

use yii\base\Widget;

class Card extends Widget
{
    public function run()
    {
         return $this->render('card');
 }
}