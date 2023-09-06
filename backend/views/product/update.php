<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Product */
/* @var $productImages common\models\ProductImage[] */

$this->title = 'Update Product: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';

?>

<div class="product-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?php $data = \yii\helpers\ArrayHelper::map($model->getCategories(), 'id', 'name');
    echo $form->field($model, 'category_id')->dropdownList($data,
        ['prompt' => 'Select']
    ); ?>

    <?php $data = \yii\helpers\ArrayHelper::map($model->getBrands(), 'id', 'name');
    echo $form->field($model, 'brand_id')->dropdownList($data,
        ['prompt' => 'Select']
    ); ?>

    <?= $form->field($model, 'SKU')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'specification')->textInput() ?>

    <?= $form->field($model, 'status')->radioList([
        '1' => 'ACTIVE',
        '0' => 'INACTIVE'
    ]) ?>

    <?= $form->field($model, 'price')->textInput() ?>


<?= $form->field($model, 'created_at')->textInput(['type' => 'date', 'value' => date('Y-m-d')]) ?>

    <?= $form->field($model, 'updated_at')->textInput(['type' => 'date', 'value' => date('Y-m-d')]) ?>

<?= $form->field($model, 'deleted_at')->textInput(['type' => 'date', 'value' => date('Y-m-d')]) ?>

    <!-- Other product attributes and fields -->

    <!-- Display and manage related product images -->
 

    <!-- Add a new product image input field (if needed) -->

    <div class="form-group">
        <?= Html::submitButton('Update', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

