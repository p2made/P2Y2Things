<?php
/**
 * DataTablesKeyTableAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class DataTablesKeyTableAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '@vendor/bower/datatables-keytable',
			'css' => [
				'css/keyTable.dataTables.scss',
				//'css/keyTable.bootstrap.scss',
			],
			'js' => [
				'js/dataTables.keyTable.js',
			],
		],
		'cdn' => [
			'baseUrl' => '//cdn.datatables.net/keytable/2.1.1',
			'css' => [
				'css/keyTable.dataTables.min.css',
			],
			'js' => [
				'js/dataTables.keyTable.min.js',
			],
		],
		'depends' => [
			'p2made\assets\JqueryAsset',
			'p2made\assets\DataTablesAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
