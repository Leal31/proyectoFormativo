<?php
    include_once '../model/Estratos/EstratosModel.php';
    class estratosController{
      function getInsert(){
	if (isset($_SESSION['ingresoDocumento']) and $_SESSION['rol_id'] == '1') {
	  include_once '../view/Estratos/insert.php' ;
	} else {
	  echo "No ha iniciado sesion o No tiene el permiso para acceder a esta funcion";
	}
	}
	function getUpdate(){
	  if (isset($_SESSION['ingresoDocumento']) and $_SESSION['rol_id'] == '1') {
	    $obj=new EstratosModel();
	    $obj->setEstrId($_GET['estr_id']);
	    $sql="SELECT * FROM estratos WHERE estr_id=".$obj->getEstrId();
	    $estratos=$obj->sentencia($sql);
	    include_once '../view/Estratos/update.php';
	  } else {
	    echo "No ha iniciado sesion o No tiene el permiso para acceder a esta funcion";
	  }
	    	  }
	    	
	function getDelete(){
	  if (isset($_SESSION['ingresoDocumento']) and $_SESSION['rol_id'] == '1') {
	    $obj=new EstratosModel();
	    $obj->setEstrId($_GET['estr_id']);
	    $sql="SELECT * FROM estratos WHERE estr_id=".$obj->getEstrId();
	    $estratos=$obj->sentencia($sql);
	    include_once '../view/Estratos/delete.php';

	  } else {
	    echo "No ha iniciado sesion o No tiene el permiso para acceder a esta funcion";
	  }
	    	}
	function insert(){
	    $obj=new EstratosModel();
	    $obj->setEstrId($obj->autoincrement("estr_id","estratos"));
	    $obj->setEstrNombre($_POST['estr_nombre']);
	    $sql="INSERT INTO estratos values(".$obj->getEstrId().",'".$obj->getEstrNombre()."')";
	    $exec=$obj->sentencia($sql);
	    if($exec){
		echo "<script>alert('El estrato fue añadido exitosamente')</script>";
		redirect(getUrl("Estratos","Estratos","getInsert"));
	    } else {
		echo "Error en insert";
	    }
	}
	function consult(){
	  if (isset($_SESSION['ingresoDocumento']) and $_SESSION('rol_id') == '1') {
	    $obj=new EstratosModel();
	    if(isset($_POST['filtro'])){
		if($_POST['filtro']!=NULL){
		    $sql="SELECT * FROM estratos where estr_nombre like '%".$_POST['filtro']."%' limit 3";
		} else {
		    $sql="SELECT * FROM estratos";
		}
	    } else {
		$sql="SELECT * FROM estratos";
	    }
	    $estratos=$obj->sentencia($sql);
	    include_once '../view/Estratos/consult.php';

	  } else {
	    echo "No ha iniciado sesion o no tiene acceso a esta funcion";
	  }
	    	}
	function update(){
	    $obj=new EstratosModel();
	    $obj->setEstrId($_POST['estr_id']);
	    $obj->setEstrNombre($_POST['estr_nombre']);
	    $sql="UPDATE estratos SET estr_nombre='".$obj->getEstrNombre()."' WHERE estr_id=".$obj->getEstrId();
	    $exec=$obj->sentencia($sql);
	    if($exec){
		echo "<script>alert('El estrato fue actualizado con exito')</script>";
		redirect(getUrl("Estratos","Estratos","consult"));
	    } else {
		echo "Error en update";
	    }
	}
	function delete(){
	    $obj=new EstratosModel();
	    $obj->setEstrId($_POST['estr_id']);
	    $sql="DELETE FROM estratos WHERE estr_id=".$obj->getEstrId();
	    $exec=$obj->sentencia($sql);
	    if($exec){
		echo "<script>alert('El estrato fue eliminado con exito')</script>";
		redirect(getUrl("Estratos","Estratos","consult"));
	    } else {
		echo "Error en delete";
	    }
	}
	}
?>
