<?php
namespace avikarsha\tagsinput;

/**
 * Asset bundle for tagsinput Widget
 *
 */
class TagsinputAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/isack999/yii2-tagsinput/src/bootstrap-tagsinput-0.8.0/dist';

    public $css = [
        'bootstrap-tagsinput.min.css',
        'bootstrap-tagsinput-typeahead.min.css',
    ];

    public $js = [
        'bootstrap-tagsinput.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'avikarsha\tagsinput\TypeaheadAsset'
    ];
}
