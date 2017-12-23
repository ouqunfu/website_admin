<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/frontend';
    public $css = [
        'bower_components/bootstrap/dist/css/bootstrap.min.css',
        'bower_components/font-awesome/css/font-awesome.min.css',
        'bower_components/Ionicons/css/ionicons.min.css',
        'bower_components/jvectormap/jquery-jvectormap.css',
        'bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',
        'bower_components/bootstrap-daterangepicker/daterangepicker.css',
        'dist/css/AdminLTE.min.css',
        'dist/css/skins/skin-blue.min.css',
        'dist/css/style.css',
    ];
    public $js = [
        //<!-- jQuery 3 -->
        'bower_components/jquery/dist/jquery.min.js',
        //<!-- Bootstrap 3.3.7 -->
        'bower_components/bootstrap/dist/js/bootstrap.min.js',
        //<!-- AdminLTE App -->
        'dist/js/adminlte.min.js',
        //<!-- daterangepicker -->
        'bower_components/moment/min/moment.min.js',
        'bower_components/bootstrap-daterangepicker/daterangepicker.js',
        //<!-- datepicker -->
        'bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
        //<!-- jvectormap  -->
        'plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
        'plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
        //<!-- This only for index purposes -->
        'dist/js/index.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    //定义按需加载JS方法，注意加载顺序在最后
    public static function addScript($view, $jsfile) {
        $view->registerJsFile($jsfile, [AppAsset::className()]);
    }
    //定义按需加载css方法，注意加载顺序在最后
    public static function addCss($view, $cssfile) {
        $view->registerCssFile($cssfile, [AppAsset::className()]);
    }
}
