<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Category $model */

$this->title = 'Update Category: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="category-update">
<div class="row">
<?=
\yii\bootstrap5\Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
])
?>

    <h1><?= Html::encode($this->title) ?></h1>
    <?php if ($model->image): ?>
        <div class="current-image">
            <?= Html::img(Yii::getAlias('@web/uploads/CategoryImage/') . $model->image, ['class' => 'img-thumbnail', 'alt' => 'Current Image', 'style' => 'max-width: 300px;']) ?>
        </div>
    <?php endif; ?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
