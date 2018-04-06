<?php
class ufoModel extends Model {	
	
	
	public function create($id = '') {

		$this->query = ($id != '')
		  ?"SELECT * FROM temas WHERE id_materia = $id"
          :"SELECT * FROM temas";
          
        $this->get_query();
       
       $data = array();

       foreach ($this->rows as $key => $value) {

       	   $data[$key] = $value;
       	}

       	return $data;
	}


	public function read($id = ''){

		$this->query = ($id != '')
		   ?"SELECT co.palabra, co.concepto, te.nombre, co.id, co.id_tema, co.extra FROM conceptos AS co, temas AS te WHERE te.id = co.id_tema AND te.id = $id"
		   :"SELECT * FROM conceptos ORDER BY palabra";

       $this->get_query();
       
       $data = array();

       foreach ($this->rows as $key => $value) {

       	   $data[$key] = $value;
       }

       return $data;
	}

	public function update($id = '') {

		$this->query = ($id != '')
		   ?"SELECT co.palabra, co.id, co.id_tema FROM conceptos AS co, temas AS te WHERE te.id = co.id_tema AND te.id = $id ORDER BY co.palabra"
		   :"SELECT * FROM conceptos ORDER BY palabra";

       $this->get_query();
       
       $data = array();

       foreach ($this->rows as $key => $value) {

       	   $data[$key] = $value;
       }

       return $data;
	}

	public function delete() {}

}

?>