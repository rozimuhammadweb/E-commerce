<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;


/** @var yii\web\View $this */
/** @var common\models\Product $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?php $data = \yii\helpers\ArrayHelper::map($model->getCategories(), 'id', 'name');
    echo $form->field($model, 'category_id')->dropdownList($data,
        ['prompt' => 'Select']
    );?>

    <?php $data = \yii\helpers\ArrayHelper::map($model->getBrands(), 'id', 'name');
    echo $form->field($model, 'brand_id')->dropdownList($data,
        ['prompt' => 'Select']
    );?>

    <?= $form->field($model, 'SKU')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'specification')->textInput() ?>

    <?= $form->field($model, 'status')->checkbox() ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'imageFile')->fileInput(['multiple' => true,'accept' => 'image/*']) ?>

    <?= $form->field($model, 'created_at')->textInput(['type' => 'date', 'value' => date('Y-m-d')]) ?>

    <?= $form->field($model, 'updated_at')->textInput(['type' => 'date', 'value' => date('Y-m-d')]) ?>

    <?= $form->field($model, 'deleted_at')->textInput(['type' => 'date', 'value' => date('Y-m-d')]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn-fill-md radius-4 text-light bg-light-sea-green']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
