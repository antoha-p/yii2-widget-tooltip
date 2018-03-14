<?php

/**
 * @copyright Copyright &copy; Anton Puzanov, 2018
 * @package yii2-widgets
 * @subpackage yii2-widget-tooltip
 * @version 1.0.0
 */

namespace antoha\tooltip;

use yii\web\AssetBundle;

/**
 * Asset bundle for Tooltip Widget
 *
 * @author Anton Puzanov <antonp1961@gmail.com>
 * @since 1.0
 */
class TooltipAsset extends AssetBundle
{
	/**
	 * @inheritdoc
	 */
	public $depends = [
		'yii\web\JqueryAsset',
	];

	/**
	 * @inheritdoc
	 */
	public $css = [
		'css/tooltip-ap.css'
	];

	/**
	 * @inheritdoc
	 */
	public $js = [
		'js/tooltip-ap.js'
	];

	/**
	 * @inheritdoc
	 */
	public function init()
	{
		parent::init();
		$this->sourcePath = __DIR__ . '/assets';
	}
}