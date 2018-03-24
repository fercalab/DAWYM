<?php
class adminModel extends Model {
  
    public $idmateria;
    public $idufo;
	public $titulo;
	public $ufo;
	public $nombre;
	public $id;

	function __construct() {

	}

	public function create() {

	}
      
	

	public function read() {

		$this->query = "SELECT * FROM materias";

        $this->get_query();
       
        $data = array();

       foreach ($this->rows as $key => $value) {
       	        $data[$key] = $value;
       }

       return $data;  
	}

	

	public function update() {

	}

	public function delete() {

	}
}