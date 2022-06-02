<?php
include_once '../model/Rol/RolModel.php';
class RolController{
    
	function getDelete(){
		$obj= new RolModel();
		$rol_id=$_GET['rol_id'];
		$sql= "SELECT * FROM roles WHERE rol_id= $rol_id";
		$roles= $obj->sentencia($sql);
		include_once '../view/Rol/delete.php';
	}
	function getInsert(){
		include_once '../view/Rol/insert.php';
	}
	function getUpdate(){
	    $obj=new RolModel();
	    $rol_id=$_GET['rol_id'];
	    $sql="SELECT * FROM roles WHERE rol_id=$rol_id";
	    $roles=$obj->sentencia($sql);
	    include_once '../view/Rol/update.php';
	}
    	
	function consult(){
        $obj=new RolModel();
	    $sql="SELECT * FROM Roles";
	    $roles=$obj->sentencia($sql);
	    include_once '../view/Rol/consult.php';
    	}
	
	function insert(){
	$obj= new RolModel();
	$id_rol= $obj->autoincrement('rol_id', 'roles');
	$rol_nombre=$_POST['rol_nombre'];
	$sql="INSERT INTO roles VALUES ($id_rol, '$rol_nombre')";
	$exec= $obj->sentencia($sql);
	if($exec){
		redirect(getUrl("Rol","Rol","getInsert"));
	    } else {
		echo "Error en insert";
	    }
	}

	function delete(){
	$obj= new RolModel();
    $obj -> setRolId($_POST['rol_id']);

	$sql = "DELETE FROM roles WHERE rol_id=".$obj -> getRolId();
	
	$ejecutar = $obj -> sentencia($sql);
	if ($ejecutar) {
		redirect(getUrl("Rol", "Rol", "consult"));
	} else {
		echo "Hubo un error";
	}
	}
	function update(){
		$obj = new RolModel();
		$rol_id = $_POST['rol_id'];
		$rol_nombre = $_POST['rol_nombre'];
		$sql="UPDATE roles SET rol_nombre='$rol_nombre' WHERE rol_id=$rol_id";
		$consulta = $obj-> sentencia($sql);

		if ($consulta){
			redirect(getUrl("Rol","Rol","consult"));
			}else {
				echo "Verificar el proceso update";
			}
}
}
?>