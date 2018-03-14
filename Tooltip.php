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

class Tooltip extends Widget
{
	private $tag = 'span';

	public $content;

	public $title;

	public $options;

	public function init()
	{
		parent::init();
		$this->options['title'] = $this->title;
		$this->options['id'] = isset($this->options['id']) ? $this->options['id'] : $this->getId();
		Html::addCssClass($this->options, 'tooltip-ap');
		$this->registerAssets();
	}

	public function run()
	{
		return Html::tag($this->tag, $this->content, $this->options);
	}

	public function registerAssets()
	{
		$view = $this->getView();
		TooltipAsset::register($view);
		$id = $this->options['id'];
		$view->registerJs("initTooltip('{$id}');");
	}
}