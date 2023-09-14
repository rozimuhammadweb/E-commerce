<?php

namespace frontend\widgets;

use common\models\Banner;
use yii\base\Widget;

class Carousel extends Widget
{
    public function run()
    {
        $banner = Banner::find()->where(['status' => 1])->all();
        return $this->render('carousel', ['banner' => $banner]);
    }



}