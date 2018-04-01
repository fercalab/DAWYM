<?php
class indexModel extends Model {
	
	public $id;
	public $materia;

	public function create() {}

	public function read( $id = ''){

		$this->query = ($id != '')
		   ?"SELECT * FROM materias WHERE id = $id"
		   :"SELECT * FROM materias";

       $this->get_query();
       
       $data = array();

       foreach ($this->rows as $key => $value) {

       	   $data[$key] = $value;
       }

       return $data;
	}

	public function update() {}

	public function delete() {}

}

?>