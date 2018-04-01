<?php
class adminModel extends Model {
  
  public $idmateria;
  public $idufo;
	public $titulo;
	public $ufo;
	public $data;
  public $quemateria;

	public function create( $quemateria = '') {

    $this->query = "INSERT INTO materias ( id , nombre ) VALUES (NULL, $quemateria)";
    $this->set_query();
   
  }

	public function read() {

		$this->query = "SELECT * FROM materias";
        $this->get_query();
       
        $quemateria = array();

       foreach ($this->rows as $key => $value) {

       	        $quemateria[$key] = $value;
       }

       return $quemateria;  
	}

	public function update() {}

	public function delete() {}
  
  public function dimeufos() {
        
        $this->query = "SELECT id, nombre FROM temas ORDER BY nombre";
        $this->get_query();
       
        $data = array();

       foreach ($this->rows as $key => $value) {

                $data[$key] = $value;
       }

       return $data;  

  }


}

?>

