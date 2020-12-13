<?php
/**
 *  '/www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use Yii;use yii\web\AssetBundle;

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
         'css/bootstrap.css',
         'css/font-awesome.css',
         'css/flaticon.css',
         'css/fonts.css',
         'css/animate.css',
         'js/plugins/owl/owl.carousel.css',
         'js/plugins/jquery_ui/jquery-ui.css',
         'js/plugins/magnific_popup/magnific-popup.css',
         'js/plugins/revolution/css/settings.css',
         'css/style.css',
         'css/site.css',
    ];
    public $js = [
        'js/bootstrap.min.js',
        'js/plugins/owl/owl.carousel.js',
        'js/plugins/jquery_ui/jquery_ui.js',
        'js/plugins/magnific_popup/jquery.magnific-popup.min.js',
        'js/plugins/revolution/js/jquery.themepunch.tools.min.js',
        'js/plugins/revolution/js/jquery.themepunch.revolution.min.js',
        'js/plugins/revolution/js/revolution.extension.actions.min.js',
        'js/plugins/revolution/js/revolution.extension.layeranimation.min.js',
        'js/plugins/revolution/js/revolution.extension.parallax.min.js',
        'js/plugins/revolution/js/revolution.extension.slideanims.min.js',
        'js/jquery.cookie.js',
        'js/jquery.accordion.js',
        'js/custom.js',
        'js/accordion.js',
        'js/jquery.maskedinput.js'
    ];
    public $depends = [
    ];
}
