<?php
class adminModel extends Model {
  
  public $idmateria;
  public $idufo;
	public $titulo;
	public $ufo;
	public $data;
  public $quemateria;
  public $queufo;

	public function create( $quemateria = '') {

    $this->query = "INSERT INTO materias ( id , nombre ) VALUES (NULL, $quemateria)";
    $this->set_query();
   
  }

	public function read($id = ''){

    $this->query = ($id != '')
       ?"SELECT * FROM materias WHERE id = $id"
       :"SELECT * FROM materias";

       $this->get_query();
       
       $quemateria = array();

       foreach ($this->rows as $key => $value) {

           $quemateria[$key] = $value;
       }

       return $quemateria;
	}

	public function update() {}

	public function delete() {}

  public function dimeufosymateria() {

    $this->query = "SELECT materias.nombre AS materia, temas.id, temas.nombre FROM materias, temas WHERE materias.id = temas.id_materia"; 

        $this->get_query();
       
        $matufo = array();

       foreach ($this->rows as $key => $value) {

                $matufo[$key] = $value;
       }

     return $matufo;

  }
  
  public function dimeufos($id = '') {
        
        $this->query = ($id != '')
           ?"SELECT id, nombre FROM temas WHERE id = $id"
           :"SELECT id, nombre FROM temas ORDER BY nombre";

        $this->get_query();
       
        $queufo = array();

       foreach ($this->rows as $key => $value) {

                $queufo[$key] = $value;
       }

       return $queufo;  

  }


}

?>

