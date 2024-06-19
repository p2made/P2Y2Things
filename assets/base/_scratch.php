<?php
/**
 * P2CoreJsAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2021
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\base\P2CoreJsAsset
 */

/**
 * Load this asset with...
 * p2m\assets\base\P2CoreJsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\base\P2CoreJsAsset',
 */

namespace p2m\assets;

class P2CoreJsAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/p2made/p2y2-things/assets/lib';

	public $js = [
		//'js' => ['js/p2additions.js']
	];

	public $depends = [
		'p2m\assets\base\P2BootstrapPluginAsset',
		'p2m\assets\base\P2YiiAsset',
	];
}



vendor\p2made\p2y2-things

/**
	yii\web\YiiAsset;

		'yii\web\YiiAsset',

    public $depends = [
        'yii\web\JqueryAsset',
    ];
 */


/*
 */

/*
namespace app\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
	public $basePath = '@webroot';
	public $baseUrl = '@web';
	public $css = [
		'css/site.css',
		['css/print.css', 'media' => 'print'],
	];
	public $js = [
	];
	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
	];
}
 */

/*
 */

