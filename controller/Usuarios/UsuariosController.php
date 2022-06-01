<?php
include_once '../model/Usuarios/UsuariosModel.php';

class UsuariosController {
    function validar(){    

        $obj = new UsuariosModel();
        $usuarioSi = false;
        $passwordSi = false;
        $rolSi = false;

        $obj -> setUsuDocum($_POST['usu_docum']);
        $obj -> setUsuClave($_POST['usu_clave']);
        $obj -> setRolId($_POST['rol_id']);

        $sql="SELECT * FROM usuarios";
        $usuario = $obj -> sentencia($sql);

        foreach ($usuario as $usu) {
            if ($obj -> getUsuDocum() == $usu['usu_docum']) {
                $usuarioSi = true;
                if ($obj -> getUsuClave() == $usu['usu_clave']) {
                    $passwordSi = true;
                    if ($obj -> getRolId() == $usu['rol_id']) {
                        $rolSi = true;
                        $_SESSION['usu_nombre'] = $usu['usu_nombre'];
                        break;
                    } else {
                        break;
                    }
                }
                
            }
        }
        
        if (($usuarioSi == true and $passwordSi == true) and ($rolSi == true)) {
            $_SESSION['ingresoDocumento'] = $_POST['usu_docum'];
            
            redirect(getUrl('Login','Login','home'));

            }else if ($usuarioSi == true AND $passwordSi == false) {
                echo "<script> alert('Credenciales incorrectas'); </script>";
            }else if ($usuarioSi == false AND $passwordSi == false) {
                echo "<script> alert('Usuario No Existe'); </script>";
            }else if (($usuarioSi == true AND $passwordSi == true) AND ($rolSi == false)) {
                echo "<script> alert('Rol Incorrecto'); </script>";
        }
    }
    function home(){
        include_once '../view/home.php';
    }
    function cerrarSesion() {
        session_destroy();
        redirect("index.php");
    }
}
?>
