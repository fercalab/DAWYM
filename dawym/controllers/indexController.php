<?php
class indexController extends Controller {

	public function __construct() {

        parent::__construct();
	}

	public function index() {

		$this->_view->titulo = 'Desarrollo de Aplicaciones';
        $this->loadModel('index');
        $this->_materia = new indexModel();
        $this->_view->materias = $this->_materia->read();
        $this->_view->renderizar('index','inicio');  
	}
	
}


?>