<?php

use yii\bootstrap5\Breadcrumbs;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Cart $model */

$this->title = 'Create Cart';
$this->params['breadcrumbs'][] = ['label' => 'Carts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cart-create">
<div class="row">

<?=
Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
])
?>

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
