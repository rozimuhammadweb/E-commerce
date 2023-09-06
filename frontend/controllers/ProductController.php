<?php

namespace frontend\controllers;

use common\models\Product;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class ProductController extends Controller
{
    public function actionIndex()
    {
        $this->layout = 'product';
        $query = Product::find()->where(['status' => 1]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 20,
                'totalCount' => $query->count()
            ],
        ]);
        return $this->render('index' , [
            'dataProvider' => $dataProvider
        ]);
    }

}