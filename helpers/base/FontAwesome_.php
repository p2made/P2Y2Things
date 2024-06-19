<?php
/**
 * FontAwesome.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2021
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\helpers\base\FontAwesome
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

namespace p2m\helpers\base;

use p2m\components;
use yii\bootstrap\Html;

/**
 * Use this helper with...
 *
 * use p2m\helpers\base\FontAwesome;
 * ...
 * echo base\FontAwesome::method([$params]);
 *
 * or
 *
 * echo \p2m\helpers\base\FontAwesome::method([$params]);
 */

/**
 * Class base\FontAwesome
 * @package p2m\yii2-p2y2-things
 */
class FontAwesome extends \rmrevin\yii\fontawesome\FontAwesome
{
	/**
	 *
	 * This in an empty sub-class of \rmrevin\yii\fontawesome\FontAwesome
	 * for the purpose of mapping FontAwesome to the p2made namespace.
	 *
	 */

	/** @var string CSS Class prefix */
	// public static $cssPrefix = 'fa';

	/**
	 * Creates an `Icon` component that can be used to FontAwesome html icon
	 *
	 * @param string $name
	 * @param array $options
	 * @return component\Icon
	 */
	// public static function icon($name, $options = [])

	/**
	 * Shortcut for `icon()` method
	 * @see icon()
	 *
	 * @param string $name
	 * @param array $options
	 * @return component\Icon
	 */
	// public static function i($name, $options = [])

	/**
	 * Creates an `Stack` component that can be used to FontAwesome html icon
	 *
	 * @param array $options
	 * @return component\Stack
	 */
	// public static function stack($options = [])

	/**
	 * Shortcut for `stack()` method
	 * @see stack()
	 *
	 * @param array $options
	 * @return component\Stack
	 */
	// public static function s($options = [])

	/**
	 * Size values
	 * @see rmrevin\yii\fontawesome\component\Icon::size
	 * use as FA::CONSTANT
	 */
	// const SIZE_LARGE = 'lg';
	// const SIZE_2X = '2x';
	// const SIZE_3X = '3x';
	// const SIZE_4X = '4x';
	// const SIZE_5X = '5x';

	/**
	 * Rotate values
	 * @see rmrevin\yii\fontawesome\component\Icon::rotate
	 * use as FA::CONSTANT
	 */
	// const ROTATE_90 = '90';
	// const ROTATE_180 = '180';
	// const ROTATE_270 = '270';

	/**
	 * Flip values
	 * @see rmrevin\yii\fontawesome\component\Icon::flip
	 * use as FA::CONSTANT
	 */
	// const FLIP_HORIZONTAL = 'horizontal';
	// const FLIP_VERTICAL = 'vertical';

	/**
	 *
	 * 2016-04-02 I've added a few simple shortcut methods.
	 *
	 */

	/**
	 * p2made icon shortcuts.
	 */

	/**
	 * Shortcut for icon()->inverse()
	 * @see icon()
	 * @see component\Icon::inverse()
	 *
	 * @param string $name
	 * @param array $options
	 * @return component\Icon
	 */
	public static function vs($name, $options = [])
	{
		return static::icon($name, $options)->inverse();
	}

	/**
	 * Shortcut for icon()->spin()
	 * @see icon()
	 * @see component\Icon::spin()
	 *
	 * @param string $name
	 * @param array $options
	 * @return component\Icon
	 */
	public static function sp($name, $options = [])
	{
		return static::icon($name, $options)->spin();
	}

	/**
	 * Shortcut for icon()->addCssClass('fa-pulse')->spin()
	 * @see icon()
	 * @see component\Icon::spin()
	 *
	 * @param string $name
	 * @param array $options
	 * @return component\Icon
	 */
	public static function pu($name, $options = [])
	{
		return static::icon($name, $options)->addCssClass('fa-pulse')->spin();
	}

	/**
	 * Shortcut for icon()->fixedWidth()
	 * @see icon()
	 * @see component\Icon::fixedWidth()
	 *
	 * @param string $name
	 * @param array $options
	 * @return component\Icon
	 */
	public static function fw($name, $options = [])
	{
		return static::icon($name, $options)->fixedWidth();
	}

	/**
	 * Shortcut for icon()->ul()
	 * @see icon()
	 * @see component\Icon::ul()
	 *
	 * @param string $name
	 * @param array $options
	 * @return component\Icon
	 */
	public static function ul($name, $options = [])
	{
		return static::icon($name, $options)->ul();
	}

	/**
	 * Shortcut for icon()->li()
	 * @see icon()
	 * @see component\Icon::li()
	 *
	 * @param string $name
	 * @param array $options
	 * @return component\Icon
	 */
	public static function li($name, $options = [])
	{
		return static::icon($name, $options)->li();
	}

	/**
	 * Shortcut for icon()->border()
	 * @see icon()
	 * @see component\Icon::border()
	 *
	 * @param string $name
	 * @param array $options
	 * @return component\Icon
	 */
	public static function bd($name, $options = [])
	{
		return static::icon($name, $options)->border();
	}

	/**
	 * Shortcut for icon()->pullLeft()
	 * @see icon()
	 * @see component\Icon::pullLeft()
	 *
	 * @param string $name
	 * @param array $options
	 * @return component\Icon
	 */
	public static function pl($name, $options = [])
	{
		return static::icon($name, $options)->pullLeft();
	}

	/**
	 * Shortcut for icon()->pullRight()
	 * @see icon()
	 * @see component\Icon::pullRight()
	 *
	 * @param string $name
	 * @param array $options
	 * @return component\Icon
	 */
	public static function pr($name, $options = [])
	{
		return static::icon($name, $options)->pullRight();
	}

	/**
	 * Shortcut for icon()->border()->pullLeft()
	 * @see icon()
	 * @see component\Icon::pullLeft()
	 *
	 * @param string $name
	 * @param array $options
	 * @return component\Icon
	 */
	public static function bl($name, $options = [])
	{
		return static::icon($name, $options)->border()->pullLeft();
	}

	/**
	 * Shortcut for icon()->border()->pullRight()
	 * @see icon()
	 * @see component\Icon::pullRight()
	 *
	 * @param string $name
	 * @param array $options
	 * @return component\Icon
	 */
	public static function br($name, $options = [])
	{
		return static::icon($name, $options)->border()->pullRight();
	}

	/**
	 * p2made stack shortcuts.
	 */

	/**
	 * Shortcut for stack()->icon()->on()
	 * @see stack()
	 * @see component\Stack
	 *
	 * @param mixed $foreground
	 * @param mixed $background
	 * @param array $options
	 * @return component\Icon
	 */
	public static function si($foreground, $background, $options = [])
	{
		return static::stack($options)->icon($foreground)->on($background);
	}

	/**
	 * Shortcut for a stack with the larger icon on top
	 * @see stack()
	 * @see component\Stack
	 *
	 * @param mixed $foreground
	 * @param mixed $background
	 * @param array $options
	 * @return component\Icon
	 */
	public static function is($foreground, $background, $options = [])
	{
		$options['template'] = '{front}{back}';
		return static::stack($options)->icon($background)->on($foreground);
	}

	/**
	 * Shortcut for is() using 'ban' as the top icon
	 * @see stack()
	 * @see component\Stack
	 *
	 * @param mixed $foreground
	 * @param mixed $background
	 * @param array $options
	 * @return component\Icon
	 */
	public static function ban($object, $options = [])
	{
		$foreground = static::i('ban')->addCssClass('text-danger');
		return static::is($foreground, $object, $options);
	}

/*
$camera = 'camera';
$ban = FA::i('ban')->addCssClass('text-danger');
$options = ['class' => 'fa-lg', 'template' => '{front}{back}'];
echo FA::stack($options)->icon($camera)->on($ban);
*/

}
