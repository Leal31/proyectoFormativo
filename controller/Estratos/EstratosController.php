<?php
    include_once '../model/Estratos/EstratosModel.php';
    class estratosController{
	function getInsert(){
	    include_once '../view/Estratos/insert.php';
	}
	function getUpdate(){
	    $obj=new EstratosModel();
	    $obj->setEstrId($_GET['estr_id']);
	    $sql="SELECT * FROM estratos WHERE estr_id=".$obj->getEstrId();
	    $estratos=$obj->sentencia($sql);
	    include_once '../view/Estratos/update.php';
	}
	function getDelete(){
	    $obj=new EstratosModel();
	    $obj->setEstrId($_GET['estr_id']);
	    $sql="SELECT * FROM estratos WHERE estr_id=".$obj->getEstrId();
	    $estratos=$obj->sentencia($sql);
	    include_once '../view/Estratos/delete.php';
	}
	function insert(){
	    $obj=new EstratosModel();
	    $obj->setEstrId($obj->autoincrement("estr_id","estratos"));
	    $obj->setEstrNombre($_POST['estr_nombre']);
	    $sql="INSERT INTO estratos values(".$obj->getEstrId().",'".$obj->getEstrNombre()."')";
	    $exec=$obj->sentencia($sql);
	    if($exec){
		redirect(getUrl("Estratos","Estratos","getInsert"));
	    } else {
		echo "Error en insert";
	    }
	}
	function consult(){
	    $obj=new EstratosModel();
	    $sql="SELECT * FROM estratos";
	    $estratos=$obj->sentencia($sql);
	    include_once '../view/Estratos/consult.php';
	}
	function update(){
	    $obj=new EstratosModel();
	    $obj->setEstrId($_POST['estr_id']);
	    $obj->setEstrNombre($_POST['estr_nombre']);
	    $sql="UPDATE estratos SET estr_nombre='".$obj->getEstrNombre()."' WHERE estr_id=".$obj->getEstrId();
	    $exec=$obj->sentencia($sql);
	    if($exec){
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
		redirect(getUrl("Estratos","Estratos","consult"));
	    } else {
		echo "Error en delete";
	    }
	}
    }
?>
