<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\OrderDetail $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="order-detail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php $data = \yii\helpers\ArrayHelper::map(\common\models\Order::find()->all(),'id','id')?>
    <?= $form->field($model, 'order_id')->dropDownList($data,['prompt'=>'Select']) ?>

    <?php $data = \yii\helpers\ArrayHelper::map(\common\models\Product::find()->all(),'id','title') ?>
    <?= $form->field($model, 'product_id')->dropDownList($data,['prompt'=>'Select']) ?>

    <?= $form->field($model, 'count')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn-fill-md radius-4 text-light bg-light-sea-green']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
