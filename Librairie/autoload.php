<?php
// Cette fonction instancie automatiquement les classes existantes en une seule fois (sans avoir à le faire
// dans plusieurs fichiers)
	  
function autoload($classname)
{
  if (file_exists($file = dirname (__FILE__) . '/' . $classname . '.class.php'))
  {
    require $file;
  }
}
spl_autoload_register('autoload');