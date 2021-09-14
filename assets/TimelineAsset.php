<?php
/**
 * TimelineAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2021
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\base\TimelineAsset
 */

/**
 * Load this asset with...
 * p2m\assets\TimelineAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\TimelineAsset',
 */

namespace p2m\assets;

class TimelineAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $resourceData = array(
		'published' => [
			'sourcePath' => __DIR__ . '/lib',
//			'sourcePath' => '@vendor/p2y2-things/assets/lib',
//			'sourcePath' => '@p2m@/pub',
			'css' => [
				'css/timeline.min.css',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
//dirname(__DIR__)
?>

<?php
namespace app\assets;

use yii\web\AssetBundle;

class FontAwesomeAsset extends AssetBundle
{
	public $sourcePath = '@bower/font-awesome';
	public $css = [
		'css/font-awesome.min.css',
	];
	public $publishOptions = [
		'only' => [
			'fonts/*',
			'css/*',
		]
	];
}

