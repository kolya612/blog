<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $sourcePath = '@frontend/../slice/dist';
//    public $basePath = '@webroot';
//    public $baseUrl = '@web';
    public $css = [
        'styles/plugins/normalize.css',
        'styles/plugins/bootstrap.min.css',
        'styles/plugins/owl.carousel.css',
        'styles/plugins/owl.theme.default.css',
        'styles/style.min.css',
    ];
    public $js = [
        "https://kit.fontawesome.com/0148f7d94a.js",
        "scripts/plugins/bootstrap.bundle.min.js",
        "scripts/plugins/owl.carousel.js",
        "scripts/script.min.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
