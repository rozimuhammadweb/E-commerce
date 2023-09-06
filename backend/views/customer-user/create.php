<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\CustomerUser $model */

$this->title = 'Create Customer User';
$this->params['breadcrumbs'][] = ['label' => 'Customer Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-user-create">

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