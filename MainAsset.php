<?php

namespace medre\lbootstrap;

use yii\web\AssetBundle;

class MainAsset extends AssetBundle
{
    public $sourcePath = __DIR__.'/assets';

    public $css = [
        'css/pe-icon-7-stroke.css',
        'css/light-bootstrap-dashboard.css',
        'css/widget.css',
    ];

    public $js = [
        'js/light-bootstrap-dashboard.js'
    ];


    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}