<?php
// Classe pour représenter les opérateurs intermédiaires entre les entités et les tables de la base de données

namespace Librairie;

class Managers
{
  protected $api = null;
  protected $dao = null;
  protected $managers = array();
  
  public function __construct($api, $dao)
  {
    $this->api = $api;
    $this->dao = $dao;
  }
  
  public function getManagerOf($module)
  {
    if (!is_string($module) || empty($module))
    {
      throw new \InvalidArgumentException('Le module spécifié est invalide');
    }
    
    if (!isset($this->managers[$module]))
    {
      $manager = '\\Librairie\Modeles\\'.$module.'Manager_'.$this->api;
      $this->managers[$module] = new $manager($this->dao);
    }
    
    return $this->managers[$module];
  }
}