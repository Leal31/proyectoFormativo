<?php

class PacientesHobbies {
  // Definimos atributos
  private $pac_hob_id;
  private $pac_id;
  private $hob_id;

  // Encapsulación
  public function setPacHobId($pac_hob_id) {
    $this -> pac_hob_id = $pac_hob_id;
  }

  public function getPacHobId() {
    return $this -> pac_hob_id;
  }
  
  public function setPacId($pac_id) {
    $this -> pac_id = $pac_id;
  }

  public function getPacId() {
    return $this -> pac_id;
  }

  public function setHobId($hob_id) {
    $this -> hob_id = $hob_id;
  }

  public function getHobId() {
    return $this -> hob_id;
  }

}

?>
