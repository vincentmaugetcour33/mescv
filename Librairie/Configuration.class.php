<?php
// Classe pour représenter la configuration de l'application MesCV et de ses modules.

namespace Librairie;

class Configuration extends MesCVComponent
{
  protected $vars = array();
  
  public function get($var)
  {
    if (!$this->vars)
    {
      $xml = new \DOMDocument;
      $xml->load(__DIR__.'/../MesCV/'.$this->app->name().'/Configuration/app.xml');
      
      $elements = $xml->getElementsByTagName('define');
      
      foreach ($elements as $element)
      {
        $this->vars[$element->getAttribute('var')] = $element->getAttribute('value');
      }
    }
    
    if (isset($this->vars[$var]))
    {
      return $this->vars[$var];
    }
    
    return null;
  }
}