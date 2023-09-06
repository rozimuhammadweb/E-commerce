<?php

use common\models\Brand;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap5\Breadcrumbs;


/** @var yii\web\View $this */
/** @var common\models\BrandSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Brands';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card height-auto">

<div class="row">

<h2><?= Html::encode($this->title) ?></h2>
<?=
Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
])
?>

    <p>
        <?= Html::a('Create Brand', ['create'], ['class' => 'btn-fill-md radius-4 text-light bg-light-sea-green']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="card-body">
        <?= GridView::widget(['dataProvider' => $dataProvider, 
        'filterModel' => $searchModel, 
        'columns' => [['class' => 'yii\grid\SerialColumn'],
            
        

            'id', 'name', 'logo', 'short_name', ['class' => ActionColumn::className(), 'urlCreator' => function ($action, Brand $model, $key, $index, $column) {
                return Url::toRoute([$action, 'id' => $model->id]);
            },'buttons' => [
                'view' => function ($url, $model, $key) {
                    return  Html::a('<i class="fas fa-eye"></i>', $url, [
                        'title' => Yii::t('app', 'View'),
                        'class' => 'btn btn-sm btn-primary', // Bootstrap classes
                        'style' => 'margin-right:5px;' // Inline style
                    ]);
                },
                'update' => function ($url, $model, $key) {
                  return  Html::a('<i class="fas fa-edit"></i>', $url, [
                        'title' => Yii::t('app', 'Update'),
                        'class' => 'btn btn-sm btn-success', // Bootstrap classes
                        'style' => 'margin-right:5px;' // Inline style
                    ]);
                },
                'delete' => function ($url, $model, $key) {
                    return  Html::a('<i class="fas fa-trash"></i>', $url, [
                        'title' => Yii::t('app', 'Delete'),
                        'class' => 'btn btn-sm btn-danger', // Bootstrap classes
                        'data-confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                        'data-method' => 'post',
                        'style' => 'margin-right:5px;' // Inline style
                    ]);
                },
            ]],],]); ?>

        <?php Pjax::end(); ?>

    </div>
    </div>
</div>
