<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        '/css/site.css',
        '/css/bootstrap.min.css',
        '/css/font-awesome.min.css',
        '/css/bootstrap-grid.min.css',
        '/css/bootstrap-reboot.min.css',
        '/css/font-techmarket.css',
        '/css/slick.css',
        '/css/techmarket-font-awesome.css',
        '/css/slick-style.css',
        '/css/animate.min.css',
        '/css/colors/blue.css',
        "https://fonts.googleapis.com/css?family=Rubik:300,400,500,900",
        '/css/style.css',
    ];
    public $js = [
        "/js/jquery.min.js",
        "/js/tether.min.js",
        "/js/bootstrap.min.js",
        "/js/jquery-migrate.min.js",
        "/js/hidemaxlistitem.min.js",
        "/js/jquery-ui.min.js",
        "/js/hidemaxlistitem.min.js",
        "/js/jquery.easing.min.js",
        "/js/scrollup.min.js",
        "/js/jquery.waypoints.min.js",
        "/js/waypoints-sticky.min.js",
        "/js/pace.min.js",
        "/js/slick.min.js",
        "/js/scripts.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap5\BootstrapAsset',
    ];
}
