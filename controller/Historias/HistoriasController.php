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
        array($hist_id, $hist_motv, $hist_esfod, $hist_cilod, $hist_ejeod, $hist_esfoi, $hist_ciloi, $hist_ejeoi, $hist_diaod, $hist_diaoi, $hist_recom, $pac_id));
	if ($ejecutar) {
	    echo "<script>alert('La historia fue creada satisfactoriamente');</script>";
            redirect(getUrl("Pacientes", "Pacientes", "consult"));
        }else {
            echo "error al registrar";
        }    
   }

    public function consult(){
        $obj = new PacientesModel;
        $sql = "SELECT * FROM historias ORDER BY pac_id DESC";
        $id = $obj->sentencia($sql);
        include_once '../view/Historias/consult.php';
    }
  
    public function detalle(){
        $obj= new PacientesModel;
        $id = $_GET['pac_id'];
        $sql = "SELECT * FROM pacientes WHERE pac_id = $id";
        $pac = $obj->sentencia($sql);
        foreach ($pac as $paci){
            $estr = $paci['estr_id'];
            $gen = $paci['gen_id'];
            $hist_id = $_GET['hist_id'];
            
            $sql2 = "SELECT * FROM generos WHERE gen_id = $gen";
            $ConsultGen = $obj->sentencia($sql2);
            $row = mysqli_fetch_array($ConsultGen);
            $sql3 = "SELECT * FROM estratos WHERE estr_id = $estr";
            $ConsultEstr= $obj->sentencia($sql3);
            $row2 = mysqli_fetch_array($ConsultEstr);
            $sql3 = "SELECT * FROM historias WHERE hist_id = $hist_id";
            $HistoCon = $obj->sentencia($sql3);
            $row3 = mysqli_fetch_array($HistoCon);

            $estrato = $row2['estr_nombre'];
            $genero = $row['gen_nombre'];
            $nombre = $paci['pac_nombre'];
            $apellido = $paci['pac_apellido'];
            $telefono = $paci['pac_telefono'];
            $direccion= $paci['pac_direccion'];
            $hist_motv= $row3 ['hist_motv'];
            $hist_esfod= $row3 ['hist_esfod'];
            $hist_cilod= $row3 ['hist_cilod'];
            $hist_ejeod= $row3 ['hist_ejeod'];
            $hist_esfoi= $row3 ['hist_esfoi'];
            $hist_ciloi= $row3 ['hist_ciloi'];
            $hist_ejeoi= $row3 ['hist_ejeoi'];
            $hist_diaod= $row3 ['hist_diaod'];
            $hist_recom= $row3 ['hist_recom'];
            include_once '../view/Historias/detalle.php';
        }
       
    }

}

?>
