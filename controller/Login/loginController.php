<?php
include_once '../model/Login/LoginModel.php';

class loginController{
    
    function validar(){    

        $obj = new LoginModel();
        $usuarioSi = false;
        $passwordSi = false;
        $rolSi = false;
        $documento = $_POST['ingresoDocumento'];
        $password = $_POST['ingresoContra'];
        $rol = $_POST['rol'];
        $sql="SELECT * FROM usuarios";
        $usuario = $obj -> sentencia($sql);

        foreach ($usuario as $usu) {
            if ($documento == $usu['usu_docum']) {
                $usuarioSi= true;
                if ($password == $usu['usu_clave']) {
                    $passwordSi= true;
                    if ($rol == $usu['rol_id']) {
                        $rolSi= true;
                        break;
                    }
                }else {
                    break;
                }
            }
        }
        if ($usuarioSi == true AND $passwordSi == true AND $rolSi == true) {
            $_SESSION['ingresoDocumento'] = $documento;
            redirect(getUrl('Login','login','home'));

            }else if ($usuarioSi == true AND $passwordSi == false) {
                echo "<script> alert('Credenciales incorrectas'); </script>";
            }else if ($usuarioSi == false AND $passwordSi == true) {
                echo "<script> alert('Usuario No Existe'); </script>";
            }else if ($usarioSi == true AND $passwordSi == true AND $rol == false) {
                echo "<script> alert('Roll Incorrecto'); </script>";
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