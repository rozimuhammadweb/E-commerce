<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Category $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php $data = \yii\helpers\ArrayHelper::map(\common\models\Category::find()->all(),'id','name')?>
    <?= $form->field($model, 'PID')->dropDownList($data,['prompt'=>'Select']) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->radioList([
        '1'=>'Faol',
        '0'=>'Faol emas'
    ])?>

    <?= $form->field($model, 'imageFile')->fileInput(['multiple' => true,'accept' => 'image/*']) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn-fill-md radius-4 text-light bg-light-sea-green']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
