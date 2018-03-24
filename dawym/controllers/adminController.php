<?php
class adminController extends Controller {

    private $materia;
    private $ufo;

	public function __construct() {

        parent::__construct();
	}

	public function index() {

		$this->_view->titulo = 'ADMINISTRACION';
        $this->loadModel('admin');
        $this->_admin = new adminModel();
        $this->_view->materia = $this->_admin->read();
        $this->_view->renderizar('index','admin');  
	}

	public function newmateria() {
         $this->_view->titulo = 'CREAR NUEVA MATERIA';
         $this->loadModel('admin');
         $this->_view->renderizar('newmateria','admin');
	}

	public function newufo() {
         $this->_view->titulo = 'CREAR NUEVA UFO';
         $this->loadModel('admin');
         $this->_view->renderizar('newufo','admin');
	}

	public function newconcepto() {
         $this->_view->titulo = 'CREAR NUEVA MATERIA';
         $this->loadModel('admin');
         $this->_view->renderizar('newconcepto','admin');
	}
	
}


?>