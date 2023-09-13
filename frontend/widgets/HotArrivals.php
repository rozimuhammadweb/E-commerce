<?php

namespace frontend\widgets;

use common\models\Product;
use yii\base\Widget;

class HotArrivals extends Widget
{
    public function run()
    {
        $models = Product::find()->where(['status' => 1])->all();
        return $this->render('hot-arrivals' , [
            'models' => $models
        ]);
    }
}