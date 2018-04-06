<?php
class conceptoController extends Controller {

    private $_detalle;
    private $_ufo;
    private $_materia;

	public function __construct() {

        parent::__construct();
        $this->_detalle = $this->loadModel('concepto'); 
        $this->_ufo = $this->loadModel('concepto');
        $this->_materia = $this->loadModel('concepto'); 
	}

	public function index() {

		$this->_view->titulo = 'Contenidos';

        if(isset($_GET["ufo"])) {

          $id = $_GET["ufo"];
          $this->_view->ufo = $this->_ufo->read($id);
        }
        
        if (isset($_GET["materia"])) {

        	$idMateria = $_GET["materia"];
            $this->_view->queMateria = $this->_materia->dimeMateria($idMateria);
        }
        
        if(isset($_GET["concept"])) {
             
             $idConcepto = $_GET["concept"];
             $this->_view->detalle = $this->_detalle->dameContenidos($idConcepto);
        }
        

        $this->_view->renderizar('index');  
	}

	 public function __destruct() {
    	     unset($this);
    }
	
}


?>

