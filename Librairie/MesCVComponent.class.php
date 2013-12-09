<?php
// Classe pour représenter l'objet MesCV aux différents composants de l'application

namespace Librairie;

abstract class MesCVComponent
{
  protected $app;
  
  public function __construct(MesCV $app)
  {
    $this->app = $app;
  }
  
  public function app()
  {
    return $this->app;
  }
}