<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\CustomerUser $model */

$this->title = 'Update Customer User: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Customer Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="customer-user-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">

<?=
\yii\bootstrap5\Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
])
?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>