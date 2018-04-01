<?php
class indiceController extends Controller {

    private $_concepto;

	public function __construct() {
		    parent::__construct();
        $this->_concepto = $this->loadModel('indice');
	}
	
    public function index() {
        
    	$this->_view->titulo = 'Indice de contenidos';
      $this->_view->concepto = $this->_concepto->read();
                
        $this->_view->renderizar('index','indice');    
    }
           
}

?>