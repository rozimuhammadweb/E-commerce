<?php

use yii\bootstrap5\Breadcrumbs;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Banner $model */

$this->title = 'Update Banner: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Banners', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="banner-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <?=
    Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ])
    ?>
    <?php if ($model->image): ?>
        <div class="current-image">
            <?= Html::img(Yii::getAlias('@web/uploads/BannerImage/') . $model->image, ['class' => 'img-thumbnail', 'alt' => 'Current Image', 'style' => 'max-width: 300px;']) ?>
        </div>
    <?php endif; ?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>


</div>
