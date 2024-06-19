<?php
/**
 * P2SomeAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2021
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\base\P2SomeAsset
 */

/**
 * Load this asset with...
 * p2m\assets\base\P2SomeAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\base\P2SomeAsset',
 */

namespace p2m\assets;

class P2SomeAsset extends \yii\web\AssetBundle
{
	public $baseUrl = '@web';

	public $css = [
		'css/css_file.css',
	];

	public $cssOptions = [
		'integrity' => 'hash',
		'crossorigin' => 'anonymous',
	];

	public $js = [
		'js/js_file.js',
	];

	public $jsOptions = [
		'integrity' => 'hash',
		'crossorigin' => 'anonymous',
	];

	public $publishOptions = [
	];

	public $depends = [
		'some\useful\ThingAsset',
	];
}

class P2SomeAsset extends \yii\web\AssetBundle
{
	public $basePath = '@webroot';

	public $sourcePath = '@vendor/p2made/p2y2-things/assets/lib';

	public $baseUrl = '@web';

	public $css = [
		[
			'css/css_file.css',
			'integrity' => 'hash',
			'crossorigin' => 'anonymous',
		],
	];

	public $js = [
		[
			'js/js_file.js',
			'integrity' => 'hash',
			'crossorigin' => 'anonymous',
		],
	];

	/*
		OR
	 */

	public $css = [
		'css/css_file.css',
	];

	public $cssOptions = [
		'integrity' => 'hash',
		'crossorigin' => 'anonymous',
	];

	public $js = [
		'js/js_file.js',
	];

	public $jsOptions = [
		'integrity' => 'hash',
		'crossorigin' => 'anonymous',
	];

	/*
		/ OR
	 */

	public $publishOptions = [
	];

	public $depends = [
		'some\useful\ThingAsset',
	];
}

/**
 */



/**
 */

/**
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

/**
 */

