<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var \common\models\LoginForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
<div class="woocommerce">
    <div class="customer-login-form">
        <div id="customer_login" class="u-columns col2-set">
            <div class="u-column1 col-1">
                <h2>Login</h2>
                <p class="form-row form-row-wide">

                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                </p>
                <p class="form-row form-row-wide">
                    <?= $form->field($model, 'password')->passwordInput() ?>
                </p>
                <div class="my-1 mx-0" style="color:#999;">
                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                    <br>
                    Need new verification email? <?= Html::a('Resend', ['site/resend-verification-email']) ?>
                </div>
                <p class="form-row">
                    <?= $form->field($model, 'rememberMe',)->checkbox() ?>
                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary px-5 ml-4 d-flex', 'name' => 'login-button']) ?>
                </div>
                </p>
                <!-- .woocommerce-form-login -->
            </div>
            <!-- .col-1 -->
        </div>
        <!-- .col2-set -->
    </div>
    <!-- .customer-login-form -->
</div>
<div class="u-column2 col-2 d-none ">
    <img src="https://i.pinimg.com/originals/e6/b4/f8/e6b4f891e962e231f2f023fe80ab37a1.png">
</div>
<?php $form = ActiveForm::end(); ?>
