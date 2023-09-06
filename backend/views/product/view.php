<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Product $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'description:ntext',
            'category_id',
            'brand_id',
            'SKU',
            'specification',
            [
                'attribute' => 'status',
                'value' => function($model) {
                    return $model->status == -1 ? 'In Active' : 'Active';
                }
            ],
            'price',
            'created_at',
            'updated_at',
            'deleted_at',
        ],
    ]) ?>

</div>



<?php foreach ($model->getProductImages()->all() as $productImage): ?>
    <img style="width: 100px;" src="<?= Yii::getAlias('@web') ?>/uploads/productImage/<?= $productImage->image ?>">
<?php endforeach; ?>








