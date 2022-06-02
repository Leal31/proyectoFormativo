<?php 
include_once '../model/MasterModel.php';

class EstratosModel extends MasterModel {
    private $estr_id;
    private $estr_nombre;
    public function setEstrId($estr_id){
        $this->estr_id= $estr_id;
    }
    public function getEstrId(){
        return $this->estr_id;
    }
    public function setEstrNombre($estr_nombre){
        $this->estr_nombre= $estr_nombre;
    }
    public function getEstrNombre(){
        return $this->estr_nombre;
    }
}
?>
