# Highlight wrapper for Yii2.

See: https://highlightjs.org/

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist grenhaz/yii2-highlight
```

or add

```json
"grenhaz/yii2-highlight": "~1.0.0"
```

to the `require` section of your composer.json.

Basic Usage
-----------

``` php
use yii\helpers\Json;
use grenhaz\highlight\HighlightWidget;

echo HighlightWidget::widget([
    "language" => "json",
    "code" => Json::encode( Json::decode( $data ), JSON_PRETTY_PRINT )
]);
```

Example
-------

![Example](example.png?raw=true "Example")
