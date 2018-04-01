<?php
class adminController extends Controller {

    private $_admin;
    private $_data;
    private $materia;
    private $ufo;

	public function __construct() {

        parent::__construct();
        $this->_admin = $this->loadModel('admin');
        $this->_data = $this->loadModel('admin');
        

	}

	public function index() {

		$this->_view->titulo = 'ADMINISTRACION';
        $this->_view->materia = $this->_admin->read();
        $this->_view->ufo = $this->_data->dimeufos(); 
        $this->_view->renderizar('index','admin');  
	}

	public function newmateria() {

         $this->_view->titulo = 'CREAR NUEVA MATERIA';
         $this->_view->renderizar('newmateria','admin');
	}

	public function newufo() {

         $this->_view->titulo = 'CREAR NUEVA UFO';
         $this->_view->renderizar('newufo','admin');
	}

	public function newconcepto() {

         $this->_view->titulo = 'CREAR NUEVA MATERIA';
         $this->_view->renderizar('newconcepto','admin');
	}

     public function __destruct() {
             unset($this);
    }
	
}


?>