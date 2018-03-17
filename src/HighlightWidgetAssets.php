<?php
namespace grenhaz\highlight;

use yii\web\AssetBundle;

/**
 * Clase para cargar los recursos del Highlight.
 * 
 * @author obarcia
 */
class HighlightWidgetAssets extends AssetBundle
{
    /**
     * JavaScript's
     * @var array
     */
    public $js = [
        'js/highlight.pack.js',
    ];
    /**
     * Estilos
     * @var array
     */
    public $css = [
        'css/default.css',
    ];
    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__ . "/assets";
        
        parent::init();
    }
}