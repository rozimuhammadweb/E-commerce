<?php

namespace frontend\controllers;

use common\models\Category;
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
        ]);
        return $this->render('index' , [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionCategory($id)
    {
        $d = Product::find()->where(['status' => 1 , 'category_id' => $id])->all();
//        echo "<pre>";
//        print_r($d);
//        echo "</pre>";
//        exit();
        $this->layout = 'product';
        $query = Product::find()->where(['status' => 1 , 'category_id' => $id]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $this->render('index' , [
            'dataProvider' => $dataProvider
        ]);
        return $this->render('category' , [
            'dataProvider' => $dataProvider
        ]);
    }
}