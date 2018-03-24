<?php
class adminController extends Controller {

	public function __construct() {

        parent::__construct();
	}

	public function index() {

		$this->_view->titulo = 'ADMINISTRACION';
        $this->loadModel('admin');
       
        $this->_view->renderizar('index','admin');  
	}

	public function newmateria() {
         $this->_view->titulo = 'CREAR NUEVA MATERIA';
        $this->loadModel('admin');
         $this->_view->renderizar('newmateria','admin');
	}
	
}


?>