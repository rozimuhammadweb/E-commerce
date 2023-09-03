<?php

use common\models\CustomerAddress;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var common\models\CustomerAddressSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Customer Addresses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-address-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Customer Address', ['create'], ['class' => 'btn-fill-md radius-4 text-light bg-light-sea-green']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                    'attribute'=>'customer_id',
                'value'=>'customer.fullName',
                'filter'=>\yii\helpers\ArrayHelper::map(\common\models\Customer::find()->all(),'id','fullName')
            ],
            [
                    'attribute'=>'region_id',
                'value'=>'region.name_uz',
                'filter'=>\yii\helpers\ArrayHelper::map(\common\models\Region::find()->all(),'id','name_uz')
            ],
            [
                    'attribute'=>'district_id',
                'value'=>'district.name_uz',
                'filter'=>\yii\helpers\ArrayHelper::map(\common\models\District::find()->all(),'id','name_uz')
            ],
            'address:ntext',
            //'zipcode',
            //'phone_number',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, CustomerAddress $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
