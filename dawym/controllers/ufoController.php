<?php
class ufoController extends Controller {

    private $ufo;

	public function __construct() {
		parent::__construct();	
	}
	
    public function index() {
        
    	$this->_view->titulo = 'Desarrollo de Aplicaciones';
        $this->loadModel('ufo');
        $this->_ufo = new ufoModel();

        if(isset($_GET["ufo"])){
          $id = $_GET["ufo"];
          $this->_view->ufo = $this->_ufo->read($id);  
        } else {
            $this->_view->ufo = $this->_ufo->read();
        }
         
        $this->_view->renderizar('index');    
    }
           
}

?>