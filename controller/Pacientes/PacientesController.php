<?php
    include_once "../model/Pacientes/PacientesModel.php";

    class PacientesController{
	function getInsert(){
	    $obj = new PacientesModel();
	    $sql = "SELECT * FROM generos";
	    $generos = $obj -> sentencia($sql);
	    $sql2 = "SELECT * FROM estratos";
	    $estratos = $obj -> sentencia($sql2);
	    $sql3 = "SELECT * FROM hobbies";
	    $hobbies = $obj -> sentencia($sql3);
            include_once '../view/Pacientes/insert.php';
        }
    
        function getUpdate(){
            $obj = new PacientesModel();
            $hob_id = $_GET['hob_id'];
            $sql="SELECT * FROM hobbies WHERE hob_id=$hob_id";
            $hobbies = $obj -> sentencia($sql);
            include_once '../view/Pacientes/update.php';
        }
        function getDelete(){
            $obj =new PacientesModel();
            $hob_id =$_GET['hob_id'];
            $sql="SELECT * FROM hobbies WHERE hob_id=$hob_id";
            $hobbies = $obj -> sentencia($sql);
            include_once '../view/Pacientes/delete.php';
        }
        function insert() {
	  $obj = new PacientesModel();
	  $obj -> setPacId($_POST['pac_id']);
	  $obj -> setPacNombre($_POST['pac_nombre']);
	  $obj -> setPacApellido($_POST['pac_apellido']);
	  $obj -> setPacDireccion($_POST['pac_direccion']);
	  $obj -> setPacTelefono($_POST['pac_telefono']);
	  $obj -> setGenId($_POST['gen_id']);
	  $obj -> setEstrId($_POST['estr_id']);

	  $ejecutar = $obj -> insert('pacientes', array('pac_id', 'pac_nombre', 'pac_apellido', 'pac_direccion', 'pac_telefono', 'gen_id', 'estr_id',), array($obj -> getPacId(), $obj -> getPacNombre(), $obj -> getPacApellido(), $obj -> getPacDireccion(), $obj -> getPacTelefono(), $obj -> getGenId(), $obj -> getEstrId()));
	  if ($ejecutar) {
	    $hobbies = (isset($_POST['hobbies'])) ? $_POST['hobbies'] : array();
	    
	    foreach ($hobbies as $hob) {
	      $ejecutar2 = $obj -> insert('pacientes_hobbies', array('pac_id', 'hob_id'), array($obj -> getPacId(), $hob));
	    }
	    echo "<script>alert('El paciente fue agregado con exito')</script>";
	    redirect(getUrl('Pacientes', 'Pacientes', 'getInsert'));
	  }

                    }
            function consult(){
                $obj = new PacientesModel();
                $sql="SELECT * FROM pacientes";
                $pacientes = $obj->sentencia($sql);
                include_once '../view/Pacientes/consult.php';
	    }
	    function detalle(){
		$obj=new PacientesModel();
		$pac_id=$_GET['pac_id'];
		$sql="select p.pac_id, p.pac_nombre, p.pac_apellido, p.pac_telefono, p.pac_direccion, g.gen_nombre FROM pacientes as p, generos as g WHERE p.pac_id=$pac_id and p.gen_id=g.gen_id";
		$pacientes=$obj->sentencia($sql);
		$sql="SELECT h.hob_nombre FROM pacientes_hobbies as ph, hobbies as h WHERE ph.pac_id=$pac_id and ph.hob_id=h.hob_id";
		$hobbies=$obj->sentencia($sql);
		include_once '../view/Pacientes/detalle.php';
	    }
            function update(){
                $obj = new PacientesModel();
                $pac_id = $_POST['hob_id'];
                $pac_nombre = $_POST['hob_nombre'];
    
                $consulta = $obj -> update("hobbies", array('hob_nombre'), array($hob_nombre), 'hob_id', $hob_id);
    
                if ($consulta){
                    redirect(getUrl("Pacientes","Pacientes","consult"));
                    }else {
                        echo "Verificar el proceso update";
                    }
        }
    
            function delete(){
                $obj = new PacientesModel();
                $hob_id = $_POST['hob_id'];
                $consulta = $obj -> delete('hobbies', 'hob_id', $hob_id);
                    
                if ($consulta) {
                    redirect(getUrl("Pacientes","Pacientes","consult"));
                }else {
                    echo "Verificar el proceso de delete";
                }
            }    
    }
?>
