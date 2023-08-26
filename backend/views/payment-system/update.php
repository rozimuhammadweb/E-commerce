<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\PaymentSystem $model */

$this->title = 'Update Payment System: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Payment Systems', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="payment-system-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
