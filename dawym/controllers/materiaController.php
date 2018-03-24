<?php
class materiaController extends Controller {

	private $materia;
  
	public function __construct() {
		parent::__construct();
		
	}
	
    public function index() {
        
    	$this->_view->titulo = 'Desarrollo de Aplicaciones';
        $this->loadModel('materia');
        $this->_materia = new materiaModel();

        if (isset($_GET["materia"])) {
            $id = $_GET["materia"];
            $this->_view->materia = $this->_materia->read($id);
        } else {
           $this->_view->materia = $this->_materia->read(); 
        }
        
        
        $this->_view->renderizar('index','materias');    
    }
        
		   
}

?>