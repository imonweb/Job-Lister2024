<?php 

// require_once('lib/Template.php');

// config file
require_once 'config.php';

// Autoload - Fatal error: __autoload() is no longer supported, use spl_autoload_register() instead in /Users/imon/Sites/php/Udemy/traversy/Job-Lister/config/init.php on line 9
/*
function __autoload($class_name)
{
  require_once 'lib/' . $class_name . '.php';
}
*/

spl_autoload_register(function($class_name)
{
  include 'lib/' . $class_name . '.php';
});

// Other options

/*
spl_autoload_register(function($class){
  if(file_exists($class . '.php')){
    require $class . '.php';
  }
});
*/
/*
spl_autoload_register(function($class) {
	$class = explode('\\', $class);
	$class = end($class);
	require_once __DIR__ . '/' . $class . '.php';
});
*/