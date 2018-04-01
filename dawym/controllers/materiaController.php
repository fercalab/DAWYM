<?php
class materiaController extends Controller {

	private $_materia;
  
	public function __construct() {
        
		parent::__construct();
		$this->_materia = $this->loadModel('materia'); 
	}
	
    public function index() {
        
    	$this->_view->titulo = 'Desarrollo de Aplicaciones';

        if (isset($_GET["materia"])) {

            $id = $_GET["materia"];
            $this->_view->materia = $this->_materia->read($id);

        } else {

           $this->_view->materia = $this->_materia->read(); 
        }
        
        
        $this->_view->renderizar('index','materias');    
    }

     public function __destruct() {
             unset($this);
    }
        
		   
}

?>