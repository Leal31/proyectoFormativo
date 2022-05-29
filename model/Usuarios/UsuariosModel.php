<?php
include_once '../MasterModel.php';
    class Usuarios extends MasterModel {
        private $usu_id;
	private $usu_docum;
	private $usu_nombre;
        private $usu_clave;
        private $rol_id;

        public function setUsuId($usu_id){
            $this->usu_id=$usu_id;
        }
        public function getUsuId(){
            return $this->usu_id;
        }

        public function setUsuDocum($usu_docum){
            $this->usu_docum=$usu_docum;
        }
        public function getUsuDocum(){
            return $this->usu_docum;
	}

	public function setUsuNombre($usu_nombre) {
	  $this -> usu_nombre = $usu_nombre;
	}

	public function getUsuNombre() {
	  return $this -> usu_nombre;
	}

        public function setUsuClave($usu_clave){
            $this->usu_clave=$usu_clave;
        }
        public function getUsuClave(){
            return $this->usu_clave;
        }

        public function setRolId($rol_id){
            $this->rol_id=$rol_id;
        }
        public function getRolId(){
            return $this->rol_id;
        }
    }
?>
