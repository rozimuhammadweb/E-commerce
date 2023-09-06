<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Banner $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="banner-form">
<div class="row">
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <div class="row">
    <div class="col-lg-4   form-group">
        <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-lg-4 form-group pt-5 ml-5">
        <?= $form->field($model, 'status')->radioList([
            '1' => 'Faol',
            '0' => 'Faol emas'
        ]) ?>
    </div>
        <div class="col-lg-4  form-group ">
            <?= $form->field($model, 'imageFile')->fileInput() ?>

        </div>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success px-5 py-2']) ?>
    </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
