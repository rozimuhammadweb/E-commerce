<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var \frontend\models\SignupForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <div class="u-column2 col-5">
        <h1>Signup</h1>
        <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
        <p class="before-register-text">
            Please fill out the following fields to signup:
        </p>
        <p class="form-row form-row-wide">
            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
        </p>
        <p class="form-row form-row-wide">
            <?= $form->field($model, 'email') ?>
        </p>
        <p class="form-row form-row-wide">
            <?= $form->field($model, 'password')->passwordInput() ?>
        </p>
        <p class="form-row">
            <input type="submit" class="woocommerce-Button button" name="register" value="Register"/>
        </p>
        <div class="form-group">
            <?= Html::submitButton('Signup', ['class' => 'btn btn-primary px-5', 'name' => 'signup-button']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
