<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class PublicAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

    "resources/web/assets/mobirise-icons/mobirise-icons.css",
    "resources/tether/tether.min.css",
    "resources/bootstrap/css/bootstrap.min.css",
    "resources/bootstrap/css/bootstrap-grid.min.css",
    "resources/bootstrap/css/bootstrap-reboot.min.css",
    "resources/dropdown/css/style.css",
    "resources/socicon/css/styles.css",
    "resources/theme/css/style.css",
    "resources/mobirise/css/mbr-additional.css",



        "public/css/bootstrap.min.css",
        "public/css/font-awesome.min.css",
        "public/css/animate.min.css",
        "public/css/owl.carousel.css",
        "public/css/owl.theme.css",
        "public/css/owl.transitions.css",
        "public/css/style.css",
        "public/css/responsive.css",
    ];
    public $js = [


        "resources/web/assets/jquery/jquery.min.js",
        "resources/popper/popper.min.js",
        "resources/tether/tether.min.js",
        "resources/bootstrap/js/bootstrap.min.js",
        "resources/smoothscroll/smooth-scroll.js",
        "resources/dropdown/js/script.min.js",
        "resources/touchswipe/jquery.touch-swipe.min.js",
        "resources/theme/js/script.js",




        "public/js/jquery-1.11.3.min.js",
        "public/js/bootstrap.min.js",
        "public/js/owl.carousel.min.js",
        "public/js/jquery.stickit.min.js",
        "public/js/menu.js",
        "public/js/scripts.js",
    ];
    public $depends = [


    ];
}
