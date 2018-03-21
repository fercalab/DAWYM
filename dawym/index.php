<?php
/*//////////////////////////////////////// 
desarrollado por Fernando Calatayud López
  proyecto dawym: aplicación MVC en PHP
            Febrero 2018
 index.php-> definimos rutas, 
 requerimos los archivos que son el core de la app,
 llamamos al bootstrap para que 'corra' la petición           
////////////////////////////////////////*/
// esto nos imprime en pantalla errores
// debe ser eliminado una vez concluida la aplicación         
error_reporting(E_ALL);
ini_set('display_errors', '1');
//definimos un separador para evitar incopatibilidad con cualquier SO
define('DS', DIRECTORY_SEPARATOR);
//definimos ROOT: ruta a nuestro directorio para archivos que utilice la app
define('ROOT', realpath(dirname(__FILE__)) . DS);
//definimos directorio del core de la app: application
define('APP_PATH', ROOT . 'application' . DS);
//requerimos todos los archivos del core de la app
require_once APP_PATH . 'Config.php';
require_once APP_PATH . 'Request.php';
require_once APP_PATH . 'Bootstrap.php';
require_once APP_PATH . 'Controller.php';
require_once APP_PATH . 'Model.php';
require_once APP_PATH . 'View.php';
require_once APP_PATH . 'Registro.php';
/*
//ver el funcionamiento del Request:
$peticion = new Request();
echo $peticion->getControlador().'<br>'.$peticion->getMetodo().'<br>';
print_r($peticion->getArgs());
*/

//llamamos al bootstrap que ejecute el metodo run y le pasamos una peticion por parametro
//de ocurrir un fallo captura la excepcion

try{

    Bootstrap::run(new Request);

   } catch(Exception $e){
	    echo $e->getMessage();
   }

?>
