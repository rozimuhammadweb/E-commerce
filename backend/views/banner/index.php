<?php

use common\models\Banner;
use yii\bootstrap5\Breadcrumbs;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var common\models\BannerSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Banners';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banner-index">
    <div class="row">

    <h2><?= Html::encode($this->title) ?></h2>
    <?=
    Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ])
    ?>
    <p>
        <?= Html::a('Create Banner', ['create'], ['class' => 'btn-fill-sm btn-gradient-yellow btn-hover-bluedark']) ?>
    </p>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'url:url',
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
                        $imagePath = Yii::getAlias('@web/uploads/BannerImage/') . $model->image;
                        return Html::img($imagePath, ['width' => '80px']);
                    } else {
                        return Html::img('@web/uploads/BannerImage/placeholder-image.jpg', ['width' => '80px']);
                    }
                },
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Banner $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                },
                'buttons' => [
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
                ]
            ]

        ],
    ]); ?>

    <?php Pjax::end(); ?>
    </div>
</div>
