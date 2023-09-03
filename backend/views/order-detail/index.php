<?php

use common\models\OrderDetail;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var common\models\OrderDetailSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Order Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-detail-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Order Detail', ['create'], ['class' => 'btn-fill-md radius-4 text-light bg-light-sea-green']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute'=>'order_id',
                'value'=>'order.id',
                'filter'=>\yii\helpers\ArrayHelper::map(\common\models\Order::find()->all(),'id','id')
            ],
            [
                'attribute'=>'product_id',
                'value'=>'product.title',
                'filter'=>\yii\helpers\ArrayHelper::map(\common\models\Product::find()->all(),'id','title')
            ],
            'count',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, OrderDetail $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'order_id' => $model->order_id, 'product_id' => $model->product_id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
