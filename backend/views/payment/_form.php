<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Payment $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="payment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php $data = \yii\helpers\ArrayHelper::map(\common\models\Order::find()->all(),'id','id')?>
    <?= $form->field($model, 'order_id')->dropDownList($data,['prompt'=>'Select']) ?>

    <?= $form->field($model, 'amount')->textInput() ?>

    <?php $data = \yii\helpers\ArrayHelper::map(\common\models\PaymentSystem::find()->all(),'id','name')?>
    <?= $form->field($model, 'payment_system_id')->dropDownList($data,['prompt'=>'Select']) ?>

    <?= $form->field($model, 'transaction_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput(['type' => 'date', 'value' => date('Y-m-d')]) ?>

<<<<<<< HEAD
    <?= $form->field($model, 'status',
        [
            'template' => '<label>Status<span class="login-danger">*</span></label>{input}',
        ])->radioList(
        [
            '1' => 'Active',     // Use 10 for Active
            '-1' => 'In Active', // Use -10 for In Active
        ],
        [
            'item' => function ($index, $label, $name, $checked, $value) {
                return Html::radio($name, $checked, [
                    'value' => $value,
                    'label' => '<label>' . Html::encode($label) . '</label>',
                    'class' => 'radio-inline'
                ]);
            }
        ]
    ) ?>
=======
    <?= $form->field($model, 'status')->radioList([
        '1'=>'ACTIVE',
        '0'=>'INACTIVE'
    ])?>
>>>>>>> 91274e90ed65c120cc6eff4d3ec3ba906eff6c04

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn-fill-md radius-4 text-light bg-light-sea-green']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
