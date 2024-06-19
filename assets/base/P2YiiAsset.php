<?php
/**
 * P2YiiAsset.php
 *
 * Yii2 asset for Bootstrap
 * https://getbootstrap.com
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2021
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\base\P2YiiAsset
 */

/**
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ #####      DO NOT USE THIS CLASS DIRECTLY!      ##### ^ #####
 * ##### ^ #####                                           ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 */

/**
 * Load this asset with...
 * p2m\assets\base\P2YiiAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\base\P2YiiAsset',
 */

namespace p2m\assets\base;

class P2YiiAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@yii/assets';

	public $js = [
		'yii.js',
	];

	public $depends = [
		'p2m\assets\base\P2JqueryAsset',
		//\p2m\assets\base\P2JqueryAsset::class,
	];
}
