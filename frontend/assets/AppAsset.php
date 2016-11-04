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
        'css/style.css',
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/owl.carousel.css',
        'css/responsive.css',
    ];
    public $js = [
        'js/bxslider.min.js',
        'js/jquery.easing.1.3.min.js',
        'js/jquery.sticky.js',
        'js/main.js',
        'js/owl.carousel.min.js',
        'js/script.slider.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
