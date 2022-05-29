<?php

include_once '../MasterModel.php';
class Pacientes extends MasterModel{
  // Definimos atributos
  private $pac_id;
  private $pac_nombre;
  private $pac_apellido;
  private $pac_direccion;
  private $pac_telefono;
  private $gen_id;
  private $estr_id;
  
  // Encapsulación
  public function setPacId($pac_id) {
    $this -> pac_id = $pac_id;
  }

  public function getPacId() {
    return $this -> pac_id;
  }

  public function setPacNombre($pac_nombre) {
    $this -> pac_nombre = $pac_nombre;
  }

  public function getPacNombre() {
    return $this -> pac_nombre;
  }

  public function setPacApellido($pac_apellido) {
    $this -> pac_apellido = $pac_apellido;
  }

  public function getPacApellido() {
    return $this -> pac_apellido;
  }

  public function setPacDireccion($pac_direccion) {
    $this -> pac_direccion = $pac_direccion;
  }

  public function getPacDireccion() {
    return $this -> pac_direccion;
  }

  public function setPacTelefono($pac_telefono) {
    $this -> pac_telefono = $pac_telefono;
  }

  public function getPacTelefono() {
    return $this -> pac_telefono;
  }

  public function setGenId($gen_id) {
    $this -> gen_id = $gen_id;
  }

  public function getGenId() {
    return $this -> gen_id;
  }

  public function setEstrId($estr_id) {
    $this -> estr_id = $estr_id;
  }

  public function getEstrId() {
    return $this -> estr_id;
  }
}

?>
