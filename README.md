yii2-widget-tooltip
=====================

This is the Tooltip widget for Yii2 framework. Allows you to display stylized prompts for users in the content.

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/). Check the [composer.json](https://github.com/kartik-v/yii2-widget-select2/blob/master/composer.json) for this extension's requirements and dependencies. Read this [web tip /wiki](http://webtips.krajee.com/setting-composer-minimum-stability-application/) on setting the `minimum-stability` settings for your application's composer.json.

To install, either run

```
$ php composer.phar require antoha-v/yii2-widget-tooltip "@dev"
```

or add

```
"antoha-p/yii2-widget-tooltip": "@dev"
```

to the ```require``` section of your `composer.json` file.

## Usage

```php
use antoha\tooltip\Tooltip;

echo Tooltip::widget([
    'content' => "?",
    'title' => "This is an example of how a widget works",
    'size' => Tooltip::SIZE_LARGE
]);
```

## License

**yii2-widget-tooltip** is released under the BSD 3-Clause License. See the bundled `LICENSE.md` for details.