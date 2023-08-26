<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "/css/normalize.css",
        "/css/main.css",
        "/css/bootstrap.min.css",
        "/css/all.min.css",
        "/fonts/flaticon.css",
        "/css/fullcalendar.min.css",
        "/css/animate.min.css",
        "/css/style.css",
    ];
    public $js = [
        "/js/modernizr-3.6.0.min.js",
//         "/js/jquery-3.3.1.min.js",
        "/js/plugins.js",
        "/js/popper.min.js",
        "/js/bootstrap.min.js",
        "/js/jquery.counterup.min.js",
        "/js/moment.min.js",
        "/js/jquery.waypoints.min.js",
        "/js/jquery.scrollUp.min.js",
        "/js/fullcalendar.min.js",
        "/js/Chart.min.js",
        "/js/main.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
