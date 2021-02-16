<?php 

// spl_autoload_register("autoload");

// function autoload($className) {
//   // $path = './classes/';
//   // $path = $_SERVER["DOCUMENT_ROOT"] . "/" . crud-php-oop-pdo . "/" . classes . "/"
//   $path = ../classes/
//   $extension = '.class.php';
//   $fileName = $path . $className . $extension;

//   if(!file_exists($fileName)) {
//     return false;
//   }

//   include_once $fileName;
// }

// function ClassLoader($className)
// {
//     if(file_exists(__DIR__ .'./classes.'. strtolower($className) . '.php'))
//     //if(file_exists(__DIR__ '/class.'. strtolower($className) . '.php'))
//     {
//       require_once(__DIR__ .'./classes.'. strtolower($className) . '.php');
//       //require_once(__DIR__ '/class.'. strtolower($className) . '.php');
//     }
//     else {
//       echo 'ERROR: '. $className;
//     }
// }

// spl_autoload_register('ClassLoader');
function my_autoloader($class) {
  include 'classes/' . $class . '.class.php';
}

spl_autoload_register('my_autoloader');