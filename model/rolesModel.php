<?php
  class Roles {
    private $rol_id;
    private $rol_nombre;

    public function setRolId($rol_id) {
      $this -> rol_id = $rol_id;
    }
    
    public function getRolId() {
      return $this -> rol_id;
    }
    
    public function setRolNombre($rol_nombre) {
      $this -> rol_nombre = $rol_nombre;
    }
    
    public function getRolNombre() {
      return $this -> rol_nombre;
    }


  }
  

?>
