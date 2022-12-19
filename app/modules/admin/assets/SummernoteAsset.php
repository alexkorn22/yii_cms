<?php

namespace app\modules\admin\assets;

use yii\bootstrap4\BootstrapPluginAsset;
use yii\web\AssetBundle;

class SummernoteAsset extends AssetBundle
{

    public $js = [
        'https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js',
    ];

    public $css = [
        'https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css',

    ];

    public $depends = [
        BootstrapPluginAsset::class,
    ];
}