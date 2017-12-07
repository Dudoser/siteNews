<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // 'css/site.css',
        'css/home.css',
        'css/owl.carousel.css',
        'css/font-awesome.min.css',
        'css/bootstrap.min.css',
        'css/libs.min.css',
        // 'css/header/header.css',
        'https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Oswald:400,700',
    ];
    public $js = [
        'js/libs.min.js',
        'http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
