<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\CustomerAddress $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="customer-address-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php $data = \yii\helpers\ArrayHelper::map(\common\models\Customer::find()->all(), 'id', 'fullName');
    echo $form->field($model, 'customer_id')->dropdownList($data,
        ['prompt'=>'Select']
    );?>

    <?php $data = \yii\helpers\ArrayHelper::map(\common\models\Region::find()->all(), 'id', 'name_uz');
    echo $form->field($model, 'region_id')->dropdownList($data,
        ['prompt'=>'Select']
    );?>

    <?php $data = \yii\helpers\ArrayHelper::map(\common\models\District::find()->all(), 'id', 'name_uz');
    echo $form->field($model, 'district_id')->dropdownList($data,
        ['prompt'=>'Select']
    );?>

    <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'zipcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_number')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn-fill-md radius-4 text-light bg-light-sea-green']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
