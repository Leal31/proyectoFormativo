<?php
include '../model/Pacientes/PacientesModel.php';

class HistoriasController {

    function getInsert(){
        $obj = new PacientesModel();
        $pac_id = $_GET['pac_id'];
        $sql1 ="SELECT * FROM pacientes where pac_id=$pac_id";
        $pacientes = $obj->sentencia($sql1);
        include_once '../view/Historias/insert.php';
    }    
    function insert(){
        $obj = new Pacientesmodel();

        $hist_motv = $_POST['hist_motv'];
        $hist_esfod = $_POST['hist_esfod'];
        $hist_cilod = $_POST['hist_cilod'];
        $hist_ejeod = $_POST['hist_ejeod'];
        $hist_esfoi = $_POST['hist_esfoi'];
        $hist_ciloi = $_POST['hist_ciloi'];
        $hist_ejeoi = $_POST['hist_ejeoi'];
        $hist_diaod = $_POST['hist_diaod'];
        $hist_diaoi = $_POST['hist_diaoi'];
        $hist_recom = $_POST['hist_recom'];
        $pac_id = $_POST['pac_id'];

        $hist_id = $obj -> autoincrement("hist_id","historias");
        
        $ejecutar = $obj -> insert('historias', array('hist_id', 'hist_motv', 'hist_esfod', 'hist_cilod', 'hist_ejeod', 'hist_esfoi', 'hist_ciloi', 'hist_ejeoi', 'hist_diaod', 'hist_diaoi', 'hist_recom', 'pac_id'), 
        array($hist_id, $hist_motv, $hist_esfod, $hist_cilod, $hist_ejeod, $hist_esfod, $hist_esfoi, $hist_ciloi, $hist_ejeoi, $hist_diaod, $hist_diaoi, $hist_recom, $pac_id));
        if ($ejecutar) {
            include_once '../view/Historias/insert.php';
        }else {
            echo "error al registrar";
        }    
    

}
}

?>