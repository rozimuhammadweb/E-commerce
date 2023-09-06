<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\PaymentMethod $model */

$this->title = 'Create Payment Method';
$this->params['breadcrumbs'][] = ['label' => 'Payment Methods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="payment-method-create">

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

</div></div>
