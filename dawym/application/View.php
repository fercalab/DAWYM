<?php
class View {

	private $_controlador;
    
    public function __construct(Request $peticion) {
          $this->_controlador = $peticion->getControlador();
    }

    public function renderizar($vista, $item = false) {

        $menuParams = array (
                array (
                       'id'=>'inicio',
                       'titulo'=>'inicio',
                       'enlace'=>BASE_URL
                    ),
                array (
                       'id'=>'materias',
                       'titulo'=>'materias',
                       'enlace'=>BASE_URL.'materia'
                    ),
                 array (
                       'id'=>'indice',
                       'titulo'=>'indice',
                       'enlace'=>BASE_URL.'indice'
                    ),
                 array (
                       'id'=>'admin',
                       'titulo'=>'admin',
                       'enlace'=>BASE_URL.'admin'
                    )
            );

        $_layoutParams = array(
                            'ruta_css'=> BASE_URL.'views/layout/'.DEFAULT_LAYOUT.'/css/',
                            'ruta_img'=> BASE_URL.'views/layout/'.DEFAULT_LAYOUT.'/img/',
                            'ruta_js'=> BASE_URL.'views/layout/'.DEFAULT_LAYOUT.'/js/',
                            'menu'=> $menuParams
                        );
        
        
    	$rutaView = ROOT.'views'.DS.$this->_controlador.DS.$vista.'.phtml';

    	if(is_readable($rutaView)) {

               include_once ROOT.'views'.DS.'layout'.DS.DEFAULT_LAYOUT.DS.'header.php';   
    		       include_once $rutaView;
               include_once ROOT.'views'.DS.'layout'.DS.DEFAULT_LAYOUT.DS.'footer.php'; 

    	} else {
    		throw new Exception("Error de vista");		
    	}

    }
}

?>