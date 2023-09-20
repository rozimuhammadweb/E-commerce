<?php

use yii\bootstrap5\Breadcrumbs;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Brand $model */

$this->title = 'Create Brand';
$this->params['breadcrumbs'][] = ['label' => 'Brands', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card height-auto pt-5">
    <div class="row">

        <?=
        Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ])
        ?>

        <div class="card-body">

            <h1><?= Html::encode($this->title) ?></h1>
            <?= $this->render('_form', ['model' => $model,]) ?>

        </div>
    </div>
</div>
