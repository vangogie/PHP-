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
        'css/site.css',

        "css/linearicons.css",
	    "css/owl.carousel.css",
	    "css/font-awesome.min.css",
	    "css/themify-icons.css",
	    "css/nice-select.css",
	    "css/nouislider.min.css",
	    "css/bootstrap.css",
	    "css/main.css"
    ];
    public $js = [
        "js/vendor/jquery-2.2.4.min.js",
	"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js",
	"js/vendor/bootstrap.min.js",
	"js/jquery.ajaxchimp.min.js",
	"js/jquery.nice-select.min.js",
	"js/jquery.sticky.js",
	"js/nouislider.min.js",
	"js/jquery.magnific-popup.min.js",
	"js/owl.carousel.min.js",
	"https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE",
	"js/gmaps.min.js",
	"js/main.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
