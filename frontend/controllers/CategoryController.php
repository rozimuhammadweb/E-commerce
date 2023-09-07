<?php

namespace frontend\controllers;

use common\models\Category;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class CategoryController extends Controller
{
    public function actionIndex()
    {
        $query = Category::find()->where(['status' => 1]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
                'totalCount' => $query->count()
            ],
        ]);
        return $this->render('index' , [
            'dataProvider' => $dataProvider
        ]);
    }
}