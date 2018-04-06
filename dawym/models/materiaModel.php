<?php
class materiaModel extends Model {
	
	public $id;
	public $titulo;
	public $materia;

	public function create() {}

	public function read($id = ''){

		$this->query = ($id != '')
		   ?"SELECT ma.nombre As titulo, te.nombre, te.id, te.id_materia FROM materias AS ma, temas AS te WHERE ma.id = te.id_materia AND ma.id = $id"
		   :"SELECT ma.nombre As titulo, te.nombre, te.id, te.id_materia FROM materias AS ma, temas AS te WHERE ma.id = te.id_materia ";

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