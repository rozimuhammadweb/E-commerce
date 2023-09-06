<?php

use common\models\Category;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var common\models\CategorySearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Category', ['create'], ['class' => 'btn-fill-md radius-4 text-light bg-light-sea-green']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'PID',
            'name',
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
            [
                'class' => 'yii\grid\DataColumn',
                'format' => 'html',
                'label' => 'Image',
                'value' => function ($model) {
                    if ($model->image) {
                        $imagePath = Yii::getAlias('@web/uploads/CategoryImage/') . $model->image;
                        return Html::img($imagePath, ['width' => '80px']);
                    } else {
                        return Html::img('@web/uploads/BannerImage/placeholder-image.jpg', ['width' => '80px']);
                    }
                },
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Category $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
