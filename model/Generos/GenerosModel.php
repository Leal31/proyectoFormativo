<?php 

include_once '../model/MasterModel.php';

class GenerosModel extends MasterModel {
    private $gen_id;
    private $gen_nombre;

    public function setGenId($gen_id){
        $this->gen_id= $gen_id;
    }

    public function getGenId(){
        return $this->gen_id;
    }
    
    public function setGenNombre($gen_nombre){
        $this->gen_nombre=$gen_nombre;
    }

    public function getGenNombre(){
        return $this->gen_nombre;
    }
}
?>
