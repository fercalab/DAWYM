<?php
/*//////////////////////////////////////// 
desarrollado por Fernando Calatayud López
  proyecto dawym: aplicación MVC en PHP          
////////////////////////////////////////*/
         
error_reporting(E_ALL);
ini_set('display_errors', '1');

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);
define('APP_PATH', ROOT . 'application' . DS);

require_once APP_PATH . 'Config.php';
require_once APP_PATH . 'Request.php';
require_once APP_PATH . 'Bootstrap.php';
require_once APP_PATH . 'Controller.php';
require_once APP_PATH . 'Model.php';
require_once APP_PATH . 'View.php';

try{

    Bootstrap::run(new Request);

   } catch(Exception $e){
	    echo $e->getMessage();
   }

?>
