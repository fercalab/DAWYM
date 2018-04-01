<?php
class indiceModel extends Model {     
       
       
       public function create() {}


       public function read(){

         $this->query ="SELECT palabra, id FROM conceptos ORDER BY palabra";

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