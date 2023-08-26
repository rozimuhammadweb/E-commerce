<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\PaymentSystem $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="payment-system-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn-fill-md radius-4 text-light bg-light-sea-green']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
