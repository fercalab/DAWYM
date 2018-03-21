<?php
class Request {

	private $_controlador;
	private $_metodo;
    private $_argumentos;

	public function __construct() {
//filtramos y convertimos la url en un array
		if(isset($_GET['url'])) {
	           $url= filter_input(INPUT_GET,'url', FILTER_SANITIZE_URL);
	           $url = explode('/', $url);
	           $url = array_filter($url);
//asignamos cada parte del array como valores para controlador
	         $this->_controlador = strtolower(array_shift($url));
//segunda parte del array como valor de metodo
	         $this->_metodo = strtolower(array_shift($url));
//el resto del array se consideraran argumentos
	         $this->_argumentos = $url;
        }
//si no hay controlador llamaremos al default definido en config.php
	    if(!$this->_controlador) {
	 	       $this->_controlador = DEFAULT_CONTROLLER;
	    }
//si no hay le otorgamos index
	    if(!$this->_metodo) {
		       $this->_metodo = 'index';
	    }
//si no hay le otorgamos un array vacio	
	    if(!isset($this->_argumentos)) {
	           $this->_argumentos = array();	
	    }   
	}
//metodos que devuelven controlador, metodo y argumentos
	public function getControlador() { 

	        return $this->_controlador;  
    }
  
    public function getMetodo() {

	        return $this->_metodo;  
    }
  
  
    public function getArgs() {

	        return $this->_argumentos;  
    }       
	
}

?>