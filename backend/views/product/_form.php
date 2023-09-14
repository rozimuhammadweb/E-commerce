<?php

use kartik\file\FileInput;
use kartik\select2\Select2;
use wbraganca\dynamicform\DynamicFormWidget;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Product $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin( ['options' => ['enctype' => 'multipart/form-data']]); ?>


            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                                <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

                                <?= $form->field($model, 'price')->textInput() ?>
                            <div class="dynamic_form">
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">

                                <?= $form->field($model, 'image')->fileInput() ?>

                                <?php

                                    echo $form->field($model, 'brand_id')->widget(Select2::classname(), [
                                        'data' => \yii\helpers\ArrayHelper::map($model->brands , 'id' , 'name'),
                                        'options' => ['placeholder' => 'Brandni tanlang ...'],
                                        'pluginOptions' => [
                                            'allowClear' => true
                                        ],
                                    ]);
                                ?>

                                <?php

                                echo $form->field($model, 'category_id')->widget(Select2::classname(), [
                                    'data' => \yii\helpers\ArrayHelper::map($model->getCategories() , 'id' , 'name'),
                                    'options' => ['placeholder' => 'Categoriyani tanlang ...'],
                                    'pluginOptions' => [
                                        'allowClear' => true
                                    ],
                                ]);
                                ?>


                                <?= $form->field($model, 'SKU')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'status')->radioList([
                                    '1'=>'Faol',
                                    '0'=>'Faol emas'
                                ])?>
                                <div class="file_input">
                                    <?php
                                        echo '<label class="control-label">Add Attachments</label>';
                                        echo FileInput::widget([
                                            'model' => $model,
                                            'attribute' => 'gallery[]',
                                            'options' => ['multiple' => true]
                                    ]);
                                    ?>
                                </div>

                                <?php if(!empty($prImages)): ?>

                                    <div class="panel panel-default p-3">
                                        <h4>Tovar rasmlari</h4>
                                        <table class="table table-bordered table-striped">
                                            <tbody>
                                            <?php foreach ($prImages as $galleryImage): ?>

                                                <tr>
                                                    <td style="padding: 20px;vertical-align: middle;"><img style="max-width: 60px;" src="<?=Yii::$app->params['frontend'] . Yii::$app->params['uploads_url']  ?>/product-images/<?=$galleryImage->product_id?>/m_<?=$galleryImage->image?>" alt=""></td>
                                                    <td style="padding: 20px;vertical-align: middle;">
                                                        <a href="<?=\yii\helpers\Url::to(['product/del-item','id'=>$galleryImage->id])?>" class="btn btn-danger rem">O'chirish</a>
                                                    </td>
                                                </tr>

                                            <?php endforeach; ?>

                                            </tbody>
                                        </table>
                                    </div>
                                <?php else: ?>

                                <?php endif; ?>


                            </div>
                        </div>
                </div>
            </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<script>
    var buttons = document.querySelectorAll('.rem');
    for(let i=0;i<buttons.length;i++){
        buttons[i].addEventListener('click',function(e){
            let del = confirm("Rostdan ham o'chirilsinmi?");
            if(!del){
                e.preventDefault();
                return false;
            }
        })
    }
</script>