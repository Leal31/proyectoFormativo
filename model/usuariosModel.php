<?php
    class Usuarios {
        private $usu_id;
        private $us_docum;
        private $usu_clave;
        private $rol_id;

        public function setUsuId($usu_id){
            $this->usu_id=$usu_id;
        }
        public function getUsuId(){
            return $this->usu_id;
        }

        public function setUsDocum($us_docum){
            $this->us_docum=$us_docum;
        }
        public function getUsDocum(){
            return $this->us_docum;
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