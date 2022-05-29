<?php
include_once '../MasterModel.php';
    class Historias extends MasterModel {
        private $hist_id;
        private $hist_motv;
        private $hist_esfod;
        private $hist_cilod;
        private $hist_ejeod;
        private $hist_esfoi;
        private $hist_ciloi;
        private $hist_ejeoi;
        private $hist_diaod;
        private $hist_diaoi;
        private $hist_recom;
        private $pac_id;

        public function setHistId($hist_id){
            $this->hist_id=$hist_id;
        }
        public function getHistId(){
            return $this->hist_id;
        }

        public function setHistMotv($hist_motv){
            $this->hist_motv=$hist_motv;
        }
        public function getHistMotv(){
            return $this->hist_motv;
        }

        public function setHistEsfod($hist_esfod){
            $this->hist_esfod=$hist_esfod;
        }
        public function getHistEsfod(){
            return $this->hist_esfod;
        }

        public function setHistCilod($hist_cilod){
            $this->hist_cilod=$hist_cilod;
        }
        public function getHistCilod(){
            return $this->hist_cilod;
        }

        public function setHistEjeod($hist_ejeod){
            $this->hist_ejeod=$hist_ejeod;
        }
        public function getHistEjeod(){
            return $this->hist_ejeod;
        }

        public function setHistEsfoi($hist_esfoi){
            $this->hist_esfoi=$hist_esfoi;
        }
        public function getHistEsfoi(){
            return $this->hist_esfoi;
        }

        public function setHistCiloi($hist_ciloi){
            $this->hist_ciloi=$hist_ciloi;
        }
        public function getHistCiloi(){
            return $this->hist_ciloi;
        }

        public function setHistEjeoi($hist_ejeoi){
            $this->hist_ejeoi=$hist_ejeoi;
        }
        public function getHistEjeoi(){
            return $this->hist_ejeoi;
        }

        public function setHistDiaod($hist_diaod){
            $this->hist_diaod=$hist_diaod;
        }
        public function getHistDiaod(){
            return $this->hist_diaod;
        }

        public function setHistDiaoi($hist_diaoi){
            $this->hist_diaoi=$hist_diaoi;
        }
        public function getHistDiaoi(){
            return $this->hist_diaoi;
        }
        
        public function setHistRecom($hist_recom){
            $this->hist_recom=$hist_recom;
        }
        public function getHistRecom(){
            return $this->hist_recom;
        }

        public function setPacId($pac_id){
            $this->pac_id=$pac_id;
        }
        public function getPacId(){
            return $this->pac_id;
        }
    }
?>
