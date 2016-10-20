<?php

namespace install\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{

    public $baseUrl = '@web';
    public $sourcePath = '@install/static';
    public $css = [
        'css/theme.min.css',
        'css/install.css',
        'css/awesome/font-awesome.min.css',
    ];
    public $js = [
        'js/validate.js',
        'js/ajaxForm.js',
    ];
    public $depends = [
        'feehi\assets\JqueryAsset',
        'install\assets\LayerAsset',
    ];
}
