<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\CustomerUser $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="customer-user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'confirmation_code')->textInput() ?>

    <?= $form->field($model, 'status')->radioList([
        '1'=>'ACTIVE',
        '0'=>'INACTIVE'
    ])?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn-fill-md radius-4 text-light bg-light-sea-green']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
