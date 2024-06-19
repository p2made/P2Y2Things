<?php
/**
 * ButtonGroup.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2021
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\widgets\ButtonGroup
 */

declare(strict_types=1);

namespace p2m\widgets;

use Throwable;
use yii\helpers\ArrayHelper;

/**
 * Use this helper with...
 *
 * use p2m\widgets\ButtonGroup;
 * ...
 * echo ButtonGroup::method([$params]);
 *
 * or
 *
 * echo \p2m\widgets\ButtonGroup::method([$params]);
 */

/**
 * ButtonGroup renders a button group bootstrap component.
 *
 * For example,
 *
 * ```php
 * // a button group with items configuration
 * echo ButtonGroup::widget([
 *     'buttons' => [
 *         ['label' => 'A'],
 *         ['label' => 'B'],
 *         ['label' => 'C', 'visible' => false],
 *     ]
 * ]);
 *
 * // button group with an item as a string
 * echo ButtonGroup::widget([
 *     'buttons' => [
 *         Button::widget(['label' => 'A']),
 *         ['label' => 'B'],
 *     ]
 * ]);
 * ```
 *
 * Pressing on the button should be handled via JavaScript. See the following for details:
 *
 * @see https://getbootstrap.com/docs/5.1/components/buttons/
 * @see https://getbootstrap.com/docs/5.1/components/button-group/
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @author Simon Karlen <simi.albi@outlook.com>
 */
class ButtonGroup extends \yii\bootstrap5\Widget
{
	/**
	 * @var array list of buttons. Each array element represents a single button
	 * which can be specified as a string or an array of the following structure:
	 *
	 * - label: string, required, the button label.
	 * - options: array, optional, the HTML attributes of the button.
	 * - visible: bool, optional, whether this button is visible. Defaults to true.
	 */
	public $buttons = [];
	/**
	 * @var bool whether to HTML-encode the button labels.
	 */
	public $encodeLabels = true;

	/**
	 * {@inheritdoc}
	 */
	public function init()
	{
		parent::init();
		Html::addCssClass($this->options, ['widget' => 'btn-group']);
		if (!isset($this->options['role'])) {
			$this->options['role'] = 'group';
		}
	}

	/**
	 * {@inheritdoc}
	 * @return string
	 * @throws Throwable
	 */
	public function run(): string
	{
		//BootstrapAsset::register($this->getView());

		return Html::tag('div', $this->renderButtons(), $this->options);
	}

	/**
	 * Generates the buttons that compound the group as specified on [[buttons]].
	 * @return string the rendering result.
	 * @throws Throwable
	 */
	protected function renderButtons(): string
	{
		$buttons = [];
		foreach ($this->buttons as $button) {
			if (is_array($button)) {
				$visible = ArrayHelper::remove($button, 'visible', true);
				if ($visible === false) {
					continue;
				}

				$button['view'] = $this->getView();
				if (!isset($button['encodeLabel'])) {
					$button['encodeLabel'] = $this->encodeLabels;
				}
				if (!isset($button['options'], $button['options']['type'])) {
					ArrayHelper::setValue($button, 'options.type', 'button');
				}
				$buttons[] = Button::widget($button);
			} else {
				$buttons[] = $button;
			}
		}

		return implode("\n", $buttons);
	}
}
