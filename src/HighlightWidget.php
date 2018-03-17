<?php
namespace grenhaz\highlight;

use yii\helpers\Json;
use yii\base\Widget;

/**
 * Clase para cargar el Hightlight.
 * 
 * @author obarcia
 */
class HighlightWidget extends Widget
{
    /**
     * Base para el identificador del Widget.
     * @var string
     */
    public static $autoIdPrefix = 'whighlight';
    /**
     * Lenguaje a utilizar.
     */
    private $language = "html";
    /**
     * Código a mostrar
     * @var array
     */
    private $code = "";
    
    /**
     * @inheritdoc
     */
    public function run()
    {
        HighlightWidgetAssets::register($this->getView());
        
        $this->getView()->registerJs("hljs.highlightBlock(document.getElementById('".$this->id."'));");
        
        return '<pre id="'.$this->id.'"><code class="'.$this->language.'">'.$this->code.'</code></pre>';
    }
    
    public function getCode() { return $this->code; }
    public function setCode( $value ) { $this->code = $value; }
    public function getLanguage() { return $this->language; }
    public function setLanguage( $value ) { $this->language = $value; }
}
?>