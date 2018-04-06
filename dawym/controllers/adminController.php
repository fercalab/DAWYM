<?php
class adminController extends Controller {

    private $_admin;
    private $_data;
    private $_materia;
    private $_ufo;

	public function __construct() {

        parent::__construct();
        $this->_admin = $this->loadModel('admin');
        $this->_data = $this->loadModel('admin');
        $this->_materia = $this->loadModel('admin');
        $this->_ufo = $this->loadModel('admin');
	}

	public function index() {

		$this->_view->titulo = 'ADMINISTRACION';
        $this->_view->materia = $this->_admin->read();
        $this->_view->ufo = $this->_data->dimeufosymateria(); 
        $this->_view->renderizar('index','admin');  
	}

	public function newmateria() {

         $this->_view->titulo = 'CREAR NUEVA MATERIA';
         $this->_view->materianew = $this->getTexto('nombre');
         $this->_view->renderizar('newmateria','admin');
	}

	public function newufo() {

         $this->_view->titulo = 'CREAR NUEVA UFO EN ';
          if (isset($_GET["materia"])) {

             $id = $_GET["materia"];
             $this->_view->materiaxid = $this->_materia->read($id);

         }
         $this->_view->renderizar('newufo','admin');
	}

	public function newconcepto() {

         $this->_view->titulo = 'CREAR NUEVO CONCEPTO EN ';
         if (isset($_GET["ufo"])) {
             
              $id = $_GET["ufo"];
              $this->_view->ufoxid = $this->_ufo->dimeufos($id);
         }
         $this->_view->renderizar('newconcepto','admin');
	}

    public function updatemateria() {
        
        $this->_view->titulo = 'MODIFICAR MATERIA';
        $this->_view->materia = $this->_admin->read();
        $this->_view->renderizar('updatemateria','admin');
    }

    public function multimedia() { 

        if (isset($_FILES['imagen'])) {
           
           $dir_subida = ROOT.'public'.DS.'img'.DS;
           $fichero_subido = $dir_subida . basename($_FILES['imagen']['name']);

            if (move_uploaded_file($_FILES['imagen']['tmp_name'], $fichero_subido)) {
                 echo "El fichero es válido y se subió con éxito.\n";
            } else {
                 echo "¡Posible ataque de subida de ficheros!\n";
            } 
        }
        //HAY QUE DAR NOMBRE;SIZE;GUARDAR EN DB;COMPROBAR TYPE
       
        $this->_view->renderizar('multimedia','admin');
    }


     public function __destruct() {
             unset($this);
    }
	
}


?>