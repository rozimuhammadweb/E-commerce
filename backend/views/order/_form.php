<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Order $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    $data = \yii\helpers\ArrayHelper::map(\common\models\Customer::find()->all(),'id','fullName')
    ?>
    <?= $form->field($model, 'customer_id')->dropDownList($data,
    ['prompt'=>'Select']) ?>

    <?= $form->field($model, 'ordered_at')->textInput(['type' => 'date', 'value' => date('Y-m-d')]) ?>

    <?php
    $data = \yii\helpers\ArrayHelper::map(\common\models\CustomerAddress::find()->all(),'id','fullAddress')
    ?>
    <?= $form->field($model, 'customer_address_id')->dropDownList($data,
        ['prompt'=>'Select']) ?>

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

    <?= $form->field($model, 'required_at')->textInput(['type' => 'date', 'value' => date('Y-m-d')]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn-fill-md radius-4 text-light bg-light-sea-green']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
