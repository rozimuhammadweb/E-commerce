<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\District $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="district-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php $data = \yii\helpers\ArrayHelper::map(\common\models\Region::find()->all(),'id','name_uz') ?>
    <?= $form->field($model, 'region_id')->dropDownList($data,
    ['prompt'=>'Select']
    ) ?>

    <?= $form->field($model, 'name_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn-fill-md radius-4 text-light bg-light-sea-green']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
