<?php

use common\models\Payment;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var common\models\PaymentSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Payments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="payment-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Payment', ['create'], ['class' => 'btn-fill-md radius-4 text-light bg-light-sea-green']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            [
                'attribute'=>'order_id',
                'value'=>'order.id',
                'filter'=>\yii\helpers\ArrayHelper::map(\common\models\Order::find()->all(),'id','id')
            ],
            'amount',
            [
                'attribute'=>'payment_system_id',
                'value'=>'paymentSystem.name',
                'filter'=>\yii\helpers\ArrayHelper::map(\common\models\PaymentSystem::find()->all(),'id','name')
            ],
            'transaction_id',
            //'created_at',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Payment $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
