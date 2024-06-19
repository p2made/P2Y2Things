<?php
/**
 * BootstrapIconsAsset.php
 *
 * Yii2 asset for Bootstrap Icons
 * https://icons.getbootstrap.com
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2021
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment
 * @class \p2m\assets\BootstrapIconsAsset
 */

/**
 * Load this asset with...
 * p2m\assets\BootstrapIconsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\BootstrapIconsAsset',
 */

namespace p2m\assets;

class BootstrapIconsAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $packageName = 'BootstrapIcons';

	protected $packageVersion = '1.5.0';

	protected $packageData = [
		'baseUrl' => 'https://cdn.jsdelivr.net/npm/bootstrap-icons@##-version-##',
		//'sourcePath' => '@npm/animate.css',
		'static' => [
			'cssOptions' => [
				'integrity' => 'sha384-tKLJeE1ALTUwtXlaGjJYM3sejfssWdAaWR2s97axw4xkiAdMzQjtOjgcyw0Y50KU',
				'crossorigin' => 'anonymous',
			],
		],
		'css' => [
			'font/bootstrap-icons.css',
		],
		/*
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
		 */
	];

	public function init()
	{
		$this->configureAsset($this->packageData);
		parent::init();
	}
}
