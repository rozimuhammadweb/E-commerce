<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\MetaTag $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="meta-tag-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'product_id')->textInput() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'og_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'og_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'og_image_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'twitter_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'twitter_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'twitter_image_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'canonical_url')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn-fill-md radius-4 text-light bg-light-sea-green']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
