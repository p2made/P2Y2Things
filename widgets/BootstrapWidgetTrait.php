<?php
/**
 * _ExampleWidget.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2021
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\widgets\_ExampleWidget
 */

declare(strict_types=1);

namespace p2m\widgets;

use yii\base\InvalidConfigException;
use yii\helpers\Json;

/**
 * Use this helper with...
 *
 * use p2m\widgets\_ExampleWidget;
 * ...
 * echo _ExampleWidget::method([$params]);
 *
 * or
 *
 * echo \p2m\widgets\_ExampleWidget::method([$params]);
 */

/**
 * BootstrapWidgetTrait is the trait, which provides basic for all bootstrap widgets features.
 *
 * Note: class, which uses this trait must declare public field named `options` with the array default value:
 *
 * ```php
 * class MyWidget extends \yii\base\Widget
 * {
 *     use BootstrapWidgetTrait;
 *
 *     public $options = [];
 * }
 * ```
 *
 * This field is not present in the trait in order to avoid possible PHP Fatal error on definition conflict.
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @author Paul Klimov <klimov.paul@gmail.com>
 */
trait BootstrapWidgetTrait
{
	/**
	 * @var array the options for the underlying Bootstrap JS plugin.
	 * Please refer to the corresponding Bootstrap plugin Web page for possible options.
	 * For example, [this page](http://getbootstrap.com/javascript/#modals) shows
	 * how to use the "Modal" plugin and the supported options (e.g. "remote").
	 */
	public $clientOptions = [];
	/**
	 * @var array the event handlers for the underlying Bootstrap JS plugin.
	 * Please refer to the corresponding Bootstrap plugin Web page for possible events.
	 * For example, [this page](http://getbootstrap.com/javascript/#modals) shows
	 * how to use the "Modal" plugin and the supported events (e.g. "shown").
	 */
	public $clientEvents = [];

	/**
	 * Initializes the widget.
	 * This method will register the bootstrap asset bundle. If you override this method,
	 * make sure you call the parent implementation first.
	 * @throws InvalidConfigException
	 */
	public function init()
	{
		parent::init();
		if (!isset($this->options['id'])) {
			$this->options['id'] = $this->getId();
		}
	}

	/**
	 * Registers a specific Bootstrap plugin and the related events
	 * @param string $name the name of the Bootstrap plugin
	 */
	protected function registerPlugin(string $name)
	{
		$view = $this->getView();

		//BootstrapPluginAsset::register($view);

		$id = $this->options['id'];

		if ($this->clientOptions !== []) {
			$options = empty($this->clientOptions) ? '' : Json::htmlEncode($this->clientOptions);
			$js = "jQuery('#$id').$name($options);";
			$view->registerJs($js);
		}

		$this->registerClientEvents();
	}

	/**
	 * Registers JS event handlers that are listed in [[clientEvents]].
	 */
	protected function registerClientEvents()
	{
		if (!empty($this->clientEvents)) {
			$id = $this->options['id'];
			$js = [];
			foreach ($this->clientEvents as $event => $handler) {
				$js[] = "jQuery('#$id').on('$event', $handler);";
			}
			$this->getView()->registerJs(implode("\n", $js));
		}
	}
}
