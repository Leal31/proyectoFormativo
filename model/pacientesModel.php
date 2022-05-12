<?php
class Pacientes {
  private $pac_id;
  private $pac_nombre;
  private $pac_apellido;
  private $pac_direccion;
  private $pac_telefono;
  private $gen_id;
  private $estr_id;

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

  public function setPacId($pac_id) {
    $this -> pac_id = $pac_id;
  }

  public function getPacId() {
    return $this -> pac_id;
  }
}
?>
