<?php
class indexController extends Controller {

    private $_materia;

	public function __construct() {

        parent::__construct();
        $this->_materia = $this->loadModel('index'); 
	}

	public function index() {

		$this->_view->titulo = 'Desarrollo de Aplicaciones';
        $this->_view->materias = $this->_materia->read();
        $this->_view->renderizar('index','inicio');  
	}

	 public function __destruct() {
    	     unset($this);
    }
	
}


?>