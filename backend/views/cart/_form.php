<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Cart $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="cart-form">

    <?php $form = ActiveForm::begin(); ?>

<!--    --><?php //= $form->field($model, 'product_id')->textInput() ?>
    <?php $data = \yii\helpers\ArrayHelper::map(\common\models\Product::find()->all(), 'id', 'title');
    echo $form->field($model, 'product_id')->dropdownList($data,
        ['prompt'=>'Select']
    );?>

    <?= $form->field($model, 'count')->textInput() ?>

    <?= $form->field($model, 'session')->textInput(['maxlength' => true]) ?>

    <?php $data = \yii\helpers\ArrayHelper::map(\common\models\User::find()->all(),'id','username')?>
    <?= $form->field($model, 'user_id')->dropDownList($data,
    ['prompt'=>'Select']) ?>

    <?= $form->field($model, 'added_at')->textInput(['type' => 'date', 'value' => date('Y-m-d')]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn-fill-md radius-4 text-light bg-light-sea-green']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
