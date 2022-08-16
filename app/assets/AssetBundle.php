<?php

namespace app\assets;

use yii\bootstrap4\BootstrapAsset;
use yii\web\YiiAsset;

class AssetBundle extends \yii\web\AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

	public $css = [
		'css/frontend_blocks.css',
        'css/cf7mls.css',
        'css/ion.rangeSlider.min.css',
        'css/styles.css',
        'css/theme.css',
        'css/new.css',
        'css/app.min.css',
        'css/style.css',
        'css/stylesheet.css',
        'css/all.css',
        'https://fonts.googleapis.com/css?family=IBM+Plex+Sans%3A400%2C400i%2C600&amp;display=swap&amp;subset=cyrillic&amp;ver=5.8.4',
	];

	public $js = [
        'js/frontend_blocks.js',
        'js/jquery.min.js',
        'js/jquery-migrate.min.js',
        'js/Popup.js',
        'js/PopupConfig.js',
        'js/PopupBuilder.js',
        'js/wp-embed.min.js',
        'js/jquery.form.min.js',
        'js/cf7mls.js',
        'js/ion.rangeSlider.min.js',
        'js/range_slider.js',
        'js/regenerator-runtime.min.js',
        'js/wp-polyfill.min.js',
        'js/index.js',
        'js/ucf7_scripts.js',
        'js/js.cookie.min.js',
        'js/jquery.min_1.js',
        'js/app.min.js',
        'js/scripts.js',
        'js/lazyload.min.js',
	];

	public $depends = [
		//YiiAsset::class,
		//BootstrapAsset::class,
		//FontAwesomeAsset::class,
	];
}
