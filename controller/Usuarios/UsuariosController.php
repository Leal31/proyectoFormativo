<?php
include_once '../model/Usuarios/UsuariosModel.php';

class UsuariosController {
  public function getInsert() {
    $obj = new UsuariosModel();
    
    $sql = "SELECT * FROM roles";

    $roles = $obj -> sentencia($sql);

    include_once '../view/Usuarios/insert.php';
  }

  public function postInsert() {
    $obj = new UsuariosModel();
    $obj -> setUsuId($obj -> autoincrement('usu_id', 'usuarios'));
    $obj -> setUsuDocum($_POST['usu_docum']);
    $obj -> setUsuNombre($_POST['usu_nombre']);
    $obj -> setUsuClave($_POST['usu_clave']);
    $obj -> setRolId($_POST['rol_id']);
    
    $ejecutar = $obj -> insert('usuarios', array('usu_id', 'usu_docum', 'usu_nombre', 'usu_clave', 'rol_id'), array($obj -> getUsuId(), $obj -> getUsuDocum(), $obj -> getUsuNombre(), $obj -> getUsuClave(), $obj -> getRolId()));

    if ($ejecutar) {
      ?>
	<script>
	  alert("Usuario registrado con exito");
	</script>
      <?php
      redirect(getUrl("Usuarios", "Usuarios", "getInsert"));
    } else {
      echo "Ha habido un error";
    }

  }

  public function consult() {
    $obj = new UsuariosModel();
    $sql="SELECT * FROM roles";
    $roles=$obj->sentencia($sql);
    if(isset($_POST['usu_docum'])){
	if($_POST['usu_docum']!=NULL){
	    $sql="SELECT * FROM usuarios WHERE usu_docum=".$_POST['usu_docum'];
	    if($_POST['usu_nombre']!=NULL){
		$sql.=" AND usu_nombre like'%".$_POST['usu_nombre']."%'";
		if($_POST['rol_id']!=NULL){
		    $sql.=" AND rol_id=".$_POST['rol_id'];
		}
	    } elseif($_POST['rol_id']){
		$sql.=" AND rol_id=".$_POST['rol_id'];
	    }
	} elseif($_POST['usu_nombre']!=NULL){
	    $sql="SELECT * FROM usuarios WHERE usu_nombre like '%".$_POST['usu_nombre']."%'";
	    if($_POST['rol_id']!=NULL){
		$sql.=" AND rol_id=".$_POST['rol_id'];
	    }
	} elseif($_POST['rol_id']!=NULL){
	    $sql="SELECT * FROM usuarios WHERE rol_id=".$_POST['rol_id'];
	} else {
	    $sql="SELECT * FROM usuarios";
	}
    } else {
	$sql="SELECT * FROM usuarios";
    }
    $usuarios = $obj -> sentencia($sql);
    include_once '../view/Usuarios/consult.php';
  }

  public function getUpdate() {
    $obj = new UsuariosModel();
    $obj -> setUsuId($_GET['usu_id']);
    $sql = "SELECT * FROM usuarios WHERE usu_id=".$obj -> getUsuId();
    $sql2 = "SELECT * FROM roles";
    $usuario = $obj -> sentencia($sql);
    $roles = $obj -> sentencia($sql2);
    include_once '../view/Usuarios/update.php';
  }

  public function postUpdate() {
    $obj = new UsuariosModel();
    $obj -> setUsuId($_POST['usu_id']);
    $obj -> setUsuNombre($_POST['usu_nombre']);
    $obj -> setUsuDocum($_POST['usu_docum']);
    $obj -> setUsuClave($_POST['usu_clave']);
    $obj -> setRolId($_POST['rol_id']);

    $sql = "UPDATE usuarios SET usu_docum=".$obj -> getUsuDocum().", usu_nombre='".$obj -> getUsuNombre()."', usu_clave='". $obj -> getUsuClave()."',rol_id=".$obj -> getRolId()." WHERE usu_id=". $obj -> getUsuId();
    $ejecutar = $obj -> sentencia($sql);
    if ($ejecutar) {
      ?>
      <script>
	alert("El usuario ha sido actualizado");
      </script>
      <?php
      redirect(getUrl("Usuarios", "Usuarios", "consult"));
    } else {
      echo "Ha habido un error";
    }
  }

  public function getDelete() {
    $obj = new UsuariosModel();
    $obj -> setUsuId($_GET['usu_id']);
    $sql = "SELECT * FROM usuarios WHERE usu_id=".$obj -> getUsuId();
    $sql2 = "SELECT * FROM roles";

    $usuario = $obj -> sentencia($sql);
    $roles = $obj -> sentencia($sql2);

    include_once '../view/Usuarios/delete.php';
  }

  public function postDelete() {

  }
}


?>
