<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\OrderDetail $model */

$this->title = 'Create Order Detail';
$this->params['breadcrumbs'][] = ['label' => 'Order Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-detail-create">

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
