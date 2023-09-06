<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use kartik\select2\Select2;
use kartik\switchinput\SwitchInput;
use mihaildev\ckeditor\CKEditor;
use wbraganca\dynamicform\DynamicFormWidget;
use yii\bootstrap5\ActiveForm as Bootstrap5ActiveForm;

// use kartik\widgets\FileInput;



/** @var yii\web\View $this */
/** @var common\models\Product $model */
/** @var yii\widgets\ActiveForm $form */

$js = '
jQuery(".dynamicform_wrapper").on("afterInsert", function(e, item) {
    jQuery(".dynamicform_wrapper .panel-title-address").each(function(index) {
        jQuery(this).html("Address: " + (index + 1))
    });
});

jQuery(".dynamicform_wrapper").on("afterDelete", function(e) {
    jQuery(".dynamicform_wrapper .panel-title-address").each(function(index) {
        jQuery(this).html("Address: " + (index + 1))
    });
});
';

$this->registerJs($js);

$css = <<<CSS
    .upload{
        display:none;
    }

    .label_image{
        width:200px;
        height:auto;
        object-fit:cover;
        cursor: pointer;
    }
  
  
CSS;

$this->registerCss($css);
?>

<div class="product-form">

    <?php $form = Bootstrap5ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-8">

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?=  $form->field($model, 'description')->widget(CKEditor::className(),[
                        'options' =>[
                            'rows' => 2,
                            'cols' => 6
                        ],
                        'editorOptions' => [
                            'inline' => false, //по умолчанию false
                        ],
                    ]);?>

    <?php $data = \yii\helpers\ArrayHelper::map($model->getCategories(), 'id', 'name');
    echo $form->field($model, 'category_id')->dropdownList($data,
        ['prompt' => 'Select']
    );?>

    <?php $data = \yii\helpers\ArrayHelper::map($model->getBrands(), 'id', 'name');
    echo $form->field($model, 'brand_id')->dropdownList($data,
        ['prompt' => 'Select']
    );?>

    <?= $form->field($model, 'SKU')->textInput(['maxlength' => true]) ?>

<!--    --><?php //= $form->field($model, 'specification')->textInput() ?>

    <?= $form->field($model, 'status')->widget(SwitchInput::classname(), [])?>


    <div class="dynamic_form" style="margin-top:30px;border:1px solid #ccc;padding:10px;border-radius:10px;">

        <?php
        DynamicFormWidget::begin([
       'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
            'widgetBody' => '.container-items', // required: css class selector
            'widgetItem' => '.item', // required: css class
            'limit' => 20, // the maximum times, an element can be cloned (default 999)
            'min' => 1, // 0 or 1 (default 1)
            'insertButton' => '.add-item', // css class
            'deleteButton' => '.remove-item', // css class
           'model' => $chars[0],
            'formId' => 'w0',
            'formFields' => [
                'atttribute',
                'value'
            ],
        ]); ?>
        <div class="container-items"><!-- widgetContainer -->
            <?php foreach ($chars as $i => $char): ?>
                <div class="item panel panel-default"><!-- widgetBody -->
                    <div class="panel-heading">
                        <div class="pull-right">
                            <button type="button" class="add-item btn btn-success btn-xs"><i class="fas fa-plus"></i></button>
                            <button type="button" class="remove-item btn btn-danger btn-xs"><i class="fas fa-minus"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <?php
                        // necessary for update action.
                        if (! $char->isNewRecord) {
                            echo Html::activeHiddenInput($char, "[{$i}]id");
                        }
                        ?>
                        <div class="row">
                            <div class="col-sm-6">
                                <?= $form->field($char, "[{$i}]atttribute")->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-sm-6">
                                <?= $form->field($char, "[{$i}]value")->textInput(['maxlength' => true]) ?>
                            </div>
                        </div><!-- .row -->

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php DynamicFormWidget::end(); ?>

    </div>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'imageFile')->fileInput() ?>

    <?= $form->field($model, 'created_at')->textInput(['type' => 'date', 'value' => date('Y-m-d')]) ?>



    <div class="div">
    <?php 
        echo '<label class="control-label">Add Attachments</label>';
        echo FileInput::widget([
            'model' => $model,
            'attribute' => 'gallery[]',
            'options' => ['multiple' => true]
        ]);
    ?>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn-fill-md radius-4 text-light bg-light-sea-green']) ?>
    </div>

    <?php Bootstrap5ActiveForm::end(); ?>

</div>
