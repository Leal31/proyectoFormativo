<?php
include_once '../model/Usuarios/UsuariosModel.php';
// controlador
class UsuariosController {
  public function getInsert() {
    if (isset($_SESSION['ingresoDocumento']) and $_SESSION['rol_id'] == '1') {
    $obj = new UsuariosModel();
    
    $sql = "SELECT * FROM roles";

    $roles = $obj -> sentencia($sql);

    include_once '../view/Usuarios/insert.php';

    }
  }

  public function postInsert() {
    $obj = new UsuariosModel();
    $obj -> setUsuId($obj -> autoincrement('usu_id', 'usuarios'));
    $obj -> setUsuDocum($_POST['usu_docum']);
    $obj -> setUsuNombre($_POST['usu_nombre']);
    $obj -> setUsuClave($this -> encryptPassword($_POST['usu_clave']));
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
    if (isset($_SESSION['ingresoDocumento']) and $_SESSION['rol_id'] == '1') {
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
    } else {
      echo "No ha iniciado sesion o no tiene acceso a esta funcion";
    }
      }

  public function getUpdate() {
    if (isset($_SESSION['ingresoDocumento']) and $_SESSION['rol_id'] == '1') {
    $obj = new UsuariosModel();
    $obj -> setUsuId($_GET['usu_id']);
    $sql = "SELECT * FROM usuarios WHERE usu_id=".$obj -> getUsuId();
    $sql2 = "SELECT * FROM roles";
    $usuario = $obj -> sentencia($sql);
    $roles = $obj -> sentencia($sql2);
    include_once '../view/Usuarios/update.php';
    } else {
      echo "No ha iniciado sesion o no tiene acceso a esta funcion";
    }
      }

  public function postUpdate() {
    $obj = new UsuariosModel();
    $obj -> setUsuId($_POST['usu_id']);
    $obj -> setUsuNombre($_POST['usu_nombre']);
    $obj -> setUsuDocum($_POST['usu_docum']);
    $obj -> setUsuClave($this -> encryptPassword($_POST['usu_clave']));
    $obj -> setRolId($_POST['rol_id']);

    $ejecutar = $obj -> update('usuarios', array('usu_nombre', 'usu_docum', 'usu_clave', 'rol_id'), array($obj -> getUsuNombre(), $obj -> getUsuDocum(), $obj -> getUsuClave(), $obj -> getRolId()), 'usu_id', $obj -> getUsuId());
    
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
    if (isset($_SESSION['ingresoDocumento']) and $_SESSION['rol_id']) {
    $obj = new UsuariosModel();
    $obj -> setUsuId($_GET['usu_id']);
    $sql = "SELECT * FROM usuarios WHERE usu_id=".$obj -> getUsuId();
    $sql2 = "SELECT * FROM roles";

    $usuario = $obj -> sentencia($sql);
    $roles = $obj -> sentencia($sql2);

    include_once '../view/Usuarios/delete.php';

    } else {
      echo "No ha iniciado sesion o no tiene acceso a esta funcion";
    }
      }

  public function postDelete() {
    $obj = new UsuariosModel();
    $obj -> setUsuId($_POST['usu_id']);
    $ejecutar = $obj -> delete('usuarios', 'usu_id', $obj -> getUsuId());

    if ($ejecutar) {
      redirect(getUrl('Usuarios', 'Usuarios', 'consult'));
    } else {
      echo "Ha habido un error";
    }
  }

  function encryptPassword($password) {
      $encryptPass = openssl_encrypt($password, "camellia-256-ofb", "2397583111", 0, "1235678976898761");

      return $encryptPass;
    }
  function decryptPassword($password) {
    $decryptPass = openssl_decrypt($password, "camellia-256-ofb", "2397583111", 0, "1235678976898761");

    return $decryptPass;
  }
}


?>
