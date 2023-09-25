<?php

use common\models\Product;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var common\models\ProductSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
//            'description:ntext',
//            'category_id',
            [
                'attribute'=>'category_id',
                'value'=>'category.name',
                'filter'=>\yii\helpers\ArrayHelper::map(\common\models\Category::find()->all(),'id','name')
            ],
            [
                'attribute'=>'brand_id',
                'value'=>'brand.name',
                'filter'=>\yii\helpers\ArrayHelper::map(\common\models\Brand::find()->all(),'id','name')
            ],
//            'brand_id',
            //'SKU',
            [
                'attribute' => 'status',
                'format' => 'raw', // because we're returning HTML content
                'value' => function ($model) {
                    if ($model->status == 0) {
                        return Html::tag('span', 'Faol emas', ['class' => 'label text-danger']);
                    } else {
                        return Html::tag('span', 'Faol', ['class' => 'label text-success']);
                    }
                },
            ],
            //'price',
            //'created_at',
            //'updated_at',
            //'deleted_at',
            //'slug',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Product $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
