<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\PaymentMethod $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="payment-method-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php $data = \yii\helpers\ArrayHelper::map(\common\models\Customer::find()->all(),'id','fullName')?>
    <?= $form->field($model, 'customer_id')->dropDownList($data,['prompt'=>'Tanlang']) ?>

    <?= $form->field($model, 'card_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'card_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'card_expire_date')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn-fill-md radius-4 text-light bg-light-sea-green']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
