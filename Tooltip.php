<?php
/**
 * @copyright Copyright &copy; Anton Puzanov, 2018
 * @package yii2-widgets
 * @subpackage yii2-widget-tooltip
 * @version 1.0.0
 */

namespace antoha\tooltip;

use yii\base\Widget;
use yii\helpers\Html;

/**
 * Tooltip widget
 *
 * @author Anton Puzanov <antonp1961@gmail.com>
 * @since 1.0.0
 */
class Tooltip extends Widget
{
	/**
	 * size of tooltip 100px
	 */
	const SIZE_SMALL = 100;
	/**
	 * size of tooltip 200px. Default value.
	 */
	const SIZE_NORMAL = 200;
	/**
	 * size of tooltip 300px
	 */
	const SIZE_LARGE = 300;

	/**
	 * @var string the tag of content will be render
	 */
	private $tag = 'span';

	/**
	 * @var string the content will be displayed
	 */
	public $content;

	/**
	 * @var string the content of tooltip will be displayed
	 */
	public $title;

	/**
	 * @var int the size of tooltip in pixels. Default [SIZE_NORMAL]
	 */
	public $size = self::SIZE_NORMAL;

	/**
	 * @var array the HTML attributes for the tag of content.
	 */
	public $options;

	/**
	 * @inheritdoc
	 */
	public function init()
	{
		parent::init();
		$this->initOptions();
		$this->registerAssets();
	}

	/**
	 * @inheritdoc
	 */
	public function run()
	{
		return Html::tag($this->tag, $this->content, $this->options);
	}

	/**
	 * Initializes the widget options.
	 * This method sets the default values for various options.
	 */
	protected function initOptions()
	{
		$this->options['title'] = $this->title;
		$this->options['id'] = isset($this->options['id']) ? $this->options['id'] : $this->getId() . "-ap";

		Html::addCssClass($this->options, 'tooltip-ap');
	}

	/**
	 * Register the client assets for the [[Tooltip]] widget.
	 */
	protected function registerAssets()
	{
		$id = $this->options['id'];
		$view = $this->getView();
		TooltipAsset::register($view);

		$view->registerJs("initTooltip('{$id}', '{$this->size}');");
	}
}