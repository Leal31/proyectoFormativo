<?php
include_once '../model/Usuarios/UsuariosModel.php';

class LoginController{
    
function validar() {    

        $obj = new UsuariosModel();

        $obj -> setUsuDocum($_POST['usu_docum']);
        $obj -> setUsuClave($this -> encryptPassword($_POST['usu_clave']));
        $obj -> setRolId($_POST['rol_id']);

        $sql="SELECT * FROM usuarios where usu_docum=".$obj ->getUsuDocum()." and usu_clave='".$obj -> getUsuClave()."' and rol_id=".$obj -> getRolId()."";
        $usuario = $obj -> sentencia($sql);

	$match = mysqli_num_rows($usuario);
	
	if ($match != 0) {
	  foreach ($usuario as $usu) {
	      $obj -> setUsuNombre($usu['usu_nombre']);
	  }
	  $_SESSION['ingresoDocumento'] = $obj -> getUsuDocum();
	  $_SESSION['usu_nombre'] = $obj -> getUsuNombre();
	  $_SESSION['rol_id'] = $obj -> getRolId();
	  echo "<script>alert('Bienvenido ".$_SESSION['usu_nombre']."')</script>";
	  redirect('index.php');
	} else {
	  ?>
	  <script>
	  alert("Usuario o Contraseña Incorrectas");
	  redirect('index.php');
	  </script>
	<?php
	}
        
           }
    function home(){
        include_once '../view/home.php';
    }
    function cerrarSesion() {
	session_destroy();

	redirect('index.php');
    }

    function encryptPassword($password) {
      $encryptPass = openssl_encrypt($password, "camellia-256-ofb", "2397583111", 0, "1235678976898761");

      return $encryptPass;
    }
}
