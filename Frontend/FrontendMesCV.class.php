<?php
// Classe pour représenter la partie "Frontend" de l'application MesCV 

namespace MesCV\Frontend;

class FrontendMesCV extends \Librairie\MesCV
{
  public function __construct()
  {
    parent::__construct();
    
    $this->name = 'Frontend';
  }
  
  public function run()
  {
    $controller = $this->getController();
    $controller->execute();
    
    $this->httpResponse->setPage($controller->page());
    $this->httpResponse->send();
  }
}