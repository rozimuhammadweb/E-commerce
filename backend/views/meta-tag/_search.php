<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\MetaTagSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="meta-tag-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'product_id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'keywords') ?>

    <?php // echo $form->field($model, 'og_title') ?>

    <?php // echo $form->field($model, 'og_description') ?>

    <?php // echo $form->field($model, 'og_image_url') ?>

    <?php // echo $form->field($model, 'twitter_title') ?>

    <?php // echo $form->field($model, 'twitter_description') ?>

    <?php // echo $form->field($model, 'twitter_image_url') ?>

    <?php // echo $form->field($model, 'canonical_url') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
