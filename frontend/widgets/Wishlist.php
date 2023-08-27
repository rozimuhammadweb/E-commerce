<?php

namespace frontend\widgets;

use yii\base\Widget;

class Wishlist extends Widget
{
    public function run()
    {
        return $this->render('wishlist');
 }
}