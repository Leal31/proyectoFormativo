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
            $pac_id = $_GET['pac_id'];
            $sql="SELECT * FROM pacientes WHERE pac_id=$pac_id";
            $sql2="SELECT * FROM hobbies";
	    	$sql3="SELECT * FROM estratos";
	    	$sql4="SELECT * FROM generos";
	    	$sql5="SELECT * FROM pacientes_hobbies WHERE pac_id=$pac_id";
	               
        	$pacientes=$obj -> sentencia($sql);
        	$hobbies=$obj -> sentencia($sql2);
        	$estratos=$obj -> sentencia($sql3);
	    	$generos=$obj -> sentencia($sql4);
	    	$paciente_hobbies=$obj -> sentencia($sql5);

            include '../view/Pacientes/update.php';
        }
        function getDelete(){
	    $obj =new PacientesModel();
	    $pac_id = $_GET['pac_id'];
	    $sql = "SELECT * FROM generos";
	    $sql2 = "SELECT * FROM hobbies";
	    $sql3 = "SELECT * FROM estratos";
	    $sql4 = "SELECT * FROM pacientes WHERE pac_id=$pac_id";
	    $sql5 = "SELECT * FROM pacientes_hobbies where pac_id=$pac_id";
	    $generos = $obj -> sentencia($sql);
	    $hobbies = $obj -> sentencia($sql2);
	    $estratos = $obj -> sentencia($sql3);
	    $paciente = $obj -> sentencia($sql4);
	    $paciente_hobbies = $obj -> sentencia($sql5);
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
		$sql="select p.pac_id, p.pac_nombre, p.pac_apellido, p.pac_telefono, p.pac_direccion, g.gen_nombre, e.estr_nombre FROM pacientes as p, generos as g, estratos as e WHERE p.pac_id=$pac_id and p.gen_id=g.gen_id and e.estr_id=p.estr_id";
		$pacientes=$obj->sentencia($sql);
		$sql="SELECT h.hob_nombre FROM pacientes_hobbies as ph, hobbies as h WHERE ph.pac_id=$pac_id and ph.hob_id=h.hob_id";
		$hobbies=$obj->sentencia($sql);
		include_once '../view/Pacientes/detalle.php';
	    }
        function update(){
            $obj = new PacientesModel;
            $docum= $_POST['pac_docum'];
            $nombre= $_POST['pac_nombre'];
            $apellido= $_POST['pac_apellido'];
            $direccion= $_POST['pac_direccion'];
            $telefono = $_POST['pac_tel'];
            $genero = $_POST['gen_id'];   
			$estr = $_POST['estr_id'];
			$sqlH= "SELECT hob_id FROM hobbies";
			$hobbies= $obj->sentencia($sqlH);
			$delete = "DELETE FROM pacientes_hobbies WHERE pac_id = $docum";
			$sqlD = $obj->sentencia($delete);   
			foreach ($hobbies as $key) {
					
				if (isset($_POST[$key['hob_id']])){
					$id= $obj->autoincrement("pac_hob_id", "pacientes_hobbies");
					$hob_id = $key['hob_id'];
					$sqlIN = "INSERT INTO pacientes_hobbies VALUES('$id', '$docum', '$hob_id')";
					$obj->sentencia($sqlIN);
				}
			}
			$sqlU = $obj -> update('pacientes', array('pac_nombre', 'pac_apellido', 'pac_direccion', 'pac_telefono', 'gen_id', 'estr_id'),
			array($nombre, $apellido, $direccion, $telefono, $genero, $estr), 'pac_id', $docum);
			if ($sqlU) {
				echo "<script>alert('El paciente ha sido actualizado con exito')</script>";
				redirect(getUrl("Pacientes", "Pacientes", "consult"));
			} else {
				echo "Hubo un error";
			}
			
        }
    
            function delete(){
	      $obj = new PacientesModel();
	      $obj -> setPacId($_POST['pac_id']);

	      $ejecutar = $obj -> delete('pacientes_hobbies', 'pac_id', $obj -> getPacId());
	      if ($ejecutar) {
		$ejecutar = $obj -> delete('pacientes', 'pac_id', $obj -> getPacId());
		echo "<script>alert('El paciente se elimino con exito');</script>";
		redirect(getUrl('Pacientes', 'Pacientes', 'consult'));
	      }

            }    
    }
?>
