<?php

use common\models\Customer;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var common\models\CustomerSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Customers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Customer', ['create'], ['class' => 'btn-fill-md radius-4 text-light bg-light-sea-green']) ?>
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
                'class' => 'yii\grid\DataColumn',
                'format' => 'html', // Treat the content as HTML
                'label' => 'Image',
                'value' => function ($model) {
                    if ($model->customer_image) {
                        $imagePath = Yii::getAlias('@web/uploads/customerImage/') . $model->customer_image->filename;
                        return Html::img($imagePath, ['width' => '80px']);
                    } else {
                        return Html::img('@web/uploads/customerImage/placeholder-image.jpg', ['width' => '80px']); // You can specify a placeholder image
                    }
                },
            ],
            [
                    'attribute'=>'customer_user_id',
                'value'=>'customerUser.username',
                'filter'=>\yii\helpers\ArrayHelper::map(\common\models\CustomerUser::find()->all(),'id','username')
            ],
            'first_name',
            'last_name',
            'middle_name',
            //'gender',
            //'birth_date',
            //'registered_at',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Customer $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
