<?php
// Classe pour représenter l'opérateur intermédiaire entre l'entité et la table de la base de données

namespace Librairie;

abstract class Manager
{
  protected $dao;
  
  public function __construct($dao)
  {
    $this->dao = $dao;
  }
}