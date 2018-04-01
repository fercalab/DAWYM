<?php
class ufoController extends Controller {

    private $_ufo;
    private $_ufos;
    private $_temas;

	public function __construct() {
		parent::__construct();
        $this->_ufo = $this->loadModel('ufo');
        $this->_ufos = $this->loadModel('ufo');
        $this->_temas = $this->loadModel('ufo');
	}
	
    public function index() {
        
    	$this->_view->titulo = 'Desarrollo de Aplicaciones';

        if(isset($_GET["ufo"])) {

          $id = $_GET["ufo"];

          $this->_view->ufo = $this->_ufo->read($id);
          $this->_view->ordenaConcept = $this->_temas->update($id);

             if(isset($_GET["materia"])) { 

                $materia = $_GET["materia"];

                $this->_view->ufos = $this->_ufos->create($materia);

             }
              

        } else {

             $this->_view->ufo = $this->_ufo->read();
        }


         
        $this->_view->renderizar('index');    
    }
           
}

?>