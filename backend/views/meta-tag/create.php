<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\MetaTag $model */

$this->title = 'Create Meta Tag';
$this->params['breadcrumbs'][] = ['label' => 'Meta Tags', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="meta-tag-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
