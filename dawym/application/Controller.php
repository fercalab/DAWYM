<?php
abstract class Controller {

	protected $_view;

	public function __construct() {
		$this->_view = new View(new Request);
	}

	abstract public function index();
    
	protected function loadModel($modelo) {

		$modelo = $modelo.'Model';
		$rutaModelo = ROOT.'models'.DS.$modelo.'.php';

		if (is_readable($rutaModelo)) {
                
			    require_once $rutaModelo;
			    
		} else {
			
			throw new Exception("Error cargando el modelo");	
		}
	}

	protected function getTexto($value) {
 
         if (isset($_POST[$value]) && !empty($_POST[$value])) {

         	$_POST[$value] = htmlspecialchars($_POST[$value], ENT_QUOTES);

         	return $_POST[$value];
         }

         return '';
	}

}

?>