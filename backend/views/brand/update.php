<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Brand $model */

$this->title = 'Update Brand: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Brands', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="brand-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if ($model->logo): ?>
        <div class="current-image">
            <?= Html::img(Yii::getAlias('@web/uploads/BrandImage/') . $model->logo, ['class' => 'img-thumbnail', 'alt' => 'Current Image', 'style' => 'max-width: 300px;']) ?>
        </div>
    <?php endif; ?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
