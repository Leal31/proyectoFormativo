<?php

    include_once '../model/MasterModel.php';

    class HobbiesModel extends MasterModel {
        private $hob_id;
        private $hob_nombre;

        public function setHobId($hob_id){
            $this->hob_id=$hob_id;
        }
        public function getHobId(){
            return $this->hob_id;
        }
        public function setHobNombre($hob_nombre){
            $this->hob_nombre=$hob_nombre;
        }
        public function getHobNombre(){
            return $this->hob_nombre;
        }
    }
?>
