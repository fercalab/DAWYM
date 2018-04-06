<?php
class conceptoModel extends Model {     
       
       
       public function create() {}

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

      public function dimeMateria($id) {

         $this->query = "SELECT nombre FROM materias WHERE id = $id";

         $this->get_query();
       
         $data = array();

         foreach ($this->rows as $key => $value) {

           $data[$key] = $value;
          }

       return $data;
      }

      public function dameContenidos($idConcepto) {

         $this->query = "SELECT * FROM extra WHERE id_concepto = $idConcepto";

         $this->get_query();
       
         $content = array();

         foreach ($this->rows as $key => $value) {

              $content[$key] = $value;
           }

        return $content;

      }

       public function update() {}

       public function delete() {}

}

?>