<?php

use common\models\MetaTag;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var common\models\MetaTagSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Meta Tags';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="meta-tag-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Meta Tag', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'product_id',
            'title',
            'description:ntext',
            'keywords',
            //'og_title',
            //'og_description:ntext',
            //'og_image_url:url',
            //'twitter_title',
            //'twitter_description:ntext',
            //'twitter_image_url:url',
            //'canonical_url:url',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MetaTag $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
