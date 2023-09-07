<?php

/** @var \yii\web\View $this */
/** @var string $content */

use frontend\assets\AppAsset;
use yii\bootstrap5\Html;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="woocommerce-active left-sidebar ">
    <?php $this->beginBody() ?>
    <div id="page" class="hfeed site">
        <?= \frontend\widgets\ProductHeader::widget()?>
        <div id="content" class="site-content" tabindex="-1">
            <div class="col-full">
                <div class="row">
                    <div id="primary" class="content-area">
                        <main id=" main" class="site-main">
                            <?=$content?>
                        </main>
                    </div>
                    <?=\frontend\widgets\ProductSidebar::widget()?>
                </div>
            </div>
        </div>

        <?= \frontend\widgets\Footer::widget()?>
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
