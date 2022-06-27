<?php
    include_once "../model/Hobbies/HobbiesModel.php";

    class HobbiesController{
      function getInsert(){
	if (isset($_SESSION['ingresoDocumento']) and $_SESSION['rol_id'] == '1') {
	  include_once '../view/Hobbies/insert.php';
	} else {
	  echo "No ha iniciado sesion o no tiene acceso a esta funcion";
	}
        }
    
      function getUpdate(){
	if (isset($_SESSION['ingresoDocumento']) and $_SESSION['rol_id'] == '1') {
	    $obj = new HobbiesModel();
            $hob_id = $_GET['hob_id'];
            $sql="SELECT * FROM hobbies WHERE hob_id=$hob_id";
            $hobbies = $obj -> sentencia($sql);
            include_once '../view/Hobbies/update.php';
	} else {
	  echo "No ha iniciado sesion o no tiene acceso a esta funcion";
	}
      }

      function getDelete(){
	if (isset($_SESSION['ingresoDocumento']) and $_SESSION['rol_id'] == '1') {

	    $obj =new HobbiesModel();
            $hob_id =$_GET['hob_id'];
            $sql="SELECT * FROM hobbies WHERE hob_id=$hob_id";
            $hobbies = $obj -> sentencia($sql);
            include_once '../view/Hobbies/delete.php';
	} else {
	  echo "No ha iniciado sesion o no tiene acceso a esta funcion";
	}
      }
        function insert() {
            $obj = new HobbiesModel();
            $hob_id = $obj -> autoincrement("hob_id","hobbies");
            $hob_nombre=$_POST['hob_nombre'];
            $consulta = $obj -> insert("hobbies", array('hob_id', 'hob_nombre'), array($hob_id, $hob_nombre));
	    if ($consulta) {
		echo "<script>alert('El hobbie ha sido añadido con exito')</script>";
                redirect(getUrl("Hobbies","Hobbies","getInsert"));
            }else {
                echo "Verificar el proceso insert";
            }
        }
      function consult(){
	if (isset($_SESSION['ingresoDocumento']) and $_SESSION['rol_id'] == '1') {
	    $obj = new HobbiesModel();
            $sql="SELECT * FROM hobbies";
            $hobbies = $obj->sentencia($sql);
            include_once '../view/Hobbies/consult.php';
	} else {
	  echo "No ha iniciado sesion o no tiene acceso a esta funcion";
	}
      }
      function update(){
          $obj = new HobbiesModel();
          $hob_id = $_POST['hob_id'];
          $hob_nombre = $_POST['hob_nombre'];
    
          $consulta = $obj -> update("hobbies", array('hob_nombre'), array($hob_nombre), 'hob_id', $hob_id);
    
	  if ($consulta){
	    echo "<script>alert('El hobbie ha sido actualizado con exito')</script>";
            redirect(getUrl("Hobbies","Hobbies","consult"));
          }else {
            echo "Verificar el proceso update";
          }
        }
    
            function delete(){
                $obj = new HobbiesModel();
                $hob_id = $_POST['hob_id'];
                $consulta = $obj -> delete('hobbies', 'hob_id', $hob_id);
                    
		if ($consulta) {
		    echo "<script>alert('El hobbie ha sido borrado con exito')</script>";
                    redirect(getUrl("Hobbies","Hobbies","consult"));
                }else {
                    echo "Verificar el proceso de delete";
                }
            }    
    }
?>
