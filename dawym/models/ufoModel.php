<?php
class ufoModel extends Model {	
	
	function __construct() {

	}

	public function create() {
        
	}

	public function read($id = ''){
		$this->query = ($id != '')
		   ?"SELECT co.palabra, co.concepto, te.nombre FROM conceptos AS co, temas AS te WHERE te.id = co.id_tema AND te.id = $id"
		   :"SELECT * FROM conceptos ORDER BY palabra";
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

?>