<?php
/**
 * NavBar.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2021
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\demo\widgets\NavBar
 */

declare(strict_types=1);

namespace p2m\widgets;

use Yii;
use yii\helpers\ArrayHelper;
use yii\bootstrap5\Html;
use p2m\assets\base\P2BootstrapPluginAsset;

/**
 * Use this helper with...
 *
 * use p2m\demo\widgets\NavBar;
 * ...
 * echo NavBar::method([$params]);
 *
 * or
 *
 * echo \p2m\demo\widgets\NavBar::method([$params]);
 */

/**
 * NavBar renders a navbar HTML component.
 *
 * Any content enclosed between the [[begin()]] and [[end()]] calls of NavBar
 * is treated as the content of the navbar. You may use widgets such as [[Nav]]
 * or [[\yii\widgets\Menu]] to build up such content. For example,
 *
 * ```php
 * use yii\bootstrap5\NavBar;
 * use yii\bootstrap5\Nav;
 *
 * NavBar::begin(['brandLabel' => 'NavBar Test']);
 * echo Nav::widget([
 *     'items' => [
 *         ['label' => 'Home', 'url' => ['/site/index']],
 *         ['label' => 'About', 'url' => ['/site/about']],
 *     ],
 *     'options' => ['class' => 'navbar-nav'],
 * ]);
 * NavBar::end();
 * ```
 *
 * @property-write array $containerOptions
 *
 * @see https://getbootstrap.com/docs/5.1/components/navbar/
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @author Alexander Kochetov <creocoder@gmail.com>
 */
class NavBar extends \yii\bootstrap5\Widget
{
	//public $options = [];
	//public $collapseOptions = [];
	//public $offcanvasOptions = false;
	//public $brandLabel = false;
	//public $brandImage = false;
	//public $brandUrl = false;
	//public $brandOptions = [];
	//public $screenReaderToggleText = 'Toggle navigation';
	//public $togglerContent = '<span class="navbar-toggler-icon"></span>';
	//public $togglerOptions = [];
	//public $renderInnerContainer = true;
	//public $innerContainerOptions = [];
	//public $clientOptions = [];

	//public function init()

	/**
	 * Renders the widget.
	 */
	public function run()
	{
		if ($this->collapseOptions !== false) {
			$tag = ArrayHelper::remove($this->collapseOptions, 'tag', 'div');
			echo Html::endTag($tag) . "\n";
		} elseif ($this->offcanvasOptions !== false) {
			Offcanvas::end();
		}
		if ($this->renderInnerContainer) {
			echo Html::endTag('div') . "\n";
		}
		$tag = ArrayHelper::remove($this->options, 'tag', 'nav');
		echo Html::endTag($tag);
		//BootstrapPluginAsset::register($this->getView());
		//P2BootstrapPluginAsset::register($this->getView());
	}

	//public function setContainerOptions(array $collapseOptions)

	//protected function renderToggleButton(): string
}
